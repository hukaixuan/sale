@extends('layouts.admin')


@section('content')
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h3>
				收银端
			</h3>

			<div class="span12">
				<div class="tabbable" id="tabs-705343">
					<ul class="nav nav-tabs">
						<li class="active">
							 <a href="#panel-857473" data-toggle="tab">未付款</a>
						</li>
						<li>
							 <a href="#panel-651745" data-toggle="tab">已付款</a>
						</li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="panel-857473">
							<p>
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>
												订单号
											</th>
											<th>
												桌号
											</th>
											<th>
												金额
											</th>
											<th>
												订单提交时间
											</th>
											<th>
												是否完成支付
											</th>
										</tr>
									</thead>
									<tbody>
									@foreach($finalOrders as $finalOrder)
											@if($finalOrder->ifcheckout==0)
												<tr>
													<td>
														{{$finalOrder->id}}
													</td>
													<td>
														{{$finalOrder->seat_id}}
													</td>
													<td>
														{{$finalOrder->total}}
													</td>
													<td>
														{{$finalOrder->created_at}}
													</td>
													<td>
														<a href="cashier/checkout/{{$finalOrder->id}}">
															<button class="btn btn-primary btn-large" type="button">确认已支付</button>
														</a>
													</td>
												</tr>
											@endif
									@endforeach
									</tbody>
								</table>
							</p>
						</div>
						<div class="tab-pane" id="panel-651745">
							<p>
								<table class="table table-striped table-hover">
									<thead>
										<tr>
											<th>
												订单号
											</th>
											<th>
												桌号
											</th>
											<th>
												金额
											</th>
											<th>
												订单提交时间
											</th>
											<th>
												是否完成支付
											</th>
										</tr>
									</thead>
									<tbody>
									@foreach($finalOrders as $finalOrder)
											@if($finalOrder->ifcheckout==1)
												<tr>
													<td>
														{{$finalOrder->id}}
													</td>
													<td>
														{{$finalOrder->seat_id}}
													</td>
													<td>
														{{$finalOrder->total}}
													</td>
													<td>
														{{$finalOrder->created_at}}
													</td>
													<td>
														已支付
													</td>
												</tr>
											@endif
									@endforeach
									</tbody>
								</table>
							</p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
@endsection
