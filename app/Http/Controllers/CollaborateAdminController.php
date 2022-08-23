<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Collaborate;
use DB;

class CollaborateAdminController extends Controller
{
    public function index()
    {
        $queryRaw=DB::select(DB::raw("select * from collaborate"));
        return view('collaborateadmin.index',['collaborate'=>$queryRaw]);
    }
}
