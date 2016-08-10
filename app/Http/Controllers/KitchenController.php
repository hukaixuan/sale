<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\KitchenOrder;
use App\Order_dish;

class KitchenController extends Controller
{
    //
    public function index()
    {
    	$kitchenOrders = KitchenOrder::where('ifAccomplish',0)->get();
    	return view('kitchen/index',['kitchenOrders'=>$kitchenOrders]);
    }

    //完成菜品
    public function accomplish($kitchenOrder_id)
    {	
    	$kitchenOrder = KitchenOrder::where('id',$kitchenOrder_id)->first();
    	$kitchenOrder->ifAccomplish = 1;   //菜品完成，标志位设为1
    	$kitchenOrder->save();
    	return redirect('/kitchen');
    }
}
