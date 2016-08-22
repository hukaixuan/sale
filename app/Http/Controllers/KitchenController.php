<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\KitchenOrder;
use App\Order_dish;
use Input;

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

    public function refresh()
    {
        # code...
        if(emptyempty(Input::get('time')))
            exit();
        set_time_limit(0);
        while (true) {
            usleep(500000);
            # code...
            // if (KitchenOrder::where('refresh',1)->get()) {
                # code...
                $arr=array('success'=>"1",'name'=>'xiaocai','text'=>'hhhh');  
                return json_encode($arr);  
            // }

        }
    }
}





















