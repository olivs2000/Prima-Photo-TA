@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Ubah Data Alat Fotografi </h3>
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

<form role="form" method="POST" action="{{url('alatfotografi/'.$data->id )}}">
    @csrf 
    @method("PUT")

	<div class="form-body">
    
         <div class="form-group">
            <label>Nama Alat</label>
            <input type="text" class="form-control" name="nama_alat" value="{{$data->nama_alat}}">
        </div>
    
        <div class="form-group">
            <label>Nama Peminjam</label>
            <input type="text" class="form-control" name="nama_peminjam" value="{{$data->nama_peminjam}}">
          </div>
    
      <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status" value="{{$data->status}}">
          <option>Tersedia</option> 
          <option>Tidak Tersedia</option> 
          {{-- <option>{{$data->status}}</option> --}}
          </select>
      </div>

	</div>

	<div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
		<a href="{{url('alatfotografi')}}" type="button" class="btn btn-default">Cancel</a>
	</div>

</form>
@endsection