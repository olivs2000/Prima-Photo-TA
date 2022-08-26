<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PenyewaanAlat;
use DB;

class PenyewaanAlatAdminController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from penyewaan_alats"));
        return view('penyewaanalatadmin.index',['data'=>$queryRaw]);
    }

    public function create()
    {
        $penyewaanalats=PenyewaanAlat::all();
        return view('penyewaanalatadmin.create', compact('penyewaanalats'));
    }

    public function store(Request $request)
    {
        $data=new PenyewaanAlat();

        $data->gambar=$request->get('gambar');
        $data->judul_alat=$request->get('judul_alat');
        $data->stok=$request->get('stok');
        $data->harga=$request->get('harga');
        $data->keterangan_alat=$request->get('keterangan_alat');       
        $data->save();

        return redirect()->route('penyewaanalatadmin.index')->with('status', 'Alat baru berhasil tersimpan');
    }

    public function edit(PenyewaanAlat $penyewaanalatadmin)
    {
        $data = $penyewaanalatadmin;
        return view('penyewaanalatadmin.edit',compact('data'));
    }

    public function update(Request $request, PenyewaanAlat $penyewaanalatadmin)
    {
        $penyewaanalatadmin->gambar=$request->get('gambar');
        $penyewaanalatadmin->judul_alat=$request->get('judul_alat');
        $penyewaanalatadmin->stok=$request->get('stok');
        $penyewaanalatadmin->harga=$request->get('harga');
        $penyewaanalatadmin->keterangan_alat=$request->get('keterangan_alat'); 
        $penyewaanalatadmin->save(); 

        return redirect()->route('penyewaanalatadmin.index')->with('status', 'Alat berhasil tersimpan');
    }


    public function destroy(PenyewaanAlat $penyewaanalatadmin)
    {
        $this->authorize('delete-permission');
        try
        {
            $penyewaanalatadmin->delete();
            return redirect()->route('penyewaanalatadmin.index')->with('status', 'Alat berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus alat';
            return redirect()->route('penyewaanalatadmin.index')->with('error', $msg);
        }
    }
}
