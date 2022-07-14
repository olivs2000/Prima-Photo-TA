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


<div class="page-toolbar">
<a href="{{url('datafotografer/create')}}" class="btn btn-info" type="button">+ Add Data Fotografer</a>	
</div>
</div>

<!-- <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog modal-wide">
<div class="modal-content" >

</div>
</div>
</div> -->



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
  <tr>
    <th>No</th>
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
<td><img src="{{asset('images/'.$df->pas_foto)}}" height='50px'></td>
<td>{{ $df->nama }}</td>
<td>{{ $df->alamat }}</td>
<td>{{ $df->notelepon }}</td>
<td>{{ $df->email }}</td>
<td>{{ $df->alat_fotografi }}</td>
<td> 
@if($df->status == 'Freelance')
<span class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">Freelance</span>
@else
<span class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">Tetap</span>
@endif
</td>  


<td>
  <a href="#modalEdit" data-toggle='modal' 
  class="btn  btn-warning" onclick="editForm({{$df->id}})">Edit </a> 
</td>

<td>
<form method="POST" action="{{url('datafotografer/'.$df->id )}}">
  @csrf
  @method('DELETE')
  <input type='submit' value='Delete' class='btn btn-danger'
  onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
</form>


<!-- <a class='btn btn-xs btn-danger' onclick="if(confirm('Apakah anda yakin?')) deleteDataRemoveTR({{$df->id}})">Delete</a> -->
</td>
</tr>

@endforeach
</tbody>
</table>
@endsection

</div>

@section('javascript')
<script>
function editForm(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("datafotografer.editForm")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id},
    success: function(data){
           $('#modalContent').html(data.msg)}
  });
}

function saveDataUpdateTD(id)
{
  var ePasFoto = $('#ePas_Foto').val();
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
        'pas_foto':ePas_Foto,
        'nama':eNama,
        'alamat':eAlamat,
        'notelepon':eNotelepon,
        'email':eEmail,
        'alat_fotografi':eAlat_Fotografi,
        'status':eStatus
        },
    success: function(data){
      if(data.status=='oke')
      {
        // alert(data.msg);
        $('#td_pas_foto_'+id).html(ePas_Foto)
        $('#td_nama_'+id).html(eNama)
        $('#td_alamat_'+id).html(eAlamat)
        $('#td_notelepon_'+id).html(eNotelepon)
        $('#td_email_'+id).html(eEmail)
        $('#td_alat_fotografi_'+id).html(eAlat_Fotografi)
        $('#td_status_'+id).html(eStatus)
        $('#pesan').show();
        $('#pesan').html(data.msg)
      }
    }
  });
}

function deleteDataRemoveTR(id)
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



