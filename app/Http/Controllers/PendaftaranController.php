<?php

namespace App\Http\Controllers;

use App\Models\pendaftaran;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorependaftaranRequest;
use App\Http\Requests\UpdatependaftaranRequest;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        return view('/klien/daftar', [
            'title' =>'List Pendaftaran',
            "active"=> "daftar",
            "daftar"=>  pendaftaran::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/klien/daftarbuat', [
            'title'=>'Pendaftaran',
            "active"=> "daftar",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorependaftaranRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorependaftaranRequest $request)
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

        $daftar = pendaftaran::create([
            'user_id'       => $user_id,
            'name'          => $user_name,
            'nik'           => $request->nik,
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
            return redirect()->route('pendaftaran.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('pendaftaran.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftaran $daftar)
    {
        return view('/klien/daftaredit', [
            "title"=> "Edit Pendaftaran Klien",
            "active"=> "daftar",
            "daftar"=> pendaftaran::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatependaftaranRequest  $request
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatependaftaranRequest $request, pendaftaran $daftar)
    {
        $rules = [
            'nik'           => 'required',
            'telp'          => 'required',
            'negara'        => 'required',
            'provinsi'      => 'required',
            'alamat'        => 'required',
            'npwp'          => 'required',
            'no_sppkp'      => 'required',
        ];

        $validatedaftar = $request->validate($rules);
        $user_id = auth()->user()->id;


        if($request->file('scan_ktp') == "") {
        } else {
            $scan_ktp = $request->file('scan_ktp');
            $scan_ktp->storeAs('/public/daftar', $scan_ktp->hashName());
            pendaftaran::where('user_id', $user_id)->update(['scan_kk' => $scan_ktp->hashName()]);
        }

        if($request->file('scan_kk') == "") {
        } else {
            $scan_kk = $request->file('scan_kk');
            $scan_kk->storeAs('/public/daftar', $scan_kk->hashName());
            pendaftaran::where('user_id', $user_id)->update(['scan_kk' => $scan_kk->hashName()]);
        }

        if($request->file('scan_npwp') == "") {
        } else {
            $scan_npwp = $request->file('scan_npwp');
            $scan_npwp->storeAs('/public/daftar', $scan_npwp->hashName());
            pendaftaran::where('user_id', $user_id)->update(['scan_kk' => $scan_npwp->hashName()]);
        }

        if($request->file('scan_sppkp') == "") {
        } else {
            $scan_sppkp = $request->file('scan_sppkp');
            $scan_sppkp->storeAs('/public/daftar', $scan_sppkp->hashName());
            pendaftaran::where('user_id', $user_id)->update(['scan_kk' => $scan_sppkp->hashName()]);
        }
        
        pendaftaran::where('user_id', $user_id)->update($validatedaftar);

        if($validatedaftar){
            return redirect()->route('pendaftaran.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('pendaftaran.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $daftar = pendaftaran::findOrFail($id);
        $daftar->delete();

        if($daftar){
            return redirect()->route('pendaftaran.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            return redirect()->route('pendaftaran.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
