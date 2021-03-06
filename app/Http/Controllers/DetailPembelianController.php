<?php

namespace App\Http\Controllers;

use App\DetailPembelian;
use App\DataPembelian;
use App\Produk;
use Illuminate\Http\Request;
use DB;

class DetailPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $queryRaw=DB::select(DB::raw("select * from detailpembelians"));
        // return view('detailpembelian.index',['data'=>$queryRaw]);
        
        $queryBuilder=DB::table("detail_pembelians")
                        ->leftJoin("data_pembelians", "detail_pembelians.data_pembelians_id", "=", "id")
                        ->leftJoin("produks", "detail_pembelians.produks_id", "=", "id")
                        ->orderBy("tanggal_pemesanan", "ASC")
                        ->select("detail_pembelians.*", "data_pembelians.deskripsi", "produks.judul_produk")
                        ->get();
        return view('detailpembelian.showDetail',['data'=>$queryBuilder]);
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
        $data=new DetailPembelian();
        
        $data->data_pembelians_id=$request->get('data_pembelians_id');
        $data->produks_id=$request->get('produks_id');
        $data->nama_produk=$request->get('nama_produk');
        $data->jumlah=$request->get('jumlah');
        $data->harga=$request->get('harga');
        $data->total=$request->get('total');
        $data->save();

        return redirect()->route('detailpembelian.index')->with('status', 'Data pembelian berhasil tersimpan');
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

    public function getDetailPembelian($id)
    {
        $dataDetailPembelian=DB::table("detail_pembelians")
            ->leftJoin("produks", "detail_pembelians.produks_id", "=", "produks.id")
            ->select("detail_pembelians.*")
            ->where("detail_pembelians.id", $id)
            ->first();

        return response()->json($dataDetailPembelian,200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DetailPembelian  $detailpembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $detailpembelian = DetailPembelian::where('id',$id)->first();
        $detailpembelian->data_pembelians_id=$request->data_pembelians_id;
        $detailpembelian->produks_id=$request->produks_id;
        $detailpembelian->nama_produk=$request->nama_produk;
        $detailpembelian->jumlah=$request->jumlah;
        $detailpembelian->harga=$request->harga;
        $detailpembelian->total=$request->total;
        $detailpembelian->save(); 

        return redirect('datapembelian/'.$request->data_pembelians_id.'/edit')->with('status', 'Detail pembelian berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $this->authorize('delete-permission');
        try
        {
            $detailpembelian = DetailPembelian::where('id',$request->detail_pembelian_id)->delete();
            return redirect('datapembelian/'.$request->data_pembelians_id.'/edit')->with('status', 'Detail Pembelian berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus detail pembelian';
            return redirect('datapembelian/'.$request->data_pembelians_id.'/edit')->with('error', $msg);
        }
    }

    public function editForm(Request $request)
    {
        $id=$request->get('id');
        $idd=$request->get('data_pembelians_id');
        $idp=$request->get('produks_id');
        $data=DetailPembelian::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('detailpembelian.edit',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $detailpembelian=DetailPembelian::find($id);
        $detailpembelian->data_pembelians_id=$request->get('data_pembelians_id');
        $detailpembelian->produks_id=$request->get('produks_id');
        $detailpembelian->nama_produk=$request->get('nama_produk');
        $detailpembelian->jumlah=$request->get('jumlah');
        $detailpembelian->harga=$request->get('harga');
        $detailpembelian->total=$request->get('total');
        $detailpembelian->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Detail pembelian berhasil di update'
        ),200);
    }

    public function deleteData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $detailpembelian=DetailPembelian::find($id);
            $detailpembelian->delete(); 
            return response()->json(array(
            'status'=>'oke',
            'msg'=>'Sukses menghapus detail pembelian'
        ),200);
        }catch(\PDOException $e){
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'Gagal menghapus detail pembelian'
            ),200);
        }
    }

    
    public function totalprodukperpembelian()
    {
        //query advance sesuai report
        $queryRaw=DB::select(DB::raw("select detail_pembelians.id, detail_pembelians.nama_produk, count(detail_pembelians.id) as jumlah, avg(produks.harga) as harga
                                      from detail_pembelians inner join produks on detail_pembelians.id=produks.id
                                      group by detail_pembelians.id, detail_pembelians.nama_produk"));
        return view("report.totalprodukperpembelian", ["data"=>$queryRaw]);

        //return view("report.totalprodukperpembelian",["data"=>DetailPembelian::all()]);
    }

}
