<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Collaborate</title>

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
					<h1 class="page-name">Collaborate</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Beranda</a></li>
						<li class="active">collaborate</li>
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
				<ul class="list-inline dashboard-menu text-center">
					<h4>Status anda saat ini: </h4> <br>
					<tbody>
					@foreach($data as $c)@endforeach
					<tr>
					<td>
						@if($c->status == 'ditolak')    
						<li><a>Tahap Seleksi</a></li>
						<li><a>Diterima</a></li>
						<li><a class="active">Ditolak</a></li>
						@elseif($c->status == 'diterima')
						<li><a>Tahap Seleksi</a></li>
						<li><a class="active">Diterima</a></li>
						<li><a>Ditolak</a></li>
						@else
						<li><a class="active">Tahap Seleksi</a></li>
						<li><a>Diterima</a></li>
						<li><a>Ditolak</a></li>
						@endif
					</td>				
					</tr>
					
					</tbody>
				</ul>
			</div>
		</div>
	</div>
</section>


<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">

				@foreach($data as $c)@endforeach
				@if($c->status == 'ditolak')    
				<div class="alert alert-danger alert-common alert-solid" role="alert"><i class="tf-ion-close-circled"></i><span>Maaf Anda Ditolak,</span> Jangan Berkecil Hati Silahkan Coba Lagi Di lain Kesempatan</div><br><br>
					<!-- Contact Form -->
					<div class="contact-form col-md-6 " >
						<form enctype='multipart/form-data' id="contact-form" method="post" action="{{url('konfirmasicol')}}" role="form">
							@csrf 
							<div class="form-group">
								<input type="text" placeholder="Nama Lengkap" class="form-control" name="nama" id="nama">
							</div>
	
							<div class="form-group">
								<input type="text" placeholder="Alamat" class="form-control" name="alamat" id="alamat">
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Email" class="form-control" name="email" id="email">
							</div>
	
							<div class="form-group">
								<input type="text" placeholder="No Telepon" class="form-control" name="notelepon" id="notelepon">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Alat fotografi yang dimiliki" class="form-control" name="alat_fotografi" id="alat_fotografi">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Pengalaman dalam bidang fotografi" class="form-control" name="pengalaman" id="pengalaman"></textarea>	
							</div>
	
							<div class="form-group">
								<h5>Sertakan pas foto anda dibawah ini: </h5>
								<input  type="file" class="form-control" id="pas_foto" name="pas_foto">
							</div>
	
							<div class="form-group">
								<h5>Sertakan portofolio/CV anda dibawah ini: </h5>
								<input  type="file" class="form-control" id="portofolio" name="portofolio">
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Kirim">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->

					<div class="contact-details col-md-6 " >
						<div class="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.0285366052844!2d117.41932321406965!3d-8.496606088341574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcb932df2d305f1%3A0x618d57e4e4fd068d!2sPrima%20Photo!5e0!3m2!1sid!2sid!4v1660543922184!5m2!1sid!2sid" width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
						
						<ul class="contact-short-info" >
							<li>
								<i class="tf-ion-ios-home"></i>
								<span>Prima Photo Studio, Sumbawa Besar</span>
							</li>
							<li>
								<i class="tf-ion-android-phone-portrait"></i>
								<span>Phone: +62 812-3617-0123</span>
							</li>
							<li>
								<i class="tf-ion-android-mail"></i>
								<span>Email: primaphoto027@gmail.com</span>
							</li>
						</ul>	
					</div>
				@elseif($c->status == 'diterima')
				<div class="alert alert-success alert-common alert-solid" role="alert"><i class="tf-ion-thumbsup"></i><span>Horeee!</span> Selamat Anda Diterima Silahkan Cek Email Anda Untuk Ketentuan Selanjutnya</div>
				@else
				<div class="alert alert-warning alert-common alert-solid" role="alert"><i class="tf-ion-alert-circled"></i><span>Peringatan!</span> Anda Telah Melakukan Pendaftaran Silahkan Menunggu Data Anda Sedang Diproses</div><br><br>
					<!-- Contact Form -->
					<div class="contact-form col-md-6 " >
						<form enctype='multipart/form-data' id="contact-form" method="post" action="{{url('konfirmasicol')}}" role="form">
							@csrf 
							<div class="form-group">
								<input type="text" placeholder="Nama Lengkap" class="form-control" name="nama" id="nama">
							</div>
	
							<div class="form-group">
								<input type="text" placeholder="Alamat" class="form-control" name="alamat" id="alamat">
							</div>
							
							<div class="form-group">
								<input type="email" placeholder="Email" class="form-control" name="email" id="email">
							</div>
	
							<div class="form-group">
								<input type="text" placeholder="No Telepon" class="form-control" name="notelepon" id="notelepon">
							</div>
							
							<div class="form-group">
								<input type="text" placeholder="Alat fotografi yang dimiliki" class="form-control" name="alat_fotografi" id="alat_fotografi">
							</div>
							
							<div class="form-group">
								<textarea rows="6" placeholder="Pengalaman dalam bidang fotografi" class="form-control" name="pengalaman" id="pengalaman"></textarea>	
							</div>
	
							<div class="form-group">
								<h5>Sertakan pas foto anda dibawah ini: </h5>
								<input  type="file" class="form-control" id="pas_foto" name="pas_foto">
							</div>
	
							<div class="form-group">
								<h5>Sertakan portofolio/CV anda dibawah ini: </h5>
								<input  type="file" class="form-control" id="portofolio" name="portofolio">
							</div>
							
							<div id="cf-submit">
								<input type="submit" id="contact-submit" class="btn btn-transparent" value="Kirim">
							</div>						
							
						</form>
					</div>
					<!-- ./End Contact Form -->

					<div class="contact-details col-md-6 " >
						<div class="google-map">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3946.0285366052844!2d117.41932321406965!3d-8.496606088341574!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcb932df2d305f1%3A0x618d57e4e4fd068d!2sPrima%20Photo!5e0!3m2!1sid!2sid!4v1660543922184!5m2!1sid!2sid" width="650" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
						
						<ul class="contact-short-info" >
							<li>
								<i class="tf-ion-ios-home"></i>
								<span>Prima Photo Studio, Sumbawa Besar</span>
							</li>
							<li>
								<i class="tf-ion-android-phone-portrait"></i>
								<span>Phone: +62 812-3617-0123</span>
							</li>
							<li>
								<i class="tf-ion-android-mail"></i>
								<span>Email: primaphoto027@gmail.com</span>
							</li>
						</ul>	
					</div>
				@endif

		
		
				
				
				

				
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

    <!-- Google Mapl -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script> --}}
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

   <!-- Main Js File -->
   <script src="js/scriptaviato.js"></script>