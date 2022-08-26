<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use DB;

class ProdukAdminController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from produks"));
        return view('produkadmin.index',['data'=>$queryRaw]);
    }

    public function create()
    {
        $produks=Produk::all();
        return view('produkadmin.create', compact('produks'));
    }

    public function store(Request $request)
    {
        $data=new Produk();

        $data->gambar=$request->get('gambar');
        $data->judul_produk=$request->get('judul_produk');
        $data->stok=$request->get('stok');
        $data->harga=$request->get('harga');
        $data->keterangan_produk=$request->get('keterangan_produk');       
        $data->save();

        return redirect()->route('produkadmin.index')->with('status', 'Produk baru berhasil tersimpan');
    }

    public function edit(Produk $produkadmin)
    {
        $data = $produkadmin;
        return view('produkadmin.edit',compact('data'));
    }

    public function update(Request $request, Produk $produkadmin)
    {
        $produkadmin->gambar=$request->get('gambar');
        $produkadmin->judul_produk=$request->get('judul_produk');
        $produkadmin->stok=$request->get('stok');
        $produkadmin->harga=$request->get('harga');
        $produkadmin->keterangan_produk=$request->get('keterangan_produk');   
        $produkadmin->save(); 

        return redirect()->route('produkadmin.index')->with('status', 'Produk berhasil tersimpan');
    }


    public function destroy(Produk $produkadmin)
    {
        $this->authorize('delete-permission');
        try
        {
            $produkadmin->delete();
            return redirect()->route('produkadmin.index')->with('status', 'Produk berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus layanan';
            return redirect()->route('produkadmin.index')->with('error', $msg);
        }
    }
}
