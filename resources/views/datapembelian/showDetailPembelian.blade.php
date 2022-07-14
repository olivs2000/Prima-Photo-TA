<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
<h4 class="modal-title">Detail pembelian pada data pembelian {{$deskripsi_produk}}</h4>
</div>

<div class="modal-body">

<div class='row'>
@foreach($data as $dp)
  <div class='col-md-4' style='border:1px solid #eee;text-align:center'>
    {{ $dp->data_pembelians_id }} <br>
    {{ $dp->produks_id }} <br>
    {{ $dp->jumlah }} <br>
    Rp. {{ $dp->harga }} <br>
    Rp. {{ $dp->total }}
   </div>
@endforeach
</div>

</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>

