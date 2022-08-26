<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborate;
use DB;

class KonfirmasiColController extends Controller
{
    public function index()
    {
        $data = Collaborate::all();
        return view('konfirmasicol.index', compact('data'));
    }

    public function store(Request $request)
    {
        $data=new Collaborate();

        $file=$request->file('pas_foto');
        $imgFolder="images";
        $fileName=time()."_".$file->getClientOriginalName();
        $file->move($imgFolder, $fileName);
        
        $data->pas_foto=$fileName;
        $data->nama=$request->get('nama');
        $data->alamat=$request->get('alamat');
        $data->notelepon=$request->get('notelepon');
        $data->email=$request->get('email');
        $data->alat_fotografi=$request->get('alat_fotografi');       
        $data->pengalaman=$request->get('pengalaman');
        $data->save();

        return redirect()->route('konfirmasicol.index');
    }
}
