  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Detail Paket</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">

  
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
		<li><a href="checkout.html" class="btn btn-small">Checkout</a></li>
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
						<a href="{{url('pelanggan')}}">Beranda</a>
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

					<!-- Penyewaan Alat -->
					<li class="dropdown ">
						<a href="{{url('penyewaanalat')}}">Sewa Alat</a>
					</li><!-- / Penyewaan Alat -->

				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>

<section class="single-product">
<div class="container">

@foreach($pakets as $paket)

<div class="col-md-7">
<div class="single-product-details">
<h2>{{$paket->judul_paket}}</h2>


<!-- ini -->

<section class="awSlider">
  <div  class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
	<li data-target=".carousel" data-slide-to="0" class="active"></li>
	<li data-target=".carousel" data-slide-to="1"></li>
	<li data-target=".carousel" data-slide-to="2"></li>
</ol>

<div class="carousel-inner" role="listbox">
	<div class="item active">
	<img src="https://images.unsplash.com/photo-1607947909130-bf48ac6884b9?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870">
	</div>
	<div class="item">
	<img src="https://images.unsplash.com/photo-1616843777726-2b35ac7c4215?crop=entropy&cs=tinysrgb&fm=jpg&ixlib=rb-1.2.1&q=80&raw_url=true&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870">
	</div>
	<div class="item">
	<img src="https://eyewanderphoto.com/assets/uploads/portfolio/_width900height600/newborn_batonrouge.jpg">
	</div>
</div>

</div>
</section>
<!-- ini-->

<p class="product-price">Harga : Rp. {{number_format($paket->harga)}}</p>

<p>Durasi : {{$paket->durasi}}</p>

<p>Jumlah Jepretan : {{$paket->jumlah_jepretan}} jepretan</p>

<p>Keterangan : {{$paket->keterangan}}</p>
<br>

<a href="cart.html" class="btn btn-main mt-20">Add To Cart</a>
</div>
</div>
</div>

@endforeach

</div>
</section>




<!--Essential Scripts
=====================================-->

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


