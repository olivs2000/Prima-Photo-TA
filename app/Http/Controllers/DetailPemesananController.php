<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

use App\DetailPemesanan;
use App\Pemesanan;
use App\Paket;
use App\Produk;
use App\Layanan;
use App\PenyewaanAlat;
use Illuminate\Http\Request;
use DB;

class DetailPemesananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryBuilder=DB::table("detail_pemesanans")
            ->leftJoin("layanans", "detail_pemesanans.layanans_id", "=", "layanans.id")
            ->leftJoin("penyewaan_alats", "detail_pemesanans.penyewaan_alats_id", "=", "penyewaan_alats.id")
            ->leftJoin("pemesanans", "detail_pemesanans.pemesanans_id", "=", "pemesanans.id")
            ->leftJoin("produks", "detail_pemesanans.produks_id", "=", "produks.id")
            ->leftJoin("pakets", "detail_pemesanans.pakets_id", "=", "pakets.id")
            ->orderBy("pemesanans_id", "ASC")
            ->select("detail_pemesanans.*", "layanans.judul_layanan", "penyewaan_alats.nama_alat", 
                     "pemesanans.nama", "produks.judul_produk", "pakets.judul_paket")
            ->get();
        return view('detailpemesanan.index',['data'=>$queryBuilder]);
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
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailPemesanan  $detailpemesanan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DetailPemesanan  $detailpemesanan
     * @return \Illuminate\Http\Response
     */
    public function edit(DetailPemesanan $detailpemesanan)
    {
        $data = $detailpemesanan;
        return view('detailpemesanan.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailPemesanan  $detailpemesanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detailpemesanan->status=$request->get('status');
        $detailpemesanan->save(); 

        return redirect()->route('detailpemesanan.index')->with('status', 'Detail pemesanan berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DetailPemesanan  $detailpemesanan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('delete-permission');
        try
        {
            $detailpemesanan->delete();
            return redirect()->route('detailpemesanan.index')->with('status', 'Detail pemesanan berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus detail pemesanan';
            return redirect()->route('detailpemesanan.index')->with('error', $msg);
        }
    }

    public function editForm(Request $request)
    {
        // $id=$request->get('id');
        // $data=DetailPemesanan::find($id);
        // return response()->json(array(
        //     'status'=>'oke',
        //     'msg'=>view('detailpemesanan.editForm',compact('data'))->render()
        // ),200);

        $id=$request->get('id');

        $data=DB::table("detail_pemesanans")
        ->leftJoin("layanans", "detail_pemesanans.layanans_id", "=", "layanans.id")
        ->leftJoin("penyewaan_alats", "detail_pemesanans.penyewaan_alats_id", "=", "penyewaan_alats.id")
        ->leftJoin("pemesanans", "detail_pemesanans.pemesanans_id", "=", "pemesanans.id")
        ->leftJoin("produks", "detail_pemesanans.produks_id", "=", "produks.id")
        ->leftJoin("pakets", "detail_pemesanans.pakets_id", "=", "pakets.id")
        ->select("detail_pemesanans.*", "layanans.judul_layanan", "penyewaan_alats.nama_alat", 
                 "pemesanans.nama", "produks.judul_produk", "pakets.judul_paket")
        ->where("detail_pemesanans.id", $id)
        ->first();
        
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('detailpemesanan.editForm',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->post('id');
        $detailpemesanan=DetailPemesanan::find($id);
        // $detailpemesanan->user_pelanggans_id=$request->get('user_pelanggans_id');
        // $detailpemesanan->pemesanans_id=$request->get('pemesanans_id');
        // $detailpemesanan->pakets_id=$request->get('pakets_id');
        // $detailpemesanan->penyewaan_alats_id=$request->get('penyewaan_alats_id');
        // $detailpemesanan->produks_id=$request->get('produks_id');
        // $detailpemesanan->pakets_id=$request->get('pakets_id');
        // $detailpemesanan->layanans_id=$request->get('layanans_id');
        // $detailpemesanan->jumlah=$request->get('jumlah');
        // $detailpemesanan->harga=$request->get('harga');
        // $detailpemesanan->total=$request->get('total');
        // $detailpemesanan->tanggal_pemesanan=$request->get('tanggal_pemesanan');
        $detailpemesanan->status=$request->get('status');
        $detailpemesanan->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Detail pemesanan berhasil di update'
        ),200);
    }

    public function deleteData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $detailpemesanan=DetailPemesanan::find($id);
            $detailpemesanan->delete(); 
            return response()->json(array(
            'status'=>'oke',
            'msg'=>'Sukses menghapus detail pemesanan'
        ),200);
        }catch(\PDOException $e){
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'Gagal menghapus detail pemesanan'
            ),200);
        }
    }
}
