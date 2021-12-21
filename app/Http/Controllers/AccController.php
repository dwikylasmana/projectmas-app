<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class AccController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $id = auth()->user()->id;

        return view('akun/index', [
            "title"     =>"Akun",
            "active"    =>"akun",
            "user"      => User::findOrFail($id)
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
    public function edit($id)
    {    
        $id = auth()->user()->id;

        return view('akun/edit', [
            "title"     =>"Akun",
            "active"    =>"akun",
            "user"      => User::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $this->validate($request, [
            'name'=> 'required|max:64',
            'password'=> 'required',
        ]);

        $user = User::findOrFail($user->id);

        $user->update([
            'name'        => $request->name,
            'password'    => $request->password,
        ]);

        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('acc.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('acc.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $user = user::findOrFail($id);
        $user->delete();

        if($user){
            //redirect dengan pesan sukses
            return redirect()->route('login')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('login')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
