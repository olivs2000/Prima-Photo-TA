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

<form enctype='multipart/form-data' role="form" method="POST" action="{{route('paket.saveData')}}">
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



<div class="panel panel-default">
	<div class="panel-heading">
		<label>Gambar Detail</label>
		{{-- <input type="file" class="dropzone" name="gambar_detail"> --}}
	</div>

	<div class="panel-body">
		<div class="dropzone" id="myDropzone"></div>
	</div>
</div>

<br>

<div class="panel panel-default">
	<div class="panel-heading">
		<label>Hasil Upload Gambar Detail</label>
	</div>
	<div class="panel-body">

	</div>
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
    <button type="submit" class="btn btn-info" id="submit-all">Submit</button>
    <a href="{{url('paketadmin')}}" type="button" class="btn btn-default">Cancel</a>
</div>

</form>

@endsection


@section('javascript')

{{-- Cara 4  --}}
<script type="text/javascript">
	Dropzone.options.myDropzone= {
		url: "{{route('dropzone.upload')}}",
		autoProcessQueue: false,
		uploadMultiple: true,
		parallelUploads: 5,
		maxFiles: 5,
		maxFilesize: 1,
		acceptedFiles: 'image/*',
		addRemoveLinks: true,
		init: function() {
			dzClosure = this; // Makes sure that 'this' is understood inside the functions below.

			// for Dropzone to process the queue (instead of default form behavior):
			document.getElementById("submit-all").addEventListener("click", function(e) {
				// Make sure that the form isn't actually being sent.
				e.preventDefault();
				e.stopPropagation();
				dzClosure.processQueue();
			});

			//send all the form data along with the files:
			this.on("sendingmultiple", function(data, xhr, formData) {
				formData.append("firstname", jQuery("#firstname").val());
				formData.append("lastname", jQuery("#lastname").val());
			});
		}
	}

	$(document).on('click', '.remove_image', function() {
		var name = $(this).attr('id');
		$.ajax({
			url:"{{ route('paketadmin.delete') }}",
			data:{name : name},
			success:function(data)
			{
				load_images(); 
			}
		})
	});

</script>
@endsection