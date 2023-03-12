<?php

use Carbon\Carbon;
use App\Models\viewStudio;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CgvController;

use App\Http\Controllers\BankController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\CrudFilmController;
use App\Http\Controllers\BackupController;


use App\Http\Controllers\HistoryJadwalController;
use App\Http\Controllers\CrudJadwalController;
use App\Http\Controllers\RticketController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UnpaidController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaydoneController;


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CrudDetJamController;

use App\Http\Controllers\CrudStudioController;
use App\Http\Controllers\ApiMindtrasController;

use App\Http\Controllers\CrudBioskopController;
use App\Http\Controllers\CrudPaymentController;
use App\Http\Controllers\CrudDetStudioController;

use App\Http\Controllers\CrudDetBioskopController;
use App\Http\Controllers\ForgotPasswordController;

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

Route::get('/backup', [BackupController::class, 'backup']);

Route::get('/home', function () {
    return view('error');
});

Route::get('/', [HomeController::class, 'index']);
Route::get('/ContactUs', [HomeController::class, 'contactus']);
Route::get('/UserGuide', [HomeController::class, 'UserGuide']);




Route::middleware(['auth' ,'LogVisits'])->group(function () {
    Route::get('/unpaid', [UnpaidController::class, 'index']);
    Route::get('/exp', [UnpaidController::class, 'exp']);
Route::resource('/paydone', PaydoneController::class);
Route::get('/myseenema', [CgvController::class, 'index']);

    Route::get('/booking/{id_jadwal}/{jam_tayang}', [BookingController::class, 'index'])->name('booking');

    Route::post('AddProduct/{id_jadwal}', [BookingController::class, 'store'])->name('cart.store');

    Route::post('AddProductLater/{id_jadwal}', [BookingController::class, 'Later'])->name('cart.storeLater');
    
    Route::get('cart/detail', [BookingController::class, 'show'])->name('cart/detail');
    Route::get('Npayment', [BookingController::class, 'form'])->name('payment.form');
    Route::get('/BookLater/{id_jadwal}', [MovieController::class, 'booklater'])->name('booklater.show');
    Route::get('/BookNow/{id_jadwal}', [MovieController::class, 'booknow'])->name('booknow.show');

    Route::get('/BookLaterSeat/{id_jadwal}', [MovieController::class, 'bookLaterSeat'])->name('bookLaterSeat.show');

    Route::get('/pay/{id_jadwal}', [MovieController::class, 'gateway'])->name('payment.now');
    Route::get('/mindtrans', [BookingController::class, 'mindtrans']);
    Route::post('/mindtrans', [BookingController::class, 'mindtrans_post']);

    Route::get('paydone/{id_film}', [BookingController::class, 'store'])->name('paydone');

    Route::get('qrcode/{id_booking}', [PaydoneController::class, 'generate'])->name('generate');

});



Route::get('/playing', [HomeController::class, 'playing']);

//   ROUTE BUAT LOGIN REGISTER DAN FORGOT PASSWORD !
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest' , 'LogVisits');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest' , 'LogVisits');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
//    END ROUTE BUAT LOGIN REGISTER DAN FORGOT PASSWORD !

Route::get('/tampil', [PaymentController::class, 'index']);
Route::get('/ticket/seat', [SeatController::class, 'index']);
Route::get('/movie', [MovieController::class, 'index']);
Route::get('/upcoming', [MovieController::class, 'upcoming']);    
Route::get('/movie/detail/{id_jadwal}', [MovieController::class, 'detail'])->name('movie.detail');
Route::get('/movie/detbooking/{id_film}', [MovieController::class, 'detbooking'])->name('movie.detbooking');
// Route::get('/movie/kota/{id_kota}', [MovieController::class, 'detkota'])->name('movie.detkota');

//  LOGIN REGISTER BUAT BANK 
Route::middleware(['auth'])->group(function () {

   // BUAT BANK checkout MANUAL
   Route::get('/mybank', [BankController::class , 'index']);
   Route::get('/checkout', [BankController::class , 'show'])->name('checkout.show');
   Route::put('/checkout/update', [BankController::class, 'update'])->name('checkout.update');


});
// SELESAI 


