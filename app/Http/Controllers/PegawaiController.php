<?php

namespace App\Http\Controllers;

use App\Pegawai;
use DB;
use Illuminate\Http\Request;


class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryraw=DB::select(DB::raw("select * from pegawais"));
        
        return view('pegawai.index', ['data'=>$queryraw]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Pegawai();

        $data->nama_pegawai=$request->get('nama_pegawai');
        $data->address=$request->get('address');
        $data->notelepon=$request->get('notelepon');
        $data->save();

        return redirect()->route('pegawai.index')->with('status', 'pegawai baru berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show(Pegawai $pegawai)
    {
       // return view('pegawai.show',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        // $data=$pegawai;
        // return view("pegawai.edit", compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $pegawai->nama_pegawai=$request->get('nama_pegawai');
        $pegawai->address=$request->get('address');
        $pegawai->notelepon=$request->get('notelepon');
        $pegawai->save();

        return redirect()->route('pegawai.index')->with('status', 'Data pegawai berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        $this->authorize('delete-permission');
        try
        {
            $pegawai->delete();
            return redirect()->route('pegawai.index')->with('status', 'Data pegawai berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Gagal hapus data pegawai. ';
            return redirect()->route('pegawai.index')->with('error', $msg);
        }
    }

    public function getEditForm(Request $request)
    {
        $id=$request->get('id');
        $data=Pegawai::find($id);
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('pegawai.getEditForm',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $pegawai=Pegawai::find($id);
        $pegawai->nama_pegawai=$request->get('namaPegawai');
        $pegawai->address=$request->get('address');
        $pegawai->notelepon=$request->get('noTelepon');
        $pegawai->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Data pegawai berhasil di update'
        ),200);
    }

    public function deleteData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $pegawai=Pegawai::find($id);
            $pegawai->delete();
            return response()->json(array(
            'status'=>'oke',
            'msg'=>'Sukses menghapus data pegawai'
        ),200);
        }catch(\PDOException $e){
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'Gagal menghapus data pegawai'
            ),200);
        }
    }

    public function saveDataFiled(Request $request)
    {
        $id=$request->get('id');
        $fname=$request->get('fname');
        $value=$request->get('value');

        $pegawai=Pegawai::find($id);
        $pegawai->$fname=$value;
        $pegawai->save();
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Data pegawai berhasil di update'
        ),200);
    }
}
