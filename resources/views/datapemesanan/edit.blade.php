@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Ubah Data Pemesanan </h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Data Pemesanan</a>
			</li>
		</ul>
</div>

<form role="form" method="POST" action="{{url('datapemesanan/'.$data->id )}}">
    @csrf 
    @method("PUT")

	<div class="form-body">
    
          <div class="form-group">
               <label>Status Pembayaran</label>
               <select class="form-control" name="status_pembayaran" value="{{$data->status_pembayaran}}">
               <option>{{$data->status_pembayaran}}</option>
               </select>
          </div>

          <div class="form-group">
               <label>Status Pemesanan</label>
               <select class="form-control" name="status_pemesanan" value="{{$data->status_pemesanan}}">
               <option>{{$data->status_pemesanan}}</option>
               </select>
          </div>

          <div class="form-group">
               <label>Estimasi Selesai</label>
               <select class="form-control" name="estimasi_selesai" value="{{$data->estimasi_selesai}}">
               </select>
          </div>

	</div>

	<div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
		<a href="{{url('datapemesanan')}}" type="button" class="btn btn-default">Cancel</a>
	</div>

</form>
@endsection