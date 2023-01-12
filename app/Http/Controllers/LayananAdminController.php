<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Layanan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use DB;

class LayananAdminController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from layanans"));
        return view('layananadmin.index',['data'=>$queryRaw]);
    }


    public function create()
    {
        $layanans=Layanan::all();
        return view('layananadmin.create', compact('layanans'));
    }

    public function store(Request $request)
    {
        $data=new Layanan();

        $data->gambar=$request->get('gambar');
        $data->gambar_detail=$request->get('gambar_detail');
        $data->judul_layanan=$request->get('judul_layanan');
        $data->ukuran_foto=$request->get('ukuran_foto');
        $data->hasil_cetak=$request->get('hasil_cetak');
        $data->harga=$request->get('harga');
        $data->keterangan_layanan=$request->get('keterangan_layanan');       
        $data->save();

        return redirect()->route('layananadmin.index')->with('status', 'Layanan baru berhasil tersimpan');
    }

    public function edit($layananadmin)
    {
        $id = $layananadmin;

        $data=DB::table("layanans")
        ->select("layanans.*")
        ->where("layanans.id", $id)
        ->first();

        $data->nama_folder = $data->gambar_detail;

        $data->gambar_detail = array_map(function($e){
            return asset($e);
        }, glob("storage/".$data->gambar_detail."/*.{*}", GLOB_BRACE));

        return view('layananadmin.edit',compact('data'));
    }

    public function update(Request $request, $layananadmin_id)
    {
        $foldername = str_replace(' ', '', $request->get('nama_folder'));
        $layananadmin = Layanan::find($layananadmin_id);
        $layananadmin->gambar=$request->get('gambar');
        $layananadmin->gambar_detail=$request->get('gambar_detail');
        $layananadmin->judul_layanan=$request->get('judul_layanan');
        $layananadmin->ukuran_foto=$request->get('ukuran_foto');
        $layananadmin->hasil_cetak=$request->get('hasil_cetak');
        $layananadmin->harga=$request->get('harga');
        $layananadmin->keterangan_layanan=$request->get('keterangan_layanan');    

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

        $layananadmin->save(); 

        return redirect()->route('layananadmin.index')->with('status', 'Layanan berhasil diubah');
    }

    public function saveData(Request $request)
    {
        $request->validate([
            'file_foto.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000' ,
            'judul_layanan' => 'required|min:3',
            'ukuran_foto' => 'required',
            'hasil_cetak' => 'required',
            'gambar' => 'required',
            'harga' => 'required',
            'keterangan_layanan' => 'required'
        ]);
        Log::info("pass validation---------------------------");

        $data=new Produk();
        $foldername = str_replace(' ', '', $request->get('judul_layanan'));
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
        $data->judul_layanan=$request->get('judul_layanan');
        $data->ukuran_foto=$request->get('ukuran_foto');
        $data->hasil_cetak=$request->get('hasil_cetak');
        $data->harga=$request->get('harga');
        $data->keterangan_layanan=$request->get('keterangan_layanan');       

        $data->save();

        return redirect()->route('layananadmin.index')->with('status', 'Layanan baru berhasil tersimpan');
    }

    public function destroy(Layanan $layananadmin)
    {
        $this->authorize('delete-permission');
        try
        {
            $layananadmin->delete();
            return redirect()->route('layananadmin.index')->with('status', 'Layanan berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus layanan';
            return redirect()->route('layananadmin.index')->with('error', $msg);
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
