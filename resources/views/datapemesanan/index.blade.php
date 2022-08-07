@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Data Pemesanan <small></small>
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

<table  id="table_contoh" class="table">
<thead>
  <tr>
    <th>ID</th>
    <th>Nama</th>
    <th>No Telepon</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Lokasi Acara</th>
    <th>Tanggal Acara</th>
    <th>Waktu Acara</th>
    <th>Total</th>  
  <tr>
</thead>

<tbody>

@foreach($data as $p)
<tr>
  <td>{{$p->id}}</td>
  <td>{{$p->nama}}</td>
  <td>{{$p->notelepon}}</td>
  <td>{{$p->email}}</td>
  <td>{{$p->alamat}}</td>
  <td>{{$p->lokasi_acara}}</td>
  <td>{{$p->tanggal_acara}}</td>
  <td>{{$p->waktu_acara}}</td>
  <td>Rp. {{$p->total}}</td>  
</tr>

@endforeach
</tbody>
</table>

@endsection








