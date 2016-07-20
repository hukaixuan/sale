<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class AdminController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //
    public function index()
    {
        // $admin = Auth::guard('admin')->user();    	
    	return view('admin/index');
    	// return $admin->name;
    	// return view('admin/index')->withAdmin($admin);
    }
}
