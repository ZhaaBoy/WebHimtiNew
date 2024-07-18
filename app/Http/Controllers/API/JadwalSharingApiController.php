<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\jadwal_sharing;
use Illuminate\Http\Request;

class JadwalSharingApiController extends Controller
{
    public function sharing(){
        $sharing = jadwal_sharing::all();

        if ($sharing->isEmpty()) {
            return response()->json([
                'message' => 'Tidak ada data sharing',
                'status' => false,
            ], 404);
        } else {
            return response()->json([
                'message' => 'Data sharing ada',
                'status' => true,
                'Jadwal' => $sharing,
            ], 200);
        }
    }

    public function getDetailsharing($id){
        $sharing = jadwal_sharing::find($id);

        if($sharing){
            return response()->json([
                'message' => 'Data Sharing Ada',
                'status' => true,
                'Jadwal' => $sharing
            ],200);
        }else{
            return response()->json([
                'message' => 'Data Sharing Tidak ada',
                'status' =>false
            ],404);
        }
    }
}
