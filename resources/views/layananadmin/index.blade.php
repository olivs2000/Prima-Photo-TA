@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Layanan <small></small>
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
<a href="{{url('layananadmin/create')}}" class="btn btn-info" type="button">+ Tambah Layanan</a>	
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
      <th>NO</th>
      <th>Gambar</th>
      <th>Judul Layanan</th>
      <th>Ukuran</th>
      <th>Hasil Cetak</th>
      <th>Harga</th>
      <th>Keterangan</th>
      <th colspan='2'></th>
   </tr>
  </thead>

<tbody>        
  <?php $no = 0;?>
@foreach($data as $l)
<?php $no++ ;?>
<tr>
  <td>{{$no}}</td>
  <td id='td-gambar-{{$l->id}}'><img src='{{$l->gambar}}' height='50px'></td>
  <td id='td-judul_layanan-{{$l->id}}'>{{$l->judul_layanan}}</td>
  <td id='td-ukuran_foto-{{$l->id}}'>{{$l->ukuran_foto}}</td>
  <td id='td-hasil_cetak-{{$l->id}}'>{{$l->hasil_cetak}}</td>
  <td id='td-harga-{{$l->id}}'>Rp. {{number_format($l->harga)}}</td>
  <td id='td-keterangan_layanan-{{$l->id}}'>{{$l->keterangan_layanan}}</td>
  
  <td>
    <a class='btn btn-info' href="{{route('layananadmin.show',$l->id)}}" data-target="#show{{$l->id}}" data-toggle='modal'>Detail</a> 
    
    <div class="modal fade" id="show{{$l->id}}" tabindex="-1" role="basic" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div style="text-align:center">
            <img src="{{asset('/assets/img/cam1.gif')}}"/>
            </div>
        </div>
      </div>
    </div>
  </td>
  
  @can('change-permission')
  <td>
    <a href="{{url('layananadmin/'.$l->id.'/edit') }}" class="btn btn-warning">Ubah</a>
  </td>
  @endcan

  @can('delete-permission')
  <td>
    <form method="POST" action="{{url('layananadmin/'.$l->id )}}">
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





