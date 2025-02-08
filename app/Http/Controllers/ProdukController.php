<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function Produk(){
        return view('produk');
    }

    public function PaketTour(){
        return view('Paket.pakettour');
    }
}
