@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Edit Data Pembelian </h3>
<div class="page-bar">
	  <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Master</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Data Pembelian</a>
			</li>
		</ul>


<!-- Start modal edit detail pembelian -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" >
	
			<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Edit Detail Pembelian</h4>
			</div>

			<form method="POST" id="submitFormDetail">

				@csrf 
				<div class="modal-body">
					<div class="form-body">

					<div class="form-group">
						<label>Nama Produk</label>
							<Select id="list-produk" class="form-control" onchange="setIdProduk(this);">
								<option value="">Choose the product..</option>
							</Select>
						<input type="hidden" id="produks_id" name="produks_id"  class="form-control" value="{{$data->produks_id}}">
						<input type="hidden" id="nama_produk" name="nama_produk"  class="form-control" value="{{$data->nama_produk}}">
					</div>

					<input type="hidden" name="data_pembelians_id" value="{{$data->id}}">

					<div class="form-group">
						<label>Jumlah</label>
						<input type="text" id="jumlah" class="form-control" name="jumlah" value="{{$data->jumlah}}">
					</div>

					<div class="form-group">
						<label>Harga</label>
						<input type="text" id="harga" class="form-control" name="harga" value="{{number_format($data->harga,0)}}">
					</div>

					<div class="form-group">
						<label>Total</label>
						<input type="text" id="total" class="form-control" name="total" readonly="readonly" value="{{$data->total}}">
					</div>

					</div>		
				</div>

				<div class="modal-footer">
					<button type="submit" onclick="editDetailPembelian()" class="btn btn-info">Submit</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>

			</form>

		</div>
	</div>
</div> 
<!-- End modal edit detail pembelian -->

</div>

@if(session('status'))
	<div class="alert alert-success">
		{{session('status')}}
	</div>
@endif

<div class="alert alert-success" id='pesan' style="display:none"></div>

@if(session('error'))
	<div class="alert alert-danger">
		{{session('error')}}
	</div>
@endif 

<form role="form" method="POST" action="{{url('datapembelian/'.$data->id )}}">
  @csrf 
  @method("PUT")
	<div class="form-body">

		<div class="form-group">
			<label>Deskripsi</label>
			<input type="text" class="form-control" name="deskripsi_produk" value="{{$data->deskripsi_produk}}">
		</div>

		<div class="form-group">
			<label>Nama Supplier</label>
			<input type="text" class="form-control" name="nama_supplier" value="{{$data->nama_supplier}}">
		</div>
        
		<div class="form-group">
			<label>Alamat Supplier</label>
			<textarea class="form-control" rows="3" name="alamat_supplier">{{$data->alamat_supplier}}</textarea>
		</div>
		
		<div class="form-group">
			<label>No Telepon Supplier</label>
			<input type="text" class="form-control" name="notelepon_supplier" value="{{$data->notelepon_supplier}}">
		</div>
		
		<div class="form-group">
			<label>Tanggal Pemesanan</label>
			<input type="date" class="form-control" name="tanggal_pemesanan" value="{{$data->tanggal_pemesanan}}">
		</div>
		
		<div class="form-group">
			<label>Tanggal Penerimaan</label>
			<input type="date" class="form-control" name="tanggal_penerimaan" value="{{$data->tanggal_penerimaan}}">
		</div>
        
		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="status" value="{{$data->status}}">
			<option value="selesai">selesai</option> 
			<option value="proses">proses</option> 
			</select>
		</div>
	</div>
	
	<div class="form-actions">
		<button type="submit" class="btn btn-info">Submit</button>
		<a href="{{url('datapembelian')}}" type="button" class="btn btn-default">Cancel</a>
	</div>
</form>

<br><br>


<!-- Start modal tambah detail pembelian -->
<div class="page-toolbar">
	<button id="create-detail" class="btn btn-xs btn-info btn-sm m-b-10 m-l-5">+ Tambah Detail Pembelian</button>
</div>

