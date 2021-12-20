<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashJadwal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/dashboard/jadwal', [
            'title'=>'Jadwal',
            "active"=> "Jadwal",
            'jadwal'=> Jadwal::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/dashboard/jadwalbuat', [
            'title'=>'Buat Jadwal',
            'active'=> 'Jadwal',
            'user'=> User::all()
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
            'date'      =>'required|max:255',
            'time'      =>'required',
            'user_id'   =>'required',
            'note'      =>'required',
            'lokasi'    =>'required'
        ]);

        $jadwal = Jadwal::create([
            'lokasi'    => $request->lokasi,
            'date'      => $request->date,
            'user_id'   => $request->user_id,
            'time'      => $request->time,
            'note'      => $request->note
        ]);

        if($jadwal){
            return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            return redirect()->route('jadwal.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show(Jadwal $jadwal)
    {
        return view('/admin/dashboard/jadwaldetail',[
            "title"=>"Jadwal Spesifik",
            "active"=> "Jadwal",
            "jadwal"=> $jadwal
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function edit(Jadwal $jadwal)
    {
        return view('/admin/dashboard/jadwaledit', [
            "title"=> "Rubah Jadwal",
            "active"=> "Jadwal",
            "jadwal"=> $jadwal,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $this->validate($request, [
            'date'      => 'required',
            'time'      => 'required',
            'lokasi'    => 'required',
            'note'      => 'required'
        ]);

        $jadwal = jadwal::findOrFail($jadwal->id);

        $jadwal->update([
            'date'      => $request->date,
            'time'      => $request->time,
            'lokasi'    => $request->lokasi,
            'note'      => $request->note
        ]);

        if($jadwal){
            //redirect dengan pesan sukses
            return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('jadwal.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = jadwal::findOrFail($id);
        $jadwal->delete();

        if($jadwal){
            return redirect()->route('jadwal.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('jadwal.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }

}
