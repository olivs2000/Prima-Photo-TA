<form role="form" method="POST" action="{{url('collaborateadmin/'.$data->id)}}">
    <div class="modal-header" >
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
      <h4 class="modal-title">Ubah Data Collaborate</h4>
    </div>
  
    <div class="modal-body">
  
    @csrf 
    @method('PUT')
    <div class="form-body">
  
    <div class="form-group">
      <label>Status</label>
        <select class="form-control" id="eStatus" name="status">
          <option>Tahap Seleksi</option> 
          <option>Diterima</option> 
          <option>Ditolak</option> 
        </select>
    </div>
     
    </div>
  
    <div class="modal-footer">
      <button type="button" class="btn btn-info" data-dismiss="modal" onclick="saveDataUpdateTD({{$data->id}})">Submit</button>
      <a class="btn btn-default" data-dismiss="modal">Cancel</a>
    </div>
  
    </div>  
  
  </form>