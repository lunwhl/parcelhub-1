<?php

namespace App\Http\Controllers\Admin;

use App\Inbound;
use App\Notifications\InboundStatusUpdateNotification;
use App\User;
use App\UserToken;
use Entrust;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class InboundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Controller::VueTableListResult(inbound::with('products', 'products_with_lots.lots'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request)
    {

        $inbound = inbound::find($request->id);
        if($inbound->process_status == "canceled")
        {
            return response(json_encode(array('process_status' => ['Inbound has been canceled.'])), 422);
        }
       

        if($request->process_status == 'canceled') {
            // Remove the lot product and its quantity
            foreach($inbound->products_with_lots as $inboundproduct)
            {
                foreach($inboundproduct->lots as $lot)
                {
                    $lot->left_volume = $lot->left_volume + ($inboundproduct->product->volume * $inboundproduct->quantity);
                    $lot->products()->detach($inboundproduct->product_id);
                    $lot->save();
                }
            }
        }

        $inbound->process_status = $request->process_status;
        $inbound->save();

        if(Entrust::hasRole('admin')) {

            Auth::user()->notify(new InboundStatusUpdateNotification($inbound));

        } else {

            User::admin()->first()->notify(new InboundStatusUpdateNotification($inbound));
            Auth::user()->notify(new InboundStatusUpdateNotification($inbound));
        }

        if(request()->wantsJson())
        {   
            return ["message" => "Inbound updated successfully."];
        }

        return redirect()->back()->withSuccess($inbound->name . ' updated successfully.');
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
