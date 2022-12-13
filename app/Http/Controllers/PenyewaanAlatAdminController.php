<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\PenyewaanAlat;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use DB;

class PenyewaanAlatAdminController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from penyewaan_alats"));
        return view('penyewaanalatadmin.index',['data'=>$queryRaw]);
    }

    public function create()
    {
        $penyewaanalats=PenyewaanAlat::all();
        return view('penyewaanalatadmin.create', compact('penyewaanalats'));
    }

    public function store(Request $request)
    {
        $data=new PenyewaanAlat();

        $data->gambar=$request->get('gambar');
        $data->gambar_detail=$request->get('gambar_detail');
        $data->nama_alat=$request->get('nama_alat');
        $data->stok=$request->get('stok');
        $data->harga=$request->get('harga');
        $data->tipe=$request->get('tipe');       
        $data->save();

        return redirect()->route('penyewaanalatadmin.index')->with('status', 'Alat baru berhasil tersimpan');
    }

    public function edit($penyewaanalatadmin)
    {
        $id = $penyewaanalatadmin;

        $data=DB::table("penyewaan_alats")
        ->select("penyewaan_alats.*")
        ->where("penyewaan_alats.id", $id)
        ->first();

        $data->nama_folder = $data->gambar_detail;

        $data->gambar_detail = array_map(function($e){
            return asset($e);
        }, glob("storage/".$data->gambar_detail."/*.{*}", GLOB_BRACE));

        return view('penyewaanalatadmin.edit',compact('data'));
    }

    public function update(Request $request, $penyewaanalatadmin_id)
    {
        $penyewaanalatadmin->gambar=$request->get('gambar');
        $penyewaanalatadmin->gambar_detail=$request->get('gambar_detail');
        $penyewaanalatadmin->nama_alat=$request->get('nama_alat');
        $penyewaanalatadmin->stok=$request->get('stok');
        $penyewaanalatadmin->harga=$request->get('harga');
        $penyewaanalatadmin->tipe=$request->get('tipe'); 
        $penyewaanalatadmin->save(); 

        return redirect()->route('penyewaanalatadmin.index')->with('status', 'Alat fotografi berhasil tersimpan');

        $foldername = str_replace(' ', '', $request->get('nama_folder'));
        $penyewaanalatadmin = PenyewaanAlat::find($penyewaanalatadmin_id);
        $penyewaanalatadmin->gambar=$request->get('gambar');
        $penyewaanalatadmin->gambar_detail=$request->get('gambar_detail');
        $penyewaanalatadmin->nama_alat=$request->get('nama_alat');
        $penyewaanalatadmin->stok=$request->get('stok');
        $penyewaanalatadmin->harga=$request->get('harga');
        $penyewaanalatadmin->tipe=$request->get('tipe');   

        if($request->file('file_foto')){
            Log::info("File exist----------------------------");
            foreach ($request->file('file_foto') as $img) {
                $imageName = strtotime(now()).rand(11111,99999).'.'.$img->getClientOriginalExtension();
                $original_name = $img->getClientOriginalName();
    
                if(!is_dir(public_path('storage/'.$foldername))){
                    mkdir(public_path('storage/'.$foldername), 0777, true);
                }
    
                $img->move(public_path('storage/'.$foldername), $original_name.$imageName);
            }
        }

        $penyewaanalatadmin->save(); 

        return redirect()->route('penyewaanalatadmin.index')->with('status', 'Alat Fotografi berhasil tersimpan');
    }

    public function saveData(Request $request)
    {
        $request->validate([
            'file_foto.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000' ,
            'nama_alat' => 'required|min:3',
            'gambar' => 'required',
            'harga' => 'required',
            'tipe' => 'required'
        ]);
        Log::info("pass validation---------------------------");

        $data=new PenyewaanAlat();
        $foldername = str_replace(' ', '', $request->get('nama_alat'));
        Log::info("nama folder : ".$foldername);

        if($request->file('file_foto')){
            Log::info("File exist----------------------------");
            foreach ($request->file('file_foto') as $img) {
                $imageName = strtotime(now()).rand(11111,99999).'.'.$img->getClientOriginalExtension();
                $original_name = $img->getClientOriginalName();
    
                if(!is_dir(public_path('storage/'.$foldername))){
                    mkdir(public_path('storage/'.$foldername), 0777, true);
                }
    
                $img->move(public_path('storage/'.$foldername), $original_name.$imageName);
            }
        }

        $data->gambar=$request->get('gambar');
        $data->gambar_detail=$foldername;
        $data->nama_alat=$request->get('nama_alat');
        $data->harga=$request->get('harga');
        $data->tipe=$request->get('tipe');       

        $data->save();

        return redirect()->route('penyewaanalatadmin.index')->with('status', 'Alat fotografi baru berhasil tersimpan');
    }


    public function destroy(PenyewaanAlat $penyewaanalatadmin)
    {
        $this->authorize('delete-permission');
        try
        {
            $penyewaanalatadmin->delete();
            return redirect()->route('penyewaanalatadmin.index')->with('status', 'Alat berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus alat';
            return redirect()->route('penyewaanalatadmin.index')->with('error', $msg);
        }
    }

    
    function delete(Request $request)
    {
        if($request->get('gambar_detail'))
        {
            \File::delete(public_path('storage/' .  $request->get('gambar_detail')));
        }
    }

    public function deleteDetailGambar(Request $request)
    {
        $request->validate([
            'nama_gambar' => 'required' ,
            'nama_folder' => 'required',
        ]);
        Log::info("pass validation---------------------------");

        if(File::exists(public_path('storage/'.$request->nama_folder.'/'.$request->nama_gambar))){
            Log::info("Delete file...............................");
            File::delete(public_path('storage/'.$request->nama_folder.'/'.$request->nama_gambar));
        }

        return response()->json(['msg'=> 'success']);

    }
}
