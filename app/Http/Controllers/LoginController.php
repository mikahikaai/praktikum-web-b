<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'masuk' => 'required',
            'password' => 'required',
        ]);

        $tipe_login = filter_var($request->masuk, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([
            $tipe_login => $request->masuk,
            'password' => $request->password,
        ])) {
            // dd('Berhasil');
            return redirect('home')->with('login_sukses', 'Login Berhasil!!');
        } else {
            return redirect('login')->with('password_salah', 'Password Salah!!');
        }
    }

    function logout() {
        Auth::logout();
        return redirect('login');
    }
}
