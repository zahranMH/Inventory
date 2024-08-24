<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|min:3|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($validatedData)) {
            return redirect('/dashboard')->with('success', 'Login Berhasil');
        } else {
            return redirect()->back()->with('failed', 'Email Atau Password Salah');
        }

    }

    public function actionLogout()
    {
        Auth::logout();
        return redirect('/')->with('success', 'Berhasil logout');
    }
}
