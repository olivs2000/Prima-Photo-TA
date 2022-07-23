<form role="form" method="POST" action="{{url('jadwalfotografer/'.$data->id)}}">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title">Edit Jadwal Fotografer</h4>
  </div>

  <div class="modal-body">

    @csrf 
    @method('PUT')
    <div class="form-body">

    <div class="form-group">
        <label>Detail Pemesanan</label>
        <select class="form-control" id="eDetailPemesanansId" name="detail_pemesanans_id">
            @foreach($data as $dp)
                <option value='{{$dp->id}}'>{{$dp->id}}</option> 
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Nama Fotografer</label>
        <select class="form-control" id="eDataFotografersId" name="data_fotografers_id">
            @foreach($data as $df)
                <option value='{{$df->id}}'>{{$df->nama}}</option> 
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Admin Studio</label>
        <select class="form-control" id="eAdminStudiosId" name="admin_studios_id">
            @foreach($data as $as)
                <option value='{{$as->id}}'>{{$as->nama_admin}}</option> 
            @endforeach
        </select>
    </div>


  <div class="form-group">
      <label>Status</label>
      <select class="form-control" id="eStatus" name="status">
        <option>selesai</option> 
        <option>proses</option> 
      </select>
  </div>

  </div>

  <div class="modal-footer">
      <button type="button" class="btn btn-info" data-dismiss="modal" onclick="saveDataUpdateTD({{$data->id}})">Submit</button>
      <a class="btn btn-default" data-dismiss="modal">Cancel</a>
  </div>

  </div>

</form>