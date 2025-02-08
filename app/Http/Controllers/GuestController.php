<?php

namespace App\Http\Controllers;

class GuestController extends Controller
{
    public function home(){
        return view('home');
    }

    public function TentangKami(){
        return view('tentang');
    }

    public function faq(){
        return view('faq');
    }
}
