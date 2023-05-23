<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email'=> 'required|email:dns',
            'password'=> 'required'
        ]);
        // dd('berhasil');

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            if(Auth::user()->role == 'user'){
                return redirect()->intended('/dashboard');
            }else{
                return redirect()->intended('/DBadmin');
            }
        }
        
        return back()->with('loginError', 'Login gagal, silahkan masukkan email dan password dengan benar');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
