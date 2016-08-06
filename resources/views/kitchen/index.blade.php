@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h3>
				厨房端
			</h3>
			
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							菜品
						</th>
						<th>
							数量
						</th>
						<th>
							桌号
						</th>
						<th>
							订单提交时间
						</th>
						<th>
							是否完成
						</th>
					</tr>
				</thead>
				<tbody>
				@foreach($kitchenOrders as $kitchenOrder)
						@if($kitchenOrder->ifAccomplish==0)
							<tr>
								<td>
									{{$kitchenOrder->dish_name}}
								</td>
								<td>
									{{$kitchenOrder->num}}
								</td>
								<td>
									{{$kitchenOrder->seat_id}}
								</td>
								<td>
									{{$kitchenOrder->created_at}}
								</td>
								<td>
									<a href="/kitchen/accomplish/{{$kitchenOrder->id}}">
										<button class="btn btn-primary btn-large" type="button">完成</button>
									</a>
								</td>
							</tr>
						@endif
				@endforeach
				</tbody>
			</table> 
		</div>
	</div>
</div>
@endsection