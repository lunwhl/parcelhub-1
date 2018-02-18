<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InboundProduct extends Model
{
	protected $guarded = [];

	protected $table = 'inbound_product';

    protected $appends = ["lots_name"];
	
    public function lots(){
    	return $this->belongsToMany('App\Lot');
    }

    public function inbound(){
    	return $this->belongsTo('App\Inbound');
    }

    public function product(){
    	return $this->belongsTo('App\Product');
    }

    // Accessor
    public function getLotsNameAttribute()
    {
        return $this->lots->pluck('name')->implode(', ');
    }
}

