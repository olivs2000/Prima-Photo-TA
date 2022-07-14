<form role="form" method="POST" action="{{url('detailpemesanan/'.$data->id)}}">
      <div class="modal-header">
        <button type="button" class="close" d ata-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Edit Detail Pemesanan</h4>
      </div>
      <div class="modal-body">

    @csrf 
    @method('PUT')
    <div class="form-body">
	<div class="form-group">
		<label>Pemesanan</label>
		<input type="text" class="form-control" id="ePemesanansId" name="pemesanan" readonly="readonly" value="default-value" value="{{$data->nama}}">
    </div>

  <div class="form-group">
		<label>Paket</label>
		<input type="text" class="form-control" id="ePaketsId" name="paket" readonly="readonly" value="default-value" value="{{$data->judul_paket}}">
   </div>

  <div class="form-group">
		<label>Penyewaan alat</label>
		<input type="text" class="form-control" id="ePenyewaanAlatsId" name="penyewaan_alat" readonly="readonly" value="default-value" value="{{$data->nama_alat}}">
  </div>

  <div class="form-group">
		<label>Layanan</label>
		<input type="text" class="form-control" id="eLayanansId" name="layanan" readonly="readonly" value="default-value" value="{{$data->judul_layanan}}">
  </div>

  <div class="form-group">
		<label>Produk</label>
		<input type="text" class="form-control" id="eProduksId" name="produk" readonly="readonly" value="default-value" value="{{$data->judul_produk}}">
  </div>

  <div class="form-group">
		<label>Jumlah</label>
		<input type="date" class="form-control" id="eJumlah" name="jumlah" readonly="readonly" value="default-value" value="{{$data->jumlah}}">
  </div>

  <div class="form-group">
		<label>Harga</label>
		<input type="text" class="form-control" id="eHarga" name="harga" readonly="readonly" value="default-value" value="{{$data->harga}}">
  </div>

  <div class="form-group">
		<label>Total</label>
		<input type="text" class="form-control" id="eTotal" name="total" readonly="readonly" value="default-value" value="{{$data->total}}">
  </div>

  <div class="form-group">
		<label>Tanggal Pemesanan</label>
		<input type="date" class="form-control" id="eTanggalPemesanan" name="tanggal_pemesanan" readonly="readonly" value="default-value" value="{{$data->tanggal_pemesanan}}">
  </div>

  <div class="form-group">
		<label>Tanggal Penerimaan</label>
		<input type="date" class="form-control" id="eTanggalPenerimaan" name="tanggal_penerimaan" readonly="readonly" value="default-value" value="{{$data->tanggal_penerimaan}}">
  </div>

  <div class="form-group">
      <label>Status</label>
      <select class="form-control" id="eStatus" name="status">
          @foreach($data as $s)
              <option value='{{$s->id}}'>{{$s->status}}</option> 
          @endforeach
      </select>
   </div>

  <div class="modal-footer">
      <button type="button" class="btn btn-info" data-dismiss="modal" onclick="saveDataUpdateTD({{$data->id}})">Submit</button>
      <a class="btn btn-default" data-dismiss="modal">Cancel</a>
  </div>
</form>