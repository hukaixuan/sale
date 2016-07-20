@extends('layouts.app')

@section('content')
<div class="container">  
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">管理</div>

                <div class="panel-body">

                    <a href="{{ url('admin/dish') }}" class="btn btn-lg btn-success col-xs-12">管理菜品</a>

                </div>
                <div class="panel-body">

                    <a href="{{ url('admin/seat') }}" class="btn btn-lg btn-success col-xs-12">管理座位</a>

                </div>
            </div>
        </div>
    </div>
</div>  
@endsection