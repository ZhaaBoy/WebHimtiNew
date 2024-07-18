<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;

use App\Models\dosen;
use Illuminate\Http\Request;

class ApiDosenController extends Controller
{

    public function getDataDosen(){
        $dosen = dosen::all();

        if($dosen){
            return response()->json([
                'message' => 'data dosen ada',
                'status' => true,
                'Dosen' =>$dosen
            ],200);
        }else{
            return response()->json([
                'message' => 'data dosen tidak ada',
                'status' => false

            ],404);
        }
    }

    public function searchDosen(Request $request){
        // $dosen = $request->dosen;

        $data = dosen::where('nama', 'like', '%'.$request->nama.'%')->get();
        
        
        if($data ->isEmpty()){
            return response()->json([
                'message' => 'Tidak ada data Dosen',
                'status' => false,
            ], 404);
        }else{
            return response()->json([
                'message' => 'Data Dosen ada',
                'status' => true,
                'Dosen' => $data,
          ],200); 
        }
    }
}
