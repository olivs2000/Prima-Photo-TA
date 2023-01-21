<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Layanan;
use DB;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from layanans"));
        return view('layanan.index',['layanans'=>$queryRaw]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Layanan::all();
        return view('layanan.show', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Layanan();
      
        $imgFolder="images";
        $fileName=time()."_".$file->getClientOriginalName();
        $file->move($imgFolder, $fileName);
        $data->kirim_foto=$fileName;
    
        $data->save();

        return redirect()->route('layanan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Layanan $layanan)
    {
        $data = $layanan;
        $data->gambar_detail = Storage::disk('public')->files($data->gambar_detail);
        return view('layanan.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function front_index()
    {
        $layanan=Layanan::all();
        return view('frontend.layanan', compact('layanan'));
    }

    public function addToCart(Request $request, $id)
    {
        $l=Layanan::find($id);
        $cart=session()->get('cart3');
        $img = $request->file('kirim_foto');
        if(!isset($cart[$id]))
        {
            $original_name = $img->getClientOriginalName();
            $filename = 'cart3'.$id.$original_name;
            $img->move(public_path('storage/cart_session'), $filename);

            $cart[$id]=[
                "judul_layanan"=>$l->judul_layanan,
                "gambar"=>$l->gambar,
                "harga"=>$l->harga,
                "jumlah"=>$request->product_quantity,
                "ukuran_foto"=>$request->ukuran_foto,
                "hasil_cetak"=>$request->hasil_cetak,
                "file_name"=>$filename,
            ];
        }
        else
        {
            $cart[$id]['jumlah']+=$request->product_quantity;
        }
        session()->put('cart3', $cart);

        alert()->success('Success','Layanan berhasil ditambahkan ke keranjang'); 
        
        return redirect();
    }


}
