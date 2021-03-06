<?php

namespace App\Http\Controllers;

use App\Pemesanan;
use Illuminate\Http\Request;
use DB;

class PemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from pemesanans"));
        return view('datapemesanan.index',['data'=>$queryRaw]);
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
        $data = $pemesanan;
        return view('dataPemesanan.show',compact('data'));
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
        $pemesanan->nama=$request->get('nama');
        $pemesanan->notelepon=$request->get('notelepon');
        $pemesanan->email=$request->get('email');
        $pemesanan->alamat=$request->get('alamat');
        $pemesanan->lokasi_acara=$request->get('lokasi_acara');
        $pemesanan->tanggal_acara=$request->get('tanggal_acara');
        $pemesanan->waktu_acara=$request->get('waktu_acara');
        $pemesanan->total=$request->get('total');
        $pemesanan->save(); 

        return redirect()->route('datapemesanan.index')->with('status', 'Data pemesanan berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete-permission');
        try
        {
            $pemesanan->delete();
            return redirect()->route('datapemesanan.index')->with('status', 'Data pemesanan berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Gagal hapus data pemesanan';
            return redirect()->route('datapemesanan.index')->with('error', $msg);
        }
    }

    public function editForm(Request $request)
    {
        $id=$request->get('id');
        $data=Pemesanan::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('datapemesanan.edit',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $pemesanan=Pemesanan::find($id);
        $pemesanan->nama=$request->get('nama');
        $pemesanan->notelepon=$request->get('notelepon');
        $pemesanan->email=$request->get('email');
        $pemesanan->alamat=$request->get('alamat');
        $pemesanan->lokasi_acara=$request->get('lokasi_acara');
        $pemesanan->tanggal_acara=$request->get('tanggal_acara');
        $pemesanan->waktu_acara=$request->get('waktu_acara');
        $pemesanan->total=$request->get('total');
        $pemesanan->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Data pemesanan berhasil di update'
        ),200);
    }
}
