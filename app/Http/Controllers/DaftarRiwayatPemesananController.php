<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use App\RiwayatPemesanan;
use App\Pemesanan;
use App\User;
use App\DetailPemesanan;

class DaftarRiwayatPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $user_id)
    {
        $user = User::find($user_id);
        //dd(Auth::user()->id);
        //Auth::user()->id;

        $queryBuilder=DB::table("pemesanans")
            ->leftJoin("detail_pemesanans", "detail_pemesanans.pemesanans_id", "=", "pemesanans.id")
            ->leftJoin("users", "pemesanans.users_id", "=", "users.id")
            ->select("pemesanans.*", "detail_pemesanans.total as sub_total", "detail_pemesanans.tanggal_transaksi")
            ->where( 'pemesanans.users_id', $user_id)
            ->get();
        return view('daftarriwayatpemesanan.index',['user'=>$user, 'data'=>$queryBuilder]);
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
    public function show(Request $request, $pemesanan_id)
    {
        // $pemesanan = Pemesanan::find($pemesanan_id);
        // return view('daftarriwayatpemesanan',['pemesanan'=>$pemesanan]);
        return view('daftarriwayatpemesanan.index',['pemesanan'=>$pemesanan_id]);
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
}
