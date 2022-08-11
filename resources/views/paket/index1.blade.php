
@section('content')
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Paket</title>

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
			<img class="media-object" src="https://images.unsplash.com/photo-1607947909130-bf48ac6884b9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" alt="image" />
		</a>
		<div class="media-body">
			<h4 class="media-heading"><a href="images/shop/oliv.jpg">Baby&Kids Photography Single</a></h4>
			<div class="cart-price">
				<span>1 x</span>
				<span>1.000.000</span>
			</div>
			<h5><strong>Rp. 1.000.000</strong></h5>
		</div>
		<a href="#!" class="remove"><i class="tf-ion-close"></i></a>
	</div><!-- / Cart Item -->

	<div class="cart-summary">
		<span>Total</span>
		<span class="total-price">Rp. 1.000.000</span>
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


<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Paket</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">paket</li>
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
<img src="https://images.unsplash.com/photo-1607947909130-bf48ac6884b9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Baby&Kids Photography Single</h4> <br>
<p class="price">Rp. 1.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('babykidssingle')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1505976442149-53a82393903b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Baby&Kids Photography Double</h4> <br>
<p class="price">Rp. 2.500.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('babykidsdouble')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1614144477821-9daf217ae100?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Family Photography Paket 1</h4> <br>
<p class="price">Rp. 1.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('familypaket1')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1613225666682-f96a0ee729f1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Family Photography Paket 2</h4> <br>
<p class="price">Rp. 3.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('familypaket2')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1565034946487-077786996e27?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Graduation Photography Single</h4> <br>
<p class="price">Rp. 1.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('graduationsingle')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Graduation Photography Double</h4> <br>
<p class="price">Rp. 3.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('graduationdouble')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1508930883516-7f594c5b68b9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Birthday Photography Paket 1</h4> <br>
<p class="price">Rp. 3.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('birthdaypaket1')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1509666537727-9154b6962292?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Birthday Photography Paket 2</h4> <br>
<p class="price">Rp. 5.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('birthdaypaket2')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1519379169146-d4b170447caa?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Prewedding Photography Paket 1</h4> <br>
<p class="price">Rp. 4.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('weddingpaket1')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1583939411023-14783179e581?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Wedding Photography Paket 2</h4> <br>
<p class="price">Rp. 6.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('weddingpaket2')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1543269664-7eef42226a21?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Student Photography Paket 1</h4> <br>
<p class="price">Rp. 1.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('studentpaket1')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1625111380820-9a371d413cc4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80" style="width:100%"><br>
<h4>Student Photography Paket 2</h4> <br>
<p class="price">Rp. 3.000.000</p><br>
<!-- <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p><br />  -->
<a href="{{url('studentpaket2')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
<!-- <p><button>Add to Cart</button></p> -->
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1502444330042-d1a1ddf9bb5b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGhhbmdvdXRzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Alumni Photography Paket 1</h4> <br>
<p class="price">Rp. 1.000.000</p><br>
<a href="{{url('alumnipaket1')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1616189221633-c3e3acb720af?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8aGFuZ291dHN8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Alumni Photography Paket 2</h4> <br>
<p class="price">Rp. 3.000.000</p><br>
<a href="{{url('alumnipaket2')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1587052694737-a972e4186288?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29udHJhY3RvcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Constructions Photography Paket 1</h4> <br>
<p class="price">Rp. 1.000.000</p><br>
<a href="{{url('constructionpaket1')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1622467731046-c22f11a94cbb?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y29udHJhY3RvcnxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Constructions Photography Paket 2</h4> <br>
<p class="price">Rp. 3.000.000</p><br>
<a href="{{url('constructionpaket2')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1517142089942-ba376ce32a2e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzN8fHByb2R1Y3R8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Product Photography Paket 1</h4> <br>
<p class="price">Rp. 1.000.000</p><br>
<a href="{{url('productpaket1')}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="#" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>

<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="https://images.unsplash.com/photo-1485955900006-10f4d324d411?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fHByb2R1Y3R8ZW58MHx8MHx8&auto=format&fit=crop&w=600&q=60" style="width:100%"><br>
<h4>Product Photography Paket 2</h4> <br>
<p class="price">Rp. 3.000.000</p><br>
<a href="{{url('productpaket2')}}" class="btn-solid-border">view details</a>  <br><br> 
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

    