@extends('layout.conquer')

@section('content')
<h3 class="page-title">	Daftar Pegawai </h3>
<div class="page-bar">
<ul class="page-breadcrumb">
<li>
  <i class="fa fa-home"></i>
  <a href="index.html">Master</a>
  <i class="fa fa-angle-right"></i>
</li>
<li>
  <a href="#">Pegawai</a>
</li>
</ul>


@can('add-permission')
<div class="page-toolbar">
  <a href="#modalCreate" data-toggle='modal' class="btn btn-info">+ Add Data Pegawai </a>
</div>
</div>
@endcan

<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog modal-wide">
<div class="modal-content" >

<form role="form" method="POST" action="{{url('pegawai')}}">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h4 class="modal-title">Tambah Data Pegawai</h4>
</div>
<div class="modal-body">

@csrf 
<div class="form-body">
<div class="form-group">
<label>Nama</label>
<input type="text" class="form-control" name="nama_Pegawai">
</div>

<div class="form-group">
<label>Alamat</label>
<textarea class="form-control" rows="3" name="address"></textarea>
</div>

<div class="form-group">
<label>No telepon</label>
<input type="text" class="form-control" name="notelepon">
</div>

</div>
  <div class="form-actions">
</div>

</div>
<div class="modal-footer">
  <button type="submit" class="btn btn-info">Submit</button>
  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
</form>
</div>
</div>
</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog modal-wide">
    <div class="modal-content" id="modalContent">
    <div style="text-align:center">
    <img src="{{asset('/assets/img/tenor.gif')}}"/>
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

<table class="table" id="table_contoh">
<thead>
  <tr>
    <th>ID</th>
    <th>Nama Pegawai</th>
    <th>Address</th>
    <th>No telepon</th>
    <th colspan='1'></th>
  </tr>
</thead>
<tbody>

@foreach($data as $p)
<tr id='tr_{{$p->id}}'>
<td>{{ $p->id }}</td>
<td class='editable' id='td-nama_pegawai-{{$p->id}}'>{{ $p->nama_pegawai}}</td>
<td class='editable' id='td-address-{{$p->id}}'>{{ $p->address }}</td>
<td class='editable' id='td-notelepon-{{$p->id}}'>{{ $p->notelepon }}</td>
  
<td>
<div class="modal fade" id="modalChange_{{$p->id}}" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog modal-wide">
<div class="modal-content" >
<div class="modal-header">

</div>
<div class="modal-body">
<!-- <div class="modal fade" id="modalChange_{{$p->id}}" tabindex="-1" role="basic" aria-hidden="true"> -->

@csrf 
<div class="form-body">
<div class="form-group">
</div>
</div>
<div class="form-actions"></div>
</div>

<div class="modal-footer">
<button type="submit" class="btn btn-info">Submit</button>
<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
</div>
</form>
</div>
</div>
</div>



<td>
@can('delete-permission')
<form method="POST" action="{{url('pegawai/'.$p->id )}}">
  @csrf
  @method('DELETE')
  <input type='submit' value='Hapus' class='btn btn-xs btn-danger'
  onclick="if(!confirm('Apakah anda yakin?'))
    {
      return false;
    }
    else
    {
      if(!confirm('Apakah anda sangat yakin?'))
    {
      return false;
    }
            
  }"/>
</form>
@endcan
</td>
</tr>

@endforeach
  </tbody>
  </table>
@endsection

@section('javascript')
<script>
function saveDataUpdateTD(id)
{
  var eNamaPegawai = $('#eNamaPegawai').val();
  var eAddress = $('#eAddress').val();
  var eNoTelepon = $('#eNoTelepon').val();
  $.ajax({
    type:'POST',
    url:'{{route("pegawai.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        'nama_pegawai':eNamaPegawai,
        'address':eAddress
        'notelepon':eNoTelepon
        },
    success: function(data){
      if(data.status=='oke')
      {
        // alert(data.msg);
        $('#td_nama_pegawai_'+id).html(eNamaPegawai)
        $('#td_address_'+id).html(eAddress)
        $('#td_notelepon_'+id).html(eNoTelepon)
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
    url:'{{route("pegawai.deleteData")}}',
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



@section('initialscript')
<script>
$('.editable').editable({
  closeOnEnter :true,
  callback:function(data){
    if(data.content)
    {
      //alert(data.content)

      var s_id=data.$el[0].id
      var fname=s_id.split('-')[1]
      var id=s_id.split('-')[2]

      $.ajax({
      type:'POST',
      url:'{{route("pegawai.saveDataField")}}',
      data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        'fname':fname,
        'value':data.content
        },
      success: function(data){
        alert(data.msg)}
  });
    }
  }
})
</script>
@endsection

