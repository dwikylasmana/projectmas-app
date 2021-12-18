<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{

    public function index(){

        $news = News::latest();

        if(request('search')){
            $news->where('title','like','%' . request('search') . '%');
        }


        return view('berita', [
            "title"=>"Semua Berita",
            "active"=> "berita",
            "news" => $news->get()
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