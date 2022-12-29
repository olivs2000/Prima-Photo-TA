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

                  <form enctype='multipart/form-data' class="checkout-form" method="post" action="{{url('checkout/store')}}" role="form">
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
                     {{-- <div class="form-group">
                        <h5>Sertakan bukti transfer anda dibawah ini: </h5>
                        <input type="file" class="form-control" id="bukti_transfer" name="bukti_transfer">
                     </div> --}}

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

                     {{-- <div id="cf-submit">
                        <a href="{{ route('store') }}" id="contact-submit" class="btn btn-main mt-20">Order</a>
                     </div> --}}

                     <br>

                     <div id="cf-submit">
                        <input type="submit" id="contact-submit" class="btn btn-main mt-20t" value="Order">
                     </div>	
               </div>
            </div>
            
            <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Ringkasan Pemesanan</h4>
                     <div class="media product-card">

                   		<!-- Start Cart Item Paket -->
                        @if(session()->get('cart2'))
                        @foreach(session()->get('cart2') as $id => $details )
                        <div class="media">
                           <a class="pull-left" href="#!">
                              <img class="media-object" src="{{$details['gambar']}}" alt="image" />
                           </a>
                        <div class="media-body">
                           <h4 class="media-heading">{{$details['judul_paket']}}</h4>
                           <input type="hidden" name="judul_paket[]" value="{{$details['judul_paket']}}">
                           <div class="cart-price">
                              <span>{{$details['jumlah']}} x</span>
                              <input type="hidden" name="jumlah[]" value="{{$details['jumlah']}}">
                              <span>{{number_format($details['harga'])}}</span>
                              <input type="hidden" name="harga[]" value="{{$details['harga']}}">
                              <input type="hidden" name="id_paket[]" value="{{$id}}">

                              &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                              <td>
                                 <input type='button' value='Hapus' onclick="removeFromCart('cart2',{{$id}})" class='tf-ion-ios-trash'/>
                             </td>

                           </div>
                        </div>
                        </div>

                        @endforeach
                        @endif

                        <?php $total=0; ?>
                        @if(session()->get('cart2'))
                        @foreach(session()->get('cart2') as $id => $details )
                        <?php $total+=$details['harga']*$details['jumlah']; ?>
                        @endforeach
                        @endif			
                        <!-- End Cart Item Paket -->

                        <!-- Start Cart Item Produk -->
                        @if(session()->get('cart1'))
                        @foreach(session()->get('cart1') as $id => $details2)
                        <div class="media">
                           <a class="pull-left" href="#!">
                              <img class="media-object" src="{{$details2['gambar']}}" alt="image" />
                           </a>
                        <div class="media-body">
                           <h4 class="media-heading">{{$details2['judul_produk']}}</h4>
                           <input type="hidden" name="judul_produk[]" value="{{$details2['judul_produk']}}">
                           <div class="cart-price">
                              <span>{{$details2['jumlah']}} x</span>
                              <input type="hidden" name="jumlah1[]" value="{{$details2['jumlah']}}">
                              <span>{{number_format($details2['harga'])}}</span>
                              <input type="hidden" name="harga1[]" value="{{$details2['harga']}}">
                              <input type="hidden" name="id_produk[]" value="{{$id}}">

                              &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                              {{-- <td><a href="{{url('checkout/'.$id) }}" >Hapus <i class="tf-ion-ios-trash"></i></a></td> --}}
                              <td>
                                 <input type='button' value='Hapus' onclick="removeFromCart('cart1',{{$id}})" class='tf-ion-ios-trash'/>
                             </td>

                           </div>
                        </div>
                        </div>
                        @endforeach
                        @endif

                        @if(session()->get('cart1'))
                        @foreach(session()->get('cart1') as $id => $details2 )
                        <?php $total+=$details2['harga']*$details2['jumlah']; ?>
                        @endforeach
                        @endif	
                        <!-- End Cart Item Produk -->

                        <!-- Start Cart Item Layanan -->
                        @if(session()->get('cart3'))
                        @foreach(session()->get('cart3') as $id => $details3)
                        <div class="media">
                           <a class="pull-left" href="#!">
                              <img class="media-object" src="{{$details3['gambar']}}" alt="image" />
                           </a>
                        <div class="media-body">
                           <h4 class="media-heading">{{$details3['judul_layanan']}}</h4>
                           <input type="hidden" name="judul_layanan[]" value="{{$details3['judul_layanan']}}">
                           <div class="cart-price">
                              <span>{{$details3['jumlah']}} x</span>
                              <input type="hidden" name="jumlah3[]" value="{{$details3['jumlah']}}">
                              <span>{{number_format($details3['harga'])}}</span>
                              <input type="hidden" name="harga3[]" value="{{$details3['harga']}}">
                              <input type="hidden" name="id_layanan[]" value="{{$id}}">

                              &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                              <td>
                                 <input type='button' class='tf-ion-ios-trash' value='Hapus' onclick="removeFromCart('cart3',{{$id}})" />
                              </td>

                           </div>
                        </div>
                        </div>
                        @endforeach
                        @endif

                        @if(session()->get('cart3'))
                        @foreach(session()->get('cart3') as $id => $details3 )
                        <?php $total+=$details3['harga']*$details3['jumlah']; ?>
                        @endforeach
                        @endif	
                        <!-- End Cart Item Layanan -->

                        <!-- Start Cart Item Penyewaan Alat -->
                        @if(session()->get('cart4'))
                        @foreach(session()->get('cart4') as $id => $details4)
                        <div class="media">
                           <a class="pull-left" href="#!">
                              <img class="media-object" src="{{$details4['gambar']}}" alt="image" />
                           </a>
                        <div class="media-body">
                           <h4 class="media-heading">{{$details4['nama_alat']}}</h4>
                           <input type="hidden" name="nama_alat[]" value="{{$details4['nama_alat']}}">
                           <div class="cart-price">
                              <span>{{$details4['jumlah']}} x</span>
                              <input type="hidden" name="jumlah4[]" value="{{$details4['jumlah']}}">
                              <span>{{number_format($details4['harga'])}}</span>
                              <input type="hidden" name="harga4[]" value="{{$details4['harga']}}">
                              <input type="hidden" name="id_penyewaan[]" value="{{$id}}">

                              &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 

                              <td>
                                 <input type='button' value='Hapus' onclick="removeFromCart('cart4',{{$id}})" class='tf-ion-ios-trash'/>
                              </td>

                           </div>
                        </div>
                        </div>
                        @endforeach
                        @endif

                        @if(session()->get('cart4'))
                        @foreach(session()->get('cart4') as $id => $details4 )
                        <?php $total+=$details4['harga']*$details4['jumlah']; ?>
                        @endforeach
                        @endif	
                        <!-- End Cart Item Penyewaan Alat -->
                    
                        <ul class="summary-prices"></ul>


                     <div class="summary-total">
                        <span>Total</span>
                        <span id="total" name="total">Rp. {{number_format($total)}}</span>
                     </div>
                     <input type="hidden" class="form-control" name="total" value="{{$total}}">   

                  </form>
                     
            

                  <br><br>

                  <section class="page-header">
                     <div class="container">
                           <div class="col-md-10">
                              <h6 class="page-name">Pembayaran dapat dilakukan menggunakan:</h6>
                              <h6 class="page-name">No Virtual Account BNI: 8578149566949804</h6>
                              <h6 class="page-name">No Rekening BNI: 0097927804</h6>
                              <h6 class="page-name">No Virtual Account BCA: 8735089566949804</h6>
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

<script>
   function removeFromCart(cart, id){
      $.ajax({
			url:"{{ route('remove.from.cart') }}",
         method: "POST",
			data:{
            cart : cart, 
            item_id : id, 
            _token : "{{ csrf_token() }}"
         },
			success:function(data)
			{
				location.reload();
			}
		})
   }


</script>

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
    
