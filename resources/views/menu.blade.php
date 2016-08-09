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
										<!-- <div class="item_add"><span class="item_price"><a href="{{url('addDish',[$dish->id,$seat_id])}}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></span>
										</div> -->
										<div class="item_add"><span class="item_price"><button id="add_dish{{$dish->id}}"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
										<script>
										$(document).ready(function(){
										  $("#add_dish{{$dish->id}}").click(function(){
				    						// alert('添加成功');
										    $.ajax({
												type: 'POST',
												url: '/addDish',
												data: { seat_id : {{$seat_id}},  dish_id:{{$dish->id}}},
												dataType: 'json',
												headers: {
												'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
												},
												success: function(data){
												console.log(data.status);
												},
												error: function(xhr, type){
												alert('Ajax error!')
												}
											});

										  });
										});
										</script>
										</button></span>
										</div>
										<input id="dish_id" type="hidden" value="{{$dish->id}}">


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
						<!-- <script>
						$(document).ready(function(){
						  $("#add_dish").click(function(){
						    // $.post("addDish",
						    // {
						    //   seat_id:{{$seat_id}},
						    //   dish_id:$(".dish_id").val()
						    // },
						    // function(data,status){
      							// alert("数据：" + data + "\n状态：" + status);
    						// });
    						alert('hello');
						  });
						});
						</script> -->
@endsection