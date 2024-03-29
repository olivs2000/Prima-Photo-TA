<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

use App\JadwalFotografer;
use App\AdminStudio;
use App\DataFotografer;
use App\Pemesanan;
use Illuminate\Http\Request;
use DB;

class JadwalFotograferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryBuilder=DB::table("jadwal_fotografers")
            ->leftJoin("pemesanans", "jadwal_fotografers.pemesanans_id", "=", "pemesanans.id")
            ->leftJoin("admin_studios", "jadwal_fotografers.admin_studios_id", "=", "admin_studios.id")
            ->leftJoin("data_fotografers", "jadwal_fotografers.data_fotografers_id", "=", "data_fotografers.id")
            // ->orderBy("jadwal_fotografers.pemesanans_id", "ASC")
            ->select("jadwal_fotografers.*", "pemesanans.nama", 
                     "admin_studios.nama_admin", "data_fotografers.nama_fotografer")
            ->get();
        return view('jadwalfotografer.index',['data'=>$queryBuilder]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $admin=AdminStudio::all();
        $fotografer=DataFotografer::all();
        $pemesanan=Pemesanan::all();
        return view('jadwalfotografer.create', compact('admin','fotografer','pemesanan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new JadwalFotografer();
        
        $data->pemesanans_id=$request->get('pemesanans_id');
        $data->data_fotografers_id=$request->get('data_fotografers_id');
        $data->admin_studios_id=$request->get('admin_studios_id');
        $data->status=$request->get('status');
        $data->save();

        return redirect()->route('jadwalfotografer.index')->with('status', 'Jadwal fotografer baru berhasil tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Jadwalfotografer  $jadwalfotografer
     * @return \Illuminate\Http\Response
     */
    public function show(jadwalfotografer $jadwalfotografer)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Jadwalfotografer  $jadwalfotografer
     * @return \Illuminate\Http\Response
     */
    public function edit($jadwalfotografer)
    {
        $id=$jadwalfotografer;
         
        $data=DB::table("jadwal_fotografers")
        ->leftJoin("pemesanans", "jadwal_fotografers.pemesanans_id", "=", "pemesanans.id")
        ->leftJoin("admin_studios", "jadwal_fotografers.admin_studios_id", "=", "admin_studios.id")
        ->leftJoin("data_fotografers", "jadwal_fotografers.data_fotografers_id", "=", "data_fotografers.id")
        ->select("jadwal_fotografers.*", "pemesanans.nama", 
                 "admin_studios.nama_admin", "data_fotografers.nama_fotografer")
        ->where("jadwal_fotografers.id", $id)
        ->first();

        $dataPemesanan=DB::table("pemesanans")
        ->select("pemesanans.id", "nama")
        ->get();

        $dataAdmin=DB::table("admin_studios")
        ->select("admin_studios.id", "nama_admin")
        ->get();

        $dataFotografer=DB::table("data_fotografers")
        ->select("data_fotografers.id", "nama_fotografer")
        ->get();

        return view("jadwalfotografer.edit",compact('data', 'dataPemesanan', 'dataAdmin', 'dataFotografer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Jadwalfotografer  $jadwalfotografer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, jadwalfotografer $jadwalfotografer)
    {
        $jadwalfotografer->pemesanans_id=$request->get('pemesanans_id');
        $jadwalfotografer->data_fotografers_id=$request->get('data_fotografers_id');
        $jadwalfotografer->admin_studios_id=$request->get('admin_studios_id');
        $jadwalfotografer->status=$request->get('status');
        $jadwalfotografer->save(); 

        return redirect()->route('jadwalfotografer.index')->with('status', 'Jadwal fotografer berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Jadwalfotografer  $jadwalfotografer
     * @return \Illuminate\Http\Response
     */
    public function destroy(jadwalfotografer $jadwalfotografer)
    {
        $this->authorize('delete-permission');
        try
        {
            $jadwalfotografer->delete();
            return redirect()->route('jadwalfotografer.index')->with('status', 'Jadwal fotografer berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus  jadwal fotografer';
            return redirect()->route('jadwalfotografer.index')->with('error', $msg);
        }
    }

    public function editForm(Request $request)
    {
        $id=$request->get('id');
        
        $data=DB::table("jadwal_fotografers")
        ->join("pemesanans", "jadwal_fotografers.pemesanans_id", "=", "pemesanans.id")
        ->join("admin_studios", "jadwal_fotografers.admin_studios_id", "=", "admin_studios.id")
        ->join("data_fotografers", "jadwal_fotografers.data_fotografers_id", "=", "data_fotografers.id")
        ->select("jadwal_fotografers.*", "pemesanans.nama", "admin_studios.nama_admin", "data_fotografers.nama_fotografer")
        ->where("jadwal_fotografers.id", $id)
        ->first();
        
        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('jadwalfotografer.editForm',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $jadwalfotografer=JadwalFotografer::find($id);
        
        $jadwalfotografer->admin_studios_id=$request->get('admin_studios_id');
        $jadwalfotografer->pemesanans_id=$request->get('pemesanans_id');
        $jadwalfotografer->data_fotografers_id=$request->get('data_fotografers_id');
        $jadwalfotografer->status=$request->get('status');
        $jadwalfotografer->save(); 
        return response()->json(array(
            'status'=>'oke',
            'msg'=>'Jadwal fotografer berhasil di update'
        ),200);
    }

    public function deleteData(Request $request)
    {
        try
        {
            $id=$request->get('id');
            $jadwalfotografer=JadwalFotografer::find($id);
            $jadwalfotografer->delete(); 
            return response()->json(array(
            'status'=>'oke',
            'msg'=>'Sukses menghapus jadwal fotografer'
        ),200);
        }catch(\PDOException $e){
            return response()->json(array(
                'status'=>'oke',
                'msg'=>'Gagal menghapus jadwal fotografer'
            ),200);
        }
    }
}
