<!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Checkout</title>

  
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
        </div>
     </div>
  </div>
</section><!-- End Top Header Bar -->


  <section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Checkout</h1>
					<ol class="breadcrumb">
                  <li><a href="index.html">Beranda</a></li>
						<li class="active">checkout</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="block billing-details">
                  <h4 class="widget-title">Data Pemesan</h4>

                  <form enctype='multipart/form-data' class="checkout-form" method="post" action="{{url('konfirmasi')}}" role="form">
                     @csrf 
                     <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="">
                     </div>
                     <div class="form-group">
                        <label>No Telepon</label>
                        <input type="text" class="form-control" id="notelepon" name="notelepon" placeholder="">
                     </div>
                     <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="">
                     </div>
                     <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" placeholder="">
                     </div>

                     <br><br><br>

                     <h4 class="widget-title">Pemesanan Fotografer</h4>
                     <p>*Wajib mengisi jika anda juga memesan jasa fotografer dan lewati jika tidak</p>

                     <div class="checkout-country-code clearfix">

                        <div class="form-group">
                           <label>Lokasi Acara</label>
                           <input type="text" class="form-control" id="lokasi_acara" name="lokasi_acara">
                        </div>
                        
                        <div class="form-group">
                           <label>Tanggal Acara</label>
                           <input type="date" class="form-control" id="tanggal_acara" name="tanggal_acara">
                        </div>

                        <div class="form-group" >
                           <label>Waktu Mulai</label>
                           <input type="text" class="form-control" id="waktu_acara" name="waktu_acara" placeholder="Tulis dalam format 12:00">
                        </div>

                     </div>

                     <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-main mt-20" value="Order">
                     </div>

               </div>
            </div>
            
            <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Ringkasan Pemesanan</h4>
                     <div class="media product-card">

                     @if(session()->get('cart2'))
                     @foreach(session()->get('cart2') as $id => $details )
                     <a class="pull-left" href="product-single.html">
                        <img class="media-object" src="{{$details['gambar']}}" alt="Image" height='80px'/>
                     </a>

                     <div class="media-body">
                        <h4 class="media-heading">{{$details['judul_paket']}}</h4>
                        <p class="price">{{$details['jumlah']}} X {{number_format($details['harga'])}}</p>
                     </div>

                     </div>
                    
                     <ul class="summary-prices"></ul>
                     
                     <?php session_start(); $total=0; session_destroy(); ?>
                     @if(session()->get('cart2'))
                     @foreach(session()->get('cart2') as $id => $details )
                     <?php $total+=$details['harga']*$details['jumlah']; ?>
                     @endforeach
                     @endif

                     <div class="summary-total">
                        <span>Total</span>
                        <span id="total" name="total">Rp. {{number_format($total)}}</span>
                     </div>
                     <input type="hidden" class="form-control" name="total" value="{{$total}}">   

                  </form>
                     
                  @endforeach
                  @endif

                  <br><br>

                  <section class="page-header">
                     <div class="container">
                           <div class="col-md-10">
                              <h6 class="page-name">Pembayaran dapat dilakukan menggunakan:</h6>
                              <h6 class="page-name">No VIrtual Account BNI: 8578149566949804</h6>
                              <h6 class="page-name">No Rekening BNI: 0097927804</h6>
                              <h6 class="page-name">No VIrtual Account BCA: 8735089566949804</h6>
                              <h6 class="page-name">No Rekening BCA: 2373089804</h6>
                           </div>
                        </div>
                     </div>
                  </section>
                     
                  </div>
               </div>
            </div>
            
         </div>
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

   <!-- Main Js File -->
   <script src="js/scriptaviato.js"></script>
    
