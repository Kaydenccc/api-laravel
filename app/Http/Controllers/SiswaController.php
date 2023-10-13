<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    public function index(){
        $siswa = Siswa::all();
        return response()->json(['data'=>$siswa]);
    }

   public function createSiswa(Request $request){

        // dd($request->fullname);        
        DB::table('siswa')->insert([
            'fullname'=> $request->fullname,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'kontak_ort'=> $request->kontak_ort,
            'kontak_sis'=> $request->kontak_sis,
            'kelas_id'=> $request->kelas_id,
        ]);

        return 'success';
    }
    function getAllSiswa(){

        // dd($request->fullname);        
        $siswa = Siswa::all();

        return response()->json(['data'=>$siswa]);
    }
}
