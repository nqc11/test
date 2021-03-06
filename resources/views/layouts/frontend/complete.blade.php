@extends('layouts.frontend.master')
@section('title', 'SNEAKER SHOP')

@section('content')
<link rel="stylesheet" href="css2/complete.css">


<div id="wrap-inner">
	<div id="complete">
		<p class="info">Quý khách đã đặt hàng thành công!</p>
		<p>• Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p>
		<p>• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng</p>
		<p>Cám ơn Quý khách đã sử dụng Sản phẩm của chúng Tôi!</p>
	</div></br>
	<p class="btn btn-default"><a href="{{asset('/')}}">Quay lại trang chủ</a></p>
</div>
@endsection