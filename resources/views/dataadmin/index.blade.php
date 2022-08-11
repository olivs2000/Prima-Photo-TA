@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Data Admin <small></small>
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

<table  id="table_contoh" class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Nama Admin</th>
    <th>No Telepon</th>
    <th>Email</th>
    <th colspan='1'></th>
  <tr>
</thead>

<tbody>

@foreach($data as $as)
<tr>
  <td>{{$as->id}}</td>
  <td>{{$as->nama_admin}}</td>
  <td>{{$as->notelepon}}</td>
  <td>{{$as->email}}</td>

  <td>
    <form method="POST" action="{{url('dataadmin/'.$as->id )}}">
      @csrf
      @method('DELETE')
      <input type='submit' value='Delete' class='btn btn-xs btn-danger' onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
    </form>
  </td>
</tr>

@endforeach
</tbody>
</table>

@endsection


















