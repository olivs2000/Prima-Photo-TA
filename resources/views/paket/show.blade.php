  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Detail Paket Fotografi</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">

  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{ asset('plugins/themefisher-font/style.css') }}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="{{ asset('plugins/animate/animate.css') }}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/styleaviato.css') }}">

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

<!-- Cart -->
<div class="col-md-4 col-xs-12 col-sm-4">
	<ul class="top-menu text-right list-inline">
		<li class="dropdown cart-nav dropdown-slide">
			<a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i class="tf-ion-android-cart"></i>Keranjang</a>
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
					<input type="hidden" name="judul_paket" value="{{$details['judul_paket']}}">
					<div class="cart-price">
						<span>{{$details['jumlah']}} x</span>
						<input type="hidden" name="jumlah" value="{{$details['jumlah']}}">
						<span>{{number_format($details['harga'])}}</span>
						<input type="hidden" name="harga" value="{{$details['harga']}}">
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
					<input type="hidden" name="judul_produk" value="{{$details2['judul_produk']}}">
					<div class="cart-price">
						<span>{{$details2['jumlah']}} x</span>
						<input type="hidden" name="jumlah2" value="{{$details2['jumlah']}}">
						<span>{{number_format($details2['harga'])}}</span>
						<input type="hidden" name="harga2" value="{{$details2['harga']}}">
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
					<input type="hidden" name="judul_layanan" value="{{$details3['judul_layanan']}}">
					<div class="cart-price">
						<span>{{$details3['jumlah']}} x</span>
						<input type="hidden" name="jumlah3" value="{{$details3['jumlah']}}">
						<span>{{number_format($details3['harga'])}}</span>
						<input type="hidden" name="harga3" value="{{$details3['harga']}}">
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
					<input type="hidden" name="nama_alat" value="{{$details4['nama_alat']}}">
					<div class="cart-price">
						<span>{{$details4['jumlah']}} x</span>
						<input type="hidden" name="jumlah4" value="{{$details4['jumlah']}}">
						<span>{{number_format($details4['harga'])}}</span>
						<input type="hidden" name="harga4" value="{{$details4['harga']}}">
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
						<a href="{{url('pelanggan')}}">Beranda</a>
					</li><!-- / Home -->

					<!-- Paket -->
					<li class="dropdown ">
						<a href="{{url('paket')}}">Paket Fotografi</a>
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
						<a href="{{url('penyewaanalat')}}">Sewa Alat Fotografi</a>
					</li><!-- / Penyewaan Alat -->

				</ul>

			</div>
		</div>
	</nav>
</section>



{{-- @if(session('success'))
<div class="alert alert-success alert-common alert-solid" role="alert"><i class="tf-ion-thumbsup"></i> Horee!!
{{session('success')}}
</div>
@endif --}}

@include('sweetalert::alert') 



<section class="single-product">
<div class="container">

<div class="row mt-20">

	<div class="col-md-5">
		<!-- ini -->
		<section class="awSlider">
		<div  class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target=".carousel" data-slide-to="0" class="active"></li>
			<li data-target=".carousel" data-slide-to="1"></li>
			<li data-target=".carousel" data-slide-to="2"></li>
		</ol>
		
		<div class="carousel-inner" role="listbox">
			@foreach ($data->gambar_detail as $key => $gambar_detail)
				@if ($key == 0)
					<div class="item active">
						<img src="{{ asset('storage/').'/'.$gambar_detail}}">
					</div>
				@else
					<div class="item">
						<img src="{{ asset('storage/').'/'.$gambar_detail}}">
					</div>
				@endif
				
			@endforeach
		</div>
		
		</div>
		</section>
		<!-- ini-->
	</div>

	<div class="col-md-7">
	<div class="single-product-details">
	<h2>{{$data->judul_paket}}</h2>

	<br>

	<div>
		<strong class="product-price">Harga : </strong> Rp. {{number_format($data->harga)}}
	</div>

	<br>

	<div>
		<strong>Durasi Pemotretan : </strong> {{$data->durasi}}
	</div>

	<br>

	<div>
		<strong>Jumlah Pemotretan : </strong> {{$data->jumlah_jepretan}} 
	</div>

	<br>

	<div>
		<strong>Keterangan: </strong> {{$data->keterangan}}
	</div>


	<br>

	<a href="{{url('add-to-cart-paket/' .$data->id)}}" class="btn btn-main mt-20">Masukan Keranjang</a>
	{{-- @dd("{{url('add-to-cart-paket/' .$data->id)}}"); --}}
	

