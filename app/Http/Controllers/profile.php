<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    function index()
    {
        $respon = [
            "status" => "204",
            "msg" => "Hapus data berhasil"

        ];

        return $respon;
    }
}
