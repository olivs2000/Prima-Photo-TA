<?php

namespace App\Http\Controllers;

use App\Paket;
use App\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $data = $paket;
        $data->gambar_detail = Storage::disk('public')->files($data->gambar_detail);
        
        return view('paket.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paket  $paket
     * @return \Illuminate\Http\Response
     */
    public function edit(Paket $paketadmin)
    {
        $id=$paketadmin;

        $data=DB::table("pakets")
        ->leftJoin("kategoris", "pakets.kategoris_id", "=", "kategoris.id")
        ->select("pakets.*", "kategoris.nama")
        ->where("pakets.id", $id)
        ->first();

        $kategori=DB::table("kategoris")
        ->select("kategoris.id", "nama")
        ->get();

        return view("paketadmin.edit",compact('data', 'kategori'));
    }

    public function update(Request $request, Paket $paketadmin)
    {
        $paketadmin->gambar=$request->get('gambar');
        $paketadmin->judul_paket=$request->get('judul_paket');
        $paketadmin->durasi=$request->get('durasi');
        $paketadmin->jumlah_jepretan=$request->get('jumlah_jepretan');
        $paketadmin->harga=$request->get('harga');
        $paketadmin->keterangan=$request->get('keterangan');
        $paketadmin->kategoris_id=$request->get('kategoris_id');
        $paketadmin->save(); 

        return redirect()->route('paketadmin.index')->with('status', 'Paket berhasil tersimpan');
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

    public function front_index()
    {
        $pakets=Paket::all();
        return view('paket.index', compact('pakets'));
    }

    public function addToCart(Request $request, $id)
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

        alert()->success('Success','Paket berhasil ditambahkan ke keranjang'); 
        
        return redirect()->back()->with('success', 'Paket berhasil ditambahkan ke keranjang');
    }
}
