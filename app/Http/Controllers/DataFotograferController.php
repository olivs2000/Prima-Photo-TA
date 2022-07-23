<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;

use App\DataFotografer;
use Illuminate\Http\Request;
use DB;

class DataFotograferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from data_fotografers"));
        return view('datafotografer.index',['data'=>$queryRaw]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=DataFotografer::all();
        return view('datafotografer.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new DataFotografer();

        $file=$request->file('pas_foto');
        $imgFolder="images";
        $fileName=time()."_".$file->getClientOriginalName();
        //Log::info("masuk--------------");
        $file->move($imgFolder, $fileName);
        
        $data->pas_foto=$fileName;
        $data->nama=$request->get('nama');
        $data->alamat=$request->get('alamat');
        $data->notelepon=$request->get('notelepon');
        $data->email=$request->get('email');
        $data->alat_fotografi=$request->get('alat_fotografi');       
        $data->status=$request->get('status');
        $data->save();

        return redirect()->route('datafotografer.index')->with('status', 'Data fotografer berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DataFotografer  $datafotografer
     * @return \Illuminate\Http\Response
     */
    public function show(datafotografer $datafotografer)
    {
        $data = $dataFotografer;
        return view('datafotografer.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Datafotografer  $datafotografer
     * @return \Illuminate\Http\Response
     */
    public function edit(dataFotografer $datafotografer)
    {
        $data = $dataFotografer;
        return view('datafotografer.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DataFotografer  $datafotografer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, datafotografer $datafotografer)
    {
        $dataFotografer->pas_foto=$request->get('pas_foto');
        $dataFotografer->nama=$request->get('nama');
        $dataFotografer->alamat=$request->get('alamat');
        $dataFotografer->notelepon=$request->get('notelepon');
        $dataFotografer->email=$request->get('email');
        $dataFotografer->alat_fotografi=$request->get('alat_fotografi');
        $dataFotografer->status=$request->get('status');
        $dataFotografer->save(); 

        return redirect()->route('datafotografer.index')->with('status', 'Data fotografer berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DataFotografer  $datafotografer
     * @return \Illuminate\Http\Response
     */
    public function destroy(datafotografer $datafotografer)
    {
        $this->authorize('delete-permission');
        try
        {
            $datafotografer->delete();
            return redirect()->route('datafotografer.index')->with('status', 'Data fotografer berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus data fotografer';
            return redirect()->route('datafotografer.index')->with('error', $msg);
        }
    }

    public function editForm(Request $request)
    {
        $id=$request->get('id');
        $data=DataFotografer::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('datafotografer.editForm',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $dataFotografer=DataFotografer::find($id);
        $dataFotografer->pas_foto=$request->get('pas_foto');
        $dataFotografer->nama=$request->get('nama');
        $dataFotografer->alamat=$request->get('alamat');
        $dataFotografer->notelepon=$request->get('notelepon');
        $dataFotografer->email=$request->get('email');
        $dataFotografer->alat_fotografi=$request->get('alat_fotografi');
        $dataFotografer->status=$request->get('status');
        $dataFotografer->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Data fotografer berhasil di update'
        ),200);
    }

    public function deleteData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $dataFotografer=DataFotografer::find($id);
            $dataFotografer->delete(); 
            return response()->json(array(
            'status'=>'oke',
            'msg'=>'Sukses menghapus data fotografer'
        ),200);
        }catch(\PDOException $e){
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'Gagal menghapus data fotografer'
            ),200);
        }
    }

}
