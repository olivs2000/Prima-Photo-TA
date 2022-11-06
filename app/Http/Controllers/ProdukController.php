<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Produk;
use DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from produks"));
        return view('produk.index',['produks'=>$queryRaw]);
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
    public function show(Produk $produk)
    {
        $data = $produk;
        $data->gambar_detail = Storage::disk('public')->files($data->gambar_detail);
        return view('produk.show',compact('data'));
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
        $produk=Produk::all();
        return view('frontend.produk', compact('produk'));
    }

    public function addToCart(Request $request, $id)
    {
        $p=Produk::find($id);
        $cart=session()->get('cart1');
        if(!isset($cart[$id]))
        {
            $cart[$id]=[
                "judul_produk"=>$p->judul_produk,
                "gambar"=>$p->gambar,
                "harga"=>$p->harga,
                "jumlah"=>1
            ];
        }
        else
        {
            $cart[$id]['jumlah']++;
        }
        session()->put('cart1', $cart);
        
        return redirect()->back()->with('success', 'Produk berhasil ditambahkan ke keranjang');
    }

    public function getListProduk(Request $request)
    {
        $queryRaw=DB::select(DB::raw("select id, judul_produk from produks"));

        return response()->json($queryRaw,200);
    }

    public function getListProduk2(Request $request)
    {
        $queryRaw=DB::select(DB::raw("select id, judul_produk from produks"));

        return response()->json($queryRaw,200);
    }

    public function cart (Request $request)
    {
        Cart::add('293ad', 'Product 1', 1, 9.99, 550);
    }


}
