@extends('layout.conquer')

@section('content')

<h3 class="page-title">Tambah Alat Fotografi</h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Alat Fotografi</a>
			</li>
		</ul>
</div>

<form enctype='multipart/form-data' role="form" method="POST" action="{{url('penyewaanalatadmin')}}">
@csrf 
<div class="form-body">

<div class="form-group">
	<label>Link Gambar</label>
	<input type="text" class="form-control" name="gambar">
</div>

<div class="form-group">
	<label>Gambar Detail</label>
	<input type="text" class="form-control" name="gambar_detail">
</div>

<div class="form-group">
	<label>Nama Alat</label>
	<input type="text" class="form-control" name="nama_alat">
</div>

<div class="form-group">
	<label>Stok</label>
	<input type="stok" class="form-control" name="stok">
</div>

<div class="form-group">
	<label>Harga</label>
	<input type="text" class="form-control" name="harga">
</div>

<div class="form-group">
	<label>Tipe</label>
	<input type="text" class="form-control" name="tipe">
</div>

</div>

<div class="form-actions">
    <button type="submit" class="btn btn-info">Submit</button>
    <a href="{{url('penyewaanalatadmin')}}" type="button" class="btn btn-default">Cancel</a>
</div>

</form>
@endsection