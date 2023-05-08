<?php

use App\Http\Controllers\PranesimaiController;
use App\Http\Controllers\AdminPageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
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
Route::get('', fn () => redirect()->route('mainPage'));
Route::get('pages', [PageController::class, 'mainPage'])->name('mainPage');
Route::get('pages/{route}', [PageController::class, 'otherPage'])->name('otherPage');
Route::get('/kontaktai', [ContactController::class, 'contacts'])->name('contacts');
Route::post('/kontaktai', [ContactController::class, 'submitContactForm'])->name('submitContactForm');

/*
 * Admin routes
 */
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('puslapiai', AdminPageController::class)->only(['index', 'edit', 'update']);
    Route::resource('pranesimai', PranesimaiController::class)->only(['index', 'destroy']);
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