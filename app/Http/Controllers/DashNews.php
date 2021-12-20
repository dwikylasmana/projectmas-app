<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashNews extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/dashboard/berita', [
            'title'=>'Berita',
            "active"=> "Berita",
            'news'=>News::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/dashboard/beritabuat', [
            "title"=>"Buat Berita",
            "active"=> "Berita",
            'category'=> Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatepost = $request->validate([
            'title'=>'required|max:255',
            'category_id'=>'required',
            'content'=>'required'
        ]);

        $validatepost['user_id'] = auth()->user()->id;
        $validatepost['intro'] = Str::limit(strip_tags($request->content), 50);

        News::create($validatepost);
        return redirect('/dashboard/berita')->with('success','Berita telah berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('/admin/dashboard/beritadetail',[
            "title"=>"Berita",
            "active"=> "Berita",
            "news"=> $news
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('/admin/dashboard/beritaedit', [
            "title"=> "Edit Berita",
            "active"=> "Berita",
            "news"=> $news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required'
        ]);

        $news = News::findOrFail($news->id);

        $news->update([
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        if($news){
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        if($news){
            return redirect()->route('berita.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('berita.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
