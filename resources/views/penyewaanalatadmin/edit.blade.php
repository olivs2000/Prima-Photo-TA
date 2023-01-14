@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Ubah Alat Fotografi</h3>
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

<form role="form" method="POST" action="{{route('penyewaanalatadmin.update',$data->id)}}" enctype="multipart/form-data">
    @csrf 
    @method("PUT")

	<div class="form-body">

        <div class="form-group">
            <label>Link Gambar</label>
            <input type="text" class="form-control" name="gambar" value="{{$data->gambar}}">
        </div>

        <div class="panel panel-default">
            
            <div class="panel-heading">
                <label>Gambar Detail</label> 
            </div><br>
            
            &nbsp; &nbsp;

            <input type="hidden" name="nama_folder" value="{{$data->nama_folder}}">
            
            @foreach ( $data->gambar_detail as $detail) 
            <img src='{{$detail}}' height='50px'> 
                @php
                    $filename = explode('/', $detail);
                    $filename = end($filename);
                @endphp
            <input type='button' value='Hapus' class='btn btn-xs btn-danger btn-sm m-b-10 m-l-5' 
                onclick= "deleteGambar('{{$data->nama_folder}}', '{{$filename}}')"/>
            @endforeach 

            <div class="panel-body">
                <input type="file" name="file_foto[]" multiple>
            </div>
        </div>
    
         <div class="form-group">
            <label>Nama Alat</label>
            <input type="text" class="form-control" name="nama_alat" value="{{$data->nama_alat}}">
        </div>
    
        <div class="form-group">
            <label>Stok</label>
            <input type="stok" class="form-control" name="stok" value="{{$data->stok}}">
        </div>
    
        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" value="{{$data->harga}}">
        </div>
    
        <div class="form-group">
            <label>Tipe</label>
            <input type="text" class="form-control" name="tipe" value="{{$data->tipe}}">
        </div>

        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status" value="{{$data->status}}">
            <option>Tersedia</option> 
            <option>Habis</option> 
            </select>
        </div>

	</div>

	<div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
		<a href="{{url('penyewaanalatadmin')}}" type="button" class="btn btn-default">Cancel</a>
	</div>

</form>
@endsection

@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
    function deleteGambar(foldername, filename){
        swal({
              title: `Yakin ingin menghapus gambar?`,
              text: "Jika anda menghapus gambar ini, gambar tidak dapat kembali lagi.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
                $.ajax({
                    type: "POST",
                    url: "{{route('delete.gambar')}}",
                    data: {
                        _token: "{{ csrf_token() }}",
                        nama_folder:foldername,
                        nama_gambar:filename,
                    },
                    success: function (data) {
                        location.reload();
                    }         
                });
            }
          });
    }

	$(document).on('click', '.remove_image', function() {
		var name = $(this).attr('id');
		$.ajax({
			url:"{{ route('penyewaanalatadmin.delete') }}",
			data:{name : name},
			success:function(data)
			{
				load_images(); 
			}
		})
	});

</script>
@endsection