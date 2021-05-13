@extends('layouts.frontend.master')
@section('title', 'APPLE ISTORE')

@section('content')

					<div id="wrap-inner">
						<div id="product-info">
							<div class="clearfix"></div>
							<h3 style="color: black; text-align: center; margin-top:20px; font-weight: bold; margin- bottom:20px;" value="">{{ $product->name }}</h3>
							<div class="row">
								<div id="product-img"  class="text-center">
									<img src="{{url('upload')}}/{{$product->images}}" style="width:450px; height:430px;" >
								</div>
								<div id="product-details"  style="text-align:center;">

									<strong style="font-size:25px;">Giá: <span class="price">{{number_format($product->price)}} VND</span></strong>
									<p style="margin-top:20px;"><strong>Bảo hành: {{$product->baohanh}}</strong></p>
									<p><strong>Phụ kiện: {{$product->phukien}}</strong></p>
									<p><strong>Tình trạng: {{$product->tinhtrang}}<strong></p>
									<p><strong>Khuyến mại: {{$product->khuyenmai}}<strong></p>			
									<p>Tình trạng: Còn hàng</p></br>
									<!-- <p>Mô tả: {{$product->desc}}</p> -->
									<p class="btn btn-danger"  class="add-cart text-center"><a style="color:white;" href="{{asset('cart/add/'.$product->id)}}">ĐẶT HÀNG</a></p>
								</div>	
							</div>							
						</div>
					</div>
					</div>
											
					@endsection

					