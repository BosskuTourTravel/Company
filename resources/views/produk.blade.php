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
        <p class="line-clamp-3 mt-2 text-lg">Paket lengkap untuk liburan tanpa ribet</p>
    </div>
</div>

<div class="w-full py-5 px-6 md:px-24 mt-12">
    <div>
        <div class="flex space-x-4 border-b-2 pb-3">
            <button class="tab-button px-4 py-2 text-lg font-semibold border-b-2 border-transparent hover:border-[#FFCA10] focus:border-[#FFCA10]" data-tab="tiket">Tiket Pesawat</button>
            <button class="tab-button px-4 py-2 text-lg font-semibold border-b-2 border-transparent hover:border-[#FFCA10] focus:border-[#FFCA10]" data-tab="tour">Paket Tour</button>
            <button class="tab-button px-4 py-2 text-lg font-semibold border-b-2 border-transparent hover:border-[#FFCA10] focus:border-[#FFCA10]" data-tab="cruise">Cruise</button>
            <button class="tab-button px-4 py-2 text-lg font-semibold border-b-2 border-transparent hover:border-[#FFCA10] focus:border-[#FFCA10]" data-tab="sewa">Sewa Mobil</button>
        </div>

        <div class="tab-content mt-5" id="tiket">
            <h2 class="text-xl font-bold text-[#02335B]">Tiket Pesawat</h2>
            <p class="text-gray-600 mt-2">Dapatkan tiket pesawat dengan harga terbaik dari berbagai maskapai.</p>
        </div>

        <div class="tab-content mt-5 hidden" id="tour">
            <h2 class="text-xl font-bold text-[#02335B]">Paket Tour</h2>
            <p class="text-gray-600 mt-2">Pilih paket wisata domestik & internasional dengan layanan terbaik.</p>
        </div>

        <div class="tab-content mt-5 hidden" id="cruise">
            <h2 class="text-xl font-bold text-[#02335B]">Cruise</h2>
            <p class="text-gray-600 mt-2">Nikmati pengalaman kapal pesiar mewah ke berbagai destinasi eksotis.</p>
        </div>

        <div class="tab-content mt-5 hidden" id="sewa">
            <h2 class="text-xl font-bold text-[#02335B]">Sewa Mobil</h2>
            <p class="text-gray-600 mt-2">Rental mobil dengan berbagai pilihan kendaraan sesuai kebutuhan.</p>
        </div>
    </div>

    <script>
        const buttons = document.querySelectorAll('.tab-button');
        const contents = document.querySelectorAll('.tab-content');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const tab = button.getAttribute('data-tab');

                contents.forEach(content => {
                    content.classList.add('hidden');
                });

                document.getElementById(tab).classList.remove('hidden');
            });
        });
    </script>
</div>

@endsection