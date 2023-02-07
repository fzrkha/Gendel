<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class lcront extends Controller
{
    public function login() {
        return view('login', [
            "title" => "Login"
        ]);
    }

    public function auth(Request $request) {
        $acc = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => 'required'
        ]);

        if(Auth::attempt($acc)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', '');
    }

    public function logout(Request $request) {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
