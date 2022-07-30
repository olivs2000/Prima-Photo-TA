@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Edit Data Fotografer </h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Data Fotografer</a>
			</li>
		</ul>
</div>

<form role="form" method="POST" action="{{url('datafotografer/'.$data->id )}}">
    @csrf 
    @method("PUT")

	<div class="form-body">

        <div class="form-group">
            <label>Foto</label>
            <input type="file" class="form-control" name="pas_foto" value="{{$data->pas_foto}}">
        </div>
    
         <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" name="nama" value="{{$data->nama}}">
        </div>
    
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" class="form-control" name="alamat" value="{{$data->alamat}}">
        </div>
    
        <div class="form-group">
            <label>No Telepon</label>
            <input type="text" class="form-control" name="notelepon" value="{{$data->notelepon}}">
          </div>
    
        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="email" value="{{$data->email}}">
          </div>
    
        <div class="form-group">
            <label>Alat Fotografi</label>
            <input type="text" class="form-control" name="alat_fotografi" value="{{$data->alat_fotografi}}">
          </div>
    
      <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status" value="{{$data->status}}">
          {{-- <option>Tetap</option> 
          <option>Freelance</option>  --}}
          <option>{{$data->status}}</option>
          </select>
      </div>

	</div>

	<div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
		<a href="{{url('datafotografer')}}" type="button" class="btn btn-default">Cancel</a>
	</div>

</form>
@endsection