<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use App\DetailPemesanan;
use App\RiwayatPemesanan;
use DB;

class RiwayatPemesananController extends Controller
{
    public function index(Request $request, $pemesanan_id)
    {
        $pemesanan = Pemesanan::find($pemesanan_id);

        $queryBuilder=DB::table("pemesanans")
            ->leftJoin("detail_pemesanans", "detail_pemesanans.pemesanans_id", "=", "pemesanans.id")
            ->leftJoin("pakets", "detail_pemesanans.pakets_id", "=", "pakets.id")
            ->leftJoin("produks", "detail_pemesanans.produks_id", "=", "produks.id")
            ->leftJoin("layanans", "detail_pemesanans.layanans_id", "=", "layanans.id")
            ->leftJoin("penyewaan_alats", "detail_pemesanans.penyewaan_alats_id", "=", "penyewaan_alats.id")
            ->select("pemesanans.*", "detail_pemesanans.jumlah", "detail_pemesanans.harga", 
            "detail_pemesanans.total as sub_total", "detail_pemesanans.tanggal_transaksi", 
            "pakets.judul_paket", "produks.judul_produk", "layanans.judul_layanan", "penyewaan_alats.nama_alat")
            ->where('detail_pemesanans.pemesanans_id',$pemesanan_id)
            ->get();
        return view('riwayatpemesanan.index',['pemesanan'=>$pemesanan, 'data'=>$queryBuilder]);
    }

    public function destroy(Pemesanan $riwayatpemesanan)
    {
        $this->authorize('delete-permission');
        try
        {
            $riwayatpemesanan->delete();
            return redirect()->route('riwayatpemesanan.index')->with('status', 'pemesanan berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus pemesanan';
            return redirect()->route('riwayatpemesanan.index')->with('error', $msg);
        }
    }

    public function deleteData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $riwayatpemesanan=Pemesanan::find($id);
            $riwayatpemesanan->delete(); 
            return response()->json(array(
            'status'=>'oke',
            'msg'=>'Sukses menghapus data pemesanan'
        ),200);
        }catch(\PDOException $e){
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'Gagal menghapus data pemesanan'
            ),200);
        }
    }

    public function deletePemesanan(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $riwayatpemesanan=Pemesanan::find($id);
            $riwayatpemesanan->delete(); 
            return response()->json(array(
            'status'=>'oke',
            'msg'=>'Sukses menghapus data pemesanan'
        ),200);
        }catch(\PDOException $e){
            return response()->json(array(
                'status'=>'success',
                'msg'=>'Gagal menghapus data pemesanan'
            ),200);
        }

        //return response()->json(['msg'=> 'success']);

    }

    public function delete($id)
    {
        Pemesanan::find($id)->delete();
  
        return back();
    }
}
