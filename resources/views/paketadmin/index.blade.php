@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Paket Fotografi <small></small>
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
<a href="{{url('paketadmin/create')}}" class="btn btn-info" type="button">+ Tambah Paket Fotografi</a>	
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
      <th>Judul Paket</th>
      <th>Durasi</th>
      <th>Jepretan</th>
      <th>Harga</th>
      <th>Keterangan</th>
      <th>Kategori</th>
      <th colspan='2'></th>
   </tr>
  </thead>

<tbody>   

<?php $no = 0;?>
@foreach($data as $p)
<?php $no++ ;?>

<tr>
  <td>{{$no}}</td>
  <td id='td-gambar-{{$p->id}}'><img src='{{$p->gambar}}' height='50px'></td>
  <td id='td-judul_paket-{{$p->id}}'>{{$p->judul_paket}}</td>
  <td id='td-durasi-{{$p->id}}'>{{$p->durasi}}</td>
  <td id='td-jumlah_jepretan-{{$p->id}}'>{{$p->jumlah_jepretan}}</td>
  <td id='td-harga-{{$p->id}}'>Rp. {{number_format($p->harga)}}</td>
  <td id='td-keterangan-{{$p->id}}'>{{$p->keterangan}}</td>
  <td id='td-kategoris_id-{{$p->id}}'>{{$p->nama}}</td>      
  
  @can('change-permission')
  <td>
    <a href="{{url('paketadmin/'.$p->id.'/edit') }}" class="btn btn-warning">Ubah</a>
  </td>
  @endcan

  @can('delete-permission')
  <td>
    <form method="POST" action="{{url('paketadmin/'.$p->id )}}">
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





