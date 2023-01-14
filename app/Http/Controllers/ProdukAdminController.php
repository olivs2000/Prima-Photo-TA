<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produk;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use DB;

class ProdukAdminController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from produks"));
        return view('produkadmin.index',['data'=>$queryRaw]);
    }

    public function create()
    {
        $produks=Produk::all();
        return view('produkadmin.create', compact('produks'));
    }

    public function store(Request $request)
    {
        $data=new Produk();

        $data->gambar=$request->get('gambar');
        $data->gambar_detail=$request->get('gambar_detail');
        $data->judul_produk=$request->get('judul_produk');
        $data->stok=$request->get('stok');
        $data->harga=$request->get('harga');
        $data->keterangan_produk=$request->get('keterangan_produk');    
        $data->status=$request->get('status');       
        $data->save();

        return redirect()->route('produkadmin.index')->with('status', 'Produk baru berhasil tersimpan');
    }

    public function edit($produkadmin)
    {
        $id = $produkadmin;

        $data=DB::table("produks")
        ->select("produks.*")
        ->where("produks.id", $id)
        ->first();

        $data->nama_folder = $data->gambar_detail;

        $data->gambar_detail = array_map(function($e){
            return asset($e);
        }, glob("storage/".$data->gambar_detail."/*.{*}", GLOB_BRACE));

        return view('produkadmin.edit',compact('data'));
    }

    public function update(Request $request, $produkadmin_id)
    {
        $foldername = str_replace(' ', '', $request->get('nama_folder'));
        $produkadmin = Produk::find($produkadmin_id);
        $produkadmin->gambar=$request->get('gambar');
        $produkadmin->gambar_detail=$request->get('gambar_detail');
        $produkadmin->judul_produk=$request->get('judul_produk');
        $produkadmin->stok=$request->get('stok');
        $produkadmin->harga=$request->get('harga');
        $produkadmin->keterangan_produk=$request->get('keterangan_produk'); 
        $produkadmin->status=$request->get('status');   

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

        $produkadmin->save(); 

        return redirect()->route('produkadmin.index')->with('status', 'Produk berhasil diubah');
    }

    public function saveData(Request $request)
    {
        $request->validate([
            'file_foto.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000' ,
            'judul_produk' => 'required|min:3',
            'gambar' => 'required',
            'harga' => 'required',
            'keterangan_produk' => 'required',
            'status' => 'required'
        ]);
        Log::info("pass validation---------------------------");

        $data=new Produk();
        $foldername = str_replace(' ', '', $request->get('judul_produk'));
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
        $data->judul_produk=$request->get('judul_produk');
        $data->harga=$request->get('harga');
        $data->keterangan_produk=$request->get('keterangan_produk');  
        $data->status=$request->get('status');       

        $data->save();

        return redirect()->route('produkadmin.index')->with('status', 'Produk baru berhasil tersimpan');
    }

    public function destroy(Produk $produkadmin)
    {
        $this->authorize('delete-permission');
        try
        {
            $produkadmin->delete();
            return redirect()->route('produkadmin.index')->with('status', 'Produk berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus layanan';
            return redirect()->route('produkadmin.index')->with('error', $msg);
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
