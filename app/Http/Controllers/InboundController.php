<?php
namespace App\Http\Controllers;
use PDF;
use Settings;
use App\Lot;
use App\Inbound;
use App\Product;
use App\InboundProduct;
use Carbon\Carbon;
use Illuminate\Http\Request;
class InboundController extends Controller
{
    protected $rules = [
        'arrival_date' => 'required',
        'total_carton' => 'required',
        'products'  => 'required'
    ];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Return the view which contains the vue page for product
     * @return \Illuminate\Http\Response
     */
    public function page()
    {
        return view('inbound.page');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(request()->wantsJson())
        {
            $user = auth()->user();
            if($user->hasRole('admin'))
                 return Controller::VueTableListResult(Inbound::with('products', 'products_with_lots.lots'));
            else
                return Controller::VueTableListResult(auth()->user()->inbounds()->with('products', 'products_with_lots.lots'));
        }
        $inbounds = inbound::where('status', 'true')->get();
        $products = product::where('user_id', auth()->user()->id)->where('status', 'true')->get();
        return view('inbound.index')->with('inbounds', $inbounds)->with('products', $products);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function report($id)
    {
        $inbound = Inbound::find($id);

        $pdf = PDF::loadView('inbound.report', compact('inbound'));

        return $pdf->setPaper('A4')->download('inbound-report.pdf');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, $this->rules, ['products.required' => "You need to select at least 1 product."]);
        $auth = auth()->user();
        $now = Carbon::today();
        $compare = Carbon::parse($request->arrival_date);
        $user_lots = lot::where('volume','>', 0)->where('user_id', $auth->id)->get();
        $collection_index = 0;
        $product_total_volume = 0;
        $products = [];
        $rproducts = json_decode(request()->products);
        foreach($rproducts as $product){
            $product_volume_from_db = product::where('id', $product->id)->first();
            $product_total_volume = $product_total_volume + ($product_volume_from_db->volume * $product->quantity);
            $products[$product->id] = [];
            $products[$product->id]["quantity"] = $product->quantity;
            $products[$product->id]["volume"] = $product_volume_from_db->volume * $product->quantity;
            $products[$product->id]["singleVolume"] = $product_volume_from_db->volume;
        }
        // Check for quantity
        if($product_total_volume == 0){
            if(request()->wantsJson()) {
                return response(json_encode(array('products' => ['You need to have at least 1 product'])), 422);
            }
            return redirect()->back()->withErrors("You need to have at least 1 product");
        }

        // Check for total left over volume
        if($product_total_volume > $user_lots->sum('left_volume')){
            if(request()->wantsJson()) {
                return response(json_encode(array('products' => ['You have exceeded your lot limit'])), 422);
            }
            return redirect()->back()->withErrors("You have exceeded your lot limit.");
        }
        // Check for days before order
        if($compare->diffInDays($now) < Settings::get('days_before_order') ){
            if(request()->wantsJson()) {
                return response(json_encode(array('arrival_date' => ['Inbound must be created before '.Settings::get('days_before_order').' days.'])), 422);
            }
            return redirect()->back()->withErrors("Inbound must be created before ".Settings::get('days_before_order')." days.");
        }
        // Everything is ok, create a new inbound
        $inbound = new inbound;
        $inbound->user_id = $auth->id;
        $inbound->arrival_date = $request->arrival_date;
        $inbound->total_carton = $request->total_carton;
        $inbound->status = "true";
        $inbound->save();
        // Insert products into many to many table
        foreach($products as $key => $product){
            $inbound->products()->attach($key, ['quantity' => $product["quantity"]]);
        }
        // Prioritize every lot that already has the same product
        foreach($products as $key => $product)
        {
            $theproduct = product::find($key);
            $lots = $theproduct->lots()->where('left_volume', '>=', $product["singleVolume"])->get();
            foreach($lots as $lot)
            {
                if($product["volume"] > 0) {
                    $quantityIntoLot = $this->calculateQuantity($lot->left_volume, $product["singleVolume"], $product["quantity"]);                    
                    if($quantityIntoLot > 0){
                        $lot_products[$key]['quantity'] = $quantityIntoLot;
                        $lot->left_volume = $lot->left_volume - ($quantityIntoLot * $product["singleVolume"]);
                        $products[$key]["volume"] = $product["volume"] - ( $product["singleVolume"] * $quantityIntoLot );
                        $products[$key]["quantity"] = $product["quantity"] - $quantityIntoLot;
                        $this->attachLot($inbound->id, $key, $lot);
                    }
                }
                $lot->save();
                $new_quantity = $lot->pivot->quantity + $quantityIntoLot;
                $lot->products()->updateExistingPivot($key, ["quantity" => $new_quantity]);
            }
        }
        // Assign products to user lots
        foreach($user_lots as $lot){ 
            $lot_products = [];
            foreach($products as $key => $product){ 
                if($product["volume"] > 0) {
                    // If there are still volume needed to be assigned
                    $quantityIntoLot = $this->calculateQuantity($lot->left_volume, $product["singleVolume"], $product["quantity"]);
                    if($quantityIntoLot > 0){
                        $lot_products[$key]['quantity'] = $quantityIntoLot;
                        $lot->left_volume = $lot->left_volume - ($quantityIntoLot * $product["singleVolume"]);
                        $products[$key]["volume"] = $product["volume"] - $product["singleVolume"] * $quantityIntoLot;
                        $products[$key]["quantity"] = $product["quantity"] - $quantityIntoLot;
                        $this->attachLot($inbound->id, $key, $lot);
                    }
                }
            }
            $lot->save();
            $lot->products()->attach($lot_products);
        }
        
        return ['message' => "Inbound order created"];
    }
    public function calculateQuantity($volume, $singleVolume, $quantity){
        $quantityIntoLot = round($volume / $singleVolume, 0, PHP_ROUND_HALF_DOWN);
        return min($quantityIntoLot, $quantity);
    }
    public function attachLot($inbound, $product, $lot) {
        // Attach lot to inbound product
        $inbound_product = InboundProduct::where('inbound_id', $inbound)->where('product_id', $product)->first();
        $inbound_product->lots()->attach($lot);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inbound = inbound::where('id', $id)->first();
        
        return view('inbound.show')->with('inbound', $inbound);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}