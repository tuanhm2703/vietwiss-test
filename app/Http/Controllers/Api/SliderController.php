<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index() {
        return response()->json([
            'data' => Slider::with('image:imageable_id,path,width,height,size')->orderBy('order')->get()
        ]);
    }
}
