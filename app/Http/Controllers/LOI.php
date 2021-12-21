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
        $user_id = auth()->user()->id;

        return view('/klien/pengajuan', [
            'title' =>'Pengajuan Kerjasama',
            "active"=> "pengajuan",
            'user'  => User::findOrFail($user_id),
            'pengajuan'=> pengajuan::findOrFail($user_id)
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
            'nik'           => 'required',
            'scan_ktp'      => 'required',
            'scan_kk'       => 'required',
            'telp'          => 'required',
            'negara'        => 'required',
            'provinsi'      => 'required',
            'alamat'        => 'required',
            'npwp'          => 'required',
            'scan_npwp'     => 'required',
            'no_sppkp'      => 'required',
            'scan_sppkp'    => 'required',
        ]);

        $scan_ktp = $request->file('scan_ktp');
        $scan_ktp->storeAs('/public/daftar', $scan_ktp->hashName());
        $scan_ktp = $scan_ktp->hashName();

        $scan_kk = $request->file('scan_kk');
        $scan_kk->storeAs('/public/daftar', $scan_kk->hashName());
        $scan_kk = $scan_kk->hashName();

        $scan_npwp = $request->file('scan_npwp');
        $scan_npwp->storeAs('/public/daftar', $scan_npwp->hashName());
        $scan_npwp = $scan_npwp->hashName();

        $scan_sppkp = $request->file('scan_sppkp');
        $scan_sppkp->storeAs('/public/daftar', $scan_sppkp->hashName());
        $scan_sppkp = $scan_sppkp->hashName();

        $user_id = auth()->user()->id;
        $user_name = auth()->user()->name;

        $daftar = pengajuan::create([
            'nik'           => $request->nik,
            'user_id'       => $user_id,
            'name'          => $user_name,
            'scan_ktp'      => $scan_ktp,
            'scan_kk'       => $scan_kk,
            'telp'          => $request->telp,
            'negara'        => $request->negara,
            'provinsi'      => $request->provinsi,
            'alamat'        => $request->alamat,
            'npwp'          => $request->npwp,
            'scan_npwp'     => $scan_npwp,
            'no_sppkp'      => $request->no_sppkp,
            'scan_sppkp'    => $scan_sppkp,
        ]);

        if($daftar){
            return redirect()->route('pengajuan.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('pengajuan.index')->with(['error' => 'Data Gagal Disimpan!']);
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
            "title"=> "Edit Pengajuan",
            "active"=> "pengajuan",
            "pengajuan"=> $pengajuan,
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
        $pengajuan->update([
            'nik'        => $request->nik,
            'telp'       => $request->telp,
            'negara'     => $request->negara,
            'provinsi'   => $request->provinsi,
            'alamat'     => $request->alamat,
            'npwp'       => $request->npwp,
            'no_sppkp'   => $request->no_sppkp,
            'msg'        => $request->msg,
            'valid'      => $request->valid,
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar = pengajuan::findOrFail($id);
        $daftar->delete();

        if($daftar){
            return redirect()->route('pengajuan.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('pengajuan.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
