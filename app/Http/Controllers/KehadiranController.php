<?php

namespace App\Http\Controllers;

use App\Models\Kehadiran;
use Illuminate\Http\Request;

class KehadiranController extends Controller
{
    //

    function getKehadiran() {
        $kehadiran = Kehadiran::with('siswa:id,fullname,email,kontak_sis,kontak_ort', 'kelas:id,nama_kelas')->get();
        return response()->json($kehadiran);
    }

    function postKehadiran(Request $request){
        // dd($request);
        $absen = Kehadiran::create([
            "siswa_id"=>$request->siswa_id,
            "kelas_id"=>$request->kelas_id,
            "waktu_in"=>$request->waktu_in,
            "waktu_out"=>$request->waktu_out,
            "total_durasi"=>$request->total_durasi
        ]);
        return response()->json($absen->loadMissing('siswa:id,fullname,email,kontak_sis,kontak_ort'));
    }
}
