@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Data Pelanggan <small></small>
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

<table  id="table_contoh" class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>No Telepon</th>
    <th>Email</th>
    {{-- <th colspan='1'></th> --}}
  <tr>
</thead>

<tbody>

@foreach($data as $dp)
<tr>
  <td>{{$dp->id}}</td>
  <td>{{$dp->nama}}</td>
  <td>{{$dp->notelepon}}</td>
  <td>{{$dp->email}}</td>

  {{-- <td>
    <form method="POST" action="{{url('datapelanggan/'.$dp->id )}}">
      @csrf
      @method('DELETE')
      <input type='submit' value='Delete' class='btn btn-xs btn-danger' onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
    </form>
  </td> --}}
</tr>

@endforeach
</tbody>
</table>

@endsection
















