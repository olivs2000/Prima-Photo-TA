@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Ubah Detail Pemesanan </h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Detail Pemesanan</a>
			</li>
		</ul>
</div>

<form role="form" method="POST" action="{{url('detailpemesanan/'.$data->id )}}">
    @csrf 
    @method("PUT")

	<div class="form-body">

      {{-- <div class="form-group">
            <label>Pemesanan</label>
            <input type="text" class="form-control" name="pemesanans" readonly="readonly"  value="{{$data->nama}}">
      </div>
    
       <div class="form-group">
            <label>Paket</label>
            <input type="text" class="form-control" name="pakets" readonly="readonly"  value="{{$data->judul_paket}}">
       </div>
    
       <div class="form-group">
            <label>Penyewaan alat</label>
            <input type="text" class="form-control" name="penyewaan_alats" readonly="readonly"  value="{{$data->nama_alat}}">
      </div>
    
       <div class="form-group">
            <label>Layanan</label>
            <input type="text" class="form-control" name="layanans" readonly="readonly"  value="{{$data->judul_layanan}}">
       </div>
    
       <div class="form-group">
            <label>Produk</label>
            <input type="text" class="form-control" name="produks" readonly="readonly"  value="{{$data->judul_produk}}">
       </div>
    
       <div class="form-group">
            <label>Jumlah</label>
            <input type="text" class="form-control" name="jumlah" readonly="readonly"  value="{{$data->jumlah}}">
       </div>
    
       <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" name="harga" readonly="readonly"  value="{{$data->harga}}">
       </div>
    
       <div class="form-group">
            <label>Total</label>
            <input type="text" class="form-control" name="total" readonly="readonly"  value="{{$data->total}}">
       </div>
    
       <div class="form-group">
            <label>Tanggal Pemesanan</label>
            <input type="date" class="form-control" name="tanggal_pemesanan" readonly="readonly"  value="{{$data->tanggal_pemesanan}}">
       </div> --}}
    
       <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status" value="{{$data->status}}">
            {{-- <option value="selesai">selesai</option> 
            <option value="proses">proses</option>  --}}
            <option>{{$data->status}}</option>
          </select>
      </div>

	</div>

	<div class="form-actions">
        <button type="submit" class="btn btn-info">Submit</button>
		<a href="{{url('detailpemesanan')}}" type="button" class="btn btn-default">Cancel</a>
	</div>

</form>
@endsection