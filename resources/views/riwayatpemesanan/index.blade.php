<meta charset="utf-8" />
<title>Detail Pemesanan</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta content="" name="author" />
<meta name="MobileOptimized" content="320">

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet')}}" type="text/css" />
<link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN THEME STYLES -->
<link href="{{asset('assets/css/print.css')}}" rel="stylesheet" type="text/css" media="print" />
<link href="{{asset('assets/css/style-conquer.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/style-responsives.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/pages/invoice.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css" />

<!-- END THEME STYLES -->
<link rel="{{asset('shortcut icon" href="favicon.ico')}}" />



<div class="page-content-wrapper">
    <div class="page-content">

        <h1 style="text-align:center">
            DETAIL PEMESANAN <small></small>
        </h1> <br>

        <div class="page-bar">
            <button type="button" class="btn btn-fit-height default dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true"></button>
        </div>

        <div class="invoice">

            <div class="row invoice-logo">
                <div class="col-xs-6 invoice-logo-space">
                    <img src="{{ asset('assets/img/primaphoto3.png')}}" alt="" />
                </div>
                <div class="col-xs-6">
                    <p>
                            01 Des 2022 <span class="muted">
							Tanggal Pemesanan / Estimasi Selesai (Menyesuaikan Pembayaran) </span>
                    </p>
                </div>
            </div>

            <hr/>
            <div class="row">
                <div class="col-xs-4">
                    <h4>Pelanggan:</h4>
                    <ul class="list-unstyled">
                        <li>
                            {{$pemesanan->nama}}
                        </li>
                        <li>
                            {{$pemesanan->notelepon}}
                        </li>
                        <li>
                            {{$pemesanan->email}}
                        </li>
                        <li>
                            {{$pemesanan->alamat}}
                        </li>
                    </ul>
                </div>
                <div class="col-xs-4">
                    <h4 style="color: red;">PENTING:</h4>
                    <ul class="list-unstyled">
                        <li>
                            Status pembayaran dan status pemesanan akan diubah
                        </li>
                        <li>
                            1 jam setelah anda melakukan pembayaran disertai dengan
                        </li>
                        <li>
                            estimasi selesai pemesanan. Apabila setelah anda 
                        </li>
                        <li>
                            melakukan pembayaran status belum terubah, 
                        </li>
                        <li>
                            harap hubungi kami melalui email primaphoto27@gmail.com
                        </li>
                    </ul>
                </div>
                <div class="col-xs-4 invoice-payment">
                    <h4>Pembayaran dapat dilakukan menggunakan:</h4>
                    <ul class="list-unstyled">
                        <li>
                            <strong>No Virtual Account BNI:</strong> 8578149566949804
                        </li>
                        <li>
                            <strong>No Rekening BNI:</strong> 0097927804
                        </li>
                        <li>
                            <strong>No Virtual Account BCA:</strong> 8735089566949804
                        </li>
                        <li>
                            <strong>No Rekening BCA:</strong> 2373089804
                        </li>
                    </ul>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-xs-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>
                                    #
                                </th>
                                <th>
                                    Jenis Pemesanan
                                </th>
                                <th class="hidden-480">
                                    Jumlah Pemesanan
                                </th>
                                <th class="hidden-480">
                                    Harga Pemesanan
                                </th>
                                <th>
                                    Sub Total Pemesanan
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 0;?>
                            @foreach($data as $rp)
                            <?php $no++ ;?>
                            <tr>
                                <td>
                                    {{$no}}
                                </td>
                                <td>
                                    @if($rp->judul_paket!=null)
                                    {{$rp->judul_paket}}
                                    @elseif ($rp->judul_produk!=null)
                                    {{$rp->judul_produk}}
                                    @elseif ($rp->judul_layanan!=null)
                                    {{$rp->judul_layanan}}
                                    @elseif ($rp->nama_alat!=null)
                                    {{$rp->nama_alat}}
                                    @endif
                                </td>
                                <td class="hidden-480">
                                    {{$rp->jumlah}}
                                </td>
                                <td class="hidden-480">
                                    Rp. {{number_format($rp->harga)}}
                                </td>
                                <td class="hidden-480">
                                    Rp. {{number_format($rp->sub_total)}}
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <br> <br>

            <div class="row">
                <div class="col-xs-4">
                    <div class="well">
                        <address>
							<strong>Prima Photo</strong><br/>
							Jl. Kamboja No. 27<br/>
							Sumbawa Besar, Nusa Tenggara Barat<br/>
							<abbr title="Phone">P:</abbr> (0371) 625249<br/> 
                            <abbr title="Email">E:</abbr> primaphoto27@gmail.com 
                        </address>
                        <address>
							<strong>Full Name</strong><br/>
							<a href="mailto:#">first.last@email.com</a>
						</address>
                    </div>
                </div>

                <div class="col-xs-8 invoice-block">
                    <ul class="list-unstyled amounts">
                        <li>
                            <strong>Total Pembayaran:</strong> Rp. {{number_format($rp->total)}}
                        </li>
                        <li>
                            <strong>Pajak: --</strong> 
                        </li>
                        <li>
                            <strong>Pengiriman: </strong> Free
                        </li>
                        <li>
                            <strong>Status Pembayaran:</strong>  <td id='td-status_pembayaran-{{$rp->id}}'> 
                                @if($rp->status_pembayaran == 'belum')
                                  <span id='td-status_pembayaran-{{$rp->id}}' class="btn btn-xs btn-danger btn-sm m-b-10 m-l-5">belum</span>
                                @elseif($rp->status_pembayaran == 'selesai')
                                  <span id='td-status_pembayaran-{{$rp->id}}' class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">selesai</span>
                                @else
                                  <span id='td-status_pembayaran-{{$rp->id}}' class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">Proses</span>
                                @endif
                            </td>
                        </li>
                        <li>
                            <strong>Status Pemesanan:</strong>  <td id='td-status_pemesanan-{{$rp->id}}'> 
                                @if($rp->status_pemesanan == 'proses')
                                  <span id='td-status_pemesanan-{{$rp->id}}' class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">Menunggu Konfirmasi</span>
                                @elseif($rp->status_pemesanan == 'selesai')
                                  <span id='td-status_pemesanan-{{$rp->id}}' class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">Selesai</span>
                                @else
                                  <span id='td-status_pemesanan-{{$rp->id}}' class="btn btn-xs btn-danger btn-sm m-b-10 m-l-5">Proses</span>
                                @endif
                              </td>
                        </li>
                    </ul>
                    <br/> <br/>
                    <a class="btn btn-lg-xs btn-info hidden-print" onclick="javascript:window.print();">Print <i class="fa fa-print"></i></a>
                    <a href="{{url('uploadbuktitf/'.$pemesanan->id)}}" class="btn btn-lg-xs btn-success hidden-print">Kirim Bukti Transfer <i class="fa fa-upload"></i></a>
                    <br/> <br/>
                    <a class="btn btn-lg-xs btn-danger hidden-print">Batalkan Pesanan <i class="fa fa-ban"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>




<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="{{asset('assets/plugins/jquery-1.11.0.min.js" type="text/javascript')}}"></script>
<script src="{{asset('assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript')}}"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{asset('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript')}}"></script>
<script src="{{asset('assets/plugins/jquery.blockui.min.js" type="text/javascript')}}"></script>
<script src="{{asset('assets/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<script src="{{asset('assets/scripts/app.js')}}"></script>

<script>
    jQuery(document).ready(function() {
        App.init();
    });
</script>