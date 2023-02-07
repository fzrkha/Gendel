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
        $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => 'required'
        ]);

        dd('Y gede');
    }
}
