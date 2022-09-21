<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use DB;

class PaketAdminController extends Controller
{
    public function index()
    {
        $queryBuilder=DB::table("pakets")
        ->leftJoin("kategoris", "pakets.kategoris_id", "=", "kategoris.id")
        ->orderBy("pakets.id", "ASC")
        ->select("pakets.*", "kategoris.nama")
        ->get();
        return view('paketadmin.index',['data'=>$queryBuilder]);
    }

    public function create()
    {
        $kategoris=Kategori::all();
        return view('paketadmin.create', compact('kategoris'));
    }

    public function show(Paket $paket)
    {
        $data = $paket;
        return view('paket.show',compact('data'));
    }

    public function store(Request $request)
    {
        $data=new Paket();

        $data->gambar=$request->get('gambar');
        $data->judul_paket=$request->get('judul_paket');
        $data->durasi=$request->get('durasi');
        $data->jumlah_jepretan=$request->get('jumlah_jepretan');
        $data->harga=$request->get('harga');
        $data->keterangan=$request->get('keterangan');       
        $data->kategoris_id=$request->get('kategoris_id');
        $data->save();

        return redirect()->route('paketadmin.index')->with('status', 'Paket baru berhasil tersimpan');
    }

    public function edit($paketadmin)
    {
        $id=$paketadmin;

        $data=DB::table("pakets")
        ->leftJoin("kategoris", "pakets.kategoris_id", "=", "kategoris.id")
        ->select("pakets.*", "kategoris.nama")
        ->where("pakets.id", $id)
        ->first();

        $kategoris=DB::table("kategoris")
        ->select("kategoris.id", "nama")
        ->get();

        return view("paketadmin.edit",compact('data', 'kategoris'));

        // $id=$request->get('id');
        // $idk=$request->get('kategoris_id');
        // $data=Paket::find($id);
        // return response()->json(array(
        //     'status'=>'oke',
        //     'msg'=>view('paketadmin.edit',compact('data', 'idk'))->render()
        // ),200);
    }

    public function update(Request $request, Paket $paketadmin)
    {
        $paketadmin->gambar=$request->get('gambar');
        $paketadmin->judul_paket=$request->get('judul_paket');
        $paketadmin->durasi=$request->get('durasi');
        $paketadmin->jumlah_jepretan=$request->get('jumlah_jepretan');
        $paketadmin->harga=$request->get('harga');
        $paketadmin->keterangan=$request->get('keterangan');
        $paketadmin->kategoris_id=$request->get('kategoris_id');
        $paketadmin->save(); 

        return redirect()->route('paketadmin.index')->with('status', 'Paket berhasil tersimpan');
    }


    public function destroy(Paket $paketadmin)
    {
        $this->authorize('delete-permission');
        try
        {
            $paketadmin->delete();
            return redirect()->route('paketadmin.index')->with('status', 'Paket berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus paket';
            return redirect()->route('paketadmin.index')->with('error', $msg);
        }
    }

    public function createDirecrotory(Request $request)
    {
        $path = public_path('storage');

        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);

        }   
    }

    public function createFolder()
    {
        $response = Storage::makeDirectory('storage');
        //dd($response);
    }
}

