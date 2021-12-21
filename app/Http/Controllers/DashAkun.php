<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashAkun extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('/admin/dashboard/akun', [
            'title'=>'Kelola Akun',
            "active"=> "akun",
            'user'=> User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('/admin/dashboard/akundetail',[
            "title"=>"Informasi Akun",
            "active"=> "akun",
            "user"=> $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        return view('/admin/dashboard/akunedit', [
            "title"=> "Edit Akses User",
            "active"=> "akun",
            "user"=> $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required|email:dns',
            'admin'     => ''
        ]);

        $user = User::findOrFail($user->id);

        $user->update([
            'name'     => $request->name,
            'email'   => $request->email,
            'admin'   => $request->admin,
        ]);

        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('akun.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('akun.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = user::findOrFail($id);
        $user->delete();

        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('akun.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('akun.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
