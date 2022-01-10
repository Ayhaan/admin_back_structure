<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PorfolioController;
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

    //FRONT CLIENT
Route::get('/', [FrontController::class, "home"])->name('home');
Route::get('/blog', [FrontController::class, "blog"])->name('blog');
Route::get('/portfolio', [FrontController::class, "portfolio"])->name('portfolio');


Route::get('/admin/dashboard', [FrontController::class, "dashboard"])->name('dashboard');
    //BACK ADMIN
Route::get('/admin/blog', [BlogController::class, "index"])->name("blog.index");
Route::get('/admin/portfolio', [PorfolioController::class, "index"])->name("portfolio.index");