<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\PenyewaanAlat;
use DB;

class PenyewaanAlatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $queryRaw=DB::select(DB::raw("select * from penyewaan_alats"));
         return view('penyewaanalat.index',['penyewaanalats'=>$queryRaw]);
     }
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(PenyewaanAlat $penyewaanalat)
    {
        $data = $penyewaanalat;
        $data->gambar_detail = Storage::disk('public')->files($data->gambar_detail);
        return view('penyewaanalat.show',compact('data'));
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
        $penyewaanalat=PenyewaanAlat::all();
        return view('frontend.penyewaanalat', compact('penyewaanalat'));
    }

    public function addToCart($id)
    {
        $pa=PenyewaanAlat::find($id);
        $cart=session()->get('cart4');
        if(!isset($cart[$id]))
        {
            $cart[$id]=[
                "nama_alat"=>$pa->nama_alat,
                "gambar"=>$pa->gambar,
                "harga"=>$pa->harga,
                "jumlah"=>1,
            ];
        }
        else
        {
            $cart[$id]['jumlah']++;
        }
        session()->put('cart4', $cart);

        alert()->success('Success','Alat Fotografi berhasil ditambahkan ke keranjang'); 

        return redirect()->back();
    }
}
