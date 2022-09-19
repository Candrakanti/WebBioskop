<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CgvController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;

use App\Http\Controllers\UnpaidController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;
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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::group(['middleware' => ['auth']], function (){
Route::group(['middleware' => ['cek_login:admin']], function (){    
   Route::get('/film', [AdminFilmController::class, 'index'])->name('admin');
});

Route::group(['middleware' => ['cek_login:user']], function (){  
    Route::get('/home', function () {
        return view('home')->name('user');
    });  
});
});

// Route::resource('/film', AdminFilmController::class)->except('show')->middleware('admin');

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::get('/movie', [MovieController::class, 'index']);

Route::get('/unpaid', [UnpaidController::class, 'index']);


Route::get('/film', [AdminFilmController::class, 'index']);

// Route::get('/film',[ AdminFilmController::class, 'ceckSlug'])->middleware('admin');
