<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborate;
use App\CollaborateAdmin;
use DB;

class CollaborateAdminController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from collaborates"));
        return view('collaborateadmin.index',['collaborate'=>$queryRaw]);
    }

    // public function edit(collaborate $collaborateAdmin)
    // {
    //     $data = $collaborateAdmin;
    //     return view('collaborateadmin.edit',compact('data'));
    // }

    public function update(Request $request, CollaborateAdmin $collaborateAdmin)
    {
        $collaborateAdmin->status=$request->get('status');
        $collaborateAdmin->save(); 

        return redirect()->route('collaborateadmin.index')->with('status', 'Data berhasil diubah');
    }

    public function destroy(CollaborateAdmin $collaborateAdmin)
    {
        $this->authorize('delete-permission');
        try
        {
            $collaborateAdmin->delete();
            return redirect()->route('collaborateadmin.index')->with('status', 'Data berhasil dihapus');
        }
        catch(\PDOException $ex)
        {
            $msg = 'Terjadi kesalahan! Gagal menghapus data';
            return redirect()->route('collaborateadmin.index')->with('error', $msg);
        }
    }

    public function editcol(Request $request)
    {
        $id=$request->get('id');
        $data=CollaborateAdmin::find($id);

        return response()->json(array(
            'status'=>'oke',
            'msg'=>view('collaborateadmin.editcol',compact('data'))->render()
        ),200);
    }

    public function saveData(Request $request)
    {
        $id=$request->get('id');
        $collaborateAdmin=collaborateAdmin::find($id);
        $collaborateAdmin->status=$request->get('status');
        $collaborateAdmin->save();
        
        alert()->success('Success','Status berhasil diubah');     

        return response()->json(array(
            'status'=>'Success',
            'msg'=>'Status berhasil di ubah'
        ),200);
    }
}
