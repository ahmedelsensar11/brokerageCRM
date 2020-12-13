<?php

namespace App;

use App\Customer;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    //The attributes that are mass assignable.
    protected $fillable = [
        'first_name','last_name', 'email', 'password','position','address'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    //many to many relationship
    //users(employees) have many actions with many customers
    public function actions()
    {
        return $this->belongsToMany('App\Customer' , 'actions' , 'user_id' ,'customer_id');
    }

    

}
