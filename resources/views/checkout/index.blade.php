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
                  <form class="checkout-form">
                     <div class="form-group">
                        <label for="full_name">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" placeholder="">
                     </div>
                     <div class="form-group">
                        <label for="user_address">No Telepon</label>
                        <input type="text" class="form-control" id="notelepon" placeholder="">
                     </div>
                     <div class="form-group">
                        <label for="user_address">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="">
                     </div>
                     <div class="form-group">
                        <label for="user_address">Alamat</label>
                        <input type="text" class="form-control" id="alamat" placeholder="">
                     </div>

                   <br><br><br>
                  <h4 class="widget-title">Pemesanan Fotografer</h4>
                  <p>*Wajib mengisi jika anda juga memesan jasa fotografer dan lewati jika tidak</p>
                     <div class="form-group">
                        <label for="user_address">Lokasi Acara</label>
                        <input type="text" class="form-control" id="lokasi_acara" placeholder="">
                     </div>
                     <div class="checkout-country-code clearfix">
                        <div class="form-group">
                           <label for="user_post_code">Tanggal Acara</label>
                           <input type="date" class="form-control" id="tanggal_acara" placeholder="">
                        </div>
                        <div class="form-group" >
                           <label for="user_city">Waktu Mulai</label>
                           <input type="text" class="form-control" id="waktu_acara" placeholder="">
                        </div>
                     </div>
                     <a href="{{ url('konfirmasi') }}" class="btn btn-main mt-20">Order</a >
                  </form>
               </div>

               <!-- <div class="block">
                  <h4 class="widget-title">Metode Pembayaran</h4>
                  <p>Credit Cart Details (Secure payment)</p>
                  <div class="checkout-product-details">
                     <div class="payment">
                        <div class="card-details">
                           <form  class="checkout-form">
                              <div class="form-group">
                                 <label for="card-number">Card Number <span class="required">*</span></label>
                                 <input  id="card-number" class="form-control"   type="tel" placeholder="•••• •••• •••• ••••">
                              </div>
                              <div class="form-group half-width padding-right">
                                 <label for="card-expiry">Expiry (MM/YY) <span class="required">*</span></label>
                                 <input id="card-expiry" class="form-control" type="tel" placeholder="MM / YY">
                              </div>
                              <div class="form-group half-width padding-left">
                                 <label for="card-cvc">Card Code <span class="required">*</span></label>
                                 <input id="card-cvc" class="form-control"  type="tel" maxlength="4" placeholder="CVC" >
                              </div>
                              <a href="confirmation.html" class="btn btn-main mt-20">Order</a >
                           </form>
                        </div>
                     </div>
                  </div>
               </div> -->
            </div>
            
            <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Ringkasan Pemesanan</h4>
                     <div class="media product-card">
                        <a class="pull-left" href="product-single.html">
                           <img class="media-object" src="images/oliv.jpg" alt="Image" height='80px'/>
                        </a>
                        <div class="media-body">
                           <h4 class="media-heading">Ambassador Heritage 1921</h4>
                           <p class="price">1 x $249</p>
                        </div>
                     </div>
                    
                     <ul class="summary-prices"></ul>

                     <div class="summary-total">
                        <span>Total</span>
                        <span>$250</span>
                     </div>

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
    
