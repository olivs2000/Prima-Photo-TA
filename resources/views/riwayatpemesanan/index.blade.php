  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Detail Pemesanan</title>

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
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4"></div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<text id="PRIMA PHOTO">
						<h1>Detail Pemesanan</h1>
					</text>	
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<ul class="top-menu text-right list-inline"></ul>
			</div>
		</div>
	</div>
</section>
<!-- End Top Header Bar -->

<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
          <div class="block">
            <div class="product-list">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">Nama</th>
                      {{-- <th class="">Pemesanan</th> --}}
                      <th class="">Jumlah</th>
                      <th class="">Harga</th>
                      <th class="">Total</th>
                      <th class="">Tanggal Pemesanan</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $rp)
                    <tr class="">
                      {{-- <td class="">
                        <div class="product-info">
                          <a>{{$rp->detail_pemesanans_id}}</a>
                        </div>
                      </td>
                      <td class="">$200.00</td>
                      <td class="">
                        <a class="product-remove" href="#!">Remove</a>
                      </td> --}}
                      <td>{{$rp->nama}}</a></td>
                      {{-- <td>{{$rp->...}}</td> --}}
                      <td>{{$rp->jumlah}}</td>
                      <td>{{$rp->harga}}</td>
                      <td>{{$rp->total}}</td>
                      <td>{{$rp->tanggal_pemesanan}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{-- <a href="checkout.html" class="btn btn-main pull-right">Print</a> --}}
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

    <!-- 
    Essential Scripts
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

   <!-- Main Js File -->
   <script src="js/scriptaviato.js"></script>
