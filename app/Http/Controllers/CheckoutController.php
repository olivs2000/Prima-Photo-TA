<?php

namespace App\Http\Controllers;

use App\Keranjang;
use App\Pemesanan;
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
        // $queryRaw=DB::select(DB::raw("select * from keranjangs"));
        // return view('checkout.index',['keranjangs'=>$queryRaw]);

        $data = Pemesanan::all();
        return view('konfirmasi.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Pemesanan::all();
        return view('checkout.index', compact('data'));
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
        $data->nama=$request->get('nama');
        $data->notelepon=$request->get('notelepon');
        $data->email=$request->get('email');
        $data->alamat=$request->get('alamat');
        $data->lokasi_acara=$request->get('lokasi_acara');
        $data->tanggal_acara=$request->get('tanggal_acara');
        $data->waktu_acara=$request->get('waktu_acara');
        $data->total=$request->get('total');
        $data->save();

        return redirect()->route('konfirmasi.index');
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
        $cart=session()->get('cart2');
        $user=Auth::user();
        $c=new Keranjang;
        // $c->user_id=$user->id;
        // $c->user_id=1;
        // $c->tanggal_pemesanan=Carbon::now()->toDateTimeString();
        $c->save();

        $c->insertPaket($cart);

        session()->forget('cart2');

        return redirect('checkout.index');
    }
}
