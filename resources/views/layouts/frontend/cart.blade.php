@extends('layouts.frontend.master')
@section('title', 'Giỏ Hàng')

@section('content')

	<script type="text/javascript">
function updateCart(qty,rowId){
	$.get(
		'{{asset('cart/update')}}',
	{qty:qty,rowId:rowId},
	function(){
		location.reload();
	}
	);

	}
	</script>
					<div id="wrap-inner">
						<div id="list-cart">
							<h1>Giỏ hàng</h1></br>
							@if(Cart::count() >= 1)
							<form>
								<table class="table table-bordered .table-responsive text-center">
									<tr class="active">
										<td width="11.111%">Ảnh mô tả</td>
										<td width="22.222%">Tên sản phẩm</td>
										<td width="22.222%">Số lượng</td>
										<td width="16.6665%">Đơn giá</td>
										<td width="16.6665%">Thành tiền</td>
										<td width="11.112%">Xóa</td>
										@foreach ($items as $item)
									<tr>
										<td><img class="img-responsive" style="width: 170px; height: 200px;" src="upload/{{$item->options->images}}"></td>
										<td>{{ $item->name }}</td>
										<td>
											<div class="form-group">
												<input class="form-control" type="number"
												value="{{$item->qty}}" onChange="updateCart(this.value,'{{$item->rowId}}')">
											</div>
										</td>
										<td><span class="price">{{number_format($item->price)}} VND</span></td>
										<td><span class="price">{{number_format($item->price*$item->qty)}} VND</span></td>
										<td><a href="{{asset('cart/delete/'.$item->rowId)}}" class="">Xóa</a></td>
									</tr>
									@endforeach
								</table>
								<div class="row" id="total-price">
									<div class="col-md-6 col-sm-12 col-xs-12">										
										<h6>Tổng thanh toán: <span class="total-price">{{$total}}</span></h6>																				
									</div>
									<div class="col-md-6 col-sm-12 col-xs-12">
										<a href="{{asset('/')}}" class="btn btn-default">Mua tiếp</a>
										<a href="{{asset('cart/delete/all')}}" class="btn btn-default">Xóa giỏ hàng</a>
									</div>
								</div>
							</form>             	                	
						</div>
						<div id="xac-nhan">
							<h3>Xác nhận mua hàng</h3>
							<form method="post">
								<div class="form-group">
									<label for="email">Email address:</label>
									<input required type="email" class="form-control" id="email" name="email">
								</div>
								<div class="form-group">
									<label for="name">Họ và tên:</label>
									<input required type="text" class="form-control" id="name" name="name">
								</div>
								<div class="form-group">
									<label for="phone">Số điện thoại:</label>
									<input required type="number" class="form-control" id="phone" name="phone">
								</div>
								<div class="form-group">
									<label for="add">Địa chỉ:</label>
									<input required type="text" class="form-control" id="add" name="add">
								</div>
								<div class="form-group text-right">
									<button type="submit" class="btn btn-default">Thực hiện đơn hàng</button>
								</div>
								{{csrf_field()}}
							</form>
						</div>
						@else
						@endif
						
					</div>

						
					
					</div>
					

@endsection
