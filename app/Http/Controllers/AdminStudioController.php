<?php

namespace App\Http\Controllers;

use App\AdminStudio;
use Illuminate\Http\Request;
use DB;

class AdminStudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from admin_studios"));
        return view('dataadmin.index',['data'=>$queryRaw]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
    public function update(Request $request, AdminStudio $dataadmin)
    {
        $dataadmin->nama_admin=$request->get('nama_admin');
        $dataadmin->notelepon=$request->get('notelepon');
        $dataadmin->email=$request->get('email');
        $dataadmin->save(); 

        return redirect()->route('dataadmin.index')->with('status', 'Data admin berhasil tersimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminStudio $dataadmin)
    {
        $this->authorize('delete-permission');
        try
        {
            $dataadmin->delete();
            return redirect()->route('dataadmin.index')->with('status', 'Data admin berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus data admin';
            return redirect()->route('dataadmin.index')->with('error', $msg);
        }
    }

    // function delete(Request $request)
    // {
    //     if($request->get('nama_admin'))
    //     {
    //         \File::delete(public_path('storage/' .  $request->get('nama_admin'), ('notelepon'), ('email')));
    //     }
    // }

    public function deleteAdmin(Request $request)
    {
        $request->validate([
            'nama_admin' => 'required' ,
            'notelepon' => 'required',
            'email' => 'required'
        ]);
        Log::info("pass validation---------------------------");

        if(File::exists(public_path('storage/'.$request->nama_admin.'/'.$request->notelepon.'/'.$request->email))){
            Log::info("Delete file...............................");
            File::delete(public_path('storage/'.$request->nama_admin.'/'.$request->notelepon.'/'.$request->email));
        }

        return response()->json(['msg'=> 'success']);

    }

    public function delete($id)
    {
        AdminStudio::find($id)->delete();
  
        return back();
    }
    
}
