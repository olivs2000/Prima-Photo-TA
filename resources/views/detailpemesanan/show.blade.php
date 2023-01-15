<div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    {{-- <h4 class="modal-title">{{ $data->nama }}</h4> --}}
    </div>
    
    <div class="modal-body">
      
    <table class="table"> 
    
     <thead>
    {{--  <tr>
      <th>Jenis Pemesanan</th>
      <th>Jumlah</th>
      <th>Harga</th>
      <th>Total</th>
      </tr>--}}
    </thead>  
    
    <tbody>
      @foreach ($data as $detail)
      <tr>
        <th>Jenis Pemesanan</th>
        <td>
            @if($detail->judul_paket!=null)
            {{$detail->judul_paket}}
            @elseif ($detail->judul_produk!=null)
            {{$detail->judul_produk}}
            @elseif ($detail->judul_layanan!=null)
            {{$detail->judul_layanan}}
            @elseif ($detail->nama_alat!=null)
            {{$detail->nama_alat}}
            @endif
        </td>
        </tr>
        
    
        <tr>
        <th>Jumlah</th>
        <td>{{$detail->jumlah}}</td>
        </tr>
        
        <tr>
        <th>Harga</th>
        <td>Rp. {{number_format($detail->harga)}}</td>
        </tr>

      @endforeach

      <tr> 
      <th>Total</th>
      <td>Rp. {{number_format($detail->total)}}</td>
      </tr>

      <tr> 
        <th>Tanggal Transaksi</th>
        <td>{{($detail->tanggal_transaksi)}}</td>
      </tr>

      <tr> 
        <th>Bukti Transfer</th>
        <td><img src='images/{{$detail->bukti_transfer}}' height='80px'></td>
      </tr>

    </tbody>
    
    </table>
    
    </div>
    
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
    </div>
    
    