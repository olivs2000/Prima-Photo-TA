<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

use App\Jadwalfotografer;
use App\AdminStudio;
use App\DataFotografer;
use App\DetailPemesanan;
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
            ->leftJoin("detail_pemesanans", "jadwal_fotografers.detail_pemesanans_id", "=", "detail_pemesanans.id")
            ->leftJoin("admin_studios", "jadwal_fotografers.admin_studios_id", "=", "admin_studios.id")
            ->leftJoin("data_fotografers", "jadwal_fotografers.data_fotografers_id", "=", "data_fotografers.id")
            ->orderBy("jadwal_fotografers.detail_pemesanans_id", "ASC")
            ->select("jadwal_fotografers.*", "detail_pemesanans.id as detail_pemesanans_id", "admin_studios.nama_admin", "data_fotografers.nama")
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
        $pemesanan=DetailPemesanan::all();
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
        
        $data->detail_pemesanans_id=$request->get('detail_pemesanans_id');
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
    public function edit(jadwalfotografer $jadwalfotografer)
    {
        $data = $jadwalfotografer;
        return view('jadwalfotografer.edit',compact('data'));
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
        $jadwalfotografer->detail_pemesanans_id=$request->get('detail_pemesanans_id');
        $jadwalfotografer->data_fotografers_id=$request->get('data_fotografers_id');
        $jadwalfotografer->admin_studios_id=$request->get('admin_studios_id');
        $jadwalfotografer->status=$request->get('status');
        $jadwalfotografer->save(); 

        return redirect()->route('jadwalfotografer.index')->with('status', 'Jadwal fotografer baru berhasil tersimpan');
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
        // $data=JadwalFotografer::find($id);
        
        $data=DB::table("jadwal_fotografers")
        ->join("detail_pemesanans", "jadwal_fotografers.detail_pemesanans_id", "=", "detail_pemesanans.id")
        ->join("admin_studios", "jadwal_fotografers.admin_studios_id", "=", "admin_studios.id")
        ->join("data_fotografers", "jadwal_fotografers.data_fotografers_id", "=", "data_fotografers.id")
        ->select("jadwal_fotografers.*", "detail_pemesanans.id as detail_pemesanans_id", "admin_studios.nama_admin", "data_fotografers.nama")
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
        $jadwalfotografer->detail_pemesanans_id=$request->get('detail_pemesanans_id');
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
