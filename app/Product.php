<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Product
 *
 * @property int $id
 * @property int|null $lot_id
 * @property string $name
 * @property float $height
 * @property float $length
 * @property float $width
 * @property string $sku
 * @property string|null $picture
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Lot|null $lot
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereLotId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereSku($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereWidth($value)
 * @mixin \Eloquent
 * @property int|null $user_id
 * @property-read \App\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Product whereUserId($value)
 * @property-read mixed $volume
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Inbound[] $inbounds
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Lot[] $lots
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Outbound[] $outbounds
 */
class Product extends Model
{
	protected $guarded = [];
    
    protected $appends = ['volume']	;
    
    public function lots(){
    	return $this->belongsToMany('App\Lot')
            ->withPivot('quantity');
    }

    public function inbounds(){
    	return $this->belongsToMany('App\Inbound')
        ->withPivot('quantity');
    }

    public function inbounds_with_lots(){
        return $this->hasMany('App\InboundProduct');
    }

    public function outbounds(){
    	return $this->belongsToMany('App\Outbound')
        ->withPivot('quantity');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    // Custom accessor
    public function getVolumeAttribute(){
        return $this->height * $this->width * $this->length;

    }

    public function getPictureAttribute($value)
    {
        return asset('images/' . $value);
    }

    public function getTotalAttribute(){
        $totalInbound = 0;
        $totalOutbound = 0;
        foreach($this->inbounds as $product_inbound){
            $totalInbound = $totalInbound + $product_inbound->pivot->quantity;
        }
        foreach($this->outbounds as $product_outbound){
            $totalOutbound = $totalOutbound + $product_outbound->pivot->quantity;
        }
        return $totalInbound-$totalOutbound;
    }
}
