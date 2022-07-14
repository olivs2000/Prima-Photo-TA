<?php

namespace App\Http\Controllers;

use App\DataPembelian;
use App\DetailPembelian;
use Illuminate\Http\Request;
use DB;

class DataPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $queryRaw=DB::select(DB::raw("select * from data_pembelians"));
        // return view('datapembelian.index',['data'=>$queryRaw]);

        $queryBuilder=DB::table("data_pembelians")
        ->orderBy("status", "ASC")
        ->select("data_pembelians.*", "deskripsi_produk")
        ->get();
        return view('datapembelian.index',['data'=>$queryBuilder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=DataPembelian::all();
        return view('datapembelian.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new DataPembelian();
        
        $data->deskripsi_produk=$request->get('deskripsi_produk');
        $data->stok=$request->get('stok');
        $data->nama_supplier=$request->get('nama_supplier');
        $data->alamat_supplier=$request->get('alamat_supplier');
        $data->notelepon_supplier=$request->get('notelepon_supplier');
        $data->tanggal_pemesanan=$request->get('tanggal_pemesanan');
        $data->tanggal_penerimaan=$request->get('tanggal_penerimaan');
        $data->status=$request->get('status');
        $data->save();



        return redirect()->route('datapembelian.index')->with('status', 'Data pembelian berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPembelian  $dataPembelian
     * @return \Illuminate\Http\Response
     */
    public function show(DataPembelian $datapembelian)
    {
        $data = $datapembelian;
        return view('datapembelian.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPembelian  $datapembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPembelian $dataPembelian)
    {
        $data = $datapembelian;
        return view('datapembelian.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPembelian  $dataPembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPembelian $datapembelian)
    {
        $datapembelian->deskripsi_produk=$request->get('deskripsi_produk');
        // $datapembelian->stok=$request->get('stok');
        $datapembelian->nama_supplier=$request->get('nama_supplier');
        $datapembelian->alamat_supplier=$request->get('alamat_supplier');
        $datapembelian->notelepon_supplier=$request->get('notelepon_supplier');
        $datapembelian->tanggal_pemesanan=$request->get('tanggal_pemesanan');
        $datapembelian->tanggal_penerimaan=$request->get('tanggal_penerimaan');
        $datapembelian->status=$request->get('status');
        $datapembelian->save(); 

        return redirect()->route('datapembelian.index')->with('status', 'Data pembelian berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPembelian  $datapembelian
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPembelian $datapembelian)
    {
        $this->authorize('delete-permission');
        try
        {
            $datapembelian->delete();
            return redirect()->route('datapembelian.index')->with('status', 'Data pembelian berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus data pembelian';
            return redirect()->route('datapembelian.index')->with('error', $msg);
        }
    }

    public function editForm(Request $request)
    {
        $id=$request->get('id');
        $data=DataPembelian::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('datapembelian.editForm',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $datapembelian=DataPembelian::find($id);
        $datapembelian->deskripsi_produk=$request->get('deskripsi_produk');
        // $datapembelian->stok=$request->get('stok');
        $datapembelian->nama_supplier=$request->get('nama_supplier');
        $datapembelian->alamat_supplier=$request->get('alamat_supplier');
        $datapembelian->notelepon_supplier=$request->get('notelepon_supplier');
        $datapembelian->tanggal_pemesanan=$request->get('tanggal_pemesanan');
        $datapembelian->tanggal_penerimaan=$request->get('tanggal_penerimaan');
        $datapembelian->status=$request->get('status');
        $datapembelian->save(); 
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Data pembelian berhasil di update'
        ),200);
    }

    public function deleteData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $datapembelian=DataPembelian::find($id);
            $datapembelian->delete(); 
            return response()->json(array(
            'status'=>'oke',
            'msg'=>'Sukses menghapus data pembelian'
        ),200);
        }catch(\PDOException $e){
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'Gagal menghapus data pembelian'
            ),200);
        }
    }

    public function showDetailPembelian()
    {
        $datapembelian=DataPembelian::find($_POST['data_pembelians_id']);
        $deskripsi_produk=$datapembelian->deskripsi_produk;
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('datapembelian.showDetailPembelian',compact('deskripsi_produk'))->render()
        ),200);
    }

}
