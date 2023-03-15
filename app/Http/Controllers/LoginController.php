<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //untuk menampilkan view/tampilan login
    public function index()
    {
        return view('login.index', [
            'title' => 'mycgv',
            'active' => 'mycgv'
        ]);
    }

    //fungsi authenticate sebuah validasi dari email adn password yang diimputkan oleh user saat login 
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
 
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        //session()->regenerate(); adalah kita membuat session untuk Akun yang Login di Website kita.
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            activity()->causedBy(auth::user())->log( auth()->user()->name. ' Berhasil Login');
            return redirect()->intended('/mycgv');
        } else
        activity()->causedBy(auth::user())->log('Login Gagal');
            return back()->with('loginError', 'Login Gagal !');
    }


    // fungsi ini “mematikan” session yang sedang berjalan, oleh karena itu User yang login bisa keluar / logout
    public function logout()
    {
        //akan memanggil fungsi bawaan Laravel untuk menghapus session user yang sedang login 
        Auth::logout();
      
        // akan menghapus semua data pada session, sehingga user tidak lagi memiliki akses ke data session yang tersimpan.
        request()->session()->invalidate();

        //akan mengenerate token baru untuk session yang baru dibuat, sehingga mengurangi kemungkinan serangan CSRF
        request()->session()->regenerateToken();
     
        return redirect('/myseenema');
    }


    
}
