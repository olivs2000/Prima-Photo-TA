@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Edit Jadwal Fotografer </h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Jadwal Fotografer</a>
			</li>
		</ul>
</div>

<form role="form" method="POST" action="{{url('jadwalfotografer/'.$data->id )}}">
    @csrf 
    @method("PUT")

	<div class="form-body">

        <div class="form-group">
            <label>Detail Pemesanan</label>
            <select class="form-control" name="detail_pemesanans_id">
                @foreach($dataDetailPemesanan as $dp)
                    <option value='{{$dp->id}}'>{{$dp->id}}</option> 
                @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <label>Nama Fotografer</label>
            <select class="form-control" name="data_fotografers_id">
                @foreach($dataFotografer as $df)
                    <option value='{{$df->id}}'>{{$df->nama}}</option> 
                @endforeach
            </select>
        </div>
    
        <div class="form-group">
            <label>Admin Studio</label>
            <select class="form-control" name="admin_studios_id">
               @foreach($dataAdmin as $as)
                    <option value='{{$as->id}}'>{{$as->nama_admin}}</option>  
                @endforeach
            </select>
        </div>
    
    
      <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status" value="{{$data->status}}">
            <option value="selesai">selesai</option> 
            <option value="proses">proses</option> 
            {{-- <option>{{$data->status}}</option> --}}
          </select>
      </div>

	</div>

	<div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
		<a href="{{url('jadwalfotografer')}}" type="button" class="btn btn-default">Cancel</a>
	</div>

</form>
@endsection