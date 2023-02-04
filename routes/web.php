<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tcront;
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

Route::get('/login', [tcront::class, 'login']);

Route::get('/about', [tcront::class, 'about']);

Route::get('/contents', [tcront::class, 'contents']);

Route::get('/contents/{slug}', [tcront::class, 'content']);


Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Content Categories',
        'categories' => Category::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('category', [
        'title' => $category->name,
        'contents' => $category->contents,
        'category' => $category->name
    ]);
});