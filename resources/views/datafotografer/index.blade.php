@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Data Fotografer <small></small>
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

@can('add-permission')
<div class="page-toolbar">
<a href="{{url('datafotografer/create')}}" class="btn btn-info" type="button">+ Tambah Data Fotografer</a>	
</div>
@endcan

</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog modal-wide">
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
      <th>Foto</th>
      <th>Nama</th>
      <th>Alamat</th>
      <th>No Telepon</th>
      <th>Email</th>
      <th>Alat Fotografi</th>
      <th>Status</th>
      <th colspan='2'></th>
    </tr>
  </thead>

<tbody>

@foreach($data as $df)
<tr>
  <td>{{ $df->id }}</td>
  <td id='td-pas_foto-{{$df->id}}'><img src='images/{{$df->pas_foto}}' height='50px'></td>
  <td id='td-nama_fotografer-{{$df->id}}'>{{ $df->nama_fotografer }}</td>
  <td id='td-alamat-{{$df->id}}'>{{ $df->alamat }}</td>
  <td id='td-notelepon-{{$df->id}}'>{{ $df->notelepon }}</td>
  <td id='td-email-{{$df->id}}'>{{ $df->email }}</td>
  <td id='td-alat_fotografi-{{$df->id}}'>{{ $df->alat_fotografi }}</td>
  <td id='td-status-{{$df->id}}'> 
    @if($df->status == 'Freelance')
      <span class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">Freelance</span>
    @else
      <span class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">Tetap</span>
    @endif
  </td>  

  @can('change-permission')
  <td>
    <a href="{{url('datafotografer/'.$df->id.'/edit') }}" class="btn btn-warning">Ubah</a></td>
  </td>
  @endcan

  @can('delete-permission')
  <td>
    <form method="POST" action="{{url('datafotografer/'.$df->id )}}">
      @csrf
      @method('DELETE')
      <input type='submit' value='Hapus' class='btn btn-danger' onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
    </form>

    <!-- <a class='btn btn-xs btn-danger' onclick="if(confirm('Apakah anda yakin?')) deleteDataRemoveTR({{$df->id}})">Delete</a> -->
  </td>
  @endcan

</tr>
@endforeach

</tbody>

</table>

@endsection

</div>


@section('javascript')
<script>
// function editForm(id)
// {
//   $.ajax({
//     type:'POST',
//     url:'{{route("datafotografer.editForm")}}',
//     data:{'_token':'<?php echo csrf_token() ?>',
//         'id':id},
//     success: function(data)
//     {
//       $('#modalContent').html(data.msg)
//     },
//     error: function(data) 
//     {
//       alert("ajax error, json: " + data);
//     }
//   });
// }

function saveDataUpdateTD(id)
{
  var ePasFoto = $('#ePasFoto').val();
  var eNama = $('#eNama').val();
  var eAlamat = $('#eAlamat').val();
  var eNotelepon = $('#eNotelepon').val();
  var eEmail = $('#eEmail').val();
  var eAlatFotografi = $('#eAlatFotografi').val();
  var eStatus = $('#eStatus').val();
  $.ajax({
    type:'POST',
    url:'{{route("datafotografer.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        'pas_foto':ePasFoto,
        'nama':eNama,
        'alamat':eAlamat,
        'notelepon':eNotelepon,
        'email':eEmail,
        'alat_fotografi':eAlatFotografi,
        'status':eStatus
        },
    success: function(data){
      if(data.status=='oke')
      {
        // alert(data.msg);
        $('#td_pas_foto_'+id).html(ePasFoto)
        $('#td_nama_'+id).html(eNama)
        $('#td_alamat_'+id).html(eAlamat)
        $('#td_notelepon_'+id).html(eNotelepon)
        $('#td_email_'+id).html(eEmail)
        $('#td_alat_fotografi_'+id).html(eAlatFotografi)
        $('#td_status_'+id).html(eStatus)
        $('#pesan').show();
        $('#pesan').html(data.msg)
      }
    }
  });
}

function deleteDataRemove(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("datafotografer.deleteData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        },
    success: function(data){
      if(data.status=='oke')
      {
        alert(data.msg);
        $('#tr_'+id).remove();
      }
      else
      {
        alert(data.msg); 
      }
    }
  });
}

</script>
@endsection




