<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Order;
use App\Order_dish;
use Input;
use Log;
use Redirect;

class OrderController extends Controller
{
    //
    public function __construct()
    {
        // $this->middleware('auth');
    }

    // public function addDish ($dishId,$seat_id){      //按座位号区分订单
    public function addDish (){      //按座位号区分订单

        // Log:info('in addDish');
        $seat_id = Input::get('seat_id');
        $dish_id = Input::get('dish_id');
        $order = Order::where('seat_id',$seat_id)->where('ifcheckout',0)->first();    

        if(!$order){
            $order =  new Order();
            $order->seat_id=$seat_id;
            $order->save();
        }

        if (!Order_dish::where('order_id',$order->id)->where('dish_id',$dish_id)->first()) {
       		$Order_dish  = new Order_dish();
	        $Order_dish->dish_id=$dish_id;
	        $Order_dish->order_id= $order->id;
        }else{
        	$Order_dish  = Order_dish::where('order_id',$order->id)->where('dish_id',$dish_id)->first();
        }
        $Order_dish->num += 1;
        $Order_dish->price = $Order_dish->dish->price;
        $Order_dish->save();

        $order->total += $Order_dish->price;
        // $order->save();
        // return redirect('/menu/'.$seat_id);
        // Log::info('在if判断之前');
        if($order->save()){
            return response()->json(array(
                'status' => 1,
                'msg' => 'ok',
            ));
        } else {
            Log::info('保存失败！');
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }

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
        // $total=0;
        // foreach($orderDishes as $item){
        //     $total+=$item->dish->price;
        // }

        return view('/checkout',['orderDishes'=>$orderDishes,'seat_id'=>$seat_id, 'order'=>$order]);
    }

    // public function removeDish($id){
    public function removeDish(){
        $id = Input::get('id');
        $orderDish = Order_dish::where('id',$id)->first();
        $order = $orderDish->order;
        $del = $orderDish->price * $orderDish->num;
        $order->total -= $del;
        $order->save();
        Order_dish::destroy($id);
        // return back()->withInput();
        
    }



}

 
