<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use DB;

class KonfirmasiController extends Controller
{
    public function index(Request $request, $pemesanan_id)
    {
        return view('konfirmasi.index', ['pemesanan_id'=>$pemesanan_id]);
    }

    public function store(Request $request)
    {
        $data=new Pemesanan();
        $data->nama=$request->get('nama');
        $data->notelepon=$request->get('notelepon');
        $data->email=$request->get('email');
        $data->alamat=$request->get('alamat');
        $data->lokasi_acara=$request->get('lokasi_acara');
        $data->tanggal_acara=$request->get('tanggal_acara');
        $data->waktu_acara=$request->get('waktu_acara');
        $data->total=$request->get('total');
        $data->bukti_transfer=$request->get('bukti_transfer');
        $data->save();

        return redirect()->route('konfirmasi.index');
    }
}
