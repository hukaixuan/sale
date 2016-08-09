@extends('layouts.main')

@section('content')
<!-- checkout -->
<div class="cart-items">
	<div class="container">
			 <h1>My Shopping Bag</h1>

			 @foreach($orderDishes as $orderDish)
			 <!-- <script>$(document).ready(function(c) {
					$('.close1').on('click', function(c){
						$('.cart-header').fadeOut('slow', function(c){
							$('.cart-header').remove();
						});
						});	  
					});
			 </script> -->
			   
			 <div class="cart-header">s
				 <!-- <div class="close1"> </div> -->
				 <div class="cart-sec simpleCart_shelfItem">
						<div class="cart-item cyc">
							 <img src="{{asset($orderDish->dish->img)}}" class="img-responsive" alt="">
						</div>
					   <div class="cart-item-info">
						<h3><a href="#"> {{$orderDish->dish->name}} </a></h3>
						<ul class="qty">
							<li><p>单价： {{$orderDish->dish->price}}</p></li>
							<li><p>数量： {{$orderDish->num}}</p></li>
						</ul>
							 <!-- <div class="delivery">
							 <p>Service Charges : $10.00</p>
							 <span>Delivered in 1-1:30 hours</span>
							 <div class="clearfix"></div>
				        	</div>	 -->
				        	<!-- <a href="/removeDish/{{$orderDish->id}}"> <button type="button" class="btn btn-danger">
                                    <span class="fa fa-remove"></span> 移除
                                </button>
                            </a> -->
                            <button id="btn{{$orderDish->id}}" type="button" class="btn btn-danger">
                                    <span class="fa fa-remove"></span> 移除
                                    <script>
										$(document).ready(function(){
										  $("#btn{{$orderDish->id}}").click(function(){
				    						// alert('添加成功');
										    $.ajax({
												type: 'POST',
												url: '/removeDish',
												data: { id:{{$orderDish->id}} },
												dataType: 'json',
												headers: {
												'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
												},
												success: function(data){
													console.log(data.status);
													window.location.reload();
												},
												error: function(xhr, type){
												// alert('Ajax error!')
													window.location.reload();
												}
											});

										  });
										});
									</script>
                            </button>
					   </div>
					   <div class="clearfix"></div>
											
				  </div>
			 </div>
			 @endforeach
			 <div class="cur_right">
			 	总价：{{$order->total}} 元
			 </div>
			 <a href="/"> 
			 	<button type="button" class="btn btn-default">
                    <span class="fa fa-shopping-cart"></span> 继续购买
                </button>
             </a>
             <a href="/final/{{$order->id}}">
	             <button type="button" class="btn btn-success">
	                结算 <span class="fa fa-play"></span>
	             </button>
             </a>
			 		
		 </div>
		 </div>
@endsection