</div>
</div>

</div>

<br><br><br><br>

<div class="row">
	<div class="col-xs-12">
		<div class="tabCommon mt-20">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#details" aria-expanded="true">Detail</a></li>
				<li class=""><a data-toggle="tab" href="#reviews" aria-expanded="false">Kategori Tersedia</a></li>
			</ul>
			<div class="tab-content patternbg">
				<div id="details" class="tab-pane fade active in">
					<h4>Deskripsi Paket Fotografi</h4>
					<p>Pemesanan paket fotografi melalui website hanya bagi pelanggan yang ingin melakukan fotografi diluar studio Prima Photo, apabila ingin dilakukan di dalam studio Prima Photo dapat langsung mendatangi studio yang berlokasi di Jl. Kamboja No. 27. Properti pemotretan akan disiapkan oleh studio, diluar dari properti pemotretan dapat ditanggung oleh masing-masing pelanggan.</p>
					<p>Pelanggan yang telah melakukan pemesanan fotografi akan mendapatkan free sesuai keterangan pada masing-masing paket fotografi yang dipilih setelah waktu pengerjaan selesai. Waktu pengerjaan dapat dikonfirmasikan kembali dengan pihak studio.</p>
				</div>

				<div id="reviews" class="tab-pane fade">
					<div class="post-comments">
						<ul class="media-list comments-list m-bot-50 clearlist">
							<!-- Comment Item start-->
							<li class="media">

								{{-- <a class="pull-left" href="#!">
									<img class="media-object comment-avatar" src="images/blog/avater-1.jpg" alt="" width="50" height="50" />
								</a> --}}

								<div class="media-body">
									<p>
									
									. Family Photography Paket 1 &nbsp; &nbsp; &nbsp; &nbsp; . Family Photography Paket 2
									<br>
									. Alumni Photography Paket 1 &nbsp; &nbsp; &nbsp; &nbsp; . Alumni Photography Paket 2
									<br>
									. Product Photography Paket 1 &nbsp; &nbsp; &nbsp; &nbsp; . Product Photography Paket 2
									<br>
									. Baby&Kids Photography Single &nbsp; &nbsp; &nbsp; &nbsp; 	. Baby&Kids Photography Double
									<br>
									. Prewedding Photography Paket 1 &nbsp; &nbsp; &nbsp; &nbsp; . Wedding Photography Paket 2
									<br>
									. Constructions Photography Paket 1 &nbsp; &nbsp; &nbsp; &nbsp; . Constructions Photography Paket 2
									<br>
									. Student Photography Paket 1 &nbsp; &nbsp; &nbsp; &nbsp; . Student Photography Paket 2 &nbsp; &nbsp; &nbsp; &nbsp; . Student Photography Paket 3
									<br>
									. Birthday Photography Paket 1 &nbsp; &nbsp; &nbsp; &nbsp; . Birthday Photography Paket 2 &nbsp; &nbsp; &nbsp; &nbsp; .Birthday Photography Paket 3
									<br>
									. Graduation Photography Single &nbsp; &nbsp; &nbsp; &nbsp; . Graduation Photography Double &nbsp; &nbsp; &nbsp; &nbsp; . Graduation Photography Special	
								</p>
								</div>

							</li>
							<!-- End Comment Item -->

					

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
</section>




<!--Essential Scripts
=====================================-->

<!-- Main jQuery -->
<script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.1 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Bootstrap Touchpin -->
<script src="{{ asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') }}"></script>
<!-- Instagram Feed Js -->
<script src="{{ asset('plugins/instafeed/instafeed.min.js') }}"></script>
<!-- Video Lightbox Plugin -->
<script src="{{ asset('plugins/ekko-lightbox/dist/ekko-lightbox.min.js') }}"></script>
<!-- Count Down Js -->
<script src="{{ asset('plugins/syo-timer/build/jquery.syotimer.min.js') }}"></script>

<!-- slick Carousel -->
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/slick/slick-animation.min.js') }}"></script>

<!-- Google Mapl -->
<script src="{{ asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw') }}"></script>
<script type="{{ asset('text/javascript" src="plugins/google-map/gmap.js') }}"></script>

<!-- Main Js File -->
<script src="{{ asset('js/scriptaviato.js') }}"></script>


