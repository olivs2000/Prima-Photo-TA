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

<table class="table" id='dataTable'>
<thead>
  <tr>
    <th>ID</th>
    <th>Pemesananan</th>
    <th>Paket</th>
    <th>Sewa Alat</th>
    <th>Layanan</th>
    <th>Produk</th>
    <th>Jumlah</th>
    <th>Harga</th>
    <th>Total</th>
    <th>Tanggal Pemesanan</th>
    <th>Status</th>    
    <th colspan='1'></th>
  <tr>
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

  <td id='td-status-{{$dp->id}}'> 
    @if($dp->status == 'proses')
      <span class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">proses</span>
    @else
      <span class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">selesai</span>
    @endif
  </td>

  <td>
    {{-- <a href="{{url('detailpemesanan/'.$dp->id.'/edit') }}" class="btn btn-warning">Edit</a> --}}

    <a href="#modalEdit" data-toggle='modal' class="btn btn-warning" onclick="editForm({{$dp->id}})">Edit</a> 
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
  var eStatus = $('#eStatus').val();
  $.ajax({
    type:'POST',
    url:'{{route("detailpemesanan.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        'status':eStatus
        },
    success: function(data){
      if(data.status=='oke')
      {
        $('#td_status_'+id).html(eStatus)
        $('#pesan').show();
        $('#pesan').html(data.msg)
      }
    }
  });
}

</script>
@endsection









