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
				<a href="#">ALat Fotografi</a>
			</li>
		</ul>
</div>

<form role="form" method="POST" action="{{url('penyewaanalatadmin/'.$data->id )}}">
    @csrf 
    @method("PUT")

	<div class="form-body">

        <div class="form-group">
            <label>Link Gambar</label>
            <input type="text" class="form-control" name="gambar" value="{{$data->gambar}}">
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

	</div>

	<div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
		<a href="{{url('penyewaanalatadmin')}}" type="button" class="btn btn-default">Cancel</a>
	</div>

</form>
@endsection