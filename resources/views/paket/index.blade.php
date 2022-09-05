
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
<div class="logo text-center">
	<!-- replace logo here -->
	<text id="PRIMA PHOTO">
		<h1>PRIMA PHOTO</h1>
	</text>	
</div>
</div>
	

<!-- Cart -->
<div class="col-md-4 col-xs-12 col-sm-4">
	{{-- @dd(Session::flush()) --}}
	<ul class="top-menu text-right list-inline">
		<li class="dropdown cart-nav dropdown-slide">
			<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-android-cart"></i>Cart</a>
				<div class="dropdown-menu cart-dropdown">

				<!-- Start Cart Item Paket -->
				@if(session()->get('cart2'))
				@foreach(session()->get('cart2') as $id => $details )
				<div class="media">
					<a class="pull-left" href="#!">
						<img class="media-object" src="{{$details['gambar']}}" alt="image" />
					</a>
				<div class="media-body">
					<h4 class="media-heading">{{$details['judul_paket']}}</h4>
					<div class="cart-price">
						<span>{{$details['jumlah']}} x</span>
						<span>{{number_format($details['harga'])}}</span>
					</div>
				</div>
				</div>
				@endforeach
				@endif

				<?php $total=0; ?>
				@if(session()->get('cart2'))
				@foreach(session()->get('cart2') as $id => $details)
				<?php $total+=$details['harga']*$details['jumlah']; ?>
				@endforeach
				@endif			
				<!-- End Cart Item Paket -->

				<!-- Start Cart Item Produk -->
				@if(session()->get('cart1'))
				@foreach(session()->get('cart1') as $id => $details2)
				<div class="media">
					<a class="pull-left" href="#!">
						<img class="media-object" src="{{$details2['gambar']}}" alt="image" />
					</a>
				<div class="media-body">
					<h4 class="media-heading">{{$details2['judul_produk']}}</h4>
					<div class="cart-price">
						<span>{{$details2['jumlah']}} x</span>
						<span>{{number_format($details2['harga'])}}</span>
					</div>
				</div>
				</div>
				@endforeach
				@endif

				@if(session()->get('cart1'))
				@foreach(session()->get('cart1') as $id => $details2)
				<?php $total+=$details2['harga']*$details2['jumlah']; ?>
				@endforeach
				@endif	
				<!-- End Cart Item Produk -->

				<!-- Start Cart Item Layanan -->
				@if(session()->get('cart3'))
				@foreach(session()->get('cart3') as $id => $details3)
				<div class="media">
					<a class="pull-left" href="#!">
						<img class="media-object" src="{{$details3['gambar']}}" alt="image" />
					</a>
				<div class="media-body">
					<h4 class="media-heading">{{$details3['judul_layanan']}}</h4>
					<div class="cart-price">
						<span>{{$details3['jumlah']}} x</span>
						<span>{{number_format($details3['harga'])}}</span>
					</div>
				</div>
				</div>
				@endforeach
				@endif

				@if(session()->get('cart3'))
				@foreach(session()->get('cart3') as $id => $details3)
				<?php $total+=$details3['harga']*$details3['jumlah']; ?>
				@endforeach
				@endif	
				<!-- End Cart Item Layanan -->

				<!-- Start Cart Item Penyewaan Alat -->
				@if(session()->get('cart4'))
				@foreach(session()->get('cart4') as $id => $details4)
				<div class="media">
					<a class="pull-left" href="#!">
						<img class="media-object" src="{{$details4['gambar']}}" alt="image" />
					</a>
				<div class="media-body">
					<h4 class="media-heading">{{$details4['judul_layanan']}}</h4>
					<div class="cart-price">
						<span>{{$details4['jumlah']}} x</span>
						<span>{{number_format($details4['harga'])}}</span>
					</div>
				</div>
				</div>
				@endforeach
				@endif

				@if(session()->get('cart4'))
				@foreach(session()->get('cart4') as $id => $details4)
				<?php $total+=$details4['harga']*$details4['jumlah']; ?>
				@endforeach
				@endif	
				<!-- End Cart Item Penyewaan Alat -->
				
				<div class="cart-summary">
					<span>Total</span>
					<span class="total-price">Rp. {{number_format($total)}}</span>
				</div>

				<ul class="text-center cart-buttons">
					<li><a href="{{ url('checkout') }}" class="btn btn-small">Checkout</a></li>
				</ul>

			</div>
		</li>
	</ul>
</div><!-- / Cart -->

</div>
</div>
</section>
<!-- End Top Header Bar -->


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

			</div>

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
						<a href="{{url('penyewaanalat')}}">Sewa Alat Fotografi</a>
					</li><!-- / Penyewaan Alat -->

				</ul>

			</div>

		</div>
	</nav>
</section>


<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Paket</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Beranda</a></li>
						<li class="active">paket</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<br><br><br>

@if(session('success'))
<div class="alert alert-success alert-common alert-solid" role="alert"><i class="tf-ion-thumbsup"></i> Horee!!
{{session('success')}}
</div>
@endif

<br><br><br>

@foreach($pakets as $paket)
<div class="col-md-4">
<div class="product-item">
<div class="card">
<img src="{{$paket->gambar}}" alt="" style="width:100%">
<h4>{{$paket->judul_paket}}</h4> <br>
<p class="price">Rp. {{number_format($paket->harga)}}</p><br>
<a href="{{url('paket/'.$paket->id)}}" class="btn-solid-border">view details</a>  <br><br> 
<a href="{{url('add-to-cart-paket/' .$paket->id)}}" class="btn-main">Add to Cart</a> <br><br> 
</div>
</div>
</div>
@endforeach
  
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

