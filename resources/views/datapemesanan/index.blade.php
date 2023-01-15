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

<table  class='table'>
<thead>
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>No Telepon</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Estimasi Selesai</th> 
    <th>Status Pembayaran</th> 
    <th>Status Pemesanan</th>
    <th colspan='1'></th>  
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
  <td>{{$p->estimasi_selesai}}</td>  

  <td id='td-status_pembayaran-{{$p->id}}'> 
    @if($p->status_pembayaran == 'gagal')
      <span id='td-status_pembayaran-{{$p->id}}' class="btn btn-xs btn-danger btn-sm m-b-10 m-l-5">Gagal</span>
    @elseif($p->status_pembayaran == 'berhasil')
      <span id='td-status_pembayaran-{{$p->id}}' class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">Berhasil</span>
    @else
      <span id='td-status_pembayaran-{{$p->id}}' class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">Proses</span>
    @endif
  </td>

  <td id='td-status_pemesanan-{{$p->id}}'> 
    @if($p->status_pemesanan == 'proses')
      <span id='td-status_pemesanan-{{$p->id}}' class="btn btn-xs btn-danger btn-sm m-b-10 m-l-5">Proses</span>
    @elseif($p->status_pemesanan == 'selesai')
      <span id='td-status_pemesanan-{{$p->id}}' class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">Selesai</span>
    @else
      <span id='td-status_pemesanan-{{$p->id}}' class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">Menunggu Konfirmasi</span>
    @endif
  </td>

  <td>
    <a class='btn btn-info' href="{{route('datapemesanan.show',$p->id)}}" data-target="#show{{$p->id}}" data-toggle='modal'>Detail</a> 
    
    <div class="modal fade" id="show{{$p->id}}" tabindex="-1" role="basic" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div style="text-align:center">
            <img src="{{asset('/assets/img/cam1.gif')}}"/>
            </div>
        </div>
      </div>
    </div>
  </td>

  <td>
    <a href="#modalEdit" data-toggle='modal' class="btn btn-warning" onclick="editForm({{$p->id}})">Ubah</a> 
  </td>

  <td>
    <form method="POST" action="{{url('datapemesanan/'.$p->id )}}">
      @csrf
      @method('DELETE')
      <input type='submit' value='Hapus' class='btn btn-danger' onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
    </form>
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
  var eEstimasiSelesai = $('#eEstimasiSelesai').val();
  $.ajax({
    type:'POST',
    url:'{{route("datapemesanan.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        'status_pembayaran':eStatusPembayaran,
        'status_pemesanan':eStatusPemesanan,
        'estimasi_selesai':eEstimasiSelesai
        },
    success: function(data){
      if(data.status=='oke')
      {
        $('#td_status_pembayaran_'+id).html(eStatusPembayaran)
        $('#td_status_pemesanan_'+id).html(eStatusPemesanan)
        $('#td_estimasi_selesai_'+id).html(eEstimasiSelesai)
        $('#pesan').show();
        $('#pesan').html(data.msg)
      }
    }
  });
}
</script>
@endsection








