@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Ubah Layanan</h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Layanan</a>
			</li>
		</ul>
</div>

<form role="form" method="POST" action="{{route('layananadmin.update',$data->id)}}"  enctype="multipart/form-data">
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
            </div>
        
            <br>
            
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
            <label>Judul Layanan</label>
            <input type="text" class="form-control" name="judul_layanan" value="{{$data->judul_layanan}}">
        </div>
    
        <div class="form-group">
            <label>Ukuran</label>
            <input type="text" class="form-control" name="ukuran_foto" value="{{$data->ukuran_foto}}">
        </div>

        <div class="form-group">
            <label>Hasil Cetak</label>
            <select class="form-control" name="hasil_cetak" value="{{$data->hasil_cetak}}">
              <option value="Warna">Warna</option> 
              <option value="Hitam Putih">Hitam Putih</option> 
              <option value="Hitam Putih&Warna">Hitam Putih&Warna</option> 
            </select>
        </div>
    
        <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" value="{{$data->harga}}">
        </div>
    
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" class="form-control" name="keterangan_layanan" value="{{$data->keterangan_layanan}}">
        </div>

	</div>

	<div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
		<a href="{{url('layananadmin')}}" type="button" class="btn btn-default">Cancel</a>
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
			url:"{{ route('layananadmin.delete') }}",
			data:{name : name},
			success:function(data)
			{
				load_images(); 
			}
		})
	});

</script>
@endsection