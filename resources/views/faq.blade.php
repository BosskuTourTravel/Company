@extends('main');

@section('content');
<div class="relative w-full h-screen">
    <!-- Gambar -->
    <img src="{{ asset('img/FAQ.jpg') }}" alt="West Papua" class="w-full h-full object-cover">

    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Teks di Atas Gambar -->
    <div class="absolute inset-0 flex flex-col items-left justify-center text-white text-left px-5">
        <h1 class="text-4xl font-bold">BOSSKU FAQs</h1>
        <p class="line-clamp-3 mt-[-5] text-lg font-light">Jawaban Dari Pertanyaan Kamu!</p>
    </div>
</div>

@endsection