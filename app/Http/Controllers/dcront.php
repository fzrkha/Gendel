<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dcront extends Controller
{
    public function index() {
        return view('dashboard');
    }
}
