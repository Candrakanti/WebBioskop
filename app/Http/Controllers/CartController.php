<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\Film;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    public function index(Request $request)
    {
        return view('profil.cart', [
            "title" => "mycgv",
            "active" => "mycgv"
        ]);
    }

    public function store(Request $request)
    {
        return view('profil.checkout', [
            "title" => "mycgv",
            "active" => "mycgv"
        ]);
        // $Film = Film::findOrFail($request->input('id_film'));
        // Cart::add($Film->id_film, $Film->judul_film);
        // return redirect('/booking')->with('success', 'Berhasil Data Telah Ditambahkan!');

        // return redirect()->route(route: 'booking.cart')->with('success', 'Berhasil Data Telah Ditambahkan!');
    }

    public function CartItem()
    {
    }
}
