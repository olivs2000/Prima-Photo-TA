@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Data Admin <small></small>
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

<table class="table" id='dataTable'>
<thead>
  <tr>
    <th>NO</th>
    <th>Nama Admin</th>
    <th>No Telepon</th>
    <th>Email</th>
    <th colspan="1"></th>
    {{-- <th rowspan="0"></th> --}}
  <tr>
</thead>

<tbody>
<?php $no = 0;?>
@foreach($data as $as)
<?php $no++ ;?>
<tr>
  <td rowspan="1">{{$no}}</td>
  <td>{{$as->nama_admin}}</td>
  <td>{{$as->notelepon}}</td>
  <td>{{$as->email}}</td>

  @can('delete-permission')
  <td>
    <form method="POST" action="{{url('dataadmin/'.$as->id )}}">
      @csrf
      @method('DELETE')
      <input type='submit' value='Hapus' class='btn btn-xs btn-danger' onclick="if(!confirm('Apakah anda yakin?')) return false;"/>
    </form>
  </td>
  @endcan

  {{-- <td>
    <form method="POST" action="{{ url('delete.admin') }}">
      @csrf
      <input name="_method" type="hidden" value="DELETE">
      <button type="button" class="btn btn-xs btn-danger show_confirm" onclick= "deleteAdmin('{{$as->id}}')" data-toggle="tooltip" title='Delete'>Hapus 2</button>
    </form>
  </td> --}}

</tr>

@endforeach
</tbody>
</table>

@endsection

</div>




@section('javascript')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">


function deleteAdmin(namaadmin, notelepon, email){
    swal({
        title: `Yakin ingin menghapus data?`,
          text: "Jika anda menghapus data ini, data tidak dapat kembali lagi.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willDelete) => {
        if (willDelete) {
            $.ajax({
                type: "POST",
                url: "{{route('delete.admin')}}",
                data: {
                    _token: "{{ csrf_token() }}",
                    nama_admin:namaadmin,
                    notelepon:notelepon,
                    email:email
                },
                success: function (data) {
                    location.reload();
                }         
            });
        }
      });
}

    
</script>
@endsection
