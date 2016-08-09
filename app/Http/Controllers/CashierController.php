<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\FinalOrder;
class CashierController extends Controller
{
    //收银端控制器
	public function index()
	{
		# code...
		$finalOrders = FinalOrder::all();
		return view('cashier', ['finalOrders'=>$finalOrders]);
	}

	public function checkout($id)
	{
		# code...
		$finalOrder = FinalOrder::where('id',$id)->first();
		$finalOrder->ifcheckout = 1;
		$finalOrder->save();
		return redirect('cashier');
	}
}
