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
        // $queryBuilder=DetailPemesanan::where('pemesanans_id',$pemesanan_id)->get();

        // return view('riwayatpemesanan.index',['pemesanan'=>$pemesanan,'data'=>$queryBuilder]);

        $queryBuilder=DB::table("pemesanans")
            ->leftJoin("detail_pemesanans", "detail_pemesanans.pemesanans_id", "=", "pemesanans.id")
            ->leftJoin("pakets", "detail_pemesanans.pakets_id", "=", "pakets.id")
            ->leftJoin("produks", "detail_pemesanans.produks_id", "=", "produks.id")
            ->leftJoin("layanans", "detail_pemesanans.layanans_id", "=", "layanans.id")
            ->leftJoin("penyewaan_alats", "detail_pemesanans.penyewaan_alats_id", "=", "penyewaan_alats.id")
            ->select("pemesanans.*", "detail_pemesanans.jumlah", "detail_pemesanans.harga", "detail_pemesanans.total as sub_total",
            "pakets.judul_paket", "produks.judul_produk", "layanans.judul_layanan", "penyewaan_alats.nama_alat")
            ->where('detail_pemesanans.pemesanans_id',$pemesanan_id)
            ->get();
            // dd($pemesanan);
        return view('riwayatpemesanan.index',['pemesanan'=>$pemesanan, 'data'=>$queryBuilder]);
    }
}
