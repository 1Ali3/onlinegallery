<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Painting;

class HomeController extends Controller {

    function __invoke() {
        $paintings = Painting::all(); //через модель Painting получаем все картины 
        return view('home', ["paintings" => $paintings]); //передаем шаблон с доп параметрами (картинами)
    }

}
