<!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Paket Fotografi</title>
  
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
					<h1 class="page-name">Paket Fotografi</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Beranda</a></li>
						<li class="active">Paket</li>
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
        <a class="btn btn-main btn-small btn-round-full" href="{{ url('home') }}"><< Back</a>  

        @foreach($data as $p)
        <div class="dashboard-wrapper dashboard-user-profile">
          <div class="media">
            <div class="pull-left text-center" href="#!">
              <img class="media-object user-img" src='{{$p->gambar}}' alt="Image">
            </div>
            <div class="media-body">
              <ul class="user-profile-list">
                {{-- <li><span>Link Gambar:</span>{{$p->gambar}}</li> --}}
                <li><span>Judul Paket:</span>{{$p->judul_paket}}</li>
                <li><span>Durasi:</span>{{$p->durasi}}</li>
                <li><span>Jepretan:</span>{{$p->jumlah_jepretan}}</li>
                <li><span>Harga:</span>Rp. {{number_format($p->harga)}}</li>
                <li><span>Keterangan:</span>{{$p->keterangan}}</li>
                <li><span>Kategori:</span>{{$p->nama}}</li>
                <li><span>Action:</span><a href="{{url('paketadmin/'.$p->id.'/edit') }}" class="btn btn-xs btn-warning">Edit</a>  <form method="POST" action="{{url('paketadmin/'.$p->id )}}">
                  @csrf
                  @method('DELETE')
                  <input type='submit' value='Delete' class='btn btn-xs btn-danger' onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
                </form> 
                </li>
                
              </ul>
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</section>


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


 