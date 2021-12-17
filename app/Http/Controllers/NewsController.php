<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    
    public function index(){
        return view('berita', [
            "title"=>"Semua Berita",
            //"news" => News::all()
            "news" => News::latest()->get()
        ]);
    }

    public function single(News $halaman){
        return view('berita_',[
            "title"=>"Berita",
            "news"=> $halaman
        ]);
    }

}