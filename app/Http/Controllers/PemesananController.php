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
     * @param  Pemesanan  $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pemesanan $pemesanan)
    {
        $pemesanan->status_pembayaran=$request->get('status_pembayaran');
        $pemesanan->status_pemesanan=$request->get('status_pemesanan');
        $pemesanan->save(); 

        return redirect()->route('datapemesanan.index')->with('status', 'Data pemesanan berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemesanan $pemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pemesanan $pemesanan)
    {
        $this->authorize('delete-permission');
        try
        {
            $pemesanan->delete();
            return redirect()->route('datapemesanan.index')->with('status', 'Data pemesanan berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus pemesanan';
            return redirect()->route('datapemesanan.index')->with('error', $msg);
        }
    }

    public function editForm(Request $request)
    {
        $id=$request->get('id');
        $data=Pemesanan::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('datapemesanan.editForm',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $pemesanan=Pemesanan::find($id);
        $pemesanan->status_pembayaran=$request->get('status_pembayaran');
        $pemesanan->status_pemesanan=$request->get('status_pemesanan');
        $pemesanan->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Data pemesanan berhasil di update'
        ),200);
    }

    public function deleteData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $pemesanan=Pemesanan::find($id);
            $pemesanan->delete(); 
            return response()->json(array(
            'status'=>'oke',
            'msg'=>'Sukses menghapus pemesanan'
        ),200);
        }catch(\PDOException $e){
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'Gagal menghapus pemesanan'
            ),200);
        }
    }
}
