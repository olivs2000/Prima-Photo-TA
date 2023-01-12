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

<form method="POST" action="{{route('paketadmin.saveData')}}" enctype="multipart/form-data">
	@csrf
	<div class="form-body">

	<div class="form-group">
		<label>Link Gambar</label>
		<input type="text" class="form-control" id="pas_foto" name="gambar">
	</div>
	
	<div class="panel panel-default">
		<div class="panel-heading">
			<label>Gambar Detail</label>
		</div>
		<div class="panel-body">
			<input type="file" name="file_foto[]" multiple>
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
		<label>Jumlah Pemotretan</label>
		<input type="number" class="form-control" name="jumlah_jepretan">
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


@section('javascript')
<script type="text/javascript">
	// Dropzone.autoDiscover = false;
// Dropzone.options.demoform = false;	
// let token = $('meta[name="csrf-token"]').attr('content');
// $(function() {
// 	var myDropzone = new Dropzone("div#dropzoneDragArea", { 
// 		paramName: "files",
// 		url: "{{ url('/saveDropzone') }}",
// 		previewsContainer: 'div.dropzone-previews',
// 		addRemoveLinks: true,
// 		autoProcessQueue: false,
// 		uploadMultiple: true,
// 		parallelUploads: 5,
// 		maxFiles: 5,
// 		params: {
// 			_token: token
// 		},
// 		// The setting up of the dropzone
// 		init: function() {
// 			var myDropzone = this;
// 			//form submission code goes here
// 			$("form[name='myDropzone']").submit(function(event) {
// 				//Make sure that the form isn't actully being sent.
// 				event.preventDefault();
// 				URL = $("#myDropzone").attr('action');
// 				formData = $('#myDropzone').serialize();
// 				$.ajax({
// 					type: 'POST',
// 					url: URL,
// 					data: formData,
// 					success: function(result){
// 						if(result.status == "success"){
// 							// fetch the useid 
// 							var userid = result.user_id;
// 							$("#userid").val(userid); // inseting userid into hidden input field
// 							//process the queue
// 							myDropzone.processQueue();
// 						}else{
// 							console.log("error");
// 						}
// 					}
// 				});
// 			});
// 			//Gets triggered when we submit the image.
// 			this.on('sending', function(file, xhr, formData){
// 			//fetch the user id from hidden input field and send that userid with our image
// 			let userid = document.getElementById('userid').value;
// 			formData.append('userid', userid);
// 			});
			
// 			this.on("success", function (file, response) {
// 				//reset the form
// 				$('#myDropzone')[0].reset();
// 				//reset dropzone
// 				$('.dropzone-previews').empty();
// 			});
// 			this.on("queuecomplete", function () {
			
// 			});
			
// 			// Listen to the sendingmultiple event. In this case, it's the sendingmultiple event instead
// 			// of the sending event because uploadMultiple is set to true.
// 			this.on("sendingmultiple", function() {
// 			// Gets triggered when the form is actually being sent.
// 			// Hide the success button or the complete form.
// 			});
			
// 			this.on("successmultiple", function(files, response) {
// 			// Gets triggered when the files have successfully been sent.
// 			// Redirect user or notify of success.
// 			});
			
// 			this.on("errormultiple", function(files, response) {
// 			// Gets triggered when there was an error sending the files.
// 			// Maybe show form again, and notify user of error
// 			});
// 		}
// 	});
// });

	// $(document).on('click', '.remove_image', function() {
	// 	var name = $(this).attr('id');
	// 	$.ajax({
	// 		url:"{{ route('paketadmin.delete') }}",
	// 		data:{name : name},
	// 		success:function(data)
	// 		{
	// 			load_images(); 
	// 		}
	// 	})
	// });

</script>
@endsection