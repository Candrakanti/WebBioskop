
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgotPasswordController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CgvController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UnpaidController;
use App\Http\Controllers\PaydoneController;
use Carbon\Carbon;
use App\Http\Controllers\TicketController;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CrudStudioController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\CrudFilmController;

use App\Http\Controllers\CrudJadwalController;
use App\Http\Controllers\RticketController;
use App\Http\Controllers\SeatController;
use App\Models\studio;

use App\Http\Controllers\CrudPaymentController;

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

// Route::get('/', function () {
//     return view('home', [
//         "title" => "Home",
//         "active" => "Home"
//     ]);
// });


Route::get('/', [HomeController::class, 'index']);
// Route::get('//{tgl_tayang_awal}', [HomeController::class, 'detail'])->name('home.detail');
Route::get('/mycgv', [CgvController::class, 'index'])->middleware('auth');

Route::middleware(['auth'])->group(function () {
    Route::get('/mycgv', [CgvController::class, 'index']);
    Route::get('/booking/show/{id_film}', [BookingController::class, 'index'])->name('booking.show');
    Route::post('AddProduct/{id_film}', [BookingController::class, 'store'])->name('cart.store');
    Route::get('cart/detail', [BookingController::class, 'show'])->name('cart/detail');
    Route::get('Npayment', [BookingController::class, 'form'])->name('payment.form');
});


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

Route::get('/ticket/seat', [SeatController::class, 'index']);
Route::get('/movie', [MovieController::class, 'index']);
Route::get('/movie/detail/{id_film}', [MovieController::class, 'detail'])->name('movie.detail');
Route::get('/movie/detbooking/{id_film}', [MovieController::class, 'detbooking'])->name('movie.detbooking');
// Route::get('/movie/kota/{id_kota}', [MovieController::class, 'detkota'])->name('movie.detkota');




Route::get('/unpaid', [UnpaidController::class, 'index']);
Route::resource('/paydone', PaydoneController::class);

Route::group(["middleware" => 'ceklevel:admin_film'], function () {
    Route::get('/film', function () {
        return view('film.template.index', [
            'title' => 'Admin Film',
            'pages' => 'Beranda Admin Film',
            'active' => 'Admin Film'
        ]);
    });

    Route::resource('/crudFilm', CrudFilmController::class);
    Route::delete('/crudFilm/delete/{id_film}', [CrudFilmController::class, 'destroy'])->name('crudFilm.delete');
    Route::get('/crudFilm/edit/{id_film}', [CrudFilmController::class, 'edit'])->name('crudFilm.edit');
    Route::post('/crudFilm/update', [CrudFilmController::class, 'update']);
});

Route::group(["middleware" => 'cekstudio:admin_studio'], function () {
    Route::get('/beranda', function () {
        return view('studio.index', [
            'title' => 'Admin Studio',
            'pages' => 'Beranda Admin Studio',
            'active' => 'Admin Studio'
        ]);
    });

    Route::get('/crudJadwal', function () {

        return view('studio.crudJadwal.LayoutJadwal', [
            'title' => 'Admin Studio',
            'pages' => 'Table Jadwal',
            'active' => 'Admin Studio'
        ]);
    });

    Route::resource('/CrudStudio', CrudStudioController::class);
    Route::get('/CrudStudio/edit{id_studio}', [CrudStudioController::class, 'edit'])->name('CrudStudio.edit');
    Route::post('/CrudStudio/update', [CrudStudioController::class, 'update']);
    Route::delete('/CrudStudio/delete/{id_studio}', [CrudStudioController::class, 'destroy'])->name('CrudStudio.delete');

    Route::resource('/kota', KotaController::class);

    Route::resource('/crudJadwal', CrudJadwalController::class);
    Route::get('/crudJadwal/edit{id_jadwal}', [CrudJadwalController::class, 'edit'])->name('crudJadwal.edit');

    Route::delete('/crudJadwal/delete/{id_jadwal}', [CrudJadwalController::class, 'destroy'])->name('crudJadwal.delete');
});

Route::resource('/ticket', RticketController::class);
Route::get('/ticket/show/{id_jadwal}', [RticketController::class, 'show'])->name('ticket.show');


Route::resource('/ticket', RticketController::class);
Route::get('/ticket/show/{id_film}', [RticketController::class, 'show'])->name('ticket.show');

Route::resource('/booking', BookingController::class)->middleware('auth');

Route::get('add-to-cart/{id_film}', [BookingController::class, 'store'])->name('add.to.cart')->middleware('auth');
// Route::get('/booking', [CartController::class, 'index'])->name('booking.cart')->middleware('auth');
// Route::post('/cart', [CartController::class, 'store'])->name('booking.add')->middleware('auth');
// Route::get('/ticket', [TicketController::class, 'index']);


Route::group(["middleware" => 'cekpayment:admin_payment'], function () {
    Route::get('/payment', [CrudPaymentController::class, 'index']);
    Route::get('/payment', [CrudPaymentController::class, 'customer']);
});

