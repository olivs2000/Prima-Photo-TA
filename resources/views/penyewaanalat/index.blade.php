
@section('content')
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Alat- alat Fotografi</title>

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

					<!-- Paket -->
					<li class="dropdown ">
						<a href="{{url('paket')}}">Paket</a>
					</li><!-- / Paket -->

					<!-- Produk -->
					<li class="dropdown ">
						<a href="{{url('produk')}}">Produk</a>
					</li><!-- / Produk -->

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
					<h1 class="page-name">Alat-alat Fotografi</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">alat fotografi</li>
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
<img src="https://images.unsplash.com/photo-1616068715155-2d84023ee9b0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzd8fGthbWVyYSUyMG5pa29ufGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="" style="width:100%"><br>
<h4>Kamera DSLR</h4> <br>
<p class="price">Rp. 400.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('kameradslr')}}"  class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1536405747716-8cd8bb309ed3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8a2FtZXJhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="" style="width:100%"><br>
<h4>Kamera Pocket</h4> <br>
<p class="price">Rp. 200.000 - Rp. 250.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('kamerapocket')}}"  class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1603425013520-e0b30e6e37dc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGJhY2tkcm9wfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="" style="width:100%"><br>
<h4>Backdrop Putih</h4> <br>
<p class="price">Rp. 100.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('backdrop')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1500252124339-44ed473934dd?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fGZsYXNoJTIwa2FtZXJhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="" style="width:100%"><br>
<h4>Flash</h4> <br>
<p class="price">Rp. 100.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('flash')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1508986284932-f38caeb50d7c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8c29mdGJveHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" alt="" style="width:100%"><br>
<h4>Softbox Lighting Godox</h4> <br>
<p class="price">Rp. 100.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('softbox')}}"  class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1517037673086-5d09c5e1a537?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjN8fGZsYXNoJTIwa2FtZXJhfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="" style="width:100%"><br>
<h4>Reflektor Lighting Tronic</h4> <br>
<p class="price">Rp. 60.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('reflektor')}}"  class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1647427854253-b92bb40c9330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHNvZnRib3h8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" alt="" style="width:100%"><br>
<h4>Light Stand Takara</h4> <br>
<p class="price">Rp. 80.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('light')}}"  class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1587204760600-77d8d18d143e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8dHJpcG9kfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" alt="" style="width:100%"><br>
<h4>Tripod</h4> <br>
<p class="price">Rp. 60.000 - Rp. 80.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('tripod')}}"  class="btn-solid-border">view details</a>  <br><br> 
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

    