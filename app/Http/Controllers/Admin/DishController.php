<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Dish;
use App\Type;
use Auth;
use DB;

class DishController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function index()
    {
        $dishes = DB::table('dishes')->paginate(5);  //分页显示
    	return View('admin/dish/index')->withDishes($dishes)->withAdmin(Auth::guard('admin')->user());
    }

    //新建
    public function create(){
    	return view('admin/dish/create')->withTypes(Type::all())->withAdmin(Auth::guard('admin')->user());
    }

    // 存储
    public function store(Request $request){
    	$this -> validate($request,[
    			'name' => 'required',
    			'type' => 'required',
    			'price' => 'required',
    		]);
    	$Dish = new Dish;
    	$Dish->name = $request->get('name');
    	$Dish->type = $request->get('type');
    	$Dish->price = $request->get('price');
    	$Dish->remark = $request->get('remark');
    	$Dish->isAvailable = $request->get('isAvailable');
        //保存图片
        $img_save = $request->file('img');
        if (is_null($img_save)) {
            $Dish->img = '待上传';
        } else {
            $filedir = "upload/dish_img/";
            $image_name=$img_save->getClientOriginalName(); //获取上传图片的文件名
            $img_save->move($filedir,$image_name); //使用move 方法移动文件.
            $Dish->img = $filedir.$image_name;

        }
        
    	if ($Dish->save()) {
    		return redirect('admin/dish');
    	} else{
    		return redirect()->back()->withInput()->withErrors('保存失败！');
    	}
    }


    //编辑
    public function edit($id){
    	return view('admin/dish/edit')->withDish(Dish::find($id))->withTypes(Type::all())->withAdmin(Auth::guard('admin')->user());
    }
    public function update(Request $request, $id){
    	$this -> validate($request,[
    			'name' => 'required',  //email exists filled image in prsesnt regex required required_if required_unless required_with required_with_all same size
    			'type' => 'required',
    			'price' => 'required',
    		]);
    	$Dish = Dish::find($id);
    	$Dish->name = $request->get('name');
    	$Dish->type = $request->get('type');
    	$Dish->price = $request->get('price');
    	$Dish->remark = $request->get('remark');
    	$Dish->isAvailable = $request->get('isAvailable');
        //保存图片
        $img_save = $request->file('img');
        if (is_null($img_save)) {
            if ($request->get('img')=='待上传') {
                $Dish->img = '待上传';
                
            }
        } else {
            $filedir = "upload/dish_img/";
            $image_name=$img_save->getClientOriginalName(); //获取上传图片的文件名
            $img_save->move($filedir,$image_name); //使用move 方法移动文件.
            $Dish->img = $filedir.$image_name;

        }
    	if ($Dish->save()) {
    		return redirect('admin/dish');
    	} else{
    		return redirect()->back()->withInput()->withErrors('修改失败！');
    	}
    }


    //删除
    public function destroy($id){
    	if (Dish::find($id)->delete()) {
    		return redirect()->back()->withInput()->withErrors('删除成功！');
    	}else{
    		return redirect()->back()->withInput()->withErrors('删除失败！');
    	}
    }
}
