@extends('layout.conquer')

@section('content')

<h3 class="page-title">Tambah Produk</h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Produk</a>
			</li>
		</ul>
</div>

<form enctype='multipart/form-data' role="form" method="POST" action="{{url('produkadmin')}}">
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
	<label>Judul Produk</label>
	<input type="text" class="form-control" name="judul_produk">
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
	<label>Keterangan</label>
	<input type="text" class="form-control" name="keterangan_produk">
</div>

</div>

<div class="form-actions">
    <button type="submit" class="btn btn-info">Submit</button>
    <a href="{{url('produkadmin')}}" type="button" class="btn btn-default">Cancel</a>
</div>

</form>
@endsection