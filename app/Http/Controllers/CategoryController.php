<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(){
        return view('kategori', [
            'title'=> 'Kategori Berita',
            "active"=> "berita",
            'category'=> Category::all()
        ]);
    }

    public function find(Category $category){
        return view('beritak', [
            'title'=>$category->name,
            "active"=> "berita",
            'news'=>$category->news,
            'category'=>$category->name
        ]);
    }
}
