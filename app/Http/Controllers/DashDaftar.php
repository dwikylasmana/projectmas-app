<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pendaftaran;

class DashDaftar extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/dashboard/daftar', [
            'title'=>'List Pendaftaran',
            "active"=> "daftar",
            'daftar'=> pendaftaran::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/dashboard/daftarbuat', [
            'title'=>'Buat Pendaftaran',
            "active"=> "daftar",
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftaran $daftar)
    {
        return view('/admin/dashboard/daftardetail',[
            "title"=>"Detail Pendaftaran",
            "active"=> "daftar",
            "daftar"=> $daftar
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftaran $daftar)
    {
        return view('/admin/dashboard/daftaredit', [
            "title"=> "Edit Pendaftaran Klien",
            "active"=> "daftar",
            "daftar"=> $daftar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar = pendaftaran::findOrFail($id);
        $daftar->delete();

        if($daftar){
            //redirect dengan pesan sukses
            return redirect()->route('galleri.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('galleri.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
