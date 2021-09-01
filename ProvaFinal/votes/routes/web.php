<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Tema;
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

Route::get('/menuProf', function(){
    $user = auth()->user();
    return view('menuProf', ['usuario' => $user]);
})->name('menuProf');

Route::get('/menuAdm', function(){
    $users = User::all()->orde;
    $tema = Tema::all();
    return view('menuAdm',['usuarios' => $users, 'temas' => $tema]);
})->name('menuAdm');


Route::get('/registerProf', function(){
    return view('auth.registerProf');
})->name('registerProf');




Auth::routes();
Route::resource('/temas', TemaController::class);
Route::resource('/votos', VotoController::class);


