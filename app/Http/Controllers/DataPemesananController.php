<?php

namespace App\Http\Controllers;

use DB;
use App\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DataPemesananController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from pemesanans"));
        return view('datapemesanan.index',['data'=>$queryRaw]);
    }

    public function show(Pemesanan $datapemesanan)
    {
        $datapemesan = $datapemesanan;

        Log::info($datapemesanan);

        $data = DB::table("detail_pemesanans")
        ->leftJoin("layanans", "detail_pemesanans.layanans_id", "=", "layanans.id")
        ->leftJoin("penyewaan_alats", "detail_pemesanans.penyewaan_alats_id", "=", "penyewaan_alats.id")
        ->leftJoin("pemesanans", "detail_pemesanans.pemesanans_id", "=", "pemesanans.id")
        ->leftJoin("produks", "detail_pemesanans.produks_id", "=", "produks.id")
        ->leftJoin("pakets", "detail_pemesanans.pakets_id", "=", "pakets.id")
        ->orderBy("pemesanans_id", "ASC")
        ->select("detail_pemesanans.*", "layanans.judul_layanan", "penyewaan_alats.nama_alat",  
                 "pemesanans.bukti_transfer", "pemesanans.total", "produks.judul_produk", "pakets.judul_paket")
        ->where('detail_pemesanans.pemesanans_id',$datapemesan->id)->get();

        Log::info($data);
        return view('detailpemesanan.show',compact('data'));
    }

    public function update(Request $request, Pemesanan $datapemesanan)
    {
        $pemesanan->status_pembayaran=$request->get('status_pembayaran');
        $pemesanan->status_pemesanan=$request->get('status_pemesanan');
        $pemesanan->estimasi_selesai=$request->get('estimasi_selesai');
        $pemesanan->save(); 

        return redirect()->route('datapemesanan.index')->with('status', 'Data pemesanan berhasil diubah');
    }

    public function destroy(Pemesanan $datapemesanan)
    {
        $this->authorize('delete-permission');
        try
        {
            $datapemesanan->delete();
            return redirect()->route('datapemesanan.index')->with('status', 'Data pemesanan berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus pemesanan';
            return redirect()->route('datapemesanan.index')->with('error', $msg);
        }
    }

    public function editForm(Request $request)
    {
        $id=$request->get('id');
        $data=Pemesanan::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('datapemesanan.editForm',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $datapemesanan=Pemesanan::find($id);
        $datapemesanan->status_pembayaran=$request->get('status_pembayaran');
        $datapemesanan->status_pemesanan=$request->get('status_pemesanan');
        $datapemesanan->estimasi_selesai=$request->get('estimasi_selesai');
        $datapemesanan->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Data pemesanan berhasil di ubah'
        ),200);
    }

}
