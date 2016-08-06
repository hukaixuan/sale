<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_dish extends Model
{
    //
    public function order()
    {
        return $this->belongsTo('App\Order','id','order_id');  //模型，外键，内键
    }

    public function dish()
    {
        return $this->hasOne('App\Dish','id','dish_id');
    }
}
