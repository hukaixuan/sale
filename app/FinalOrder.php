<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinalOrder extends Model
{
    //
    public function order(){
    	return $this->hasOne('App\Order','id','order_id');
    }
}
