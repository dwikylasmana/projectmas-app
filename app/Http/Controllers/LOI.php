<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\pengajuan;

class LOI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/klien/pengajuan', [
            'title' =>'Pengajuan Kerjasama',
            "active"=> "pengajuan",
            "pengajuan"=>  pengajuan::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/klien/pengajuanbuat', [
            'title'=>'Buat Pengajuan',
            "active"=> "pengajuan",
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
            'content'       => 'required',
            'file1'         => 'required',
        ]);

        $file1 = $request->file('file1');
        $file1->storeAs('/public/pengajuan', $file1->hashName());
        $file1 = $file1->hashName();

        if($request->file('file2') == "") {
            $file2 = null;
        } else {
            $file2 = $request->file('file2');
            $file2->storeAs('/public/pengajuan', $file2->hashName());
            $file2 = $file2->hashName();
        }

        if($request->file('file3') == "") {
            $file3 = null;
        } else {
            $file3 = $request->file('file3');
            $file3->storeAs('/public/pengajuan', $file3->hashName());
            $file3 = $file3->hashName();
        }

        if($request->file('file4') == "") {
            $file4 = null;
        } else {
            $file4 = $request->file('file4');
            $file4->storeAs('/public/pengajuan', $file4->hashName());
            $file4 = $file4->hashName();
        }

        $user_id = auth()->user()->id;

        $pengajuan = pengajuan::create([
            'user_id'       => $user_id,
            'file1'         => $file1,
            'file2'         => $file2,
            'file3'         => $file3,
            'file4'         => $file4,
            'content'       => $request->content
        ]);

        if($pengajuan){
            return redirect()->route('pengajuanloi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('pengajuanloi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pengajuan $pengajuan)
    {
        return view('/klien/pengajuanedit', [
            "title"=> "Edit Pengajuan Klien",
            "active"=> "daftar",
            "pengajuan"=> pengajuan::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengajuan $pengajuan)
    {
        $rules = [
            'content'       => 'required',
        ];

        $validatepengajuan = $request->validate($rules);
        $user_id = auth()->user()->id;


        if($request->file('file1') == "") {
        } else {
            $file1 = $request->file('file1');
            $file1->storeAs('/public/pengajuan', $file1->hashName());
            pengajuan::where('user_id', $user_id)->update(['file1' => $file1->hashName()]);
        }

        if($request->file('file2') == "") {
        } else {
            $file2 = $request->file('file2');
            $file2->storeAs('/public/pengajuan', $file2->hashName());
            pengajuan::where('user_id', $user_id)->update(['file2' => $file2->hashName()]);
        }

        if($request->file('file3') == "") {
        } else {
            $file3 = $request->file('file3');
            $file3->storeAs('/public/pengajuan', $file3->hashName());
            pengajuan::where('user_id', $user_id)->update(['file3' => $file3->hashName()]);
        }

        if($request->file('file4') == "") {
        } else {
            $file4 = $request->file('file4');
            $file4->storeAs('/public/pengajuan', $file4->hashName());
            pengajuan::where('user_id', $user_id)->update(['file4' => $file4->hashName()]);
        }
        
        pengajuan::where('user_id', $user_id)->update($validatepengajuan);

        if($validatepengajuan){
            return redirect()->route('pengajuanloi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('pengajuanloi.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $daftar = pengajuan::findOrFail($id);
        $daftar->delete();

        if($daftar){
            return redirect()->route('pengajuanloi.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('pengajuanloi.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
