<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\artikel;
use App\Models\Kategori;

class ArticelApiController extends Controller
{
    public function getArtikelKategori($id){

        $artikel = artikel::where('id_kategori',$id)->get();

        if($artikel){
            return response()->json([
                'message' =>"data ada",
                'status' => true ,
                'data artikel' => $artikel
            ], 200);
        }else{
            return response()->json([
                'message'=> "Data Tidak Ada",
                'status' => false
            ],404);
        }

    }

    public function getDetailArtikel($id){

        $detail = artikel::find($id);

        if($detail){
            return response()->json([
                'message' => 'Data Ada',
                'status' => true,
                'data' => $detail
            ], 200);
        }else{
            return response()->json([
                'message' => 'Data Tidak ada',
                'status '=> false
            ],404);
        }
    }

    public function getArtikel(){
        $Artikel = artikel::all();

        if($Artikel){
            return response()->json([
                'message' => 'Semua Data',
                'status' => true,
                'Artikel' => $Artikel
            ],200);
        }else{
            return response()->json([
                'message'=> "Tidak Ada Artikel",
                'status' => false
            ],404);
        }
    }

    public function getArtikelKampus(){

        // $data = Kategori::where('id', 2)->first();


        $artikel = artikel::where('id_kategori', 2)->get();


        if($artikel){
            return response()->json([
                'message' => "ini artikel Kampus",
                'status' => true,
                'artikel' => $artikel
            ],200);
        }else{
            return response()->json([
                'message' => "tidak ada data ",
                'status' => false
            ],404);
        }
    }
}
