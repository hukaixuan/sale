<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Seat;

class SeatController extends Controller
{
    //
    public function index()
    {
    	return View('admin/seat/index')->withSeats(Seat::all());
    }

    //新建
    public function create(){
    	return view('admin/seat/create');
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
    	return view('admin/seat/edit')->withSeat(Seat::find($id));
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
