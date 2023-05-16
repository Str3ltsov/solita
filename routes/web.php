<?php

use App\Http\Controllers\AdminMessagesController;
use App\Http\Controllers\AdminBlockController;
use App\Http\Controllers\AdminContactController;
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
    Route::resource('puslapiai', AdminPageController::class)->except(['show']);
    Route::prefix('puslapiai/')->group(function () {
        Route::get('{id}/edit/add_block', [AdminBlockController::class, 'addBlock'])->name('addBlock');
        Route::post('{id}/edit/add_block', [AdminBlockController::class, 'addBlockSave'])->name('addBlockSave');
        Route::get('{pageId}/edit/edit_block/{blockId}', [AdminBlockController::class, 'editBlock'])->name('editBlock');
        Route::put('{pageId}/edit/edit_block/{blockId}', [AdminBlockController::class, 'editBlockSave'])->name('editBlockSave');
        Route::delete('{pageId}/edit/delete_block/{blockId}', [AdminBlockController::class, 'deleteBlock'])->name('deleteBlock');
    });
    Route::resource('kontaktai', AdminContactController::class)->only(['index', 'edit', 'update']);
    Route::resource('pranesimai', AdminMessagesController::class)->only(['index', 'destroy']);
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

/*
 * Language route
 */
Route::get('/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return back();
});