Route::group(["middleware" => 'ceklevel:admin_film' , 'LogVisits'], function () {
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


Route::group(["middleware" => 'cekstudio:admin_studio' , 'LogVisits'], function () {
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
    
    Route::resource('/history', HistoryJadwalController::class);
    Route::delete('/history/delete/{id_jadwal}', [HistoryJadwalController::class, 'destroy'])->name('history.delete');
    Route::get('/history/edit{id_jadwal}', [HistoryJadwalController::class, 'edit'])->name('history.edit');
    Route::post('/history/update', [HistoryJadwalController::class, 'update']);
    
    Route::resource('/CrudStudio', CrudStudioController::class);
    Route::get('/CrudStudio/edit{id_studio}', [CrudStudioController::class, 'edit'])->name('CrudStudio.edit');
    Route::post('/CrudStudio/update', [CrudStudioController::class, 'update']);
    Route::delete('/CrudStudio/delete/{id_studio}', [CrudStudioController::class, 'destroy'])->name('CrudStudio.delete');
    
    Route::resource('/detbioskop', CrudDetBioskopController::class);
    Route::get('detbioskop/edit{id_db}', [CrudDetBioskopController::class, 'edit'])->name('detbioskop.edit');
    Route::post('/detbioskop/update', [CrudDetBioskopController::class, 'update']);
    Route::delete('/detbioskop/delete/{id_db}', [CrudDetBioskopController::class, 'destroy'])->name('detbioskop.delete');
    
    Route::resource('/crudJadwal', CrudJadwalController::class);
    Route::get('/crudJadwal/edit{id_jadwal}', [CrudJadwalController::class, 'edit'])->name('crudJadwal.edit');
    Route::post('/crudJadwal/update', [CrudJadwalController::class, 'update']);
    
    Route::delete('/crudJadwal/delete/{id_jadwal}', [CrudJadwalController::class, 'destroy'])->name('crudJadwal.delete');
    
    Route::resource('/crudDetjam', CrudDetJamController::class);
    Route::delete('/crudDetjam/delete/{id_det_jam}', [ CrudDetJamController::class, 'destroy'])->name('crudDetjam.delete');
    Route::post('/crudDetjam/update', [CrudDetJamController::class, 'update']);
    Route::get('/crudDetjam/edit{id_det_jam}', [CrudDetJamController::class, 'edit'])->name('crudDetjam.edit');
    
    Route::resource('/crudDetStudio', CrudDetStudioController::class);
    Route::delete('/crudDetStudio/delete/{id_jenis_studio}', [ CrudDetStudioController::class, 'destroy'])->name('crudDetStudio.delete');
    Route::post('/crudDetStudio/update', [CrudDetStudioController::class, 'update']);
    Route::get('/crudDetStudio/edit{id_jenis_studio}', [CrudDetStudioController::class, 'edit'])->name('crudDetStudio.edit');
    
    Route::resource('/crudBioskop', CrudBioskopController::class);
    Route::delete('/crudBioskop/delete/{id_bioskop}', [CrudBioskopController::class, 'destroy'])->name('crudBioskop.delete');
    Route::post('/crudBioskop/update', [CrudBioskopController::class, 'update']);
    Route::get('/crudBioskop/edit{id_bioskop}', [CrudBioskopController::class, 'edit'])->name('crudBioskop.edit');
    
});


Route::resource('/booking', BookingController::class)->middleware('auth');

Route::get('/bank',[ BankController::class , 'index']);

// Route::get('/booking', [CartController::class, 'index'])->name('booking.cart')->middleware('auth');
// Route::post('/cart', [CartController::class, 'store'])->name('booking.add')->middleware('auth');
// Route::get('/ticket', [TicketController::class, 'index']);



Route::group(["middleware" => 'cekpayment:admin_payment' ,'LogVisits'   ], function () {
    Route::get('/payment', [CrudPaymentController::class, 'index']);
    Route::get('/CrudPayment/{$id}', [CrudPaymentController::class, 'customer']);
    Route::get('/CrudPayment/edit/{id_payment}',[CrudPaymentController::class,'edit'])->name('CrudPayment.edit');
    Route::post('/CrudPayment/update',[CrudPaymentController::class,'update']);
    Route::get('/datauser', [CrudPaymentController::class, 'customer']);
    Route::get('/dynamic_pdf', [CrudPaymentController::class, 'Export']);
    Route::get('/dynamic_pdf/pdf', [CrudPaymentController::class, 'pdf']);
  Route::get('/laporan_penjualan' , [CrudPaymentController::class, 'print']);
  Route::get('/cetak_laporan_penjualan/{tglawal}/{tglakhir}' , [CrudPaymentController::class, 'cetakPertanggal'])->name('cetak-data-pertanggal');
  Route::get('/CrudPayment/detail/{id_customer}', [CrudPaymentController::class, 'detail'])->name('CrudPayment.detail');
  Route::get('/logging/detail/{id_activity}', [CrudPaymentController::class, 'show'])->name('logging.show');
  Route::get('/logging' , [CrudPaymentController::class, 'logging']);
  Route::get('/exportcustomer', [CrudPaymentController::class, 'costumerexport'])->name('exportcustomer');

});


