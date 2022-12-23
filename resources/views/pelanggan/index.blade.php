  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>Prima Photo Studio</title>


  
  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">
  <!-- PLUGINS CSS STYLE -->
  <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap-home/css/bootstrap.min.css">
  <link rel="stylesheet" href="plugins/bootstrap-home/css/bootstrap-slider.css">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/stylepelanggan.css" rel="stylesheet">


  <section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light navigation">
					<a class="navbar-brand">
                		<img src="{{ asset('assets/img/primaphoto2.png')}}" alt=""/>
                    </a>
				
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav ml-auto main-nav ">
						<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="{{url('paket')}}" aria-haspopup="true" >Paket Fotografi</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="{{url('produk')}}" aria-haspopup="true" >Produk</a>
							</li>
							<li class="nav-item dropdown dropdown-slide">
								<a class="nav-link dropdown-toggle" href="{{url('layanan')}}"  aria-haspopup="true">Layanan</a>
							</li>
						</ul>
            
						<ul class="navbar-nav ml-auto mt-10">
							<!-- <li class="nav-item">
                				<a class="nav-link login-button" href="{{url('register')}}"> Registrasi </a>
							</li> -->
							<li class="nav-item">
                				<a class="nav-link login-button" href="{{url('login')}}"> Masuk </a>
							</li>
							<li class="nav-item">
								<a class="nav-link text-white add-button" href="{{url('collaborate')}}"> Collaborate</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</div>
</section>

<!--===============================
=            Main Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>Selamat Datang di Prima Photo </h1>
					<p>Layanan jasa fotografi terpercaya untuk segala momen penting anda</p>

					<div class="short-popular-category-list text-center">
                            <h2>PAKET FOTOGRAFI TERPOPULER</h2>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="{{url('paket')}}" ><i class="fa fa-user"></i> Student</a></li>
                                <li class="list-inline-item">
                                    <a href="category.html"><i class="fa fa-heart"></i> Wedding</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{url('paket')}}"><i class="fa fa-gift"></i> Birthday</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{url('paket')}}"><i class="fa fa-cutlery"></i> Product</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{url('paket')}}"><i class="fa fa-institution"></i> Graduation</a>
                                </li>
                            </ul>
                        </div>
				</div>

				

<!-- Advance Search -->
<!-- <div class="advance-search">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-12 col-md-12 align-content-center">
				<form>
					<div class="form-row">
					<div class="form-group col-md-4"></div>				
						<div class="form-group col-md-3">
							<select class="w-100 form-control mt-lg-1 mt-md-2">
							<option>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  -- CATEGORY --</option>
							<option value="1">Baby&Kids Photography</option>
							<option value="2">Family Photography</option>
							<option value="3">Graduation Photography</option>
							<option value="4">Birthday Photography</option>
							<option value="5">Prewedding/Wedding Photography</option>
							<option value="6">Student Photography</option>
							<option value="7">Alumni Photography</option>
							<option value="8">Construction Photography</option>
							<option value="9">Product Photography</option>
							</select>
						</div>
						<div class="form-group col-md-2 align-self-center">
							<button type="submit" class="btn btn-primary">Search Now</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>			 -->
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>



<!--===========================================
=            Our Album section            =
============================================-->

<section class="popular-deals section bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Album Kami</h2>
					<p>Beberapa hasil fotografi yang ada di studio Prima Photo</p>
				</div>
			</div>
		</div>

<div class="container"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
 
    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/albums/albums-1.jpg" style="width:70%; margin: 0 auto;">
      </div>

      <div class="item">
        <img src="images/albums/albums-2.jpg" style="width:70%; margin: 0 auto;">
      </div>
    
      <div class="item">
        <img src="images/albums/albums-3.jpg" style="width:70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-4.jpg" style="70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-5.jpg" style="width:70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-6.jpg" style="width:70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-7.jpg" style="width:70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-8.jpg" style="width:70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-9.jpg" style="width:70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-10.jpg" style="width:70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-11.jpg" style="width:70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-12.jpg" style="width:70%; margin: 0 auto;">
      </div>

	  <div class="item">
        <img src="images/albums/albums-13.jpg" style="width:70%; margin: 0 auto;">
      </div>
    </div>

    <!-- Left and right controls -->
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
</div>
</section>



