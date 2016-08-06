@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{url('admin',[1,2])}}">hhhh</a>
    <h1>
        {{$num}}
    </h1>
</div>
@endsection
