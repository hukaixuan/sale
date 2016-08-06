<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FinalOrder;
use App\KitchenOrder;
use App\Order;

class FinalOrderController extends Controller
{
    //
    public function index($order_id)	
    {
    	//生成最终的订单
    	$finalOrder = new FinalOrder();
    	$order = Order::where('id',$order_id)->first();
    	$finalOrder->order_id = $order_id;
    	$finalOrder->user_id = $order->user_id;
    	$finalOrder->seat_id = $order->seat_id;
    	$finalOrder->total = $order->total;
    	$finalOrder->save(); 
    	$seat_id = $finalOrder->seat_id;

    	//传给厨房端
    	foreach ($finalOrder->order->orderDishes as $orderDish) {
    		# code...
    		$KitchenOrder = new KitchenOrder();
    		$KitchenOrder->dish_name = $orderDish->dish->name;
    		$KitchenOrder->num = $orderDish->num;
    		$KitchenOrder->seat_id = $finalOrder->order->seat_id;
    		$KitchenOrder->save();
    	}
    	$order->delete();
    	return view('success',['seat_id'=>$seat_id]);
    }
}

