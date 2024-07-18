<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\angkatan;
use App\Models\bootcamp;
use DB;
class ApiBootcampController extends Controller
{

    public function anggotaAngkatan(Request $request){


        $anggota = DB::table('anggotans')
        ->where('anggotans.angkatan','LIKE', '%'. $request->anggota .'%')
        ->select('anggotans.nama','anggotans.nim','anggotans.email','anggotans.angkatan')
        ->get();

           if($anggota->isEmpty()){
            return response()->json([
                'message' => 'Data Anggota Tidak ada',
                'status' => false,

            ],404);
        }else{
            return response()->json([
                'message' => 'Data Anggota ada',
                'status' => true,
                'Anggota' => $anggota,
            ],200);
        }
    }
    public function getAnggota(){
        // $anggota = anggota::all();

        $anggota = DB::table('anggotans')
            ->select('anggotans.nama','anggotans.nim','anggotans.email','anggotans.angkatan')
            ->get();

        if($anggota){
            return response()->json([
                'message' => 'Data Anggota ada',
                'status' => true,
                'Anggota' => $anggota
            ],200);
        }else{
            return response()->json([
                'message' => 'Tidak ada data anggota',
                'status' => false
            ],404);
        }
    }
    public function SearchAnggota(Request $request){

        // $anggota = Anggota::where('nama', 'LIKE', '%'. $request->anggota .'%')->get();
        $anggota = DB::table('anggotans')
        ->where('anggotans.nama','LIKE', '%'. $request->anggota .'%')
        ->select('anggotans.nama','anggotans.nim','anggotans.email','anggotans.angkatan')
        ->get();

       if($anggota->isEmpty()){
            return response()->json([
                'message' => 'Data Anggota Tidak ada',
                'status' => false,

            ],404);
        }else{
            return response()->json([
                'message' => 'Data Anggota ada',
                'status' => true,
                'Anggota' => $anggota,
            ],200);
        }
    }
}
