<?php

namespace App\Http\Controllers;

use App\Pemesanan;
use App\Layanan;
use App\Produk;
use App\Paket;
use App\PenyewaanAlat;
use App\DetailPemesanan;
use App\Checkout;
use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from pemesanans"));
        return view('checkout.index',['pemesanan'=>$queryRaw]);

        // $data = Pemesanan::all();
        // return view('checkout.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Pemesanan::all();
        $detail=DetailPemesanan::all();
        $layanan=Layanan::all();
        $produk=Produk::all();
        $paket=Paket::all();
        $penyewaanalat=PenyewaanAlat::all();
        return view('checkout.index', compact('data','detail','layanan','produk','paket','penyewaanalat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $request)
    {
        $data=new Pemesanan();
       
        $file=$request->file('bukti_transfer');
        $imgFolder="images";
        $fileName=time()."_".$file->getClientOriginalName();
        //dd($fileName); 
        $file->move($imgFolder, $fileName);
       
        $data->bukti_transfer=$fileName;
        
        $data->nama=$request->get('nama');
        $data->notelepon=$request->get('notelepon');
        $data->email=$request->get('email');
        $data->alamat=$request->get('alamat');
        $data->lokasi_acara=$request->get('lokasi_acara');
        $data->tanggal_acara=$request->get('tanggal_acara');
        $data->waktu_acara=$request->get('waktu_acara');
        $data->total=$request->get('total');
        $data->status_pembayaran="Selesai";
        $data->status_pemesanan="Proses";
        $data->save();
        
        //dd($data);

        $paket = Paket::where('judul_paket',$request->get('judul_paket'))->first();
        $produk = Produk::where('judul_produk',$request->get('judul_produk'))->first();
        $layanan = Layanan::where('judul_layanan',$request->get('judul_layanan'))->first();
        $penyewaanalat = PenyewaanAlat::where('nama_alat',$request->get('nama_alat'))->first();

        $detail=new DetailPemesanan();
        $detail->layanans_id=$paket->id;
        $detail->penyewaan_alats_id=($penyewaanalat)?$penyewaanalat->id:null;
        $detail->produks_id=($produk)?$produk->id:null;
        $detail->pakets_id=($paket)?$paket->id:null;
        $detail->pemesanans_id=$data->id;
        $detail->jumlah=$request->get('jumlah');
        $detail->harga=$request->get('harga');
        $detail->total=$request->get('total');
        $detail->tanggal_transaksi=Carbon::now();
        $detail->save();

        session()->forget('cart');
        session()->forget('cart2');
        session()->forget('cart3');
        session()->forget('cart4');

        return redirect()->route('konfirmasi.index',[$data->id]);
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

    
    public function submit_front()
    {
        $cart=session()->get('cart');
        $c=new DetailPemesanan;
        $c=new Pemesanan;
        // $c->pemesanans_id=$pemesanans->id;
        // $c->layanans_id=$layanans->id;
        // $c->produks_id=$produks->id;
        // $c->pakets_id=$pakets->id;
        // $c->penyewaan_alats_id=$penyewaan_alats->id;
        // $c->transaction_date=Carbon::now()->toDateTimeString();
        $c->save();

        $c->insertPemesanans($cart);
        $c->insertPakets($cart);
        $c->insertProduks($cart);
        $c->insertLayanans($cart);
        $c->insertPenyewaanAlats($cart);

        session()->forget('cart1', 'cart2', 'cart3', 'cart4');

        return redirect('checkout.index');
    }
}
