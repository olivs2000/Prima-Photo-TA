<?php

namespace App\Http\Controllers;

use App\AlatFotografi;
use Illuminate\Http\Request;
use DB;

class AlatFotografiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from alat_fotografis"));
        return view('alatfotografi.index',['data'=>$queryRaw]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=AlatFotografi::all();
        return view('alatfotografi.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new AlatFotografi();
        
        $data->nama_alat=$request->get('nama_alat');
        $data->nama_peminjam=$request->get('nama_peminjam');       
        $data->status=$request->get('status');
        $data->save();

        return redirect()->route('alatfotografi.index')->with('status', 'Alat fotografi berhasil tersimpan');
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
        $data = $alatfotografi;
        return view('alatfotografi.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alatfotografi $alatfotografi)
    {
        $alatfotografi->nama_alat=$request->get('nama_alat');
        $alatfotografi->nama_peminjam=$request->get('nama_peminjam');
        $alatfotografi->status=$request->get('status');
        $alatfotografi->save(); 

        return redirect()->route('alatfotografi.index')->with('status', 'Alat Fotografi berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(alatfotografi $alatfotografi)
    {
        $this->authorize('delete-permission');
        try
        {
            $alatfotografi->delete();
            return redirect()->route('alatfotografi.index')->with('status', 'Alat fotografi berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus alat fotografi';
            return redirect()->route('alatfotografi.index')->with('error', $msg);
        }
    }
}
