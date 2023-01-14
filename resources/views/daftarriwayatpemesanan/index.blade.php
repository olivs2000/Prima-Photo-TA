<!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Daftar Riwayat Pesesanan</title>
  
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
      <text id="PRIMA PHOTO">
        <h1>PRIMA PHOTO</h1>
      </text>	
    </div>
    </div>
      <div class="col-md-4 col-xs-12 col-sm-4"></div>
    </div>
   </div>
 </section><!-- End Top Header Bar -->


<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Daftar Riwayat Pesesanan</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Beranda</a></li>
						<li class="active">daftar riwayat pesanan</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="user-dashboard page-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="dashboard-wrapper user-dashboard">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Tanggal Transaksi</th>
                  <th>Total Pemesanan</th>
                  <th>Estimasi Selesai</th>
                  <th>Action</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach($data as $drp)
                <tr>
                  <td>{{$drp->tanggalTransaksi}}</td>
                  <td>Rp. {{number_format($drp->sub_total)}}</td>
                  <td>{{$drp->estimasi_selesai}}</td>
                  <td>
                    <div class="btn-group" role="group">
                      <button type="button" class="btn btn-default"><i class="tf-pencil2" aria-hidden="true"></i></button>
                      {{-- <button type="button" class="btn btn-default"><i class="tf-ion-close" aria-hidden="true"></i></button> --}}
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer class="footer section text-center">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="social-media">
					<li>
						<a href="https://www.facebook.com/themefisher">
							<i class="tf-ion-social-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.instagram.com/themefisher">
							<i class="tf-ion-social-instagram"></i>
						</a>
					</li>
					<li>
						<a href="https://www.twitter.com/themefisher">
							<i class="tf-ion-social-twitter"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/themefisher/">
							<i class="tf-ion-social-pinterest"></i>
						</a>
					</li>
				</ul>
				<ul class="footer-menu text-uppercase">
					<li>
						<a href="contact.html">CONTACT</a>
					</li>
					<li>
						<a href="shop.html">SHOP</a>
					</li>
					<li>
						<a href="pricing.html">Pricing</a>
					</li>
					<li>
						<a href="contact.html">PRIVACY POLICY</a>
					</li>
				</ul>
				<p class="copyright-text">Copyright &copy;2021, Designed &amp; Developed by <a href="https://themefisher.com/">Themefisher</a></p>
			</div>
		</div>
	</div>
</footer>
 




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

 <!-- Main Js File -->
 <script src="js/scriptaviato.js"></script>

