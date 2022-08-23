<?php

namespace App\Http\Controllers;

use App\Keranjang;
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
        $data = Keranjang::all();
        return view('checkout.index', compact('data'));

        //return view ("checkout.index", ["data"=>Checkout::all()]);
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
