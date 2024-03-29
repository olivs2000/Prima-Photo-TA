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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
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
        
        return view('checkout.index',['pemesananryRaw']);
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

    public function tambah(Pemesanan $pemesanan)
    {
        $data = $pemesanan;
        return view('checkout.index',compact('data'));
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

        // $data->users_id = Auth::user()->id;
        
        $data->nama=$request->get('nama');
        $data->notelepon=$request->get('notelepon');
        $data->email=$request->get('email');
        $data->alamat=$request->get('alamat');
        $data->total=$request->get('total');
        $data->status_pembayaran="proses";
        $data->status_pemesanan="menunggu konfirmasi";
        $data->save();
        
        if($request->has('id_paket')){
            for($i = 0; $i<count($request->id_paket); $i++){
                $paket = Paket::find($request->id_paket[$i]);
                $detail=new DetailPemesanan();
                $detail->pakets_id=($paket)?$paket->id:null;
                $detail->pemesanans_id=$data->id;
                $detail->lokasi_acara=$request->get('lokasi_acara');
                $detail->tanggal_acara=$request->get('tanggal_acara');
                $detail->waktu_acara=$request->get('waktu_acara');
                $detail->jumlah=$request->get('jumlah')[$i]; 
                $detail->harga=$request->get('harga')[$i];
                $detail->total=$detail->jumlah*$detail->harga;
                $detail->tanggal_transaksi=Carbon::now();
                $detail->save();
            }
        }

        if($request->has('id_produk')){
            for($i = 0; $i<count($request->id_produk); $i++){
                $produk = Produk::find($request->id_produk[$i]);
                $detail=new DetailPemesanan();
                $detail->produks_id=($produk)?$produk->id:null;
                $detail->pemesanans_id=$data->id;
                $detail->jumlah=$request->get('jumlah1')[$i]; 
                $detail->nama_penerima=$request->get('nama_penerima'); 
                $detail->lokasi_pengiriman=$request->get('lokasi_pengiriman'); 
                $detail->harga=$request->get('harga1')[$i];
                $detail->total=$detail->jumlah*$detail->harga;
                $detail->tanggal_transaksi=Carbon::now();
                $detail->save();
            }
        }

        if($request->has('id_layanan')){
            for($i = 0; $i<count($request->id_layanan); $i++){
                $layanan = Layanan::find($request->id_layanan[$i]);
                $detail=new DetailPemesanan();
                $detail->layanans_id=($layanan)?$layanan->id:null;
                $detail->pemesanans_id=$data->id;
                $detail->ukuran_foto=$request->get('ukuran_foto')[$i];
                $detail->hasil_cetak=$request->get('hasil_cetak')[$i];
                $detail->jumlah=$request->get('jumlah3')[$i]; 
                $detail->harga=$request->get('harga3')[$i];
                $detail->total=$detail->jumlah*$detail->harga;
                $detail->tanggal_transaksi=Carbon::now();
                $detail->file_attachment = $request->get('file_attachment')[$i];

                $detail->save();
              
                $destination = public_path('storage/attachment_layanan/'.$detail->id);
                File::makeDirectory($destination);

                File::move(public_path('storage/cart_session/'.$request->get('file_attachment')[$i]), 
                public_path('storage/attachment_layanan/'.$detail->id.'/'.$request->get('file_attachment')[$i]));

                File::delete(public_path('storage/cart_session/'.$request->get('file_attachment')[$i]));
            }
        }

        if($request->has('id_penyewaan')){
            for($i = 0; $i<count($request->id_penyewaan); $i++){
                $penyewaanalat = PenyewaanAlat::find($request->id_penyewaan[$i]);
                $detail=new DetailPemesanan();
                $detail->penyewaan_alats_id=($penyewaanalat)?$penyewaanalat->id:null;
                $detail->pemesanans_id=$data->id;
                $detail->jumlah=$request->get('jumlah4')[$i]; 
                $detail->harga=$request->get('harga4')[$i];
                $detail->total=$detail->jumlah*$detail->harga;
                $detail->tanggal_transaksi=Carbon::now();
                $detail->save();
            }
        }

        // $paket = Paket::where('judul_paket',$request->get('judul_paket'))->first();
        // $produk = Produk::where('judul_produk',$request->get('judul_produk'))->first();
        // $layanan = Layanan::where('judul_layanan',$request->get('judul_layanan'))->first();
        // $penyewaanalat = PenyewaanAlat::where('nama_alat',$request->get('nama_alat'))->first();

        // $detail=new DetailPemesanan();
        // $detail->pakets_id=($paket)?$paket->id:null;
        // $detail->produks_id=($produk)?$produk->id:null;
        // $detail->layanans_id=($layanan)?$layanan->id:null;
        // $detail->penyewaan_alats_id=($penyewaanalat)?$penyewaanalat->id:null;
        // $detail->pemesanans_id=$data->id;

        // $detail->jumlah=$request->get('jumlah'); 
        // $detail->harga=$request->get('harga');

        // $detail->jumlah=$request->get('jumlah1');
        // $detail->harga=$request->get('harga1'); 

        
        // $detail->jumlah=$request->get('jumlah2');
        // $detail->harga=$request->get('harga2'); 

        // $detail->jumlah=$request->get('jumlah3');
        // $detail->harga=$request->get('harga3'); 

        // $detail->total=$request->get('total');

        // $detail->tanggal_transaksi=Carbon::now();
        // $detail->save();

        session()->forget('cart1');
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
    public function show(Pemesanan $pemesanan)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        // $data = $checkout;
        
        // $pelanggan=DB::table("pelanggans")
        // ->join("data_pembelians", "detail_pembelians.data_pembelians_id", "=", "data_pembelians.id")
        // ->join("produks", "detail_pembelians.produks_id", "=", "produks.id")
        // ->select("detail_pembelians.id", "produks.judul_produk", "detail_pembelians.jumlah", 
        //          "detail_pembelians.harga", "detail_pembelians.total", 
        //          "detail_pembelians.produks_id","produks.id as produk")
        // ->where("detail_pembelians.data_pembelians_id", $data->id)
        // ->get();

        // return view('datapembelian.edit',compact('data', 'dataDetailPembelian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        $checkout->nama=$request->get('nama');
        $checkout->alamat=$request->get('alamat');
        $checkout->notelepon=$request->get('notelepon');
        $checkout->email=$request->get('email');
        $checkout->save(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $this->authorize('delete-permission');
        // try
        // {
        //     $checkout->delete();
        //     return redirect()->route('checkout.index')->with('status', 'Data fotografer berhasil dihapus');
        // }
        // catch(\PDOException $ex)
        // {
        //     $msg = 'Terjadi kesalahan! Gagal menghapus data fotografer';
        //     return redirect()->route('checkout.index')->with('error', $msg);
        // }

        checkout::remove($id);
        session()->flash('status', 'Item berhasil dihapus');
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

        $c->insertProduks($cart1);
        $c->insertPakets($cart2);
        $c->insertLayanans($cart3);
        $c->insertPenyewaanAlats($cart4);

        session()->forget('cart1', 'cart2', 'cart3', 'cart4');

        return redirect('checkout.index');
    }

    public function removeFromCart(Request $request)
    {
        $item = session()->get($request->cart);
        unset($item[$request->item_id]);
        session()->forget($request->cart);
        session()->put($request->cart, $item);
        return back();
    }
}
