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
        $kredensil = $request->validate([
            'username' => 'required ',
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($kredensil)) {
            // $request->session()->regenerate();
            // return redirect()->intended('/mycgv');
            $user = Auth::user();
            if ($user->level == '1') {
                return redirect()->intended('/film');
            }
            elseif ($user->level == '2') {
            return redirect()->intended('/home');
        }
        // return back()->with('loginError', 'Login Gagal !');
        return redirect()->intended('/');
    }
    return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/mycgv');
    }
}
