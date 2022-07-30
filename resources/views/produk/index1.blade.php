
@section('content')
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Produk</title>

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
			<img class="media-object" src="https://images.unsplash.com/photo-1550535424-fd4382da050c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzh8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="image" />
		</a>
		<div class="media-body">
			<h4 class="media-heading"><a href="#!">Bingkai 4R</a></h4>
			<div class="cart-price">
				<span>1 x</span>
				<span>50.000</span>
			</div>
			<h5><strong>Rp. 50.000</strong></h5>
		</div>
		<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
	</div><!-- / Cart Item -->

	<div class="cart-summary">
		<span>Total</span>
		<span class="total-price">Rp. 50.000</span>
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

					<!-- Paket -->
					<li class="dropdown ">
						<a href="{{url('paket')}}">Paket</a>
					</li><!-- / Paket -->

					<!-- layanan -->
					<li class="dropdown ">
						<a href="{{url('layanan')}}">Layanan</a>
					</li><!-- / layanan-->

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
					<h1 class="page-name">Produk</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">produk</li>
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
<img src="https://images.unsplash.com/photo-1550535424-fd4382da050c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzh8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Bingkai 4R</h4> <br>
<p class="price">Rp. 20.000 - Rp. 50.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('bingkai4R')}}" class="btn-solid-border">view details</a>  <br><br> 
<form action={{route('frontend.cart')}}> 
	@csrf
	<a href="" class="btn-main">Add to Cart</a> <br><br>
</form>
 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1530138542-396a2e2c2330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjB8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Bingkai 5R</h4> <br>
<p class="price">Rp. 25.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('bingkai5R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1494442182929-0f8be054d08c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nzd8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Bingkai 6R</h4> <br>
<p class="price">Rp. 23.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('bingkai6R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1560132103-ff44e9dc1f1c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTd8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Bingkai 10R</h4> <br>
<p class="price">Rp. 30.000 - Rp. 80.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('bingkai10R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1509805225007-73e8ba4b5be8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDN8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Bingkai 12R</h4> <br>
<p class="price">Rp. 60.000 - Rp. 110.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('bingkai12R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1534349762230-e0cadf78f5da?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDd8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Bingkai 16R</h4> <br>
<p class="price">Rp. 130.000 - Rp. 180.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('bingkai16R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1626846116799-ad61f874f99d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjd8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Bingkai 20R</h4> <br>
<p class="price">Rp. 180.000 - Rp. 200.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('bingkai20R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1633007400080-f37dfabbf2e3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzF8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Bingkai 24R</h4> <br>
<p class="price">Rp. 250.000 - Rp. 260.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('bingkai24R')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1575909699392-49857a8e854e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fGZyYW1lc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Album Foto</h4> <br>
<p class="price">Rp. 100.000 - Rp. 160.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('albumfoto')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
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

    