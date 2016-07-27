<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Seat;
use Auth;
use DB;

class SeatController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $seats = DB::table('seats')->paginate(5);        
    	return View('admin/seat/index')->withSeats($seats)->withAdmin(Auth::guard('admin')->user());
    }

    //新建
    public function create(){
    	return view('admin/seat/create')->withAdmin(Auth::guard('admin')->user());
    }

    // 存储
    public function store(Request $request){
    	$this -> validate($request,[
    			'id' => 'required|unique:seats|max:255',
    			'name' => 'required',
    		]);
    	$Seat = new Seat;
    	$Seat->id = $request->get('id');
    	$Seat->name = $request->get('name');

    	if ($Seat->save()) {
    		return redirect('admin/seat');
    	} else{
    		return redirect()->back()->withInput()->withErrors('保存失败！');
    	}
    }


    //编辑
    public function edit($id){
    	return view('admin/seat/edit')->withSeat(Seat::find($id))->withAdmin(Auth::guard('admin')->user());
    }
    public function update(Request $request, $id){
    	$this -> validate($request,[
    			'id' => 'required|max:255',
    			'name' => 'required',
    		]);
    	$Seat = Seat::find($id);
    	$Seat->id = $request->get('id');
    	$Seat->name = $request->get('name');

    	if ($Seat->save()) {
    		return redirect('admin/seat');
    	} else{
    		return redirect()->back()->withInput()->withErrors('修改失败！');
    	}
    }


    //删除
    public function destroy($id){
    	if (Seat::find($id)->delete()) {
    		return redirect()->back()->withInput()->withErrors('删除成功！');
    	}else{
    		return redirect()->back()->withInput()->withErrors('删除失败！');
    	}
    }
}
