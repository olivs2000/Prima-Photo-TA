<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

use App\DataPembelian;
use App\DetailPembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $queryBuilder=DB::table("data_pembelians")
        ->orderBy("id", "ASC")
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
        $data = $request->all();
        $validator = Validator::make($data,[
            'deskripsi_produk' => 'required',
            'nama_supplier' => 'required',
            'alamat_supplier' => 'required',
            'notelepon_supplier' => 'required',
            'tanggal_pemesanan' => 'required',
            // 'tanggal_penerimaan' => 'required',
            'status' => 'required',
            "detail_pembelian"  => "required|array|min:1",
        ]);

        if ($validator->fails()) {
            return response()->json(['result'=>'failed','message'=>$validator->errors()->first()]);
        }
        Log::info("Validation pass-------------------");
        Log::info("data : ".json_encode($data));

        $data=new DataPembelian();
        
        $data->deskripsi_produk=$request->deskripsi_produk;
        $data->stok=$request->stok;
        $data->nama_supplier=$request->nama_supplier;
        $data->alamat_supplier=$request->alamat_supplier;
        $data->notelepon_supplier=$request->notelepon_supplier;
        $data->tanggal_pemesanan=$request->tanggal_pemesanan;
        $data->tanggal_penerimaan=$request->tanggal_penerimaan;
        $data->status=$request->status;
        $data->save();

        Log::info("Success save data pembelian-----------------------");

        foreach ($request->detail_pembelian as $detailPembelian) {
            $detail=new DetailPembelian();
        
            $detail->data_pembelians_id=$data->id;
            $detail->produks_id=$detailPembelian['produks_id'];
            $detail->nama_produk=$detailPembelian['nama_produk'];
            $detail->jumlah=$detailPembelian['jumlah'];
            $detail->harga=$detailPembelian['harga'];

            $detail->total=$detail->jumlah * $detail->harga;
            
            $detail->save();
            Log::info("success save detail pembelian-----------------------");
        }       

        // return redirect()->route('datapembelian.index')->with('status', 'Data pembelian berhasil tersimpan');

        Session::flash('status','Data pembelian berhasil tersimpan'); 
        $rest['status'] = 'Data pembelian berhasil tersimpan';
        $rest['routing'] = route('datapembelian.index');

        return response()->json($rest,200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPembelian  $datapembelian
     * @return \Illuminate\Http\Response
     */
    public function show(DataPembelian $datapembelian)
    {
        // $data = $datapembelian;
        // return view('datapembelian.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPembelian  $datapembelian
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPembelian $datapembelian)
    {
        $data = $datapembelian;
        
        $dataDetailPembelian=DB::table("detail_pembelians")
        ->join("data_pembelians", "detail_pembelians.data_pembelians_id", "=", "data_pembelians.id")
        ->join("produks", "detail_pembelians.produks_id", "=", "produks.id")
        ->select("detail_pembelians.id", "produks.judul_produk", "detail_pembelians.jumlah", 
                 "detail_pembelians.harga", "detail_pembelians.total", 
                 "detail_pembelians.produks_id","produks.id as produk")
        ->where("detail_pembelians.data_pembelians_id", $data->id)
        ->get();

        return view('datapembelian.edit',compact('data', 'dataDetailPembelian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPembelian  $datapembelian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPembelian $datapembelian)
    {
        $datapembelian->deskripsi_produk=$request->get('deskripsi_produk');
        $datapembelian->stok=$request->get('stok');
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
        $datapembelian->stok=$request->get('stok');
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

    public function showDetail($id)
    {
        //Cara I
        // $datapembelian=DataPembelian::find($_POST['data_pembelians_id']);
        // $deskripsi_produk=$datapembelian->deskripsi_produk;
        // return response()->json(array(
        //     'status'=>'oke',
        //     'msg'=>view('datapembelian.showDetail',compact('deskripsi_produk'))->render()
        // ),200);

        // //Cara II
        // $datapembelian=DataPembelian::find($id);
        // return view('datapembelian.showDetail', compact('datapembelian, id'));

        //Cara III
    //     $detailpembelian_array = [];
    //     foreach($request->detail_pembelian as $detailPembelian)
    //     {
    //       $detailpembelian_array[$detailPembelian->id] = $detailPembelian->total;
    //     }
      
    //   return view('datapembelian.showDetail')->with(['data_pembelians' => $data_pembelians, 
    //   'datapembelian' => $datapembelian, 'detail_pembelians' => $detail_Pembelians, 'detailpembelian_array'=>$detailpembelian_array]);

        //Cara IV
        $deskripsi_produk = 'Detail Pembelian';
        $dp = DataPembelian::find($id);

        return view('datapembelian.showDetail', compact('deskripsi_produk, id'));
    }

}
