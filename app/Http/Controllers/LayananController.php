<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    public function show($id)
    {
        //
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

    public function addToCart($id)
    {
        $l=Layanan::find($id);
        $cart=session()->get('cart2');
        if(!isset($cart[$id]))
        {
            $cart[$id]=[
                "judul_layanan"=>$l->judul_layanan,
                "gambar"=>$l->gambar,
                "harga"=>$l->harga,
                "jumlah"=>1
            ];
        }
        else
        {
            $cart[$id]['jumlah']++;
        }
        session()->put('cart2', $cart);
        return redirect()->back()->with('success', 'Layanan berhasil ditambahkan ke keranjang');
    }
}