<br>

<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" >

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Tambah Detail Pembelian</h4>
			</div>

			<div class="modal-body">

			@csrf 
			<div class="form-body">

			<div class="form-group">
				<label>Nama Produk</label>
					<Select id="list-produk2" class="form-control" onchange="setIdProduk2(this);">
						<option value="">Choose the product..</option>
					</Select>
				<input type="hidden" id="produks_id2" value="" class="form-control">
				<input type="hidden" id="nama_produk2" value="" class="form-control">
			</div>

			<div class="form-group">
				<label>Jumlah</label>
				<input type="text" id="jumlah2" class="form-control" name="jumlah">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="text" id="harga2" class="form-control" name="harga">
			</div>

			<div class="form-group">
				<label>Total</label>
				<input type="text" id="total2" class="form-control" name="total" readonly="readonly">
			</div>

			</div>
				<div class="form-actions">
			</div>

			</div>

			<div class="modal-footer">
				<button type="submit" onclick="insertDetailPembelian()" class="btn btn-info">Submit</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			</div>

		</div>
	</div>
</div>
<!-- End modal tambah detail pembelian -->


<table class="table">
	<thead>
		<tr>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Total</th>
			<th colspan='2'></th>
		</tr>
	</thead>
	<tbody id="detail-pembelian">
		@foreach ($dataDetailPembelian as $detail)
			<tr>
				<td>
					{{$detail->judul_produk}}
				</td>
				<td>
					{{$detail->jumlah}}
				</td>
				<td>
					{{$detail->harga}}
				</td>
				<td>
					{{$detail->total}}
				</td>
				<td>
					<button onclick="getDetailPembelian({{$detail->id}})"  data-toggle='modal' class="btn btn-xs btn-warning btn-sm m-b-10 m-l-5">Edit</button>
				</td>
				<td>
					<form method="POST"  action="{{route('detailpembelian.destroy')}}">
						@csrf
						<input type="hidden" name="detail_pembelian_id" value="{{$detail->id}}">
						<input type="hidden" name="data_pembelians_id" value="{{$data->id}}">
						<input type='submit' value='Delete' href="#modalDelete" data-toggle='modal' class="btn btn-xs btn-danger btn-sm m-b-10 m-l-5"
						onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
					</form>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>
@endsection


