@extends('layouts.frontend.master')
@section('title', 'Edit Product')

@section('content')
	<link rel="stylesheet" href="css2/category.css">
	
					<div id="wrap-inner">
						<div class="products">
							<h3>{{ $brand->name}}</h3>
							<div class="product-list row">
							@foreach($brand->products as $product)
								<div class="product-item col-md-3 col-sm-6 col-xs-12">
									<a href="#"><img src="{{url('upload')}}/{{$product->images}}" class="img-thumbnail"></a>
									<p><a href="#"></a>{{$product->name}}</p>
									<p class="price">{{number_format($product->price)}} VND</p>	  
									<div class="marsk">
									<a href="{{url('product')}}/{{$product->id}}">Xem chi tiết</a>
									</div>                                    
								</div>
							@endforeach             	                	
							</div>
						</div>

						
					</div>

					
@endsection

