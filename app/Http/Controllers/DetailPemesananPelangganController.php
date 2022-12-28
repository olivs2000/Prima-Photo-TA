<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DetailPemesananPelanggan;

class DetailPemesananPelangganController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from detail_pemesanans"));
        return view('DETAILPEMESANANTEMP',['data'=>$queryRaw]);
    }
}
