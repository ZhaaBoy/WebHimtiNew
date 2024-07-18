<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\danus;
use App\Models\slider;
use App\Models\merchandise;


class SliderApiController extends Controller
{

    public function getDataSlider(){
        $slider = slider::all();

        if($slider){
            return response()->json([
                'message' => 'data slider ada',
                'status' => true,
                'sllider' =>$slider
            ],200);
        }else{
            return response()->json([
                'message' => 'data sider tidak ada',
                'status' => false

            ],404);
        }
    }
    
    public function getSliderDanus(){
        $danus = danus::all();

        if($danus){
            return response()->json([
                'message' => 'data slider danus ada',
                'status' => true,
                'sllider' =>$danus
            ],200);
        }else{
            return response()->json([
                'message' => 'data slider danus tidak ada',
                'status' => false

            ],404);
        }
    }

    public function getMerchan(){
        $merchan = merchandise::all();

        if($merchan){
            return response()->json([
                'message' => 'data merchandise danus ada',
                'status' => true,
                'merchandise' =>$merchan
            ],200);
        }else{
            return response()->json([
                'message' => 'data merchandise tidak ada',
                'status' => false

            ],404);
        }
    }
}
