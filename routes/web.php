<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserDashboardController;

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

Route::get('/', [PagesController::class, 'index']);

Route::resource('/blog', PostsController::class);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Pages Controllers
Route::get('/about', [\App\Http\Controllers\PagesController::class, 'about'])->name('about');

Route::get('/premierleague', [\App\Http\Controllers\PagesController::class, 'premierleague'])->name('premierleague');

Route::get('/contact', [\App\Http\Controllers\PagesController::class, 'contact'])->name('contact');

Route::get('/search', [App\Http\Controllers\PostsController::class, 'search'])->name('search');

Route::get('/dashboard', [App\Http\Controllers\UserDashboardController::class, 'index'])->name('dashboard');

Route::put('/dashboard/{id}', [UserDashboardController::class, 'update'])->name('dashboard.update');






