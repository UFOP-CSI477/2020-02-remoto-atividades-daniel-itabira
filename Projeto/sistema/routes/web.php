<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CredorController;
use App\Http\Controllers\DevedorController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\AdminController;

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

use App\Models\Credor;

Route::get('/', function () {
    return view('principal');
})->name('principal');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/credor', CredorController::class);
Route::resource('/devedor', DevedorController::class);
Route::resource('/pagamento', PagamentoController::class);
Route::resource('/admin', AdminController::class);




