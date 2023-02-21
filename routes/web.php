<?php

use App\Http\Controllers\ApieMusController;
use App\Http\Controllers\EuProjectsController;
use App\Http\Controllers\PaslaugosController;
use App\Http\Controllers\KontaktaiController;

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
Route::get('/eu_projects', [EuProjectsController::class, 'index'])->name('euProjects');
Route::get('/paslaugos', [PaslaugosController::class, 'index'])->name('paslaugos');
Route::get('/kontaktai', [KontaktaiController::class, 'index'])->name('kontaktai');
