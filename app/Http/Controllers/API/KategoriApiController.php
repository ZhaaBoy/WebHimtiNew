<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\User;

class KategoriApiController extends Controller
{
    public function kategori(){
        // $user = User::where('id', Auth()->user()->id)->get();
        $data = kategori::all();

        if ($data) {
            return response()->json([
                'message' => 'Data Ada',
                'status' => true,
                'data' => $data
            ], 200);
        }else {
            return response()->json([
                'message' => 'Data Tidak Ada',
                'status' => false
            ], 404);
        }
    }

    public function kategoriHimti(){
        $kathimti = Kategori::where('id', 1)->first();
        if ($kathimti) {
            return response()->json([
                'message' => 'Data Ada',
                'status' => true,
                'data' => $kathimti
            ], 200);
        }else {
            return response()->json([
                'message' => 'Data Tidak Ada',
                'status' => false
            ], 404);
        }
    }

    
}
