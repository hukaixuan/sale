<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Order;
use App\Order_dish;

class OrderController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function addDish ($dishId,$seat_id){      //按座位号区分订单

        $order = Order::where('seat_id',$seat_id)->where('ifcheckout',0)->first();    

        if(!$order){
            $order =  new Order();
            $order->seat_id=$seat_id;
            $order->save();
        }

        if (!Order_dish::where('order_id',$order->id)->where('dish_id',$dishId)->first()) {
       		$Order_dish  = new Order_dish();
	        $Order_dish->dish_id=$dishId;
	        $Order_dish->order_id= $order->id;
        }else{
        	$Order_dish  = Order_dish::where('order_id',$order->id)->where('dish_id',$dishId)->first();
        }
        $Order_dish->num += 1;
        $Order_dish->price = $Order_dish->dish->price;
        $Order_dish->save();

        $order->total += $Order_dish->price;
        $order->save();
        return redirect('/menu/'.$seat_id);

    }

    public function showOrder($seat_id){
        $order = Order::where('seat_id',$seat_id)->where('ifcheckout',0)->first();

        if(!$order){
            $order =  new Order();
            $order->seat_id=$seat_id;
            $order->save();
        }

        $orderDishes = $order->orderDishes;
        // $orderDishes = Order::find(2)->orderDishes;
        $total=0;
        foreach($orderDishes as $item){
            $total+=$item->dish->price;
        }

        return view('/checkout',['orderDishes'=>$orderDishes,'total'=>$total,'seat_id'=>$seat_id, 'order'=>$order]);
    }

    public function removeDish($id){

        Order_dish::destroy($id);
        return back()->withInput();
    }

}
