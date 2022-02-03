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

Route::get('/', function() {
    return view('P.inicio');
})->name('inicio');

Route::get('/tema1', function(){
    return view('P.generic');
})->name('generic');

Route::get('/tema2', function(){
    return view('P.generic1');
})->name('generic1');

Route::get('/tema3', function(){
    return view('P.generic2');
})->name('generic2');

Route::get('/tema4', function(){
    return view('P.generic3');
})->name('generic3');

Route::get('/tema5', function(){
    return view('P.generic4');
})->name('generic4');

Route::get('/tema6', function(){
    return view('P.generic5');
})->name('generic5');

Route::get('/tema7', function(){
    return view('P.generic6');
})->name('generic6');

Route::get('/tema8', function(){
    return view('P.generic7');
})->name('generic7');

Route::get('/tema9', function(){
    return view('P.generic8');
})->name('generic8');