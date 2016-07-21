<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Type;

class TypeController extends Controller
{
    //


    public function index()
    {
    	return View('admin/type/index')->withTypes(Type::all());
    }

    //新建
    public function create(){
    	return view('admin/type/create');
    }

    // 存储
    public function store(Request $request){
    	$this -> validate($request,[
    			'name' => 'required',
    		]);
    	$Type = new Type;
    	$Type->name = $request->get('name');

    	if ($Type->save()) {
    		return redirect('admin/type');
    	} else{
    		return redirect()->back()->withInput()->withErrors('保存失败！');
    	}
    }


    //删除
    public function destroy($id){
    	if (Type::find($id)->delete()) {
    		return redirect()->back()->withInput()->withErrors('删除成功！');
    	}else{
    		return redirect()->back()->withInput()->withErrors('删除失败！');
    	}
    }
}
