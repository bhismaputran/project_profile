<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "class" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "class" => "about"
    ]);
});

Route::get('/blog-post', function () {
    return view('blog-post', [
        "title" => "Blog",
        "class" => "blog-post"
    ]);
});

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Blog",
        "class" => "blog"
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
        "class" => "contact"
    ]);
});

Route::get('/portfolio', function () {
    return view('portfolio', [
        "title" => "Portfolio",
        "class" => "portfolio"
    ]);
});