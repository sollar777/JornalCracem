<?php

use App\Http\Controllers\Admin\AnuncioController;
use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\HomeController;
use App\Models\Noticia;
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
Route::get('/exibir/social', [ClientController::class, 'social'])->name('user.social');
Route::get('/buscar/anunciantes', [ClientController::class, 'anunciantes'])->name('user.anunciantes');

Route::get('/admin/noticias', [NoticiaController::class, 'index'])->name('admin.noticias');
Route::get('/admin/noticias/criar', [NoticiaController::class, 'create'])->name('admin.noticia.create');
Route::post('/admin/noticias/criar', [NoticiaController::class, 'store'])->name('admin.noticias.salvar');
Route::get('/admin/noticias/editar/{id}', [NoticiaController::class, 'edit'])->name('admin.noticia.editar');
Route::put('/admin/noticias/atualizar/{id}', [NoticiaController::class, 'update'])->name('admin.noticia.atualizar');

Route::get('/admin/anuncios', [AnuncioController::class, 'index'])->name('admin.anuncio.exibir');
Route::get('/admin/anuncios/criar', [AnuncioController::class, 'create'])->name('admin.anuncio.create');
Route::post('/admin/anuncios/salvar', [AnuncioController::class, 'store'])->name('admin.anuncio.save');
Route::get('/admin/anuncios/editar/{id}', [AnuncioController::class, 'edit'])->name('admin.anuncio.edit');
Route::put('/admin/anuncios/atualizar/{id}', [AnuncioController:: class, 'update'])->name('admin.anuncio.atualizar');


Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('home');
