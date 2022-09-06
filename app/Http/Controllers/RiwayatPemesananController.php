<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use App\DetailPemesanan;
use App\RiwayatPemesanan;
use DB;

class RiwayatPemesananController extends Controller
{
    public function index()
    {
        $queryBuilder=DB::table("detail_pemesanans")
        ->leftJoin("pemesanans", "detail_pemesanans.pemesanans_id", "=", "pemesanans.id")
        ->select("detail_pemesanans.*", "pemesanans.nama")
        ->get();
        return view('riwayatpemesanan.index',['data'=>$queryBuilder]);
    }
}
