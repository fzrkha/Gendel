<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rcront extends Controller
{
    public function reg() {
        return view('masuk', [
            'title' => 'Registrasi'
        ]);
    }

    public function sv(Request $request) {
        $request->validate([
            'name' => 'required',
            'username' => ['required', 'min:4', 'max:15', 'unique:users'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8', 'max:16']
        ]);


    }
}
