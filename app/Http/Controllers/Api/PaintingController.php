<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaintingController extends Controller {

    function get($id = 0, Request $request) {
        $data = [];
        if ($id === 0) {
            if ($request->id)
                $id = $request->id;
            else {
                $msg = "Wrong ID!";
                $status = "error";
            }
        }
        if (is_numeric($id)) {
            $data = DB::table("paintings")->find($id);
            if (empty($data)) {
                $msg = "empty database";
            } else {
                $msg = "full database";
            }
            $status = "success";
        } else {
            $msg = "Wrong ID type! Only number!";
            $status = "error";
        }
        return ["msg" => $msg, "status" => $status, "data" => $data];
    }

}
