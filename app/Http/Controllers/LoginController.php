<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'login',
            'active' => 'login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required ',
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
      

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $level=Auth::User()->level;

            if($level=='admin_film'){
    
             return redirect()->intended('/film');
            }
        
            if($level=='user'){
           return redirect()->intended('/mycgv');
                // return view('profil.index', [
                //     'title' => 'Mycgv',
                //     'active' => 'Mycgv'
                // ]);
            }

            // return redirect()->intended('/mycgv');
        }

        else
        return back()->with('loginError', 'Login Gagal !');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/mycgv');
    }
}
