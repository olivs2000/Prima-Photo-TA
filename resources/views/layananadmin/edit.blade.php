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

<form role="form" method="POST" action="{{url('layananadmin/'.$data->id )}}">
    @csrf 
    @method("PUT")

	<div class="form-body">

        <div class="form-group">
            <label>Link Gambar</label>
            <input type="text" class="form-control" name="gambar" value="{{$data->gambar}}">
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