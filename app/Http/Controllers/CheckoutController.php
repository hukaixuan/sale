<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CheckoutController extends Controller
{
    //
    public function index()
    {
    	# code...
    	return view('checkout');
    }
}
