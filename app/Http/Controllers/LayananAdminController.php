<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Layanan;
use DB;

class LayananAdminController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from layanans"));
        return view('layananadmin.index',['data'=>$queryRaw]);
    }

    public function create()
    {
        $layanans=Layanan::all();
        return view('layananadmin.create', compact('layanans'));
    }

    public function store(Request $request)
    {
        $data=new Layanan();

        $data->gambar=$request->get('gambar');
        $data->gambar_detail=$request->get('gambar_detail');
        $data->judul_layanan=$request->get('judul_layanan');
        $data->ukuran_foto=$request->get('ukuran_foto');
        $data->hasil_cetak=$request->get('hasil_cetak');
        $data->harga=$request->get('harga');
        $data->keterangan_layanan=$request->get('keterangan_layanan');       
        $data->save();

        return redirect()->route('layananadmin.index')->with('status', 'Layanan baru berhasil tersimpan');
    }

    public function edit(Layanan $layananadmin)
    {
        $data = $layananadmin;
        return view('layananadmin.edit',compact('data'));
    }

    public function update(Request $request, Layanan $layananadmin)
    {
        $layananadmin->gambar=$request->get('gambar');
        $layananadmin->gambar_detail=$request->get('gambar_detail');
        $layananadmin->judul_layanan=$request->get('judul_layanan');
        $layananadmin->ukuran_foto=$request->get('ukuran_foto');
        $layananadmin->hasil_cetak=$request->get('hasil_cetak');
        $layananadmin->harga=$request->get('harga');
        $layananadmin->keterangan_layanan=$request->get('keterangan_layanan');  
        $layananadmin->save(); 

        return redirect()->route('layananadmin.index')->with('status', 'Layanan berhasil tersimpan');
    }


    public function destroy(Layanan $layananadmin)
    {
        $this->authorize('delete-permission');
        try
        {
            $layananadmin->delete();
            return redirect()->route('layananadmin.index')->with('status', 'Layanan berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus layanan';
            return redirect()->route('layananadmin.index')->with('error', $msg);
        }
    }
}
