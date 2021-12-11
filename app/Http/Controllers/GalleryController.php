<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

class GalleryController extends Controller
{
    function __invoke($id) { 
        $gallery = Gallery::find($id);
        return view("gallery", ["gallery" => $gallery]);
    }
}
