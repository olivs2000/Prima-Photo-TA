<form role="form" method="POST" action="{{url('datapembelian/'.$data->id)}}">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Ubah Data Pembelian</h4>
  </div>

  <div class="modal-body">

  @csrf 
  @method('PUT')
<div class="form-body">

<div class="form-group">
  <label>Deskripsi Produk</label>
  <input type="text" class="form-control" id="eDeskripsiProduk" name="deskripsi_produk" value="{{$data->deskripsi_produk}}">
</div>

<div class="form-group">
  <label>Stok</label>
  <input type="text" class="form-control" id="eStok" name="total_produk" value="{{$data->stok}}">
  </div> 

<div class="form-group">
  <label>Nama Supplier</label>
  <input type="text" class="form-control" id="eNamaSupplier" name="nama_supplier" value="{{$data->nama_supplier}}">
</div>
  
<div class="form-group">
  <label>Alamat Supplier</label>
  <textarea class="form-control" rows="3" id="eAlamatSupplier" name="alamat_supplier">{{$data->alamat_supplier}}</textarea>
</div>

<div class="form-group">
  <label>No Telepon Supplier</label>
  <input type="text" class="form-control" id="eNoteleponSupplier" name="notelepon_supplier" value="{{$data->notelepon_supplier}}">
</div>

<div class="form-group">
  <label>Tanggal Pemesanan</label>
  <input type="date" class="form-control" id="eTanggalPemesanan" name="tanggal_pemesanan" value="{{$data->tanggal_pemesanan}}">
</div>

<div class="form-group">
  <label>Tanggal Penerimaan</label>
  <input type="date" class="form-control" id="eTanggalPenerimaan" name="tanggal_penerimaan" value="{{$data->tanggal_penerimaan}}">
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