@section('initialscript')
<script>
	var listDetailPembelian = [];

	function editDetailPembelian(){
		var namaProduk = $('#nama_produk').val();
		var jumlah = $('#jumlah').val();
		var harga = $('#harga').val();
		var id_produk = $('#produks_id').val();
		var total = $('#total').val();

		var sent = {
			nama_produk: namaProduk,
			produks_id: id_produk,
			jumlah: jumlah,
			harga: harga,
			total: total
		}

		listDetailPembelian.push(sent);
	}

	function insertDetailPembelian(){
		var namaProduk = $('#nama_produk2').val();
		var jumlah = $('#jumlah2').val();
		var harga = $('#harga2').val();
		var id_produk = $('#produks_id2').val();
		var total = $('#total2').val();
		// var total = $('#total').text(); jadikan type lable dulu

		var sent = {
			_token : '{{ csrf_token() }}',
			nama_produk: namaProduk,
			produks_id: id_produk,
			jumlah: jumlah,
			harga: harga,
			total: total,
			data_pembelians_id:"{{$data->id}}",
		}

		var url = "{{ route('detailpembelian.store') }}";

		$.post(url, sent, function(response, textStatus) {
			window.location.href = response.routing;
		});
	}

	$( "#jumlah" ).keyup(function() {
		var jumlahBarang = parseInt(this.value);
		var hargaBarang = parseInt($("#harga").val());
		var totalBarang = jumlahBarang * hargaBarang;
		if(isNaN(totalBarang)) {
			totalBarang = 0;
		}
		$("#total").val(totalBarang+"");
	});

	$( "#harga" ).keyup(function() {
		var jumlahBarang = parseInt($("#jumlah").val());
		var hargaBarang = parseInt(this.value);
		var totalBarang = jumlahBarang * hargaBarang;
		if(isNaN(totalBarang)) {
			totalBarang = 0;
		}
		$("#total").val(totalBarang+"");
	});

	$( "#jumlah2" ).keyup(function() {
		var jumlahBarang = parseInt(this.value);
		var hargaBarang = parseInt($("#harga2").val());
		var totalBarang = jumlahBarang * hargaBarang;
		if(isNaN(totalBarang)) {
			totalBarang = 0;
		}
		$("#total2").val(totalBarang+"");
	});

	$( "#harga2" ).keyup(function() {
		var jumlahBarang = parseInt($("#jumlah2").val());
		var hargaBarang = parseInt(this.value);
		var totalBarang = jumlahBarang * hargaBarang;
		if(isNaN(totalBarang)) {
			totalBarang = 0;
		}
		$("#total2").val(totalBarang+"");
	});

	function setIdProduk(produk){
		$('#produks_id').val(produk.value);
		$('#nama_produk').val(produk.options[produk.selectedIndex].text);
	}

	function setIdProduk2(produk){
		$('#produks_id2').val(produk.value);
		$('#nama_produk2').val(produk.options[produk.selectedIndex].text);
	}

	$(document).ready(function(){
		$('#create-detail').on('click', function (e) {
			$.get("{{ route('get.list.produk2') }}", function(response, textStatus){
				response.forEach(produk => {
					$('#list-produk2').append("<option value='"+produk.id+"'>"+produk.judul_produk+"</option>");
				});

				$('#modalCreate').modal('show');
			});
		});
	});

	function getDetailPembelian(idDetail){
		var url = "{{ route('detailpembelian.getDetail',':id') }}";
		url = url.replace(':id',idDetail);
		$.get(url, function(response, textStatus){
			$.get("{{ route('get.list.produk') }}", function(responseProduk, textStatus){
				responseProduk.forEach(produk => {
					if (produk.id == response.produks_id) {
						$('#list-produk').append("<option value='"+produk.id+"' selected>"+produk.judul_produk+"</option>");
					}else{
						$('#list-produk').append("<option value='"+produk.id+"'>"+produk.judul_produk+"</option>");
					}
				});
				$('#jumlah').val(response.jumlah);
				$('#harga').val(response.harga);
				$('#total').val(response.total);
				$('#produks_id').val(response.produks_id);
				$('#nama_produk').val(response.nama_produk);

				var urlUpdate = "{{route('detailpembelian.edit',':id')}}";
				urlUpdate = urlUpdate.replace(':id',idDetail);
				$('#submitFormDetail').attr('action', urlUpdate);
				$('#modalEdit').modal('show');
			});
		});
	}

	function submitDataPembelian(){
		var deskripsi = $('#deskripsi').val();
		var namaSupplier = $('#nama_supplier').val();
		var alamatSupplier = $('#alamat_supplier').val();
		var tlpSupplier = $('#tlp_supplier').val();
		var tglPesan = $('#tgl_pesan').val();
		var tglTerima = $('#tgl_terima').val();
		var status = $( "#status" ).val();
		var sent = {
			_token : '{{ csrf_token() }}',
			deskripsi_produk: deskripsi,
			nama_supplier: namaSupplier,
			alamat_supplier: alamatSupplier,
			notelepon_supplier: tlpSupplier,
			tanggal_pemesanan: tglPesan,
			tanggal_penerimaan: tglTerima,
			status: status,
			detail_pembelian: listDetailPembelian
		}

		$.post('{{ route("datapembelian.edit") }}', sent, function(response, textStatus) {
			console.log(response);
			
			window.location.replace("http://127.0.0.1:8000/datapembelian");
			window.location.href = "http://127.0.0.1:8000/datapembelian";
		});
	}
</script>
@endsection





