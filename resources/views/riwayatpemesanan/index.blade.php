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

    {{-- <th class="">Nama : </th>
    <th class="">{{$pemesanan->nama}}</th>
    <th class="">No telepon : </th>
    <th class="">{{$pemesanan->notelepon}}</th>
    <th class="">Email : </th>
    <th class="">{{$pemesanan->email}}</th>
    <th class="">Alamat : </th>
    <th class="">{{$pemesanan->alamat}}</th> --}}

        <li><span>Nama : </span>{{$pemesanan->nama}}</li>
        <li><span>No Telepon : </span>{{$pemesanan->notelepon}}</li>
        <li><span>Email : </span>{{$pemesanan->email}}</li>
        <li><span>Alamat : </span>{{$pemesanan->alamat}}</li>

    <div class="container">
      <div class="row">
          <div class="block">
            <div class="product-list">
              <form method="post">
                <table class="table">
                  <thead>
                    <tr>
                    
                      <th class="">Jumlah Pemesanan</th>
                      <th class="">Harga Pemesanan</th>
                      <th class="">Total Pembayaran</th>
                      <th class="">Tanggal Transaksi</th>
                      <th class="">Status Pembayaran</th>
                      <th class="">Status Pemesanan</th>

                    </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $rp)
                    <tr class="">
                      <td>{{$rp->jumlah}}</td>
                      <td>{{$rp->harga}}</td>
                      <td>{{$rp->total}}</td>
                      <td>{{$rp->tanggal_transaksi}}</td>
                      <td>{{$rp->status_pembayaran}}</td>
                      <td>{{$rp->status_pemesanan}}</td>
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
