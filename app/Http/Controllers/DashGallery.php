<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galleri;
use Illuminate\Support\Facades\Storage;


class DashGallery extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('isAdmin');        
        if(auth())

        return view('/admin/dashboard/galleri', [
            'title'=>'Galeri Projek',
            "active"=> "galleri",
            'galleri'=>galleri::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/dashboard/galleribuat', [
            'title'=>'Buat Galeri Baru',
            "active"=> "galleri",
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
        $this->validate($request, [
            'title'      => 'required',
            'content'    => 'required',
            'image1'     => 'required|image|mimes:png,jpg,jpeg',
            'image2'     => 'image|mimes:png,jpg,jpeg',
            'image3'     => 'image|mimes:png,jpg,jpeg',
            'image4'     => 'image|mimes:png,jpg,jpeg',
            'image5'     => 'image|mimes:png,jpg,jpeg',
            'image6'     => 'image|mimes:png,jpg,jpeg',
            'image7'     => 'image|mimes:png,jpg,jpeg',
            'image8'     => 'image|mimes:png,jpg,jpeg',
            'image9'     => 'image|mimes:png,jpg,jpeg',
            'image10'    => 'image|mimes:png,jpg,jpeg',
        ]);


        $image1 = $request->file('image1');
        $image1->storeAs('/public/projek', $image1->hashName());
        $image1 = $image1->hashName();


        if($request->file('image2') == "") {
            $image2 = null;
        } else {
            $image2 = $request->file('image2');
            $image2->storeAs('/public/projek', $image2->hashName());
            $image2 = $image2->hashName();
        }

        if($request->file('image3') == "") {
            $image3 = null;
        } else {
            $image3 = $request->file('image3');
            $image3->storeAs('/public/projek', $image3->hashName());
            $image3 = $image3->hashName();
        }

        if($request->file('image4') == "") {
            $image4 = null;;
        } else {
            $image4 = $request->file('image4');
            $image4->storeAs('/public/projek', $image4->hashName());
            $image4 = $image4->hashName();
        }

        if($request->file('image5') == "") {
            $image5 = null;;
        } else {
            $image5 = $request->file('image5');
            $image5->storeAs('/public/projek', $image5->hashName());
            $image5 = $image5->hashName();
        }

        if($request->file('image6') == "") {
            $image6 = null;;
        } else {
            $image6 = $request->file('image6');
            $image6->storeAs('/public/projek', $image6->hashName());
            $image6 = $image6->hashName();
        }

        if($request->file('image7') == "") {
            $image7 = null;;
        } else {
            $image7 = $request->file('image7');
            $image7->storeAs('/public/projek', $image7->hashName());
            $image7 = $image7->hashName();
        }

        if($request->file('image8') == "") {
            $image8 = null;;
        } else {
            $image8 = $request->file('image8');
            $image8->storeAs('/public/projek', $image8->hashName());
            $image8 = $image8->hashName();
        }

        if($request->file('image9') == "") {
            $image9 = null;; 
        } else {
            $image9 = $request->file('image9');
            $image9->storeAs('/public/projek', $image9->hashName());
            $image9 = $image9->hashName();
        }

        if($request->file('image10') == "") {
            $image10 = null;;
        } else {
            $image10 = $request->file('image10');
            $image10->storeAs('/public/projek', $image10->hashName());
            $image10 = $image10->hashName();
        }

        $galleri = galleri::create([
            'title'     => $request->title,
            'content'   => $request->content,
            'user_id'   => auth()->user()->id,
            'image1'    => $image1,
            'image2'    => $image2,
            'image3'    => $image3,
            'image4'    => $image4,
            'image5'    => $image5,
            'image6'    => $image6,
            'image7'    => $image7,
            'image8'    => $image8,
            'image9'    => $image9,
            'image10'    => $image10,
        ]);

        if($galleri){
            return redirect()->route('galleri.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('galleri.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(galleri $galleri)
    {
        return view('/admin/dashboard/galleridetail',[
            "title"=>"Galleri Detail",
            "active"=> "galleri",
            "galleri"=> $galleri
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(galleri $galleri)
    {
        return view('/admin/dashboard/galleriedit', [
            "title"=> "Edit Album Galleri",
            "active"=> "galleri",
            "galleri"=> $galleri,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, galleri $galleri)
    {
        $this->validate($request, [
            'title'     => 'required',
            'content'   => 'required'
        ]);

        $galleri = galleri::findOrFail($galleri->id);

        if($request->file('image1') == "") {
            
        } else {
            $image1 = $request->file('image1');
            $image1->storeAs('/public/projek', $image1->hashName());
            $galleri->update(['image1' => $image1->hashName()]);
        }

        if($request->file('image2') == "") {

            
        } else {
            $image2 = $request->file('image2');
            $image2->storeAs('/public/projek', $image2->hashName());
            $galleri->update(['image2' => $image2->hashName()]);
        }

        if($request->file('image3') == "") {

            ;
        } else {
            $image3 = $request->file('image3');
            $image3->storeAs('/public/projek', $image3->hashName());
            $galleri->update(['image3' => $image3->hashName()]);
        }

        if($request->file('image4') == "") {

            
        } else {
            $image4 = $request->file('image4');
            $image4->storeAs('/public/projek', $image4->hashName());
            $galleri->update(['image4' => $image4->hashName()]);
        }

        if($request->file('image5') == "") {

            
        } else {
            $image5 = $request->file('image5');
            $image5->storeAs('/public/projek', $image5->hashName());
            $galleri->update(['image5' => $image5->hashName()]);
        }

        if($request->file('image6') == "") {

            
        } else {
            $image6 = $request->file('image6');
            $image6->storeAs('/public/projek', $image6->hashName());
            $galleri->update(['image6' => $image6->hashName()]);
        }

        if($request->file('image7') == "") {

            
        } else {
            $image7 = $request->file('image7');
            $image7->storeAs('/public/projek', $image7->hashName());
            $galleri->update(['image7' => $image7->hashName()]);
        }

        if($request->file('image8') == "") {

            
        } else {
            $image8 = $request->file('image8');
            $image8->storeAs('/public/projek', $image8->hashName());
            $galleri->update(['image8' => $image8->hashName()]);
        }

        if($request->file('image9') == "") {

            
        } else {
            $image9 = $request->file('image9');
            $image9->storeAs('/public/projek', $image9->hashName());
            $galleri->update(['image9' => $image9->hashName()]);
        }

        if($request->file('image10') == "") {

            
        } else {
            $image10 = $request->file('image10');
            $image10->storeAs('/public/projek', $image10->hashName());
            $galleri->update(['image10' => $image10->hashName()]);
        }
        
        $galleri->update([
            'title'     => $request->title,
            'content'   => $request->content
        ]);
        

        if($galleri){
            //redirect dengan pesan sukses
            return redirect()->route('galleri.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galleri.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galleri = galleri::findOrFail($id);
        $galleri->delete();

        if($galleri){
            //redirect dengan pesan sukses
            return redirect()->route('galleri.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galleri.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
