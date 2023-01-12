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

    public function index(Request $request, $pemesanan_id)
    {
        return view('uploadbuktitf.index',['data'=>$pemesanan_id]);
    }

    /**
     * Show the form for creating a new resource.
     *++
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
        $data=Pemesanan::find($request->pemesanan);
        $file=$request->file('bukti_transfer');
        $imgFolder='images';
        $fileName=time()."_".$file->getClientOriginalName();
        $file->move($imgFolder, $fileName);
        $data->bukti_transfer=$fileName;
        $data->save();

        alert()->success('SuccessAlert','Bukti transfer anda telah terkirim.'); 

        return redirect()->route('riwayatpemesanan.index', [$request->pemesanan]);
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
