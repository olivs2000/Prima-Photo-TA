@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Data Pembelian <small></small>
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
<a href="{{url('datapembelian/create')}}" class="btn btn-info" type="button">+ Add Data Pembelian</a>	
</div>
</div>

<div class="modal fade" id="modalDelete" tabindex="-1" role="basic" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content" id="modalContent">
   
</div>
</div>
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
<th>Deskripsi Produk</th>
<th>Stok</th>
<th>Nama Supplier</th>
<th>Alamat Supplier</th>
<th>No Telepon Supplier</th>
<th>Tanggal Pemesanan</th>
<th>Tanggal Penerimaan</th>
<th>Status</th>
<th colspan='1'></th>
</thead>
<tbody>        
@foreach($data as $dp)
<tr>
<td>{{$dp->id}}</td>

<td>
  <a href="showDetailPembelian/{{$dp->id}}">
        
        {{$dp->deskripsi_produk}}</a>
</td>

<td>{{$dp->stok}}</td>
<td>{{$dp->nama_supplier}}</td>
<td>{{$dp->alamat_supplier}}</td>
<td>{{$dp->notelepon_supplier}}</td>
<td>{{$dp->tanggal_pemesanan}}</td>   
<td>{{$dp->tanggal_penerimaan}}</td>   
<td>    
@if($dp->status == 'proses')
<span class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">proses</span>
@else
<span class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">selesai</span>
@endif
</td> 

<td>
  <a href="#modalEdit" data-toggle='modal' 
  class="btn  btn-primary" onclick="accepted({{$dp->stok}})">Accepted </a> 
</td>

<td>
  <a href="#modalEdit" data-toggle='modal' 
  class="btn  btn-warning" onclick="editForm({{$dp->id}})">Edit</a> 
</td>

<td>
<form method="POST" action="{{url('datapembelian/'.$dp->id )}}">
  @csrf
  @method('DELETE')
  <input type='submit' value='Delete' href="#modalDelete" data-toggle='modal' class='btn btn-danger'
  onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
</form>

<!-- <a class='btn btn-danger' onclick="if(confirm('Apakah anda yakin?')) deleteDataRemoveTR({{$dp->id}})">Delete</a> -->
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
    url:'{{route("datapembelian.editForm")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id},
    success: function(data){
           $('#modalContent').html(data.msg)}
  });
}

function saveDataUpdateTD(id)
{
  var eDeskripsiProduk = $('#eDeskripsiProduk').val();
  // var eStok = $('#eStok').val();
  var eNamaSupplier = $('#eNamaSupplier').val();
  var eAlamatSupplier = $('#eAlamatSupplier').val();
  var eNoteleponSupplier = $('#eNoteleponSupplier').val();
  var eTanggalPemesanan = $('#eTanggalPemesanan').val();
  var eTanggalPenerimaan = $('#eTanggalPenerimaan').val();
  var eStatus = $('#eStatus').val();
  $.ajax({
    type:'POST',
    url:'{{route("datapembelian.saveData")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id,
        'deskripsi_produk':eDeskripsiProduk,
        // 'stok':eStok,
        'nama_supplier':eNamaSupplier,
        'alamat_supplier':eAlamatSupplier,
        'notelepon_supplier':eNoteleponSupplier,
        'tanggal_pemesanan':eTanggalPemesanan,
        'tanggal_penerimaan':eTanggalPenerimaan,
        'status':eStatus,
        },
    success: function(data){
      if(data.status=='oke')
      {
        // alert(data.msg);
        $('#td_deskripsi_produk_'+id).html(eDeskripsiProduk)
        // $('#td_stok_'+id).html(eStok)
        $('#td_nama_supplier_'+id).html(eNamaSupplier)
        $('#td_alamat_supplier_'+id).html(eAlamatSupplier)
        $('#td_notelepon_supplier_'+id).html(eNoteleponSupplier)
        $('#td_tanggal_pemesanan_'+id).html(eTanggalPemesanan)
        $('#td_tanggal_penerimaan_'+id).html(eTanggalPenerimaan)
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
    url:'{{route("datapembelian.deleteData")}}',
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

function showDetailPembelian(data_pembelians_id)
{
  $.ajax({
    type:'POST',
    url:'{{route("datapembelian.showDetailPembelian")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'data_pembelians_id':data_pembelians_id},
    success: function(data){
           $('#showDetailPembelian').html(data.msg)}
  });
}

</script>

@endsection




