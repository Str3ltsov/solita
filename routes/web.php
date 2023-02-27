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

/*
 * Guest routes
 */
Route::get('/', [ApieMusController::class, 'index'])->name('apieMus');
Route::get('/apie_mus', [ApieMusController::class, 'index'])->name('apieMus');
Route::get('/es_projects', [EsProjektaiController::class, 'index'])->name('esProjektai');
Route::get('/paslaugos', [PaslaugosController::class, 'index'])->name('paslaugos');
Route::get('/kontaktai', [KontaktaiController::class, 'index'])->name('kontaktai');
Route::post('/kontaktai', [KontaktaiController::class, 'submitContactForm'])->name('submitContactForm');

/*
 * Admin routes
 */
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/apie_mus/edit', [ApieMusController::class, 'edit'])->name('editApieMus');
    Route::patch('/apie_mus/edit', [ApieMusController::class, 'update'])->name('updateApieMus');
    Route::get('/es_projektai/edit', [EsProjektaiController::class, 'edit'])->name('editEsProjektai');
    Route::patch('/es_projektai/edit', [EsProjektaiController::class, 'update'])->name('updateEsProjektai');
    Route::get('/paslaugos/edit', [PaslaugosController::class, 'edit'])->name('editPaslaugos');
    Route::patch('/paslaugos/edit', [PaslaugosController::class, 'update'])->name('updatePaslaugos');
    Route::get('/kontaktai/edit', [KontaktaiController::class, 'edit'])->name('editKontaktai');
    Route::patch('/kontaktai/edit', [KontaktaiController::class, 'update'])->name('updateKontaktai');
});


/*
 * Auth routes
 */
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
