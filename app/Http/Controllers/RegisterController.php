<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validatedData =  $request->validate([

            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'phone' => 'required|numeric|digits:12|unique:users',
            'password' => 'required|min:5|max:255|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' =>'min:5',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['password_confirmation'] = Hash::make($validatedData['password_confirmation']);

        User::create($validatedData);
      
        $request->session()->flash('success', 'Registration successfull! Please Login !');
        return redirect('/login');
        // dd('registrasi berhasil');
    }
}
