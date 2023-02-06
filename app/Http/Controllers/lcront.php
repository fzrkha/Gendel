<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class lcront extends Controller
{
    public function login() {
        return view('login', [
            "title" => "Login"
        ]);
    }

}
