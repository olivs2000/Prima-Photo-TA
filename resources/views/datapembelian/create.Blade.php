@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Tambah Data Pembelian </h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Data Pembelian</a>
			</li>
		</ul>
</div>

<form enctype='multipart/form-data' role="form" method="POST" action="{{url('datapembelian')}}">
@csrf 
<div class="form-body">

<div class="form-group">
<label>Deskripsi Produk</label>
<input type="text" class="form-control" name="deskripsi_produk">
</div>

<div class="form-group">
<label>Nama Supplier</label>
<input type="text" class="form-control" name="nama_supplier">
</div>

<div class="form-group">
<label>Alamat Supplier</label>
<input type="text" class="form-control" name="alamat_supplier">
</div>

<div class="form-group">
<label>No Telepon Supplier</label>
<input type="text" class="form-control" name="notelepon_supplier">
</div>

<div class="form-group">
<label>Tanggal Pemesanan</label>
<input type="date" class="form-control" name="tanggal_pemesanan">
</div>

<div class="form-group">
<label>Tanggal Penerimaan</label>
<input type="date" class="form-control" name="tanggal_penerimaan">
</div>

<div class="form-group">
<label>Status</label>
<select class="form-control" name="status">
<option>proses</option> 
<option>selesai</option> 
</select>
</div>

</div>
    <div class="form-actions">
    <button type="submit" class="btn btn-info">Submit</button>
    <a href="{{url('datapembelian')}}" type="button" class="btn btn-default">Cancel</a>
</div>
</form>
@endsection