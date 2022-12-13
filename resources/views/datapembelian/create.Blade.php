@extends('layout.conquer')

@section('content')

<h3 class="page-title">	Tambah Data Pembelian </h3>
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


<!-- Start modal tambah detail pembelian -->
<div class="page-toolbar">
	<button id="create-detail" class="btn btn-info">+ Tambah Detail Pembelian</button>
</div>

</div>

<div class="modal fade" id="modalCreate" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" >

			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">Tambah Detail Pembelian</h4>
			</div>

			<div class="modal-body">

			@csrf 
			<div class="form-body" id="#myTable">

			<div class="form-group">
				<label>Nama Produk</label>
					<Select id="list-produk" class="form-control" onchange="setIdProduk(this);">
						<option value="">Choose the product..</option>
					</Select>
				<input type="hidden" id="produks_id" value="" class="form-control">
				<input type="hidden" id="nama_produk" value="" class="form-control">
			</div>

			<div class="form-group">
				<label>Jumlah</label>
				<input type="number" id="jumlah" class="form-control" value="0" name="jumlah">
			</div>

			<div class="form-group">
				<label>Harga</label>
				<input type="number" id="harga" class="form-control" value="0" name="harga">
			</div>

			<div class="form-group">
				<label>Total</label>
				<input type="text" id="total" class="form-control" name="total" readonly="readonly">
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

<form enctype='multipart/form-data' role="form" method="POST" action="{{url('datapembelian')}}">
@csrf 
<div class="form-body">

<div class="form-group">
<label>Deskripsi</label>
<input type="text" id="deskripsi" class="form-control" name="deskripsi_produk">
</div>

<div class="form-group">
<label>Nama Supplier</label>
<input type="text" id="nama_supplier" class="form-control" name="nama_supplier">
</div>

<div class="form-group">
<label>Alamat Supplier</label>
<input type="text" id="alamat_supplier" class="form-control" name="alamat_supplier">
</div>

<div class="form-group">
<label>No Telepon Supplier</label>
<input type="text" id="tlp_supplier" class="form-control" name="notelepon_supplier">
</div>

<div class="form-group">
<label>Tanggal Pemesanan</label>
<input type="date" id="tgl_pesan" class="form-control" name="tanggal_pemesanan">
</div>

<div class="form-group">
<label>Tanggal Penerimaan</label>
<input type="date" id="tgl_terima" class="form-control" name="tanggal_penerimaan">
</div>

<div class="form-group">
<label>Status</label>
<select id="status" class="form-control" name="status">
<option value="proses">proses</option> 
<option value="selesai">selesai</option> 
</select>
</div>

</div>
    <div class="form-actions">
    <button type="button" onclick="submitDataPembelian()" class="btn btn-info">Submit</button>
    <a href="{{url('datapembelian')}}" type="button" class="btn btn-default">Cancel</a>
</div>
</form>

<table class="table">
	<thead>
		<tr>
			<th>Nama Produk</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Total</th>
		</tr>
	</thead>
	<tbody id="detail-pembelian"></tbody>
</table>
@endsection



@section('initialscript')
<script>

	var listDetailPembelian = [];

	function insertDetailPembelian(){
		var namaProduk = $('#nama_produk').val();
		var jumlah = $('#jumlah').val();
		var harga = $('#harga').val();
		var id_produk = $('#produks_id').val();
		var total = $('#total').val();

		var sent = {
			_token : '{{ csrf_token() }}',
			nama_produk: namaProduk,
			produks_id: id_produk,
			jumlah: jumlah,
			harga: harga,
			total: total
		}

		listDetailPembelian.push(sent);

		$('#modalCreate').modal('hide');

		$('#nama_produk').val('');
		$('#jumlah').val('');
		$('#harga').val('');
		$('#produks_id').val('');
		$('#total').val('');
		$("#list-produk").val("");

		$('#detail-pembelian').append(
			"<tr>"+
				"<td>"+
					namaProduk+
				"</td>"+
				"<td>"+
					jumlah+
				"</td>"+
				"<td>"+
					harga+
				"</td>"+
				"<td>"+
					total+
				"</td>"+
			"</tr>"
		);
		
		// var url = "{{ route('detailpembelian.store') }}";

		// $.post(url, sent, function(response, textStatus) {
		// 	window.location.href = response.routing;
		// });
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

	function setIdProduk(produk){
		$('#produks_id').val(produk.value);
		$('#nama_produk').val(produk.options[produk.selectedIndex].text);
	}

	$(document).ready(function(){
		$('#create-detail').on('click', function (e) {
			$.get("{{ route('get.list.produk') }}", function(response, textStatus){
				response.forEach(produk => {
					$('#list-produk').append("<option value='"+produk.id+"'>"+produk.judul_produk+"</option>");
				});

				$('#modalCreate').modal('show');
			});
		});
	});

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

		$.post('{{ route("datapembelian.store") }}', sent, function(response, textStatus) {
			console.log(response);
			
			window.location.replace("http://127.0.0.1:8000/datapembelian");
			window.location.href = response.routing;
		});
	}
	
</script>
@endsection