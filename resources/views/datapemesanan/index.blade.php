@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Data Pemesanan <small></small>
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
  <div class="modal-dialog">
    <div class="modal-content" id="modalContent">
    <div style="text-align:center">
    <img src="{{asset('/assets/img/cam1.gif')}}"/>
    </div>
    </div>
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

<table  id="table_contoh" class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>No Telepon</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Lokasi Acara</th>
    <th>Tanggal Acara</th>
    <th>Waktu Acara</th>
    <th>Total</th> 
    <th>Status Pembayaran</th> 
    <th>Status Pemesanan</th>  
  <tr>
</thead>

<tbody>

@foreach($data as $p)
<tr>
  <td>{{$p->id}}</td>
  <td>{{$p->nama}}</td>
  <td>{{$p->notelepon}}</td>
  <td>{{$p->email}}</td>
  <td>{{$p->alamat}}</td>
  <td>{{$p->lokasi_acara}}</td>
  <td>{{$p->tanggal_acara}}</td>
  <td>{{$p->waktu_acara}}</td>
  <td>Rp. {{number_format($p->total)}}</td>  

  <td id='td-status_pembayaran-{{$p->id}}'> 
    @if($p->status_pembayaran == 'belum')
      <span class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">belum</span>
    @else
      <span class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">selesai</span>
    @endif
  </td>

  <td id='td-status_pemesanan-{{$p->id}}'> 
    @if($p->status_pemesanan == 'proses')
      <span class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">proses</span>
    @else
      <span class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">selesai</span>
    @endif
  </td>

  <td>
    <a href="#modalEdit" data-toggle='modal' class="btn btn-warning" onclick="editForm({{$p->id}})">Ubah</a> 
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
    url:'{{route("datapemesanan.editForm")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id},
    success: function(data)
    {
      $('#modalContent').html(data.msg)
    },
    error: function(data) 
    {
      alert("ajax error, json: " + data);
    }
  });
}

function saveDataUpdateTD(id)
{
  var eStatusPembayaran = $('#eStatusPembayaran').val();
  var eStatusPemesanan = $('#eStatusPemesanan').val();
  $.ajax({
    type:'POST',
    url:'{{route("datapemesanan.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        'status_pembayaran':eStatusPembayaran,
        'status_pemesanan':eStatusPemesanan
        },
    success: function(data){
      if(data.status=='oke')
      {
        $('#td_status_pembayaran_'+id).html(eStatusPembayaran)
        $('#td_status_pemesanan_'+id).html(eStatusPemesanan)
        $('#pesan').show();
        $('#pesan').html(data.msg)
      }
    }
  });
}

</script>
@endsection








