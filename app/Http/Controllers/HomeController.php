<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $DB = DB::table('Permohonan')->where('Status','DIPROSES')->paginate(10);
        // dd($DB);
        return view('home',compact(['DB']));
    }
    
    public function riwayat()
    {
        $DB = DB::table('Permohonan')->where('Status','!=','DIPROSES')->paginate(10);
        // dd($DB);
        return view('riwayat',compact(['DB']));
    }

    public function update(Request $request)
    {
        DB::table('Permohonan')->where('ID_Permohonan',$request->ID)->update(['Status'=>$request->status]);
        return redirect('home');
    }
}
