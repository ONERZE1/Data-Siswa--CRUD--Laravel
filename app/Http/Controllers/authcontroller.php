<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class authcontroller extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if (Auth::attempt($request->only('email','password')))
        {
            return redirect('/dashboard');

        }
        else{
            return redirect('/login')->with('gagal','email atau password yang anda masukan salah');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

}
