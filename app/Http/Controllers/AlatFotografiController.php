<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

use App\AlatFotografi;
use App\DataFotografer;
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
        $queryBuilder=DB::table("alat_fotografis")
            ->leftJoin("data_fotografers", "alat_fotografis.nama_peminjam", "=", "data_fotografers.id")
            ->orderBy("alat_fotografis.id", "ASC")
            ->select("alat_fotografis.*", "data_fotografers.nama")
            ->get();
        return view('alatfotografi.index',['data'=>$queryBuilder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fotografer=DataFotografer::all();
        return view('alatfotografi.create', compact('fotografer'));
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
        $data->stok=$request->get('stok');
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
    public function edit($alatfotografi)
    {
        $id=$alatfotografi;
         
        $data=DB::table("alat_fotografis")
        ->leftJoin("data_fotografers", "alat_fotografis.nama_peminjam", "=", "data_fotografers.id")
        ->select("alat_fotografis.*", "data_fotografers.nama")
        ->where("alat_fotografis.id", $id)
        ->first();

        $dataFotografer=DB::table("data_fotografers")
        ->select("data_fotografers.id", "nama")
        ->get();

        return view('alatfotografi.edit',compact('data','dataFotografer'));
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
        $alatfotografi->stok=$request->get('stok');
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
