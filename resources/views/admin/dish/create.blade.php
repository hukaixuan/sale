@extends('layouts.admin')

@section('content')
<div class="container">  
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">新增菜品</div>
                <div class="panel-body">

                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>新增失败</strong> 输入不符合要求<br><br>
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif

                    <form enctype="multipart/form-data" action="{{ url('admin/dish') }}" method="POST">
                        {!! csrf_field() !!}      <!-- 防止跨站伪造攻击csrf -->
                        <input type="text" name="name" class="form-control" required="required" placeholder="请输入菜名">
                        <br>                        
                        <select name="type" class="form-control">
                            @foreach ($types as $type)
                                <option value="{{$type->name}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                        <br>                        
                        <input type="number" name="price" class="form-control" required="required" placeholder="请输入价格">
                        <br>                        
                        <input type="text" name="remark" class="form-control" placeholder="备注">
                        <br>                        
                        <input type="file" accpet="image/*" name="img" class="form-control" placeholder="上传图片">
                        <br>                        
                        <!-- <input type="text" name="isAvailable" class="form-control" required="required" placeholder="是否有货(1表示有货,0表示无货)"> -->
                        <select name="isAvailable" class="form-control">
                            <option value="1">有货</option>
                            <option value="0">无货</option>
                        </select>
                        <br>
                        <button class="btn btn-lg btn-info">新增</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection