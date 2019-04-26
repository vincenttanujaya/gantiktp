<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class formController extends Controller
{
    public function submit(Request $request){
        // dd($request);
        $uploadedFile = $request->file('file');
        // $path = $uploadedFile->store('public');
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'img/fileupload';
        $namafile = $uploadedFile->getClientOriginalName();
        $namafile = $request->nik . "_" . $namafile;
        $uploadedFile->move($tujuan_upload,$namafile) ;
        DB::table('permohonan')->insert([
            'Nama' => $request->nama,
            'Alamat' => $request->alamat,
            'RT' => $request->rt,
            'RW' => $request->rw,
            'Kelurahan' => $request->kelurahan,
            'urlFoto' => $namafile,
            'Alasan' => $request->alasan,
            'NIK' => $request->nik
        ]);
        return redirect('status');
    }
    public function index(){
        $status = 1;
        return view('status',compact(['status']));
    }

    public function status2(){
        $status = 1;
        return view('statusktp',compact(['status']));
    }

    public function status(Request $request){
        $DB=DB::table('permohonan')->where('NIK', $request->nik)->orderBy('ID_Permohonan', 'desc')->first();
        if ($DB) {
            $status = $DB->Status;
        }
        else {
            $status = 3;
        }
        return view('status',compact(['status']));
    }
    
    public function cekdata(Request $request){
        if($request->has('nik')){
            $cari=$request->nik;
            $data = DB::table('kependudukan')->where('NIK',$cari)->get();
            return response()->json($data);
        }
        return "false";
    }
}
