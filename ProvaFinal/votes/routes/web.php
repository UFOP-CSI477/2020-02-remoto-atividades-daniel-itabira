<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\UserController;
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
    return view('principal');
})->name('principal');

Auth::routes();

Route::get('/home', function(){
    return view('principal');
})->name('home');

Route::get('/menuProf', function(){
    return view('menuProf');
})->name('menuProf');

Route::get('/menuAdm', function(){
    return view('menuAdm');
})->name('menuAdm');

Route::get('/registerProf', function(){
    return view('auth.registerProf');
})->name('registerProf');





Route::resource('/temas', TemaController::class);
Route::resource('/votos', VotoController::class);


