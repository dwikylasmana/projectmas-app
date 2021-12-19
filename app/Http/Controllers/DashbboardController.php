<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashbboardController extends Controller
{
    public function index(){
        return view('admin.dashboard', [
            "title"=>"Dashboard",
        ]);
    }
}
