<form role="form" method="POST" action="{{url('datafotografer/'.$data->id)}}">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Edit Data Fotografer</h4>
  </div>

  <div class="modal-body">

    @csrf 
    @method('PUT')
    <div class="form-body">

	  <div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" id="ePasFoto" name="pas_foto" value="{{$data->pas_foto}}">
    </div>

	 <div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" id="eNama" name="nama" value="{{$data->nama}}">
    </div>

    <div class="form-group">
		<label>Alamat</label>
		<input type="text" class="form-control" id="eAlamat" name="alamat" value="{{$data->alamat}}">
    </div>

    <div class="form-group">
		<label>No Telepon</label>
		<input type="text" class="form-control" id="eNotelepon" name="notelepon" value="{{$data->notelepon}}">
	  </div>

    <div class="form-group">
		<label>Email</label>
		<input type="text" class="form-control" id="eEmail" name="email" value="{{$data->email}}">
  	</div>

    <div class="form-group">
		<label>Alat Fotografi</label>
		<input type="text" class="form-control" id="eAlatFotografi" name="alat_fotografi" value="{{$data->alat_fotografi}}">
  	</div>

  <div class="form-group">
      <label>Status</label>
      <select class="form-control" id="eStatus" name="status">
      <option>Tetap</option> 
      <option>Freelance</option> 
      </select>
  </div>
  
  </div>

  <div class="modal-footer">
      <button type="button" class="btn btn-info" data-dismiss="modal" onclick="saveDataUpdateTD({{$data->id}})">Submit</button>
      <a class="btn btn-default" data-dismiss="modal">Cancel</a>
  </div>

  </div>

</form>