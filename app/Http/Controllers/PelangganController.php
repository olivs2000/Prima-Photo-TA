<?php

namespace App\Http\Controllers;

use App\pelanggan;
use App\user;
use Illuminate\Http\Request;
use Auth;
use DB;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $iduser = Auth::user()->id;
        //Auth::user()->id;

        $queryBuilder=DB::table("pelanggans")
        ->leftJoin("users", "pelanggans.users_id", "=", "users.id")
        ->select("pelanggans.*")
        ->where( 'pelanggans.users_id')
        ->get();
        return view('pelanggan.index',['data'=>$queryBuilder]);
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
     * @param  \App\Pelanggan  $datapelanggan
     * @return \Illuminate\Http\Response
     */
    public function show(DataPelanggan $datapelanggan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pelanggan  $datapelanggan
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPelanggan $datapelanggan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pelanggan  $datapelanggan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPelanggan $datapelanggan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelanggan  $pelanggan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPelanggan $datapelanggan)
    {
      
    }


}
