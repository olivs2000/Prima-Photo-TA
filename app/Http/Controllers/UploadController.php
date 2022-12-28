<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pemesanan;
use App\DetailPemesanan;
use DB;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $pemesanan = Pemesanan::find($pemesanan_id);
        // $queryBuilder=DetailPemesanan::where('pemesanans_id',$pemesanan_id)->get();
        // return view('uploadbuktitf.index',['pemesanan'=>$pemesanan,'data'=>$queryBuilder]);

        $queryRaw=DB::select(DB::raw("select * from pemesanans"));
        return view('uploadbuktitf.index',['data'=>$queryRaw]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Pemesanan::all();
        return view('uploadbuktitf.index', compact('data'));
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
        $data->bukti_transfer=$request->get('bukti_transfer');
        $data->save();

        return redirect()->route('uploadbuktitf.index');
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
}
