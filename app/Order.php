<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function seat()
    {
        return $this->belongsTo('App\Seat');
    }

    public function orderDishes()
    {
        return $this->hasMany('App\Order_dish','order_id','id');    
    }
}
