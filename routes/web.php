<?php

use App\Http\Controllers\ApieMusController;
use App\Http\Controllers\EsProjektaiController;
use App\Http\Controllers\PaslaugosController;
use App\Http\Controllers\KontaktaiController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ApieMusController::class, 'index'])->name('apieMus');
Route::get('/apie_mus', [ApieMusController::class, 'index'])->name('apieMus');
Route::get('/es_projects', [EsProjektaiController::class, 'index'])->name('esProjektai');
Route::get('/paslaugos', [PaslaugosController::class, 'index'])->name('paslaugos');
Route::get('/kontaktai', [KontaktaiController::class, 'index'])->name('kontaktai');
Route::post('/kontaktai', [KontaktaiController::class, 'submitContactForm'])->name('submitContactForm');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false
]);

Route::get('logout', function () {
    Auth::logout();
    return back()->with('success', __('Sėkmingai atsijungėte'));
})->name('getLogout');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
