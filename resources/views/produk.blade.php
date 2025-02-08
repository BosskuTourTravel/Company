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
    <h1 class="font-bold text-2xl mb-3">Pesona Nusantara</h1>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper ">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketBromo.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Jawa</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketBali.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Bali</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketSumatera.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Sumatera</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketSulawesi.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Sulawesi</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>

            <!-- Slide 5 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketKalimantan.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Kalimantan</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>

            <!-- Slide 6 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketNTT.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Nusa Tenggara Timur</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>

            <!-- Slide 7 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketNTB.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Nusa Tenggara Barat</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>

            <!-- Papua -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketPapua.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Papua</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next custom-swiperHome-button"></div>
        <div class="swiper-button-prev custom-swiperHome-button"></div>
    </div>
</div>

<div class="w-full py-5 px-6 md:px-24 mt-5">
    <h1 class="font-bold text-2xl mb-3">Eksplor Asia</h1>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper ">
            <!-- Slide 1 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/China.jpg') }}" alt="China" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">China</h1>
                        <p class="text-xs mb-5 font-normal">Menemukan Keajaiban Abadi Tiongkok</p>
                    </div>
                </a>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/Australia.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Australia</h1>
                        <p class="text-xs mb-5 font-normal">Jelajahi Keindahan Australia</p>
                    </div>
                </a>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/Vietnam.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Vietnam</h1>
                        <p class="text-xs mb-5 font-normal">Tempat Alam Bertemu Budaya</p>
                    </div>
                </a>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/Thailand.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Thailand</h1>
                        <p class="text-xs mb-5 font-normal">Rasakan Negeri Senyuman</p>
                    </div>
                </a>
            </div>

            <!-- Slide 5 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/Japan.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Jepang</h1>
                        <p class="text-xs mb-5 font-normal">Tradisi Yang Selaras Dengan Inovasi</p>
                    </div>
                </a>
            </div>

            <!-- Slide 6 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketNTT.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Nusa Tenggara Timur</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>

            <!-- Slide 7 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketNTB.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Nusa Tenggara Barat</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>

            <!-- Papua -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/PaketPapua.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Papua</h1>
                        <p class="text-xs mb-5 font-normal">Indonesia</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next custom-swiperHome-button"></div>
        <div class="swiper-button-prev custom-swiperHome-button"></div>
    </div>
</div>

<style>
    .custom-swiperHome-button {
        color: white;
        background-color: #FFCA10;
        display: flex;
        align-items: center;
        justify-content: center;
        --swiper-navigation-size: 26px;
        border-radius: 100%;
        padding: 25px;
        font-weight: bolder;
        width: 50px;
        height: 50px;
        z-index: 99;
    }
</style>
@endsection