<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborate;
use App\DataFotografer;


class CollaborateController extends Controller
{
    public function index()
    {
        $data = DataFotografer::all();
        return view('collaborate.index', compact('data'));
    }
}
