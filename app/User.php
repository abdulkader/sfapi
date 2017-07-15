<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','name','mobile','remarks','password','token'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','token'
    ];

    public function address()
    {
        return $this->hasMany('App/Address');
    }

    public function transactions()
    {
        return $this->hasMany('App/Transaction');
    }

    public function smelink()
    {
        return $this->belongsTo('App/SmeLink');
    }

    public function scopeActive($query)
    {
        return $query->where('active',1);
    }

    public function scopeVerified($query)
    {
        return $query->where('verified',1);
    }    
}
