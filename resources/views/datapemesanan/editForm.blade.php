<form role="form" method="POST" action="{{url('datapemesanan/'.$data->id)}}">
  <div class="modal-header" >
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Ubah Data Pemesanan</h4>
  </div>

  <div class="modal-body">

  @csrf 
  @method('PUT')
  <div class="form-body">

  <div class="form-group">
    <label>Status Pembayaran</label>
      <select class="form-control" id="eStatusPembayaran" name="status_pembayaran">
        <option>proses</option> 
        <option>gagal</option> 
        <option>berhasil</option> 
      </select>
  </div>

  <div class="form-group">
    <label>Status Pemesanan</label>
      <select class="form-control" id="eStatusPemesanan" name="status_pemesanan">
        <option>menunggu konfirmasi</option> 
        <option>proses</option> 
        <option>selesai</option> 
      </select>
  </div>

  <div class="form-group">
    <label>Estimasi Selesai</label>
      <input type="date" class="form-control" id="eEstimasiSelesai" name="eEstimasiSelesai"  value="{{$data->estimasi_selesai}}">
   </div>
   
  </div>

  <div class="modal-footer">
    <button type="button" class="btn btn-info" data-dismiss="modal" onclick="saveDataUpdateTD({{$data->id}})">Submit</button>
    <a class="btn btn-default" data-dismiss="modal">Cancel</a>
  </div>

  </div>  

</form>