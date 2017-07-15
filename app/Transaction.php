<?php

namespace App;

use App\AppModel;

class Transaction extends AppModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id','transaction_id','product_id','quantity','price','total_price','date','active','verified',
    ];

    public function product()
    {
    	return $this->belongsTo('App/Product');
    }
}
