<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dish;

class MenuController extends Controller
{
    //
    public function index($seat_id)	
    {
    	return view('menu',['seat_id'=>$seat_id])->withDishes(Dish::all());
    }
}
