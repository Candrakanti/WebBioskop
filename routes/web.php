<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;

use App\Http\Controllers\CgvController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UnpaidController;
use App\Http\Controllers\PaydoneController;

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

Route::get('/mycgv', [CgvController::class, 'index'])->middleware('auth');

           //   ROUTE BUAT LOGIN REGISTER DAN FORGOT PASSWORD !
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
            //    END ROUTE BUAT LOGIN REGISTER DAN FORGOT PASSWORD !

Route::get('/movie', [MovieController::class, 'index']);

Route::get('/unpaid', [UnpaidController::class, 'index']);
Route::get('/paydone', [PaydoneController::class, 'index']);

Route::group(["middleware" => 'ceklevel:admin_film'], function () {
    Route::get('/film', [AdminFilmController::class, 'index']);
    Route::get('/crudFilm', [AdminFilmController::class, 'crud']);
});


