<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Kategori;
use Illuminate\Http\Request;
use DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from pakets"));
        return view('paket.index',['pakets'=>$queryRaw]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris=Kategori::all();
        return view('paketadmin.create', compact('kategoris'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function show(Paket $paket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paket $paket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket $paket)
    {
        //
    }


    public function detailPaket(Request $request, Paket $paket)
    {
        $paket->judul_produk=$request->get('judul_produk');
        $paket->gambar=$request->get('gambar');
        $paket->durasi=$request->get('durasi');
        $paket->jumlah_jepretan=$request->get('jumlah_jepretan');
        $paket->harga=$request->get('harga');
        $paket->keterangan=$request->get('keterangan');
    }

    public function front_index()
    {
        $pakets=Paket::all();
        return view('paket.index', compact('pakets'));
    }

    public function addToCart($id)
    {
        $p=Paket::find($id);
        $cart=session()->get('cart2');
        if(!isset($cart[$id]))
        {
            $cart[$id]=[
                "judul_paket"=>$p->judul_paket,
                "gambar"=>$p->gambar,
                "harga"=>$p->harga,
                "jumlah"=>1
            ];
        }
        else
        {
            $cart[$id]['jumlah']++;
        }
        session()->put('cart2', $cart);
        return redirect()->back()->with('success', 'Paket berhasil ditambahkan ke keranjang');
    }
}
