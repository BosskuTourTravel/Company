@extends('main')

@section('content')

<div class="relative w-full h-screen">
    <!-- Gambar -->
    <img src="{{ asset('img/CandiPrambanan.jpg') }}" alt="West Papua" class="w-full h-full object-cover">

    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Teks di Atas Gambar -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-5">
        <h1 class="text-4xl font-bold">Temukan Perjalanan Impianmu!</h1>
        <p class="line-clamp-3 mt-2 text-lg">Paket Tour Lengkap Untuk Liburan Tanpa Ribet</p>
    </div>
</div>

<div class="w-full py-5 px-6 md:px-24 mt-12">
    <h1 class="font-bold text-2xl mb-3">Wisata Di Indonesia</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <!-- Foto Portrait -->
            <img src="{{ asset('img/PaketBromo.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30 transition-all duration-300 opacity-0 hover:opacity-100"></div>

            <!-- Teks di atas Foto -->
            <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                <h1 class="text-base font-medium">Jawa</h1>
                <p class="text-xs mb-5 font-normal">Indonesia</p>
            </div>
        </a>
        <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <!-- Foto Portrait -->
            <img src="{{ asset('img/PaketBali.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30 transition-all duration-300 opacity-0 hover:opacity-100"></div>

            <!-- Teks di atas Foto -->
            <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                <h1 class="text-base font-medium">Bali</h1>
                <p class="text-xs mb-5 font-normal">Indonesia</p>
            </div>
        </a>
        <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <!-- Foto Portrait -->
            <img src="{{ asset('img/PaketSumatera.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30 transition-all duration-300 opacity-0 hover:opacity-100"></div>

            <!-- Teks di atas Foto -->
            <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                <h1 class="text-base font-medium">Sumatera</h1>
                <p class="text-xs mb-5 font-normal">Indonesia</p>
            </div>
        </a>
        <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <!-- Foto Portrait -->
            <img src="{{ asset('img/PaketSulawesi.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30 transition-all duration-300 opacity-0 hover:opacity-100"></div>

            <!-- Teks di atas Foto -->
            <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                <h1 class="text-base font-medium">Sulawesi</h1>
                <p class="text-xs mb-5 font-normal">Indonesia</p>
            </div>
        </a>
        <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <!-- Foto Portrait -->
            <img src="{{ asset('img/PaketKalimantan.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30 transition-all duration-300 opacity-0 hover:opacity-100"></div>

            <!-- Teks di atas Foto -->
            <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                <h1 class="text-base font-medium">Kalimantan</h1>
                <p class="text-xs mb-5 font-normal">Indonesia</p>
            </div>
        </a>
        <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <!-- Foto Portrait -->
            <img src="{{ asset('img/PaketNTT.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30 transition-all duration-300 opacity-0 hover:opacity-100"></div>

            <!-- Teks di atas Foto -->
            <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                <h1 class="text-base font-medium">Nusa Tenggara Timur</h1>
                <p class="text-xs mb-5 font-normal">Indonesia</p>
            </div>
        </a>
        <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <!-- Foto Portrait -->
            <img src="{{ asset('img/PaketNTB.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30 transition-all duration-300 opacity-0 hover:opacity-100"></div>

            <!-- Teks di atas Foto -->
            <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                <h1 class="text-base font-medium">Nusa Tenggara Barat</h1>
                <p class="text-xs mb-5 font-normal">Indonesia</p>
            </div>
        </a>
        <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <!-- Foto Portrait -->
            <img src="{{ asset('img/PaketPapua.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

            <!-- Overlay -->
            <div class="absolute inset-0 bg-black/30 transition-all duration-300 opacity-0 hover:opacity-100"></div>

            <!-- Teks di atas Foto -->
            <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                <h1 class="text-base font-medium">Papua</h1>
                <p class="text-xs mb-5 font-normal">Indonesia</p>
            </div>
        </a>
    </div>
</div>



@endsection