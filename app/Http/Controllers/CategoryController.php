<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show(){
        return view('kategori', [
            'title'=> 'Kategori Berita',
            'category'=> Category::all()
        ]);
    }

    public function find(Category $category){
        return view('berita', [
            'title'=>$category->name,
            'news'=>$category->news,
            'category'=>$category->name
        ]);
    }
}
