<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use App\Models\struktur_organ; 
use Illuminate\Http\Request;
use Nette\Schema\Elements\Structure;

class ApiStrukturhimtiController extends Controller
{
    public function getStruktur(){


        $pengurus = struktur_organ::where('status','aktif')->get();

        if($pengurus){
            return response()->json([
                'status'=> true,
                'massege' => 'data ada',
                'Pengurus' => $pengurus
            ],200);
        }else{
            return response()->json([
                'status' => false,
                'massege' => 'Data belum ada'
                
            ],404);
        }
    }
}
