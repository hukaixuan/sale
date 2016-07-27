@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">编辑菜品</div>
                <div class="panel-body">
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>编辑失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form enctype="multipart/form-data" action="{{ url('admin/dish/'.$dish->id) }}" method="POST">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        <input type="text" name="name" class="form-control" required="required" placeholder="请输入菜名" value="{{$dish->name}}">
                        <br>                        
                        <!-- <input type="text" name="type" class="form-control" required="required" placeholder="请选择分类" value="{{$dish->type}}">   -->
                        <select name="type" class="form-control">
                            @foreach ($types as $type)
                                <option value="{{$type->name}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        <br>                        
                        <input type="number" name="price" class="form-control" required="required" placeholder="请输入价格" value="{{$dish->price}}">
                        <br>                        
                        <input type="text" name="remark" class="form-control" placeholder="备注" value="{{$dish->remark}}">
                        <br>                       
                        <div class="form-control">{{$dish->img}}<input type="file" accpet="image/*" id="img" name="img" placeholder="上传图片" value="{{$dish->img}}"></div>
                        <br>   

                        <!-- <input type="boolean" name="isAvailable" class="form-control" required="required" placeholder="是否有货(1表示有货,0表示无货)" value="{{$dish->isAvailable}}">
                        <br> -->
                        <select name="isAvailable" class="form-control">
                            <option value="1">有货</option>
                            <option value="0">无货</option>
                        </select>
                        <br>
                        
                        <button class="btn btn-lg btn-info">提交修改</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection