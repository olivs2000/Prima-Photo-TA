<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Kategori;
use Dropzone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
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

    public function dropzoneStore(Request $request)
    {
        //                                 // Cara 1 //
        // $image = $request->file('file')->store('public/storage/'.$request->get('gambar_detail'));
        // $imageName = time() . '-' . strtupper(Str::random(10)) . '.' . $image->extension();
        // $image->move(public_path('storage'), $imageName);
        // return response()->json(['success'=> $imageName]);


        //                                 // Cara 2 //
        // $request->validate([
        //     'file' => 'required|image|max:2408' 
        // ]);
        // $storage = $request->file('file')->store('public/storage/'.$request->get('gambar_detail'));
        // $url = Storage::url($storage);
        // File::create([
        //     'url' => $url
        // ]);
        // return redirect()->json('paket.show');


        //                                 // Cara 3 //
        // $file = $request->file('file')->store('public/storage/'.$request->get('gambar_detail'));
        // File::create([
        //     'title' => $file->getClientOriginalName(),
        //     'description' => '',
        //     'path' => $file->store('public/storage')
        // ]);
        // return redirect()->with('status', 'Paket baru berhasil tersimpan');


        //                                 // Cara 4 (JS Cara 3)//
        // $image = $request->file('file')->store('public/storage/'.$request->get('gambar_detail'));
        // $imageName = $image->getClientOriginalName();
        // $image->move(public_path('storage'), $imageName);
        // $imageUpload = new ImageUpload();
        // $imageUpload->filename = $imageName;
        // $imageUpload->save();
        // return response()->json(['success' => $imageName]);

        //                                 // Cara 5 (JS Cara 4)//
        // $image = $request->file('file')->store('public/storage/'.$request->get('gambar_detail'));
        // $imageName = time() .'.'. $image->extension();
        // $image->move(public_path('storage'), $imageName);
        // return response()->json(['success' => $imageName]);
    }

    function delete(Request $request)
    {
        if($request->get('gambar_detail'))
        {
            \File::delete(public_path('storage/' .  $request->get('gambar_detail')));
        }
    }

    public function saveData(Request $request)
    {
        $request->validate([
            'file_foto.*' => 'required|mimes:jpg,jpeg,png,bmp|max:20000' ,
            'judul_paket' => 'required|min:3',
            'gambar' => 'required',
            'durasi' => 'required',
            'jumlah_jepretan' => 'required',
            'harga' => 'required',
            'keterangan' => 'required',
            'kategoris_id' => 'required'
        ]);
        Log::info("pass validation---------------------------");

        $data=new Paket();
        $foldername = str_replace(' ', '', $request->get('judul_paket'));
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

        $data->nama_folder = $data->gambar_detail;

        $data->gambar_detail = array_map(function($e){
            return asset($e);
        }, glob("storage/".$data->gambar_detail."/*.{*}", GLOB_BRACE));

        return view("paketadmin.edit",compact('data', 'kategoris'));
    }

    public function update(Request $request, $paketadmin_id)
    {
        $foldername = str_replace(' ', '', $request->get('nama_folder'));
        $paketadmin = Paket::find($paketadmin_id);
        $paketadmin->gambar=$request->get('gambar');
        $paketadmin->gambar_detail=$request->get('nama_folder');
        $paketadmin->judul_paket=$request->get('judul_paket');
        $paketadmin->durasi=$request->get('durasi');
        $paketadmin->jumlah_jepretan=$request->get('jumlah_jepretan');
        $paketadmin->harga=$request->get('harga');
        $paketadmin->keterangan=$request->get('keterangan');
        $paketadmin->kategoris_id=$request->get('kategoris_id');

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

