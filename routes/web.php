<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CgvController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminFilmController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/mycgv', [CgvController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/mycgv', [ProfilController::class, 'index']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/movie', [MovieController::class, 'index']);

Route::get('/film', [AdminFilmController::class, 'index']);

// Route::get('/film',[ AdminFilmController::class, 'ceckSlug'])->middleware('admin');


