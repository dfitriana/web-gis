<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class auth_controller extends Controller
{
    public function login()
    {
        return \view('login');
    }

    public function masuk(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return \redirect('/');
        }
        else {
            return \redirect('/login');
        }
    }
}
