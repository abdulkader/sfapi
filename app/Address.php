<?php

namespace App;

use App\AppModel;

class Address extends AppModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id','name','villa','building','street','city','mobile','contact','remarks','active','verified',
    ];

    public function user()
    {
    	return $this->belongsTo('App/User');
    }
}
