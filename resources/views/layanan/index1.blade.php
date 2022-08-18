
@section('content')
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Layanan</title>

<!-- Themefisher Icon font -->
<link rel="stylesheet" href="plugins/themefisher-font/style.css">
<!-- bootstrap.min css -->
<link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

<!-- Animate css -->
<link rel="stylesheet" href="plugins/animate/animate.css">
<!-- Slick Carousel -->
<link rel="stylesheet" href="plugins/slick/slick.css">
<link rel="stylesheet" href="plugins/slick/slick-theme.css">

<!-- Main Stylesheet -->
<link rel="stylesheet" href="css/styleaviato.css">

<br><br><br>

<!-- Start Top Header Bar -->
<section class="top-header">
<div class="container">
<div class="row">
<div class="col-md-4 col-xs-12 col-sm-4"></div>
<div class="col-md-4 col-xs-12 col-sm-4">
<!-- Site Logo -->
<div class="logo text-center">
	<!-- replace logo here -->
	<text id="PRIMA PHOTO">
		<h1>PRIMA PHOTO</h1>
	</text>	
</div>
</div>
			
<div class="col-md-4 col-xs-12 col-sm-4">
<!-- Cart -->
<ul class="top-menu text-right list-inline">
<li class="dropdown cart-nav dropdown-slide">
<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i
		class="tf-ion-android-cart"></i>Cart</a>
<div class="dropdown-menu cart-dropdown">
	<!-- Cart Item -->
	<div class="media">
		<a class="pull-left" href="#!">
			<img class="media-object" src="images/shop/cart/cart-1.jpg" alt="image" />
		</a>
		<div class="media-body">
			<h4 class="media-heading"><a href="#!">Ladies Bag</a></h4>
			<div class="cart-price">
				<span>1 x</span>
				<span>1250.00</span>
			</div>
			<h5><strong>$1200</strong></h5>
		</div>
		<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
	</div><!-- / Cart Item -->

	<div class="cart-summary">
		<span>Total</span>
		<span class="total-price">$1799.00</span>
	</div>
	<ul class="text-center cart-buttons">
		<li><a href="cart.html" class="btn btn-small">View Cart</a></li>
		<li><a href="checkout.html" class="btn btn-small btn-solid-border">Checkout</a></li>
	</ul>
</div>

</li><!-- / Cart -->

</ul><!-- / .nav .navbar-nav .navbar-right -->
</div>
</div>
</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a href="{{url('pelanggan')}}">Home</a>
					</li><!-- / Home -->

					<!-- Produk -->
					<li class="dropdown ">
						<a href="{{url('produk')}}">Produk</a>
					</li><!-- / Produk -->

					<!-- Paket -->
					<li class="dropdown ">
						<a href="{{url('paket')}}">Paket</a>
					</li><!-- / Paket -->

				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>


<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Layanan</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">layanan</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<br><br><br>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1635324944940-0c0a9c8f9bf1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8aW1hZ2UlMjBwaG90b3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="paket alumni 1" style="width:100%"><br>
<h4>Cetak Ukuran Pas Foto</h4> <br>
<p class="price">Rp. 10.000 - Rp. 68.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('pasfoto')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1617366072770-0814659ea6af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjZ8fGltYWdlJTIwcGhvdG98ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" alt="paket alumni 1" style="width:100%"><br>
<h4>Cetak Ukuran Standar</h4> <br>
<p class="price">Rp. 4.000 - Rp. 15.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('cetakstandard')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1617396900799-f4ec2b43c7ae?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDB8fGltYWdlJTIwcGhvdG98ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" alt="paket alumni 1" style="width:100%"><br>
<h4>Cetak Ukuran 10R-10RS</h4> <br>
<p class="price">Rp. 20.000 - Rp. 25.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('cetak10R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1619118884592-11b151f1ae11?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzl8fGltYWdlJTIwcGhvdG98ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" alt="paket alumni 1" style="width:100%"><br>
<h4>Cetak Ukuran 12R-12RS</h4> <br>
<p class="price">Rp. 60.000 - Rp. 75.000</p><br>
<a href="{{url('cetak12R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1618005198920-f0cb6201c115?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDR8fGltYWdlJTIwcGhvdG98ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" alt="paket alumni 1" style="width:100%"><br>
<h4>Cetak Ukuran 16R-16RS</h4> <br>
<p class="price">Rp. 100.000 - Rp. 125.000</p><br>
<a href="{{url('cetak16R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1635190743089-a92f32c03781?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjZ8fGltYWdlJTIwcGhvdG98ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" alt="paket alumni 1" style="width:100%"><br>
<h4>Cetak Ukuran 20R-20RS</h4> <br>
<p class="price">Rp. 150.000 - Rp. 175.000</p><br>
<a href="{{url('cetak20R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1476169785137-3bfe32e30ee1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjN8fGltYWdlJTIwcGhvdG98ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" alt="paket alumni 1" style="width:100%"><br>
<h4>Cetak Ukuran 24R-24RS</h4> <br>
<p class="price">Rp. 200.000 - Rp. 225.000</p><br>
<a href="{{url('cetak24R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>



    
<!-- Main jQuery -->
<script src="plugins/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.1 -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Touchpin -->
<script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
<!-- Instagram Feed Js -->
<script src="plugins/instafeed/instafeed.min.js"></script>
<!-- Video Lightbox Plugin -->
<script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
<!-- Count Down Js -->
<script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

<!-- slick Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>

<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script type="text/javascript" src="plugins/google-map/gmap.js"></script>

<!-- Main Js File -->
<script src="js/scriptaviato.js"></script>

    