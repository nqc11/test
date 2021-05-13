<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SNEAKER SHOP</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <base href="{{asset('public')}}"/>
	<link rel="stylesheet" href="assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/responsive.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/style.css">
	<link rel="stylesheet" href="assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css">
</head>
<body>



		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{asset('/')}}" id="logo"><img src="assets/dest/images/logo-cake.png" width="200px" alt=""></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<a href="{{asset('cart/show')}}" class="fa fa-shopping-cart"> Giỏ hàng</a> {{Cart::count()}}</a>
						</div>
						 <!-- .cart -->
					</div>
					<div class="beta-comp">
						<div class="cart">
							<a href="{{asset('http://127.0.0.1:8000/admin')}}" class="fa fa-user"> Admin</a></a>
						</div>
						 <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
        <div class="container">
    <div class="row">
		<div class="header-bottom" style=" background-color: #414A4C;margin-left: 16px;width: 100%;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{asset('/')}}">Trang chủ</a></li>
						<li><a>Sản phẩm</a>
							<ul class="sub-menu">
								<li><a href="http://127.0.0.1:8000/brand/1">Nike Sneaker</a></li>
                                <li><a href="http://127.0.0.1:8000/brand/2">Adidas Sneaker</a></li>
								<li><a href="http://127.0.0.1:8000/brand/3">Gucci Sneaker</a></li>
								<li><a href="http://127.0.0.1:8000/brand/4">Puma Sneaker</a></li>
							</ul>
						</li>
						<li><a href="{{asset('/')}}">Giới thiệu</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
    <div class="container">
    <div class="row">
	<div class="rev-slider">
	<div class="fullwidthbanner-container">
					<div class="fullwidthbanner">
						<div class="bannercontainer" >
					    <div class="banner" >
						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!-- Indicators -->
							<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>

							<!-- Wrapper for slides -->
							<div class="carousel-inner">

							<div class="item active">
								<img src="assets/dest/images/thumbs/1.jpg" style="width:100%;">
								<div class="carousel-caption">
								</div>
							</div>

							<div class="item">
								<img src="assets/dest/images/thumbs/2.jpg" style="width:100%;">
								<div class="carousel-caption">
								</div>
							</div>
							
							<div class="item">
								<img src="assets/dest/images/thumbs/3.jpg" style="width:100%;">
								<div class="carousel-caption">
								</div>
							</div>
							</div>
							<a class="left carousel-control" href="#myCarousel" data-slide="prev">
    							<span class="glyphicon glyphicon-chevron-left"></span>
    							<span class="sr-only">Previous</span>
  							</a>
  							<a class="right carousel-control" href="#myCarousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
								<span class="sr-only">Next</span>
  							</a>
						</div>	
						</div>
						</div>

						<div class="tp-bannertimer"></div>
						</div>
					</div>
				<!--slider-->
	</div>
    <div class="container">
    <div class="row">


            @yield('content')
        </div>
        </div>
        </div>
        </div>


        <div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="widget">
						<h4 class="widget-title">Quảng Cáo </h4>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="widget">
						<h4 class="widget-title">Thông Tin</h4>
						<div>
							<ul>
								<li><i class="fa fa-chevron-right"></i> Web Design</a></li>
								<li><i class="fa fa-chevron-right"></i> Web development</a></li>
								<li><i class="fa fa-chevron-right"></i> Marketing</a></li>
								<li><i class="fa fa-chevron-right"></i> Tips</a></li>
								<li><i class="fa fa-chevron-right"></i> Resources</a></li>
								<li><i class="fa fa-chevron-right"></i> Illustrations</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
				 <div class="col-sm-10">
					<div class="widget">
						<h4 class="widget-title">Công Ty</h4>
						<div>
							<div class="contact-info">
								<i class="fa fa-map-marker"></i>
								<p>70 Nguyễn Huệ, Vĩnh Ninh, Thành phố Huế, Thừa Thiên Huế Phone: +84 774 789 006</p>
								<p>Trường Cao đẳng Công nghiệp Huế là trường cao đẳng trực thuộc Bộ công thương, đóng trên địa bàn Thừa Thiên Huế, Việt Nam.</p>
							</div>
						</div>
					</div>
				  </div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
</body>
</html>