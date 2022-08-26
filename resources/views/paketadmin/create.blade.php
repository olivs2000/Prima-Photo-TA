@extends('layout.conquer')

@section('content')

<h3 class="page-title">Tambah Paket Fotografi</h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Paket Fotografi</a>
			</li>
		</ul>
</div>

<form enctype='multipart/form-data' role="form" method="POST" action="{{url('paketadmin')}}">
@csrf 
<div class="form-body">

<div class="form-group">
	<label>Link Gambar</label>
	<input type="text" class="form-control" id="pas_foto" name="gambar">
</div>

<div class="form-group">
	<label>Judul Paket</label>
	<input type="text" class="form-control" name="judul_paket">
</div>

<div class="form-group">
	<label>Durasi</label>
	<input type="time" class="form-control" name="durasi">
</div>

<div class="form-group">
	<label>Jumlah Jepretan</label>
	<input type="text" class="form-control" name="jumlah_jepretan">
</div>

<div class="form-group">
	<label>Harga</label>
	<input type="text" class="form-control" name="harga">
</div>

<div class="form-group">
	<label>Keterangan</label>
	<input type="text" class="form-control" name="keterangan">
</div>

<div class="form-group">
	<label>Kategori</label>
	<select class="form-control" name="kategoris_id">
		@foreach($kategoris as $kategori)
			<option value='{{$kategori->id}}'>{{$kategori->nama}}</option> 
		@endforeach
	</select>
</div>

</div>

<div class="form-actions">
    <button type="submit" class="btn btn-info">Submit</button>
    <a href="{{url('paketadmin')}}" type="button" class="btn btn-default">Cancel</a>
</div>

</form>
@endsection