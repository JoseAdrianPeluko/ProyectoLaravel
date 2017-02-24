<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
//    protected $fillable = [
//        'name', 'email', 'password',
//    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function table() {

//        return $this->belongsTo('App\Table');
        return $this->hasOne('App\Table');
    }

    public function order() {

//        return $this->belongsTo('App\Table');
        return $this->hasOne('App\Order');
    }

}
