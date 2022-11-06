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
        $queryBuilder=DetailPemesanan::where('pemesanans_id',$pemesanan_id)->get();
        
        return view('riwayatpemesanan.index',['pemesanan'=>$pemesanan,'data'=>$queryBuilder]);
    }
}
