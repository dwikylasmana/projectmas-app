<?php

namespace App\Http\Controllers;

use App\Models\galleri;
use App\Http\Requests\StoregalleriRequest;
use App\Http\Requests\UpdategalleriRequest;

class GalleriController extends Controller
{
    public function index(){
        return view('galleri', [
            "title"=>"Galleri Projek",
            "active"=> "galeri",
            "gallery_func" => galleri::latest()->get()
        ]);
    }

    public function single(galleri $details){
        return view('galleri_',[
            "title"=>"Gallery Detail",
            "active"=> "galeri",
            "gallery_func"=> $details
        ]);
    }
}
