<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppModel extends Model
{
    public function scopeActive($query)
    {
    	return $query->where('active',1);
    }

    public function scopeVerified($query)
    {
    	return $query->where('verified',1);
    }
}
