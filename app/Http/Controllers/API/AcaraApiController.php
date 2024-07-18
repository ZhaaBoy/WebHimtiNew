<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use App\Models\acara;
class AcaraApiController extends Controller
{


    public function getAcarahimti(){
        $acarahimti = acara::all();

        if($acarahimti){
            if (!$acarahimti->isEmpty()){
                return response()->json([
                    'message' => 'data acarahimti ada',
                    'status' => true,
                    'acarahimti' =>$acarahimti
                ],200);
            } else {
                return response()->json([
                    'message' => 'data acarahimti tidak ada',
                    'status' => false

                ],404);
            }
        }else {
            return response()->json([
                'message' => 'data acarahimti tidak ada',
                'status' => false

            ],404);
        }
    // }

    // if($acarahimti->isEmpty()){
    //     return response()->json([
    //         'message' => 'data acarahimti tidak ada',
    //         'status' => false
    //     ],404);
    // }else{
    //     return response()->json([
    //         'message' => 'Data acarahimti ada',
    //         'status' => true,
    //         'Jadwal' => $acarahimti,
    //     ], 200);
    // }
}


    public function getDetailAcara($id){
        $acara = acara::find($id);
        if($acara){
            return response()->json([
                'message' =>"data ada",
                'status' => true ,
                'data artikel' => $acara
            ], 200);
        }else{
            return response()->json([
                'message'=> "Data Tidak Ada",
                'status' => false
            ],404);
        }
    }
}
