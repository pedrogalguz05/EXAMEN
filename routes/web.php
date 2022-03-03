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

Route::get('/prueba', function() {
    return view('P.prueba');
})->name('prueba');

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

Route :: get('/tema1u1', function(){
    return view('P.tema1');
})->name('tema1');

Route :: get('/tema2u1', function(){
    return view('P.tema2');
})->name('tema2');

Route :: get('/tema3u1', function(){
    return view('P.tema3');
})->name('tema3');

Route :: get('/tema4u1', function(){
    return view('P.tema4');
})->name('tema4');

Route :: get('/tema5u1', function(){
    return view('P.tema5');
})->name('tema5');

Route :: get('/tema6u1', function(){
    return view('P.tema6');
})->name('tema6');

Route :: get('/tema7u1', function(){
    return view('P.tema7');
})->name('tema7');

Route :: get('/tema8u1', function(){
    return view('P.tema8');
})->name('tema8');

Route :: get('/tema9u1', function(){
    return view('P.tema9');
})->name('tema9');

Route :: get('/unidad2', function(){
    return view('u2.unidad2');
})->name('unidad2');

Route :: get('/t1u2', function(){
    return view('u2.t1');
})->name('t1');

Route :: get('/t2u2', function(){
    return view('u2.t2');
})->name('t2');

Route :: get('/t3u2', function(){
    return view('u2.t3');
})->name('t3');

Route :: get('/t4u2', function(){
    return view('u2.t4');
})->name('t4');

Route :: get('/t5u2', function(){
    return view('u2.t5');
})->name('t5');

Route :: get('/t6u2', function(){
    return view('u2.t6');
})->name('t6');

Route :: get('/t7u2', function(){
    return view('u2.t7');
})->name('t7');

Route :: get('/t8u2', function(){
    return view('u2.t8');
})->name('t8');

Route :: get('/t9u2', function(){
    return view('u2.t9');
})->name('t9');

Route :: get('/t10u2', function(){
    return view('u2.t10');
})->name('t10');

Route :: get('/t11u2', function(){
    return view('u2.t11');
})->name('t11');

Route :: get('/t12u2', function(){
    return view('u2.t12');
})->name('t12');

Route :: get('/t13u2', function(){
    return view('u2.t13');
})->name('t13');

Route :: get('/t14u2', function(){
    return view('u2.t14');
})->name('t14');

Route :: get('/t15u2', function(){
    return view('u2.t15');
})->name('t15');

Route :: get('/t16u2', function(){
    return view('u2.t16');
})->name('t16');
