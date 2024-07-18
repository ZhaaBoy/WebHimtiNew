<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Footer;


class FooterApiController extends Controller
{
    public function getFooter(){
        $footer = Footer::all();

        if($footer){
            return response()->json([
                'message' => 'data footer ada',
                'status' => true,
                'footer' => $footer
            ],200);
        }else{
            return response()->json([
                'message' => 'data footer tidak ada',
                'status' => false

            ],404);
        }
    }
}
