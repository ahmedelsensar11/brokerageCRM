<?php

namespace App;
use App\User ;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //one to many relation
    public function employee()
    {
        return $this->belongsTo('App\User' , 'assigned_to');
    }

    
}