<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>Kategori Produk dan Layanan</h2>
					<p>Produk dan Layanan Terlaris di Prima Photo Studio</p>
				</div>
				<div class="row">
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-image icon-bg-1"></i> 
								<h4>Bingkai 4R</h4>
							</div>
							<ul class="category-list" >
								<li><a href="">Bingkai foto 4R single <span>93</span></a></li>
								<li><a href="">Bingkai foto 4R isi 2 <span>233</span></a></li>
								<li><a href="">Bingkai foto 4R isi 3  <span>183</span></a></li>
								<li><a href="">Bingkai foto 4R isi 4 <span>343</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-image icon-bg-2"></i> 
								<h4>Bingkai 10R</h4>
							</div>
							<ul class="category-list" >
								<li><a href="">Bingkai foto 10R biasa <span>393</span></a></li>
								<li><a href="">Bingkai foto 10RS <span>23</span></a></li>
								<li><a href="">Bingkai foto 10R gandeng  <span>13</span></a></li>
								<li><a href="">Bingkai foto 10RS mahar<span>43</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-image icon-bg-3"></i> 
								<h4>Bingkai 12R</h4>
							</div>
							<ul class="category-list" >
								<li><a href="">Bingkai foto 12R biasa <span>93</span></a></li>
								<li><a href="">Bingkai foto 12RS <span>23</span></a></li>
								<li><a href="">Bingkai foto 12R gandeng  <span>83</span></a></li>
								<li><a href="">Bingkai foto 12RS mahar <span>33</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-image icon-bg-4"></i> 
								<h4>Album Foto</h4>
							</div>
							<ul class="category-list" >
								<li><a href="">Album foto 10 lbr standar <span>53</span></a></li>
								<li><a href="">Album foto 10 lbr <span>212</span></a></li>
								<li><a href="">Album foto 10 lbr bingkai <span>133</span></a></li>
								<li><a href="">Album foto 15 lbr bingkai <span>143</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-desktop icon-bg-5"></i> 
								<h4>Cetak Ukuran Pas foto</h4>
							</div>
							<ul class="category-list" >
								<li><a href="">Cetak 2x3 (WR/HP) <span>93</span></a></li>
								<li><a href="">Cetak 3x4 (WR/HP) <span>233</span></a></li>
								<li><a href="">cetak 4x6 (WR/HP)  <span>183</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-desktop icon-bg-6"></i> 
								<h4>Cetak Ukuran postcard</h4>
							</div>
							<ul class="category-list" >
								<li><a href="">Cetak 3R <span>193</span></a></li>
								<li><a href="">Cetak 4R <span>23</span></a></li>
								<li><a href="">Cetak 5R  <span>33</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-desktop icon-bg-7"></i> 
								<h4>Cetak Ukuran Sedang</h4>
							</div>
							<ul class="category-list" >
								<li><a href="">Cetak 6R <span>65</span></a></li>
								<li><a href="">Cetak 8R <span>23</span></a></li>
								<li><a href="">Cetak 10R-10RS  <span>113</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							
							<div class="header">
								<i class="fa fa-desktop icon-bg-8"></i> 
								<h4>Cetak Ukuran Besar</h4>
							</div>
							<ul class="category-list" >
								<li><a href="">Cetak 12R-12RS <span>93</span></a></li>
								<li><a href="">Cetak 16R-16RS <span>233</span></a></li>
								<li><a href="">Cetak 20R-24RS  <span>183</span></a></li>
							</ul>
						</div>
					</div> <!-- /Category List -->
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>



<!--============================
=            Footer            =
=============================-->

<!-- Footer -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. All Rights Reserved, theme by <a class="text-primary" href="https://themefisher.com" target="_blank">themefisher.com</a></p>
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href="https://www.facebook.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-twitter" href="https://www.twitter.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-pinterest-p" href="https://www.pinterest.com/themefisher" target="_blank"></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>

<!-- JAVASCRIPTS -->
<script src="plugins/jQuery-home/jquery.min.js"></script>
<script src="plugins/bootstrap-home/js/popper.min.js"></script>
<script src="plugins/bootstrap-home/js/bootstrap.min.js"></script>
<script src="plugins/bootstrap-home/js/bootstrap-slider.js"></script>
  <!-- tether js -->
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/slick-carousel/slick/slick.min.js"></script>
<script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
<script src="plugins/google-map/gmap.js"></script>
<script src="js/scriptpelanggan.js"></script>




