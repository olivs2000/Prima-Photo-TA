<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Kategori;
use Dropzone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
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

    public function upload(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() .'.'. $image->extension();
        $image->move(public_path('storage/temp_dropzone'), $imageName);
        return response()->json(['success' => $imageName]);
    }

    public function dropzoneDestroy(Request $request)
    {
        $filename = $request->get('filename');
        ImageUpload::where('filename', $filename)->delete();
        $path = public_path().'/storage/'.$filename;

        if(file_exist($path))
        {
            unlink($path);
        }

        return $filename;
    }

    function fetch()
    {
        $image = \File::allFiles(public_path('storage'));
        $output = '<div class="row">';
        foreach($image as $img)
        {
            $output .= '<div class="col-md-2" style="margin-bottom:16px;" align="center"><img src="'.asset('storage/' . $img->getFileName()).'"
            class="img-thumbnail" width="175" height="175" style="height:175px;" /> 
            <button type="button" class="btn btn-link remove_image" id"'.$img->getFileName().'">Remove</button>
            </div>';
        }
        $output .='</div>>';
        echo $output;
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
        $data=new Paket();

        $data->gambar=$request->get('gambar');
        $data->gambar_detail=$request->get('gambar_detail');
        $data->judul_paket=$request->get('judul_paket');
        $data->durasi=$request->get('durasi');
        $data->jumlah_jepretan=$request->get('jumlah_jepretan');
        $data->harga=$request->get('harga');
        $data->keterangan=$request->get('keterangan');       
        $data->kategoris_id=$request->get('kategoris_id');



        $request->validate([
            'file' => 'required|image|max:2408' 
        ]);

        $storage = $request->file('file')->store('public/storage/'.$request->get('gambar_detail'));

        $url = Storage::url($storage);

        File::create([
            'url' => $url
        ]);

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
        $paketadmin->gambar_detail=$request->get('gambar_detail');
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

