<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccController extends Controller
{
    public function index(){
        return view('akun/index', [
            "title"=>"Akun",
            "active"=>"akun"
        ]);
    }
}
