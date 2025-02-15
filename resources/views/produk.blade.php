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
    <h1 class="font-bold text-2xl mb-3">Eksplor Dunia</h1>
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
                    <div class="absolute inset-0 bg-black/70 transition-all duration-300"></div>

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
                    <div class="absolute inset-0 bg-black/70 transition-all duration-300"></div>

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
                    <img src="{{ asset('img/Korea.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Korea</h1>
                        <p class="text-xs mb-5 font-normal">Tradisi Bertemu Inovasi di Negeri K-Pop</p>
                    </div>
                </a>
            </div>

            <!-- Slide 7 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/Hongkong.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/30 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Hongkong</h1>
                        <p class="text-xs mb-5 font-normal">Gemerlap Kota, Keindahan Alam, & Kuliner Lezat</p>
                    </div>
                </a>
            </div>

            <!-- Slide 8 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/Turkey.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/50 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Turkey</h1>
                        <p class="text-xs mb-5 font-normal">Jembatan Dunia, Keajaiban Sejarah & Budaya</p>
                    </div>
                </a>
            </div>

            <!-- Slide 9 -->
            <div class="swiper-slide">
                <a href="#" class="relative rounded-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
                    <!-- Foto Portrait -->
                    <img src="{{ asset('img/Dubai.jpg') }}" alt="Gunung Bromo" class="w-full h-96 object-cover rounded-lg">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/40 transition-all duration-300"></div>

                    <!-- Teks di atas Foto -->
                    <div class="absolute inset-0 flex flex-col justify-end text-white px-5 transition-all duration-300">
                        <h1 class="text-base font-medium">Uni Emirat Arab</h1>
                        <p class="text-xs mb-5 font-normal">Kemewahan Modern di Tengah Gurun</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Navigation Buttons -->
        <div class="swiper-button-next custom-swiperHome-button"></div>
        <div class="swiper-button-prev custom-swiperHome-button"></div>
    </div>
</div>

<!-- Rental mobil -->
<div class="w-full py-5 px-6 md:px-24 mt-5">
    <h1 class="font-bold text-2xl mb-3">Sewa Mobil Buat Kamu Keliling Kota!</h1>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper ">

            <!-- Slide 1 -->
            <div class="swiper-slide">
                <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('img/Avanza.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
                            </svg> New Avanza</h3>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="font-bold text-[#FFCA10]">Rp 600.000/hari</span>
                            <span class="font-semibold text-white text-sm">Lihat Detail ></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide">
                <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('img/Innova.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
                            </svg>Innova Reborn </h3>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="font-bold text-[#FFCA10]">Rp. 900.000/hari</span>
                            <span class="font-semibold text-white text-sm">Lihat Detail ></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide">
                <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('img/Hiace.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
                            </svg>Toyota Hiace Premio</h3>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="font-bold text-[#FFCA10]">Rp 1.300.000/hari</span>
                            <span class="font-semibold text-white text-sm">Lihat Detail ></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 4 -->
            <div class="swiper-slide">
                <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('img/HiaceCom.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
                            </svg>Toyota Hiace Commuter</h3>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="font-bold text-[#FFCA10]">Rp 1.200.000/hari</span>
                            <span class="font-semibold text-white text-sm">Lihat Detail ></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 5 -->
            <div class="swiper-slide">
                <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('img/Zenix.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
                            </svg>Innova Zenix</h3>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="font-bold text-[#FFCA10]">Rp 900.000/hari</span>
                            <span class="font-semibold text-white text-sm">Lihat Detail ></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 6 -->
            <div class="swiper-slide">
                <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('img/FortunerGR.png') }}" alt="Mobil 2" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
                            </svg>Fortuner GR</h3>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="font-bold text-[#FFCA10]">Rp 1.500.000/hari</span>
                            <span class="font-semibold text-white text-sm">Lihat Detail ></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 7 -->
            <div class="swiper-slide">
                <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('img/Alphard.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
                            </svg>Toyota Alphard</h3>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="font-bold text-[#FFCA10]">Rp 2.000.000/hari</span>
                            <span class="font-semibold text-white text-sm">Lihat Detail ></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 8 -->
            <div class="swiper-slide">
                <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('img/MediumBus.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
                            </svg>Medium Bus</h3>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="font-bold text-[#FFCA10]">Rp 2.000.000/hari</span>
                            <span class="font-semibold text-white text-sm">Lihat Detail ></span>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Slide 9 -->
            <div class="swiper-slide">
                <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
                    <img src="{{ asset('img/bigbus.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
                    <div class="p-5">
                        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
                            </svg>Big Bus</h3>
                        <div class="mt-4 flex justify-between items-center">
                            <span class="font-bold text-[#FFCA10]">Rp 3.000.000/hari</span>
                            <span class="font-semibold text-white text-sm">Lihat Detail ></span>
                        </div>
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