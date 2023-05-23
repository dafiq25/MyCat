<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class regisController extends Controller
{
    public function index(){
        return view('regis');
    }

    public function insertRegistrasi(Request $request){
        // dd($request->all());
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:200'
        ]);

        DB::table('users')->insert([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'notelp' => $request->notelp,
            'password' => bcrypt($request->password),
            'role' => 'user'
        ]);
        return redirect('/login');
    }
}
