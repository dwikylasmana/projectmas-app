<?php

namespace App\Http\Controllers;

use App\Models\pengajuan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashPengajuan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/dashboard/pengajuan', [
            'title'=>'Pengajuan',
            "active"=> "Pengajuan",
            'pengajuan'=>pengajuan::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/dashboard/pengajuanbuat', [
            'title'=>'Buat Pengajuan Baru',
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
        $this->$request->validate([
            'content'      => 'required',
            'file1'    => 'required',
            'file2'     => 'required|image|mimes:png,jpg,jpeg',
            'file3'     => 'image|mimes:png,jpg,jpeg',
            'file4'     => 'image|mimes:png,jpg,jpeg',
        ]);

        $user_id =  auth()->user()->id;

        $file1 = $request->file('file1');
        $file1->storeAs('/public/pengajuan', $file1->hashName());
        $file1 = $file1->hashName();

        if($request->file('file2') == "") {
            $file2 = null;
        } else {
            $file2 = $request->file('file2');
            $file2->storeAs('/public/projek', $file2->hashName());
            $file2 = $file2->hashName();
        }

        if($request->file('file3') == "") {
            $file3 = null;
        } else {
            $file3 = $request->file('file3');
            $file3->storeAs('/public/projek', $file3->hashName());
            $file3 = $file3->hashName();
        }
        
        if($request->file('file4') == "") {
            $file4 = null;;
        } else {
            $file4 = $request->file('file4');
            $file4->storeAs('/public/projek', $file4->hashName());
            $file4 = $file4->hashName();
        }

        $pengajuan = pengajuan::create([
            'content'   => $request->content,
            'user_id'   => $user_id,
            'file1'    => $file1,
            'file2'    => $file2,
            'file3'    => $file3,
            'file4'    => $file4,
        ]);

        if($pengajuan){
            return redirect()->route('pengajuan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('pengajuan.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function show(pengajuan $pengajuan)
    {
        return view('/admin/dashboard/pengajuandetail',[
            "title"=>"Pengajuan Detail",
            "active"=> "Pengajuan",
            "pengajuan"=> $pengajuan
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function edit(pengajuan $pengajuan)
    {
        return view('/admin/dashboard/pengajuanedit', [
            "title"=> "Edit Pengajuan",
            "active"=> "Pengajuan",
            "pengajuan"=> $pengajuan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengajuan $pengajuan)
    {
        $pengajuan->update([
            'content'   => $request->content,
            'valid'     => $request->valid,
            'msg'       => $request->msg,
        ]);

        if($pengajuan){

            return redirect()->route('pengajuan.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{

            return redirect()->route('pengajuan.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengajuan  $pengajuan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengajuan = pengajuan::findOrFail($id);
        $pengajuan->delete();

        if($pengajuan){
            //redirect dengan pesan sukses
            return redirect()->route('pengajuan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('pengajuan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

    public function download(pengajuan $pengajuan)
    {
        $pengajuan = pengajuan::all();
        $file1 = $pengajuan->file1;
        $file2 = $pengajuan->file2;
        $file3 = $pengajuan->file3;
        $file4 = $pengajuan->file4;


        if($file1 == "") {
            $file1 = null;
        } else {
            $file1 = $pengajuan->file1;
        }

        if($file2 == "") {
            $file2 = null;
        } else {
            $file2 = $pengajuan->file2;
        }

        if($file3 == "") {
            $file3 = null;
        } else {
            $file3 = $pengajuan->file3;
        }

        if($file4 == "") {
            $file4 = null;
        } else {
            $file4 = $pengajuan->file4;
        }

        return Storage::download('/public/pengajuan/'.$file1);
        return Storage::download('/public/pengajuan/'.$file2);
        return Storage::download('/public/pengajuan/'.$file3);
        return Storage::download('/public/pengajuan/'.$file4);
    }
}
