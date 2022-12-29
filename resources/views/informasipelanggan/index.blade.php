
@section('content')
<!-- Basic Page Needs
================================================== -->
<meta charset="utf-8">
<title>Informasi Pelanggan</title>

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
<!-- Site Logo -->
<div class="logo text-center">
	<!-- replace logo here -->
	<text id="PRIMA PHOTO">
		<h1>PRIMA PHOTO</h1>
	</text>	
</div>
</div>

</div>
</div>
</section>


<!-- Main Menu Section -->
<section class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div><!-- / .navbar-header -->


			{{-- <div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
                    <li class="dropdown ">
                        <a href="{{url('pelanggan')}}">Beranda</a>
                    </li><!-- / Home -->

                    <!-- Paket -->
                    <li class="dropdown ">
                        <a href="{{url('paket')}}">Paket</a>
                    </li><!-- / Paket -->

                    <!-- Produk -->
                     <li class="dropdown ">
                        <a href="{{url('produk')}}">Produk</a>
                    </li><!-- / Produk -->

                    <!-- Layanan -->
                    <li class="dropdown ">
                        <a href="{{url('layanan')}}">Layanan</a>
                    </li><!-- / Layanan -->

				</ul>
			</div> --}}

		</div>
	</nav>
</section>

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Informasi Pelanggan</h1>
					<ol class="breadcrumb">
						<li><a href="{{url('pelanggan')}}">Beranda</a></li>
						<li class="active">Informasi Pelanggan</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="about section">
	<div class="container">

        <div class="row">
             <h2 class="mt-40 text-center">Cara mendaftar menjadi fotografer</h2>
			<div class="col-md-6">
				<img class="img-responsive" src="images/informasipelanggan/collaborate0.png">
			</div><br>
            <div class="col-md-6">
				<img class="img-responsive" src="images/informasipelanggan/collaborate.png">
			</div><br>
			<div class="col-md-6">
				<br><p>Dari halaman utama website, apabila anda ingin mendaftar menjadi fotografer, anda dapat klik tulisan "Collaborate" yang telah kami tandai dengan warna merah. Lalu sistem akan mengarahkan anda ke halaman pendaftaran fotografer/collaborate.</p>
			</div>
            <div class="col-md-6">
				<br><p>Pada halaman collaborate, anda dapat mengisi data diri anda seperti nama lengkap, no telepon, alamat, email, alat fotografi yang anda miliki (bila ada, bila tidak ada dapat diisi "-"), selain itu juga anda dapat mengisi pengalaman yang anda miliki dalam bidang fotografi dan terakhir, anda dapat mengirimkan pas foto anda pada tempat yang telah disediakan dan menekan tombol "KIRIM" apabila anda telah selesai mengisi data diri anda.</p>
			</div>
		</div>

    <br><br><br><br>

        <div class="row">
			<div class="col-md-6">
				<img class="img-responsive" src="images/informasipelanggan/Paket, produk, layanan.png">
			</div>
			<div class="col-md-6">
				<h2 class="mt-40">Melihat paket fotografi, produk dan layanan</h2>
				<p>Dari halaman utama website, apabila anda ingin melihat paket fotografi/produk/layanan, anda dapat klik salah satu tulisan yang telah kami lingkari merah sesuai dengan keinginan anda.</p>
				{{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam qui vel cupiditate exercitationem, ea fuga est velit nulla culpa modi quis iste tempora non, suscipit repellendus labore voluptatem dicta amet?</p>--}}
				{{-- <a href="contact.html" class="btn btn-main mt-20">Download Company Profile</a> --}}
			</div>
		</div>

    <br><br><br><br>

        <div class="row">
            <h2 class="mt-40 text-center">Melihat detail paket fotografi</h2>
            <div class="col-md-6">
                <img class="img-responsive" src="images/informasipelanggan/lihat detail.png">
                <br><p>Pada halaman paket fotografi, anda dapat melihat jenis-jenis paket fotografi yang tersedia, apabila anda ingin melihat lebih detail mengenai paket tersebut, anda dapat menekan tombol "Lihat Detail" yang telah kami tandai dengan warna merah, lalu anda akan diarahkan oleh sistem menuju halaman detail paket yang telah anda pilih.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/informasipelanggan/detail paket.png">
                <br><p>Pada halaman detail paket anda dapat melihat gambar dari paket tersebut, harga, durasi pemotretan, jumlah jepretan yang anda akan dapatkan beserta keterangan dari paket tersebut. Apabila anda ingin memilih paket tersebut maka anda dapat menekan tombol "Masukan Keranjang"</p>
            </div>
       </div>

    <br><br><br><br>

       <div class="row">
            <h2 class="mt-40 text-center">Melakukan pemesanan</h2>
            <div class="col-md-6">
                <img class="img-responsive" src="images/informasipelanggan/masukan keranjang.png">
                <br><p>Pada halaman paket fotografi, anda dapat melihat jenis-jenis paket fotografi yang tersedia, apabila anda ingin langsung memesan paket tersebut maka anda dapat menekan tombol "Masukan Keranjang".</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/informasipelanggan/keranjang.png">
            </div>
            <div class="col-md-6">
                <br><p>Akan terlihat notifikasi bahwa paket anda berhasil ditambahkan kedalam keranjang. Lalu pada halaman yang sama anda dapat melihat pemesanan anda dengan mengklik item keranjang atau tulisan keranjang yang sudah kami tandai dengan warna merah, lalu anda dapat menekan tombol "Checkout" untuk dapat menuju halaman pemesanan.</p>
            </div>
       </div>

    <br><br><br><br>

        <div class="row">
            <h2 class="mt-40 text-center">Melihat halaman Pemesanan & konfirmasi pemesanan</h2>
            <div class="col-md-6">
                <img class="img-responsive" src="images/informasipelanggan/checkout.png">
                <p>Pada halaman Checkout, anda dapat mengisi data pemesanan seperti nama lengkap, no telepon, email dan juga alamat apabila anda hanya melakukan pemesanan produk atau layanan. Apabila anda juga melakukan pemesanan Paket Fotografi maka anda wajib mengisi data pada pemesanan fotografer seperti lokasi acara, tanggal acara dan juga waktu acara. Apabila anda telah selesai mengisi data pemesanan maka anda dapat menekan tombol "ORDER". Apabila anda ingin menghapus item pemesanan anda dapat menekan tolbol "Hapus".</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/informasipelanggan/konfirmasi.png">
            </div>
            <div class="col-md-6">
                <p>Halaman selanjutnya merupakan halaman konfirmasi yang berarti anda telah berhasil melakukan pemesanan. Terdapat informasi yang perlu anda baca sebelum anda menuju halaman detail pemesanan. Anda dapat melihat detail pemesanan anda dengan menekan tombol "LIHAT DETAIL PEMESANAN" untuk dapat melihat detail pemesanan anda dan melakukan pembayaran serta mengirimkan bukti transfer anda.</p>
            </div>
        </div>

    <br><br><br><br>

        <div class="row">
            <h2 class="mt-40 text-center">Melihat halaman detail pemesanan & mengirimkan bukti transfer</h2>
            <div class="col-md-6">
                <img class="img-responsive" src="images/informasipelanggan/detail pemesanan.png">
                <p>Pada halaman detail pemesanan, terdapat beberapa informasi penting yang perlu anda baca. Anda juga dapat melakukan pengecekan terkait data diri anda dan juga detail dari pemesanan anda beserta total yang harus dibayar, apabila anda ingin membatalkan pemesanan maka anda dapat menekan tombol "Batalkan Pesanan" berwarna merah, apabila anda telah melakukan pembayaran maka anda dapat mengirimkan bukti pembayaran/bukti transfer anda dengan menekan tombol "Kirim Bukti Transfer" berwarna biru. Anda juga dapat melakukan print detail pemesanan anda dengan menekan tombol "Print" berwarna biru.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/informasipelanggan/uploadbuktitf.png">
            </div>
            <div class="col-md-6">
                <p>Pada halaman ini anda dapat mengirimkan bukti pembayaran anda dengan menekan tombol "KIRIM" lalu akan muncul notifikasi bahwa anda telah berhasil mengirimkan bukti trasnfer. Anda dapat menunggu selama paling lama satu jam untuk melihat status pembayaran dan status pemesanan anda terubah menjadi berhasil dan juga proses yang berarti status pembayaran anda telah berhasil dan status pemesanan anda sedang di proses pada halaman detail pemesanan.</p>
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

<!-- Google Mapl -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script type="text/javascript" src="plugins/google-map/gmap.js"></script>

<!-- Main Js File -->
<script src="js/scriptaviato.js"></script>