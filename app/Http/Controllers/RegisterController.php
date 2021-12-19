<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index (){
        return view ('register.index', [
            'title'=>'Register'
        ]);
    }

    public function save(Request $save){
        $validatedSave = $save->validate([
            'name'=> 'required|max:64',
            'username'=> 'required|min:6|max:16|unique:users',
            'email'=> 'required|email:dns|unique:users',
            'password'=> 'required|min:8|max:32|regex:/[0-9]/'
        ]);

        $validatedSave['password'] = bcrypt($validatedSave['password']);

        //$validatedSave['password'] = Hash::make ($validatedSave['password']);

        User::create($validatedSave);

        //$save->session()->flash('success', 'Registrasi Berhasil, silahkan login');

        return redirect('/login')->with('success', 'Registrasi Berhasil, silahkan login');
    }

}
