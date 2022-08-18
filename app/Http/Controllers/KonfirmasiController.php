<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetailPemesanan;
use App\Konfirmasi;

class KonfirmasiController extends Controller
{
    public function index()
    {
        $data = DetailPemesanan::all();
        return view('konfirmasi.index', compact('data'));
    }
}
