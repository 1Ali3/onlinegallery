<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaintingController extends Controller
{
    function get($id){
        $painting = DB::table("paintings")->find($id);
        return $painting;
    }
}
