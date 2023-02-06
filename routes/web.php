<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tcront;
use App\Http\Controllers\lcront;
use App\Http\Controllers\rcront;
use App\Models\Category;
use App\Models\Content;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [tcront::class, 'index']);

Route::get('/login', [lcront::class, 'login']);

Route::get('/register', [rcront::class, 'reg']);
Route::post('/register', [rcront::class, 'sv']);

Route::get('/about', [tcront::class, 'about']);

Route::get('/contents', [tcront::class, 'contents']);

Route::get('/contents/{slug}', [tcront::class, 'content']);

Route::get('/categories', [tcront::class, 'categories']);

Route::get('/categories/{category:slug}', [tcront::class, 'category']);