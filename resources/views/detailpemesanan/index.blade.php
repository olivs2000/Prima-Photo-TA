@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Detail Pemesanan <small></small>
</h3>
<div class="page-bar">
<ul class="page-breadcrumb">
  <li>
    <i class="fa fa-home"></i>
    <a href="index.html">Master</a>
    <i class="fa fa-angle-right"></i>
  </li>
  <li>
    <a href="#">Prima Photo</a>
  </li>
</ul>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
    <div style="text-align:center">
    <img src="{{asset('/assets/img/cam1.gif')}}"/>
    </div>
</div>

@if(session('status'))
<div class="alert alert-success">
{{session('status')}}
</div>
@endif

<div class="alert alert-success" id='pesan' style="display:none"></div>

@if(session('error'))
<div class="alert alert-danger">
{{session('error')}}
</div>
@endif 

<table class="table" id='dataTable'>
<thead>
    <th>No</th>
    <th>Pemesanan</th>
    <th>Paket</th>
    <th>Penyewaan Alat</th>
    <th>Layanan</th>
    <th>Produk</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Total</th>
    <th>Tanggal Pemesanan</th>
    <th>Status</th>    
    <th colspan='1'></th>
</thead>
<tbody>

@foreach($data as $dp)
<tr>
<td>{{$dp->id}}</td>
<td>{{$dp->nama}}</td>
<td>{{$dp->judul_paket}}</td>
<td>{{$dp->nama_alat}}</td>
<td>{{$dp->judul_layanan}}</td>
<td>{{$dp->judul_produk}}</td>
<td>{{$dp->jumlah}}</td>
<td>Rp. {{$dp->harga}}</td>
<td>Rp. {{$dp->total}}</td>  
<td>{{$dp->tanggal_pemesanan}}</td>
<td>
@if($dp->status == 'selesai')
<span class="btn btn-dark btn-rounded btn-sm m-b-10 m-l-5">selesai</span>
@else
<span class="btn btn-success btn-rounded btn-sm m-b-10 m-l-5">proses</span>
@endif
</td> 

<td>
<a href="#modalEdit" data-toggle='modal' 
class="btn badge badge-warning" onclick="editForm({{$dp->id}})">Edit </a> 
</td>

</tr>

@endforeach
</tbody>
</table>
@endsection








@section('javascript')
<script>

function editForm(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("detailpemesanan.editForm")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id},
    success: function(data){
           $('#modalContent').html(data.msg)}
  });
}

function saveDataUpdateTD(id)
{
//   var euser_pelanggans = $('#eUserPelanggansId').val();  
  var ePemesanansId = $('#ePemesanansId').val();
  var ePaketsId = $('#ePaketsId').val();  
  var ePenyewaanAlatsId = $('#ePenyewaanAlatsId').val();
  var eLayanansId = $('#eLayanansId').val();
  var eProduksId = $('#eProduksId').val();
  var eJumlah = $('#eJumlah').val();
  var eHarga = $('#eHarga').val();
  var eTotal = $('#eTotal').val();
  var eTanggalPemesanan = $('#eTanggalPemesanan').val();
  var eTanggalPenerimaan = $('#eTanggalPenerimaan').val();
  var eStatus = $('#eStatus').val();
  $.ajax({
    type:'POST',
    url:'{{route("detailpemesanan.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        // 'user_pelanggans_id':eUserPelanggansId,
        'pemesanans_id':ePemesanansId,
        'pakets_id':ePaketsId,
        'penyewaan_alats_id':ePenyewaanAlatsId,
        'layanans_id':eLayanansId,
        'produks_id':eProduksId,
        'jumlah':eJumlah,
        'harga':eHarga,
        'total':eTotal,
        'tanggal_pemesanan':eTanggalPemesanan,
        'tanggal_penerimaan':eTanggalPenerimaan,
        'status':eStatus,
        },
    success: function(data){
      if(data.status=='oke')
      {
        // alert(data.msg);
        // $('#td_user_pelanggans_id_'+id).html(eUserPelanggansId)
        $('#td_pemesanans_id_'+id).html(ePemesanansId)
        $('#td_pakets_id_'+id).html(ePaketsId)
        $('#td_penyewaan_alas_id_'+id).html(ePenyewaanAlatsId)
        $('#td_layanans_id_'+id).html(eLayanansId)
        $('#td_produks_id_'+id).html(eProduksId)
        $('#td_jumlah_'+id).html(eJumlah)
        $('#td_harga_'+id).html(eHarga)
        $('#td_total_'+id).html(eTotal)
        $('#td_tanggal_pemesanan_'+id).html(eTanggalPemesanan)
        $('#td_tanggal_penerimaan_'+id).html(eTanggalPenerimaan)
        $('#td_status_'+id).html(eStatus)
        $('#pesan').show();
        $('#pesan').html(data.msg)
      }
    }
  });
}
</script>
@endsection




