  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Kirim Bukti Transfer</title>

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
</section>
<!-- End Top Header Bar -->

<br><br><br><br>

@if(session('success'))
<div class="alert alert-success alert-common alert-solid" role="alert"><i class="tf-ion-thumbsup"></i> Horee!!
{{session('success')}}
</div>
@endif


<div class="page-wrapper">
   <div class="container">
      <div class="row">
         <div class="block billing-details">

            <section class="page-header">
               <div class="container">
                     <div class="col-md-10">
                        <h6 class="page-name">Syarat-syarat bukti transfer yang dapat kami terima : </h6>
                        <h6 class="page-name">- Menunjukkan dengan jelas jumlah yang ditransfer</h6>
                        <h6 class="page-name">- Menunjukkan dengan jelas nomor rekening tujuan</h6>
                        <h6 class="page-name">- Menunjukkan waktu transaksi</h6>
                        <h6 class="page-name">- Bukti telah divalidasi oleh bank</h6>
                     </div>
               </div>
            </section> <br>

            <form enctype='multipart/form-data' class="checkout-form" method="post" action="{{route('uploadbuktitf.store')}}" role="form">
               @csrf 
         
               <div class="form-group">
                  <input type="hidden" name="pemesanan" value="{{$data}}">
                  <h5>Silahkan Kirim bukti transfer anda dibawah ini: </h5>
                  <input type="file" class="form-control" id="bukti_transfer" name="bukti_transfer">
               </div>

               <br>

               <div id="cf-submit">
                  <input type="submit" id="contact-submit" class="btn btn-main btn-small btn-round" value="Kirim">
               </div>	
            </form>

         </div>
      </div> 
   </div>
</div>


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

    
