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

<table class="table" id='dataTable'>
<!-- <div class="col-md-6 col-sm-12"><div class="dataTables_length" id="sample_1_length"><label>  <select name="sample_1_length" aria-controls="sample_1" class="form-control input-xsmall input-inline"><option value="5">5</option><option value="15">15</option><option value="20">20</option><option value="-1">All</option></select> records</label></div></div>
<div id="sample_1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-small input-inline" aria-controls="sample_1"></label></div> -->
<thead>
    <th>No</th>
    <th>Nama</th>
    <th>No Telepon</th>
    <th>Email</th>
    <th>Alamat</th>
    <th>Lokasi Acara</th>
    <th>Tanggal Acara</th>
    <th>Waktu Acara</th>
    <th>Total</th> 
</thead>
<tbody>        
@foreach($data as $dp)
<tr>
    <td>{{$dp->id}}</td>
    <td>{{$dp->nama}}</td>
    <td>{{$dp->notelepon}}</td>
    <td>{{$dp->email}}</td>
    <td>{{$dp->alamat}}</td>
    <td>{{$dp->lokasi_acara}}</td> 
    <td>{{$dp->tanggal_acara}}</td>
    <td>{{$dp->waktu_acara}}</td>
    <td>Rp. {{$dp->total}}</td>   
</tr>

@endforeach
</tbody>
</table>
@endsection




