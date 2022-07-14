<?php

namespace App\Http\Controllers;

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
        // $queryRaw=DB::select(DB::raw("select * from detail_pemesanans"));
        // return view('detailpemesanan.index',['data'=>$queryRaw]);

        $queryBuilder=DB::table("detail_pemesanans")
                        ->join("layanans", "detail_pemesanans.layanans_id", "=", "layanans.id")
                        ->join("penyewaan_alats", "detail_pemesanans.penyewaan_alats_id", "=", "penyewaan_alats.id")
                        ->join("pemesanans", "detail_pemesanans.pemesanans_id", "=", "pemesanans.id")
                        ->join("produks", "detail_pemesanans.produks_id", "=", "produks.id")
                        ->join("pakets", "detail_pemesanans.pakets_id", "=", "pakets.id")
                        // ->orderBy("pemesanans_id", "ASC")
                        ->select("detail_pemesanans.*", "layanans.judul_layanan", "penyewaan_alats.nama_alat", "pemesanans.nama", "produks.judul_produk", "pakets.judul_paket")
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
        // $detailPemesanan->user_pelanggans_id=$request->get('user_pelanggans_id');
        $detailPemesanan->pemesanans_id=$request->get('pemesanans_id');
        $detailPemesanan->pakets_id=$request->get('pakets_id');
        $detailPemesanan->penyewaan_alats_id=$request->get('penyewaan_alats_id');
        $detailPemesanan->produks_id=$request->get('produks_id');
        $detailPemesanan->pakets_id=$request->get('pakets_id');
        $detailPemesanan->layanans_id=$request->get('layanans_id');
        $detailPemesanan->jumlah=$request->get('jumlah');
        $detailPemesanan->harga=$request->get('harga');
        $detailPemesanan->tanggal_pemesanan=$request->get('tanggal_pemesanan');
        $detailPemesanan->total=$request->get('total');
        $detailPemesanan->save(); 

        return redirect()->route('detailpemesanan.index')->with('status', 'Detail pemesanan berhasil tersimpan');
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
            $dataFoto->delete();
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
        $id=$request->get('id');
        $idpemesanan=$request->get('pemesanans_id');
        $idpaket=$request->get('pakets_id');
        $idproduk=$request->get('produks_id');
        $idlayanan=$request->get('layanans_id');
        $idpenyewaan=$request->get('penyewaan_alats_id');
        $data=DetailPemesanan::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('detailpemesanan.editForm',compact('data, idpemesanan, idpaket, idproduk, idlayanan, idpenyewaan'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $detailPemesanan=DetailPemesanan::find($id);
        // $detailPemesanan->user_pelanggans_id=$request->get('user_pelanggans_id');
        $detailPemesanan->pemesanans_id=$request->get('pemesanans_id');
        $detailPemesanan->pakets_id=$request->get('pakets_id');
        $detailPemesanan->penyewaan_alats_id=$request->get('penyewaan_alats_id');
        $detailPemesanan->produks_id=$request->get('produks_id');
        $detailPemesanan->pakets_id=$request->get('pakets_id');
        $detailPemesanan->layanans_id=$request->get('layanans_id');
        $detailPemesanan->jumlah=$request->get('jumlah');
        $detailPemesanan->harga=$request->get('harga');
        $detailPemesanan->total=$request->get('total');
        $detailPemesanan->tanggal_pemesanan=$request->get('tanggal_pemesanan');
        $detailPemesanan->status=$request->get('status');
        $detailPemesanan>save();
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
            $detailPemesanan=DetailPemesanan::find($id);
            $detailPemesanan->delete(); 
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
