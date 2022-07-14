<form role="form" method="POST" action="{{url('pegawai/'.$data->id)}}">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
        <h4 class="modal-title">Update Data Pegawai</h4>
      </div>
      <div class="modal-body">

@csrf 
@method('PUT')
<div class="form-body">
<div class="form-group">
<label>Nama</label>
<input type="text" class="form-control" name="nama_supplier" value="{{$data->nama_pegawai}}">
</div>

<label>Alamat</label>
<textarea class="form-control" rows="3" name="address">{{$data->address}}</textarea>
</div>

<div class="form-group">
<label>No telepon</label>
<input type="text" class="form-control" value="{{$data->notelepon}}">
</div>

<div class="modal-footer">
    <button type="button" class="btn btn-info" data-dismiss="modal" onclick="saveDataUpdateTD({{$data->id}})">Submit</button>
    <a class="btn btn-default" data-dismiss="modal">Cancel</a>
</div>
</form>