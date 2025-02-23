<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function Produk(){
        return view('produk');
    }

    public function Detail(){
        return view('produk.detailproduk');
    }
}
