@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Data Alat Fotografi <small></small>
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
<a href="{{url('alatfotografi/create')}}" class="btn btn-info" type="button">+ Tambah Alat Fotografi</a>	
</div>

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
      <th>Nama Alat</th>
      <th>Nama Peminjam</th>
      <th>Status</th>
      <th colspan='2'></th>
    </tr>
  </thead>

<tbody>

@foreach($data as $af)
<tr>
  <td>{{ $af->id }}</td>
  <td id='td-nama_alat-{{$af->id}}'>{{ $af->nama_alat }}</td>
  <td id='td-nama_peminjam-{{$af->id}}'>{{ $af->nama_peminjam }}</td>
  <td id='td-status-{{$af->id}}'> 
    @if($af->status == 'tersedia')
      <span class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">Tersedia</span>
    @else
      <span class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">Tidak Tersedia</span>
    @endif
  </td>  

  <td>
    <a href="{{url('alatfotografi/'.$af->id.'/edit') }}" class="btn btn-warning">Ubah</a></td>
  </td>

  <td>
    <form method="POST" action="{{url('alatfotografi/'.$af->id )}}">
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

</div>


