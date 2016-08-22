@extends('layouts.admin')

@section('content')
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<h3>
				厨房端
			</h3>
			<div id="msg"></div>  
			<input id="btn" type="button" value="测试" />
			
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
	<script>
$(document).ready(function(){
  $("#btn").click(function(){
	// alert('添加成功');
    $.ajax({
		type:"POST",  
	    dataType:"json",  
	    url:"/kitchen/refresh",  
	    timeout:80000,  //ajax请求超时时间80秒  
	    data:{time:"80"}, //40秒后无论结果服务器都返回数据  
		headers: {
		'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		},
		success:function(data,textStatus){  
	     //从服务器得到数据，显示数据并继续查询  
	     if(data.success=="1"){  
	      $("#msg").append("<br>[有数据]"+data.text);  
	      // evdata.data.btn.click();  
	      $("btn").click();

	     }  
	     //未从服务器得到数据，继续查询  
	     if(data.success=="0"){  
	     $("#msg").append("<br>[无数据]");  
	     // evdata.data.btn.click();  
	     $("btn").click();
	     }  
	    },  
	    //Ajax请求超时，继续查询  
	    error:function(XMLHttpRequest,textStatus,errorThrown){  
	      if(textStatus=="timeout"){  
	       $("#msg").append("<br>[超时]");  
	       // evdata.data.btn.click();  
	       $("btn").click();
	      }  
	    }  
	});

  });
});
</script>
</div>

@endsection
























