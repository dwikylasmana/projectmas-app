<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function index(){

        return view('berita', [
            "title"=>"Semua Berita",
            "active"=> "berita",
            "news" => News::latest()->filter()->paginate(7)->withQueryString()
        ]);
    }

    public function single(News $halaman){
        return view('berita_',[
            "title"=>"Berita",
            "active"=> "berita",
            "news"=> $halaman
        ]);
    }

}