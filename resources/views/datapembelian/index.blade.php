@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Data Pembelian <small></small>
</h3>
<div class="page-bar">
<ul class="page-breadcrumb">
  <li>
    <i class="fa fa-home"></i>
    <a href="index.html">Master</a>
    <i class="fa fa-angle-right"></i>
  </li>
  <li>
    <a href="#">Prima Photo</a>
  </li>
</ul>

<div class="page-toolbar">
<a href="{{url('datapembelian/create')}}" class="btn btn-info" type="button">+ Add Data Pembelian</a>	
</div>

</div>

<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog modal-wide">
    <div class="modal-content" id="modalContent">
    <div style="text-align:center">
    <img src="{{asset('/assets/img/cam1.gif')}}"/>
    </div>
    </div>
  </div>
</div>

@if(Session::has('status'))
<div class="alert alert-success">
{{Session::get('status')}}
</div>
@endif

<div class="alert alert-success" id='pesan' style="display:none"></div>

@if(session('error'))
<div class="alert alert-danger">
{{session('error')}}
</div>
@endif 

<table class="table" id='dataTable'>
  <thead>
    <tr>
      <th>ID</th>
      <th>Deskripsi</th>
      <th>Stok</th>
      <th>Nama Supplier</th>
      <th>Alamat Supplier</th>
      <th>No Telepon Supplier</th>
      <th>Tanggal Pemesanan</th>
      <th>Tanggal Penerimaan</th>
      <th>Status</th>
      <th colspan='1'></th>
   </tr>
  </thead>

<tbody>        

@foreach($data as $dp)
<tr>
  <td>{{$dp->id}}</td>

  <td id='td-deskripsi_produk-{{$dp->id}}'>{{$dp->deskripsi_produk}}

      <!-- Start modal detail pembelian -->
      {{-- <div class="page-toolbar">
        <a href='show-detail' data-toggle='modal'  onclick='datapembelian/showDetail/({{$dp->id}})' >{{$dp->deskripsi_produk}}</a>
      </div>

       <br>

      <div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" >

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
              <h4 class="modal-title">{{ $data->judul_produk }}</h4>
            </div>
              
              <div class="modal-body">
                
              <table class="table" id="detai_pembelian"> 
              
              <thead>
                <tr>
                <th>Data</th>
                <th>Hasil</th>
                </tr>
              </thead> 
              
              <tbody>
                  <tr>
                  <th>Nama Produk</th>
                  <th>Jumlah</th>
                  <th>Harga</th>
                  
                  </tr>

                  <tr>
                    <td>{{ $data->judul_produk }}</td>
                    <td>{{ $data->jumlah }}</td>
                  </tr>
                  
                  <tr>
                  
                  <td>{{ $data->harga }}</td>
                  </tr>
              
                  <tr> 
                  <th>Total</th>
                  <td>{{ $data->total }}</td>
                  </tr>
              </tbody> 
              
              </table>
              
              </div>
              
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              
              
          </div>
        </div>
      </div>  --}}
      <!-- End modal detail pembelian -->

  </td>

  <td id='td-stok-{{$dp->id}}'>{{$dp->stok}}</td>
  <td id='td-nama_supplier-{{$dp->id}}'>{{$dp->nama_supplier}}</td>
  <td id='td-alamat_supplier-{{$dp->id}}'>{{$dp->alamat_supplier}}</td>
  <td id='td-notelepon_supplier-{{$dp->id}}'>{{$dp->notelepon_supplier}}</td>
  <td id='td-tanggal_pemesanan-{{$dp->id}}'>{{$dp->tanggal_pemesanan}}</td>   
  <td id='td-tanggal_penerimaan-{{$dp->id}}'>{{$dp->tanggal_penerimaan}}</td>     
  <td id='td-status-{{$dp->id}}'>    
  @if($dp->status == 'proses')
    <span class="btn btn-xs btn-default btn-sm m-b-10 m-l-5">proses</span>
  @else
    <span class="btn btn-xs btn-success btn-sm m-b-10 m-l-5">selesai</span>
  @endif
  </td> 

  <td>
    <a href="#modalEdit" data-toggle='modal' class="btn btn-primary" onclick="accepted({{$dp->stok}})">Accepted </a> 
  </td>

  <td>
    <a href="{{url('datapembelian/'.$dp->id.'/edit') }}" class="btn btn-warning">Edit</a></td>
  </td>

  <td>
    <form method="POST" action="{{url('datapembelian/'.$dp->id )}}">
      @csrf
      @method('DELETE')
    <input type='submit' value='Delete' href="#modalDelete" data-toggle='modal' class='btn btn-danger'
    onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
    </form>
  </td>
</tr>

@endforeach
</tbody>
</table>

<div class="modal fade" id="myModal" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
     <div class="modal-content" id="showDetail">
       <img src="{{asset('/assets/img/cam1.gif')}}"/>
     </div>
  </div>
</div>

@endsection

</div>

@section('javascript')
<script>
function edit(id)
{
  $.ajax({
    type:'POST',
    url:'{{route("datapembelian.edit")}}',
    data:{'_token':'<?php echo csrf_token() ?>',
        'id':id},
    success: function(data)
    {
      $('#modalContent').html(data.msg)
    },
        error: function(data) 
    {
        alert("ajax error, json: " + data);
    }
  });
}

// function saveDataUpdateTD(id)
// {
//   var eDeskripsiProduk = $('#eDeskripsiProduk').val();
//   var eJumlah = $('#eJumlah').val();
//   var eHarga = $('#eHarga').val();
//   var eTotal = $('#eTotal').val();
//   var eNamaSupplier = $('#eNamaSupplier').val();
//   var eAlamatSupplier = $('#eAlamatSupplier').val();
//   var eNoteleponSupplier = $('#eNoteleponSupplier').val();
//   var eTanggalPemesanan = $('#eTanggalPemesanan').val();
//   var eTanggalPenerimaan = $('#eTanggalPenerimaan').val();
//   var eStatus = $('#eStatus').val();
//   $.ajax({
//     type:'POST',
//     url:'{{route("datapembelian.saveData")}}',
//     data:{'_token':'<?php echo csrf_token() ?>',
//         'id':id,
//         'deskripsi_produk':eDeskripsiProduk,
//         'jumlah':eJumlah,
//         'harga':eHarga,
//         'total':eTotal,
//         'nama_supplier':eNamaSupplier,
//         'alamat_supplier':eAlamatSupplier,
//         'notelepon_supplier':eNoteleponSupplier,
//         'tanggal_pemesanan':eTanggalPemesanan,
//         'tanggal_penerimaan':eTanggalPenerimaan,
//         'status':eStatus,
//         },
//     success: function(data){
//       if(data.status=='oke')
//       {
//         // alert(data.msg);
//         $('#td_deskripsi_produk_'+id).html(eDeskripsiProduk)
//         $('#td_jumlah_'+id).html(eJumlah)
//         $('#td_harga_'+id).html(eHarga)
//         $('#td_total_'+id).html(eTotal)
//         $('#td_nama_supplier_'+id).html(eNamaSupplier)
//         $('#td_alamat_supplier_'+id).html(eAlamatSupplier)
//         $('#td_notelepon_supplier_'+id).html(eNoteleponSupplier)
//         $('#td_tanggal_pemesanan_'+id).html(eTanggalPemesanan)
//         $('#td_tanggal_penerimaan_'+id).html(eTanggalPenerimaan)
//         $('#td_status_'+id).html(eStatus)
//         $('#pesan').show();
//         $('#pesan').html(data.msg)
//       }
//     }
//   });
// }
</script>

@endsection




