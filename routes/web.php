<?php

use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\InteractionsController;
use App\Http\Controllers\MiscController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicPagesController;
use App\Http\Controllers\SearchController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;
use TCG\Voyager\Models\Role;

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
Route::get('/team', [PublicPagesController::class, 'team'])->name('team');
Route::get('/blog', [PublicPagesController::class, 'blog'])->name('blog');
Route::get('/withdraw', [PublicPagesController::class, 'withdraw'])->name('withdraw')->middleware(['auth']);
Route::post('/add/address', [ProfileController::class, 'addAddress'])->name('add.address')->middleware(['auth']);
Route::post('/withdraw/request', [ProfileController::class, 'withdrawRequest'])->name('withdraw.request')->middleware(['auth']);
Route::get('/delete/address/{id}', [ProfileController::class, 'deleteAddress'])->name('delete.wallet')->middleware(['auth']);
Route::get('/withdraw/cancel/{id}', [ProfileController::class, 'cancelRequest'])->name('cancel.request')->middleware(['auth']);

Route::get('/settings', [ProfileController::class, 'settings'])->name('settings.index');
Route::post('/settings', [ProfileController::class, 'settingsStore'])->name('settings.store')->middleware(['auth']);
Route::post('/password/retool', [ProfileController::class, 'passwordReset'])->name('password.new')->middleware(['auth']);


Route::get('/panel', [AdminPagesController::class, 'home'])->name('admin.home');
Route::get('/panel/users', [AdminPagesController::class, 'users'])->name('admin.users');
Route::get('/panel/packages', [AdminPagesController::class, 'packages'])->name('admin.packages');
Route::get('/panel/contactus', [AdminPagesController::class, 'contactus'])->name('admin.contact');
Route::get('/panel/offers', [AdminPagesController::class, 'offers'])->name('admin.offers');
Route::post('/panel/offers', [AdminPagesController::class, 'offers_new'])->name('admin.offers.new');
Route::get('/panel/address', [AdminPagesController::class, 'address'])->name('admin.address');
Route::post('/panel/address/new', [AdminPagesController::class, 'addressStore'])->name('admin.address.new');
Route::post('/panel/address/edit/{target}', [AdminPagesController::class, 'editAddress'])->name('admin.address.edit');
Route::get('/panel/address/delete/{target}', [AdminPagesController::class, 'deleteAddress'])->name('admin.address.delete');
Route::post('/panel/search', [SearchController::class, 'searchUser'])->name('search')->middleware(['auth']);
Route::get('/panel/user/{username}/{userid}', [AdminPagesController::class, 'showuser'])->name('panel.user.profile')->middleware(['auth']);
Route::get('/panel/topup/{userid}', [MiscController::class, 'topup'])->name('panel.topup')->middleware(['auth']);
Route::get('/panel/requests', [MiscController::class, 'requestPage'])->name('panel.request')->middleware(['auth']);

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index')->middleware(['auth']);


require __DIR__.'/auth.php';


