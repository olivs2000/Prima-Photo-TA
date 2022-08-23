<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborate;
use App\Konfirmasi;
use DB;

class KonfirmasiColController extends Controller
{
    public function index()
    {
        $data = Collaborate::all();
        return view('konfirmasicol.index', compact('data'));
    }
}
