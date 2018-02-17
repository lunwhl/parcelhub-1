<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Outbound
 *
 * @property int $id
 * @property int $user_id
 * @property int $courier_id
 * @property int $product
 * @property string $recipient_name
 * @property string $recipient_address
 * @property int $insurance
 * @property float $amount_insured
 * @property int $dangerous
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \App\Courier $courier
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereAmountInsured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereCourierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereDangerous($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereRecipientAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereRecipientName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Outbound whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Product[] $products
 */
class Outbound extends Model
{
	protected $guarded = [];
	
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function products(){
    	return $this->belongsToMany('App\Product');
    }

    public function courier(){
    	return $this->hasOne('App\courier');
    }

    public function scopeProcessing($query){
        return $query->where('process_status', 'processing');
    }

    public function scopeDelivering($query){
        return $query->where('process_status', 'delivering');
    }

    public function scopeCompleted($query){
        return $query->where('process_status', 'completed');
    }

    public function scopeCanceled($query){
        return $query->where('process_status', 'canceled');
    }
}
