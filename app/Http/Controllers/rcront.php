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
}
