@extends('layout.conquer')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection

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
	<label>Nama Folder Gambar Detail</label>
	<input type="text" class="form-control" name="gambar_detail">
</div>

{{-- <div class="form-group">
	<label>Gambar Detail</label>
	<input type="dropzone" class="form-control" name="gambar_detail">
</div> --}}

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

<form action="/file-upload" class="dropzone" is="my-awesome-dropzone">
<input type="file" name="file" id="">
</form>
@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" integrity="sha512-U2WE1ktpMTuRBPoCFDzomoIorbOyUv0sP8B+INA3EzNAhehbzED1rOJg6bCqPf/Tuposxb5ja/MAUnC8THSbLQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
	Dropzone.options.imageUpload = {
		maxFilesize : 3,
		acceptedFiles: ".jpeg,.jpg,.png,.gif"
	};
</script>
@endsection