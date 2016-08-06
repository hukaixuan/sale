@extends('layouts.main')

@section('content')
				<!--hot-offer-->
					<div class="today-offer">
						<div class="today-head">
						<h3> today hot offer</h3>
							<p>Autem vel eum iriure dolor in hendrerit in volestie consequat vel illum</p>
					</div>
					<div class="today-grids">
						<div class="col-md-3 today-grid test1">
						<img src="{{asset('/resources/images/p1.jpg')}}" class="img-responsive" alt="/">
							<div class="textbox">
								<h4>FOOD QUALITY </h4>
								<p>Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis…</p>
							</div>
						</div>
						<div class="col-md-3 today-grid test1">
						<img src="{{asset('/resources/images/p2.jpg')}}" class="img-responsive" alt="/">
						<div class="textbox">
								<h4>FOOD QUALITY </h4>
								<p>Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis…</p>
							</div>
						</div>
						<div class="col-md-3 today-grid test1">
						<img src="{{asset('/resources/images/p3.jpg')}}" class="img-responsive" alt="/">
						<div class="textbox">
								<h4>FOOD QUALITY </h4>
								<p>Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis…</p>
							</div>
						</div>
						<div class="col-md-3 today-grid test1">
						<img src="{{asset('/resources/images/p4.jpg')}}" class="img-responsive" alt="/">
						<div class="textbox">
								<h4>FOOD QUALITY </h4>
								<p>Arenean nonummy hendrerit mau phaselntes nascetur ridic ulusm dui fusce feu. Cras vitae neque turpis…</p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<!--end-hot-offer-->
				<!--menu-->
					<div class="menu-offer">
						<div class="container">
						<div class="menu-head">
						<h3>our menu</h3>
							<p>Autem vel eum iriure dolor in hendrerit in volestie consequat vel illum</p>
					</div>
					<div class="menu-grids">
						<div class="col-md-4 menu-grid">
							<div class="menu-text">
									<div class="menu-text-left">
										<h5>Cheese, tomato</h5>
									</div>
									<div class="menu-text-midle">
										<span class="line"> </span>
									</div>
									<div class="menu-text-right">
										<h5>$ 50</h5>
									</div>
									<div class="clearfix"> </div>
								</div>	
								<div class="menu-text">
									<div class="menu-text-left">
										<h5>Chicken, mozzarella</h5>
									</div>
									<div class="menu-text-midle">
										<span class="line"> </span>
									</div>
									<div class="menu-text-right">
										<h5>$62</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-text">
									<div class="menu-text-left">
										<h5>Tuna, Sweetcorn</h5>
									</div>
									<div class="menu-text-midle">
										<span class="line"> </span>
									</div>
									<div class="menu-text-right">
										<h5>$25</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-text">
									<div class="menu-text-left">
										<h5>Minced, Beef</h5>
									</div>
									<div class="menu-text-midle">
										<span class="line"> </span>
									</div>
									<div class="menu-text-right">
										<h5>$30</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
						</div>
						<div class="col-md-4 menu-grid">
							<div class="menu-text">
									<div class="menu-text-left">
										<h5>tomato, mushr</h5>
									</div>
									<div class="menu-text-midle">
										<span class="line"> </span>
									</div>
									<div class="menu-text-right">
										<h5>$ 50</h5>
									</div>
									<div class="clearfix"> </div>
								</div>	
								<div class="menu-text">
									<div class="menu-text-left">
										<h5>Chicken, onions</h5>
									</div>
									<div class="menu-text-midle">
										<span class="line"> </span>
									</div>
									<div class="menu-text-right">
										<h5>$62</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-text">
									<div class="menu-text-left">
										<h5>Tuna, Sweetcorn</h5>
									</div>
									<div class="menu-text-midle">
										<span class="line"> </span>
									</div>
									<div class="menu-text-right">
										<h5>$25</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
								<div class="menu-text">
									<div class="menu-text-left">
										<h5>Pineapple, Beef</h5>
									</div>
									<div class="menu-text-midle">
										<span class="line"> </span>
									</div>
									<div class="menu-text-right">
										<h5>$30</h5>
									</div>
									<div class="clearfix"> </div>
								</div>
						
						</div>
						<div class="col-md-4 menu-grid cooke">
						<img src="{{asset('/resources/images/p5.jpg')}}" class="img-responsive" alt="/">
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<!--end-menu-->
				<div class="order-grids">
				<div class="container">
				<div class="order-head">
						<h3>What makes us Different</h3>
							<p>Autem vel eum iriure dolor in hendrerit in volestie consequat vel illum</p>
					</div>
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingOne">
							<h4 class="panel-title">
								<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									DESSERTS
								</a>
							</h4>
						</div>
						<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
							<div class="panel-body">
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/d1.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/d2.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/d3.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/d4.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="clerafix"></div>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTwo">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								CHICKEN
								</a>
							</h4>
						</div>
						<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
							<div class="panel-body">
							<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/p6.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/p7.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/p8.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/p9.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="clerafix"></div>
							</div>
						</div>
						</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingThree">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							DESSERTS
								</a>
							</h4>
						</div>
						<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
							<div class="panel-body">
							<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/d1.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/d2.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/d3.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/d4.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="clerafix"></div>
							</div>
						</div>
					</div>
										<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFour">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFoure">
							SEAFOOD
								</a>
							</h4>
						</div>
						<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
							<div class="panel-body">
							<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/s1.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/s2.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/s3.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/s4.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="clerafix"></div>
							</div>
						</div>
					</div>
										<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingFive">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								SALADS
								</a>
							</h4>
						</div>
						<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
							<div class="panel-body">
							<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/s5.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/s6.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/s7.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="col-md-3 order-grid">
								<img src="{{asset('/resources/images/s8.jpg')}}" class="img-responsive" alt="/">
								</div>
								<div class="clerafix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>
@endsection