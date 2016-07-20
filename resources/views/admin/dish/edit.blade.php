@extends('layouts.app')

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
                        <input type="text" name="type" class="form-control" required="required" placeholder="请选择分类" value="{{$dish->type}}">  <!-- 添加菜品分类表后更改 -->
                        <br>                        
                        <input type="number" name="price" class="form-control" required="required" placeholder="请输入价格" value="{{$dish->price}}">
                        <br>                        
                        <input type="text" name="remark" class="form-control" placeholder="备注" value="{{$dish->remark}}">
                        <br>                       
                        <input type="file" accpet="image/*" id="img" name="img" class="form-control" placeholder="上传图片" value="{{$dish->img}}">
                        <br>   

                        <input type="boolean" name="isAvailable" class="form-control" required="required" placeholder="是否有货(1表示有货,0表示无货)" value="{{$dish->isAvailable}}">
                        <br>
                        <!-- 是否有货
                        <input type="radio" name="isAvailable" value="1" />有&nbsp;
                        <input type="radio" name="isAvailable" value="0" />无
                        <br>
                        <br> -->
                        <button class="btn btn-lg btn-info">提交修改</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection