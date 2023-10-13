<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{

    function index()
    {
        $nama_kelas = Kelas::all();
        return response()->json($nama_kelas);
    }

    function createKelas(Request $request){
        $kelas = Kelas::create([
            'nama_kelas'=> $request->nama_kelas
        ]);
        return response()->json($kelas);
    }
}
