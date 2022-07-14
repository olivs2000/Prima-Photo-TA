@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Jadwal Fotografer <small></small>
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
<a href="{{url('jadwalfotografer/create')}}" class="btn btn-info" type="button">+ Add Jadwal Fotografer</a>	
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
<!-- <div class="col-md-6 col-sm-12"><div class="dataTables_length" id="sample_1_length"><label>  <select name="sample_1_length" aria-controls="sample_1" class="form-control input-xsmall input-inline"><option value="5">5</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select> records</label></div></div>
<div id="sample_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-small input-inline" aria-controls="sample_1"></label></div> -->
<thead>
<th>Detail Pemesanan</th>
<th>Nama Fotografer</th>
<th>Admin Studio</th>
<th>Status</th>
<th colspan='2'></th>
</thead>
<tbody>
@foreach($data as $jf)
<tr id='tr_{{$jf->id}}'>
<td>{{$jf->detail_pemesanans_id}}</a></td>
<td>{{$jf->nama}}</td>
<td>{{$jf->nama_admin}}</td>
<td>    
@if($jf->status == 'proses')
<span class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">proses</span>
@else
<span class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">selesai</span>
@endif
</td>  


<td>
  <a href="#modalEdit" data-toggle="modal" 
  class="btn btn-warning" 
  onclick="editForm({{$jf->id}})"
  > Edit </a> 
</td>

<td>
<form method="POST" action="{{url('jadwalfotografer/'.$jf->id )}}">
  @csrf
  @method('DELETE')
  <input type='submit' value='Delete' class='btn btn-danger'
  onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
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
    url:'{{route("jadwalfotografer.editForm")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id},
    success: function(data){
           $('#modalContent').html(data.msg)}
  });
}

function saveDataUpdateTD(id)
{
  var eAdminStudiosId = $('#eAdminStudiosId').val();
  var eDetailPemesanansId = $('#eDetailPemesanansId').val();
  var eDataFotografersId = $('#eDataFotografersId').val();
  var eStatus = $('#eStatus').val();
  $.ajax({
    type:'POST',
    url:'{{route("jadwalfotografer.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        'admin_studios_id':eAdminStudiosId,
        'detail_pemesanans_id':eDetailPemesanansId,
        'data_fotografers_id':eDataFotografersId,
        'status':eStatus
        },
    success: function(data){
      if(data.status=='oke')
      {
        // alert(data.msg);
        $('#td_admin_studios_id_'+id).html(eAdminStudiosId)
        $('#td_detail_pemesanans_id_'+id).html(eDetailPemesanansId)
        $('#td_data_fotografers_id_'+id).html(eDataFotografersId)
        $('#td_status_'+id).html(eStatus)
        $('#pesan').show();
        $('#pesan').html(data.msg)
      }
    }
  });
}

// function deleteDataRemoveTR(id)
// {
//   $.ajax({
//     type:'POST',
//     url:'{{route("jadwalfotografer.deleteData")}}',
//     data:{'_token':'<?php echo csrf_token() ?>',
//         'id':id,
//         },
//     success: function(data){
//       if(data.status=='oke')
//       {
//         pesan(data.msg);
//         $('#tr_'+id).remove();
//       }
//       else
//       {
//         pesan(data.msg); 
//       }
//     }
//   });
// }
</script>
@endsection




