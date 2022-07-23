<form role="form" method="POST" action="{{url('detailpemesanan/'.$data->id)}}">
  <div class="modal-header" >
    <button type="button" class="close"  data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Edit Detail Pemesanan</h4>
  </div>

  <div class="modal-body">

  @csrf 
  @method('PUT')
  <div class="form-body">

	<div class="form-group">
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
  </div>

  <div class="form-group">
    <label>Status</label>
      <select class="form-control" id="eStatus" name="status">
        <option>proses</option> 
        <option>selesai</option> 
      </select>
   </div>
   
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-info" data-dismiss="modal" onclick="saveDataUpdateTD({{$data->id}})">Submit</button>
    <a class="btn btn-default" data-dismiss="modal">Cancel</a>
  </div>

  </div>  

</form>