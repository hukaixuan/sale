@extends('layouts.main')

@section('content')
			<div class="menu-section">
					<div class="container">
						<h3> featured menu</h3>
						<div class="menu-grids wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
						<div class="menu1">
						@foreach ($dishes as $dish)
							<div class="col-md-4 menu-grid1 simpleCart_shelfItem">
								<img src="{{asset($dish->img)}}" class="img-responsive" alt="" />
								<div class="cur">
									<div class="cur-left">
										<div class="item_add"><span class="item_price"><a href="{{url('addDish',[$dish->id,$seat_id])}}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></span>
										</div>
									</div>
									<div class="cur-left">
										<h4>{{$dish->name}}</h4>
									</div>
									<div class="cur-right">
										<div class="item_add"><span class="item_price"><h6>￥{{$dish->price}}</h6></span></div>
									</div>
									<div class="clearfix"> </div>
								</div>
							</div>
						@endforeach
						</div>
						</div>
					</div>
			</div>
@endsection