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
  <div class="logo text-center">
    <text id="PRIMA PHOTO">
      <h1>PRIMA PHOTO</h1>
    </text>	
  </div>
  </div>
<div class="col-md-4 col-xs-12 col-sm-4"></div>
</div>
</div>
</section>
<!-- End Top Header Bar -->


<section class="page-header">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="content">
        <h1 class="page-name">Detail Pemesanan</h1>
        {{-- <ol class="breadcrumb">
          <li><a href="index.html">Beranda</a></li>
          <li class="active">collaborate</li>
        </ol> --}}
      </div>
    </div>
  </div>
</div>
</section>

<div class="page-wrapper">
  <div class="cart shopping">

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
                      <td>Rp. {{number_format($rp->harga)}}</td>
                      <td>Rp. {{number_format($rp->total)}}</td>
                      <td>{{$rp->tanggal_transaksi}}</td>

                      <td id='td-status_pembayaran-{{$rp->id}}'> 
                        @if($rp->status_pembayaran == 'belum')
                          <span id='td-status_pembayaran-{{$rp->id}}' class="btn btn-xs btn-danger btn-sm m-b-10 m-l-5">belum</span>
                        @elseif($rp->status_pembayaran == 'selesai')
                          <span id='td-status_pembayaran-{{$rp->id}}' class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">selesai</span>
                        @else
                          <span id='td-status_pembayaran-{{$rp->id}}' class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">Proses</span>
                        @endif
                      </td>
                    
                      <td id='td-status_pemesanan-{{$rp->id}}'> 
                        @if($rp->status_pemesanan == 'proses')
                          <span id='td-status_pemesanan-{{$rp->id}}' class="btn btn-xs btn-danger btn-sm m-b-10 m-l-5">Proses</span>
                        @elseif($rp->status_pemesanan == 'selesai')
                          <span id='td-status_pemesanan-{{$rp->id}}' class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">Selesai</span>
                        @else
                          <span id='td-status_pemesanan-{{$rp->id}}' class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">Menunggu Konfirmasi</span>
                        @endif
                      </td>
                      
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

    <a href="{{url('........')}}"class="btn btn-main btn-small btn-round-full">Batalkan Pesanan</a>

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
