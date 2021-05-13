@extends('layouts.frontend.master')
@section('title', 'APPLE ISTORE')

@section('content')

<div id="wrap-inner">
	<div class="products">
		<?php $brands = App\Models\Brand::all() ?>
		@foreach($brands as $brand)
		<h1 style="text-align:center; margin-top:30px; margin-bottom:30px; color:black; font-weight:bold;" value="{{$brand->id}}">{{ $brand->name }}</h1>
		<div class="product-list row">
			@foreach($brand->products as $product)
			<div class="product-item col-md-3 col-sm-6 col-xs-12">
				<a href="{{url('product')}}/{{$product->id}}"><img src="{{url('upload')}}/{{$product->images}}" class="img-thumbnail" style=" height:200px;"></a>
				<p><a href="{{url('product')}}/{{$product->id}}">{{$product->name}}</a></p>
				<p class="price">{{number_format($product->price)}} VND</p></br>
				<div class="marsk">
					<a class="btn btn-danger" href="{{url('product')}}/{{$product->id}}">Xem chi tiết</a>								
				</div></br>
			</div>

			@endforeach

		</div>
		@endforeach
	</div>
</div>


<!-- endmain -->

<!-- footer -->
@endsection