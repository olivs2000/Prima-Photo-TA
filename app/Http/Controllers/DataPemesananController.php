<?php

namespace App\Http\Controllers;

use DB;
use App\Pemesanan;
use Illuminate\Http\Request;

class DataPemesananController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from pemesanans"));
        return view('datapemesanan.index',['data'=>$queryRaw]);
    }

    public function show($id)
    {
        $data = $pemesanan;
        return view('dataPemesanan.show',compact('data'));
    }

    public function update(Request $request, Pemesanan $datapemesanan)
    {
        $pemesanan->status_pembayaran=$request->get('status_pembayaran');
        $pemesanan->status_pemesanan=$request->get('status_pemesanan');
        $pemesanan->save(); 

        return redirect()->route('datapemesanan.index')->with('status', 'Data pemesanan berhasil tersimpan');
    }

    public function destroy(Pemesanan $datapemesanan)
    {
        $this->authorize('delete-permission');
        try
        {
            $datapemesanan->delete();
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
        $datapemesanan=Pemesanan::find($id);
        $datapemesanan->status_pembayaran=$request->get('status_pembayaran');
        $datapemesanan->status_pemesanan=$request->get('status_pemesanan');
        $datapemesanan->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Data pemesanan berhasil di update'
        ),200);
    }

}
