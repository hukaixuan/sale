@extends('layouts.admin')

@section('content')
<div class="container">  
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">菜品管理</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            {!! implode('<br>', $errors->all()) !!}
                        </div>
                    @endif
                    <a href="{{ url('admin/dish/create') }}" class="btn btn-lg btn-primary">新增</a>

                    <hr>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>菜名</th>
                                <th>类别</th>
                                <th>价格</th>
                                <th>备注</th>
                                <th>图片</th>
                                <th>是否有货</th>
                                <th></th>
                            </tr>
                        </thead>
                        <hr>
                        <tbody>
                            @foreach ($dishes as $dish)
                            <div class="dish">
                                <div class="content">

                                    <tr>
                                        <td>{{ $dish->name }}</td>
                                        <td>{{ $dish->type }}</td>
                                        <td>{{ $dish->price }}</td>
                                        <td>{{ $dish->remark }}</td>
                                        <td>{{ $dish->img }}</td>
                                        @if($dish->isAvailable)
                                            <td>有货</td>
                                        @else
                                            <td>无货</td>
                                        @endif
                                        <td>
                                            <a href="{{ url('admin/dish/'.$dish->id.'/edit') }}" class="btn btn-success">编辑</a>
                                            <form action="{{ url('admin/dish/'.$dish->id) }}" method="POST" style="display: inline;">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger">删除</button>
                                            </form>
                                        </td>
                                    </tr>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                    {!!$dishes->links()!!}    <!-- 分页链接 -->
                        

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection