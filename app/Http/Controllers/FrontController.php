<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $directories=DB::table('directories')->orderBy('created_at','DESC')->paginate(20);
        return view('directory.directory',compact('directories'));
    }
    
    public function blood()
    {
        $bloods=DB::table('bloods')->orderBy('created_at','DESC')->paginate(20);
        return view('directory.blood2',compact('bloods'));
    }
    public function emergency()
    {
        $emergencies=DB::table('emergencies')->orderBy('created_at','DESC')->paginate(20);
        return view('directory.emergency2',compact('emergencies'));
    }

    public function library()
    {
        $libraries=DB::table('libraries')->orderBy('created_at','DESC')->paginate(20);
        return view('directory.library2',compact('libraries'));
    }



    

    
    
}
