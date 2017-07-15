<?php

namespace App;

use App\AppModel;

class Product extends AppModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'product_id','name_en','name_ar','unit','price','image','remarks','active','verified',
    ];
}
