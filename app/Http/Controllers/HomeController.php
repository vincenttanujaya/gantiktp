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
        $data['DB'] = DB::table('permohonan')->where('Status','DIPROSES')->paginate(10);
        // $data['nomor'] = 
        // dd($DB);
        return view('home',$data);
    }
    
    public function riwayat()
    {
        $DB = DB::table('permohonan')->where('Status','!=','DIPROSES')->paginate(10);
        // dd($DB);
        return view('riwayat',compact(['DB']));
    }

    public function update(Request $request)
    {
        // dd($request);
        DB::table('permohonan')->where('ID_Permohonan',$request->idpermohonan)->update(['Status'=>$request->status]);
        return redirect('home');
    }
}
