<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\VotoController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\Tema;
use App\Models\Voto;
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
    $tema = Tema::all();
    $voto = Voto::all();
    return view('menuProf', ['usuario' => $user, 'temas' => $tema, 'votos' => $voto]);
})->name('menuProf')->middleware('auth');

Route::get('/menuAdm', function(){
    $users = User::all();
    $tema = Tema::all();
    $voto = Voto::all();
    return view('menuAdm',['usuarios' => $users, 'temas' => $tema, 'votos' => $voto]);
})->name('menuAdm')->middleware('auth');


Route::get('/registerProf', function(){
    return view('auth.registerProf');
})->name('registerProf');


Route::get('votos.index', function(){
    $user = "teste";
    return view('creates.votosCreate', ['usuario' => $user]);
});

Route::get('votos.create', function(){
    $user = "teste";
    return view('creates.votosCreate', ['usuario' => $user]);
});

Auth::routes();
Route::resource('/temas', TemaController::class)->middleware('auth');
Route::resource('/votos', VotoController::class)->middleware('auth');


