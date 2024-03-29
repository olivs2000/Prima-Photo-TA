  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Success</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="{{asset('plugins/themefisher-font/style.css')}}">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="{{asset('plugins/animate/animate.css')}}">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="{{asset('plugins/slick/slick.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/slick/slick-theme.css')}}">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{asset('css/styleaviato.css')}}">


<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
        <a class="navbar-brand">
          <img src="{{ asset('assets/img/primaphoto2.png')}}" alt=""/>
        </a>
      </div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<text id="PRIMA PHOTO">
						<h1>PRIMA PHOTO</h1>
					</text>	
				</div>
			</div>

			<div class="col-md-4 col-xs-12 col-sm-4">
				<ul class="top-menu text-right list-inline">
				</ul>
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->

<br><br><br><br>

<!-- Page Wrapper -->
<section class="page-wrapper success-msg">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="block text-center">
		      <i class="tf-ion-android-checkmark-circle"></i>

          <h3 class="text-center">Terima kasih telah melakukan pemesanan!</h3>

          <p>
            Silahkan lihat detail pemesanan anda terlebih dahulu dibawah ini, 
            anda memiliki waktu 3 x 24 jam untuk melakukan pembayaran dan mengupload bukti pembayarannya. 
            Apabila kami belum menerima bukti pembayaran yang valid dalam kurun waktu tersebut, 
            maka pesanan anda akan dibatalkan.
          </p>

          <br>

          <a href="{{url('riwayatpemesanan/'.$pemesanan_id)}}"class="btn btn-main btn-medium btn-round">Lihat Detail Pemesanan</a>

        </div>
      </div>
    </div>
  </div>
</section>
<!-- /.page-warpper -->



    <!-- 
    Essential Scripts
    =====================================-->
    
   <!-- Main jQuery -->
   <script src="{{asset('plugins/jquery/dist/jquery.min.js')}}"></script>
   <!-- Bootstrap 3.1 -->
   <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
   <!-- Bootstrap Touchpin -->
   <script src="{{asset('plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
   <!-- Instagram Feed Js -->
   <script src="{{asset('plugins/instafeed/instafeed.min.js')}}"></script>
   <!-- Video Lightbox Plugin -->
   <script src="{{asset('plugins/ekko-lightbox/dist/ekko-lightbox.min.js')}}"></script>
   <!-- Count Down Js -->
   <script src="{{asset('plugins/syo-timer/build/jquery.syotimer.min.js')}}"></script>

   <!-- slick Carousel -->
   <script src="{{asset('plugins/slick/slick.min.js')}}"></script>
   <script src="{{asset('plugins/slick/slick-animation.min.js')}}"></script>

   <!-- Main Js File -->
   <script src="{{asset('js/scriptaviato.js')}}"></script>
    