<?php

use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

/* Route::get('/', function () {
    return view('welcome');
});
 */

 
Route::get('/', [ClientController::class, 'index'])->name('user.index');
Route::get('/exibir/noticias/{id}', [ClientController::class, 'store'])->name('user.exibir');
Route::get('/exibir/noticias', [ClientController::class, 'exibirAll'])->name('user.noticias');
Route::get('/exibir/gata-mangaba', [ClientController::class, 'gataExibir'])->name('user.gata');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
