<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller {

    function __invoke() {
        $paintings = DB::table("paintings")->get();
        return view('home', ["paintings" => $paintings]);
    }

}
