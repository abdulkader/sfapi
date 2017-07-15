<?php

namespace App;

use App\AppModel;

class SmeLink extends AppModel
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'user_id','public_ip','user','active','verified',
    ];
}
