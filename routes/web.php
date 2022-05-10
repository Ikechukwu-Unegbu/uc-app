<?php

use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\InteractionsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicPagesController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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

Route::get('/', [PublicPagesController::class, 'home'])->name('home');
Route::get('/contact', [PublicPagesController::class, 'contact'])->name('contact');
Route::post('/contact', [InteractionsController::class, 'contactStore'])->name('contact.store');
Route::get('/about', [PublicPagesController::class, 'about'])->name('about');
Route::get('/faq', [PublicPagesController::class, 'faq'])->name('faq.index');
Route::get('/data', [PublicPagesController::class, 'data'])->name('data.index');

Route::get('/settings', [ProfileController::class, 'settings'])->name('settings.index');
Route::post('/settings', [ProfileController::class, 'settingsStore'])->name('settings.store')->middleware(['auth']);
Route::post('/password/retool', [ProfileController::class, 'passwordReset'])->name('password.new')->middleware(['auth']);


Route::get('/panel', [AdminPagesController::class, 'home'])->name('admin.home');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('pages.profile.index');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
