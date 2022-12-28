@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Alat Fotografi <small></small>
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
<a href="{{url('penyewaanalatadmin/create')}}" class="btn btn-info" type="button">+ Tambah Alat</a>	
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
      <th>Gambar</th>
      <th>Nama Alat</th>
      <th>Stok</th>
      <th>Harga</th>
      <th>Tipe</th>
      <th colspan='2'></th>
   </tr>
  </thead>

<tbody>        

@foreach($data as $pa)
<tr>
  <td>{{$pa->id}}</td>
  <td id='td-gambar-{{$pa->id}}'><img src='{{$pa->gambar}}' height='50px'></td>
  <td id='td-nama_alat-{{$pa->id}}'>{{$pa->nama_alat}}</td>
  <td id='td-stok-{{$pa->id}}'>{{$pa->stok}}</td>
  <td id='td-harga-{{$pa->id}}'>Rp. {{number_format($pa->harga)}}</td>
  <td id='td-tipe-{{$pa->id}}'>{{$pa->tipe}}</td>  
  
  @can('change-permission')
  <td>
    <a href="{{url('penyewaanalatadmin/'.$pa->id.'/edit') }}" class="btn btn-warning">Ubah</a>
  </td>
  @endcan

  @can('delete-permission')
  <td>
    <form method="POST" action="{{url('penyewaanalatadmin/'.$pa->id )}}">
      @csrf
      @method('DELETE')
      <input type='submit' value='Hapus' class='btn btn-danger' onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
    </form>
  </td>
  @endcan

</tr>

@endforeach
</tbody>
</table>


@endsection





