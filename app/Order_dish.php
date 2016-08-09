<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_dish extends Model
{
    //
    public function order()
    {
        return $this->belongsTo('App\Order','order_id','id');  
    }

    public function dish()
    {
        return $this->hasOne('App\Dish','id','dish_id');
    }
}
