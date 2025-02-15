@extends('main')

@section('content')
<div class="relative w-full h-screen">
    <!-- Gambar -->
    <img src="{{ asset('img/ThumbnailAbout.jpg') }}" alt="West Papua" class="w-full h-full object-cover">

    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Teks di Atas Gambar -->
    <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-10" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="500">
        <h1 class="text-4xl font-bold">Partner Perjalanan Terpercaya untuk Liburan Tak Terlupakan</h1>
        <p class="line-clamp-3 mt-2 text-lg">Kami menghadirkan pengalaman perjalanan terbaik dengan layanan lengkap dan
            profesional, memastikan setiap petualangan Anda bersama Bossku Tour & Travel menjadi momen yang berkesan.
        </p>
    </div>
</div>

<section class="py-10 px-10 md:px-24">
    <div class="container mx-auto flex flex-col md:flex-row items-center gap-8 ">
        <!-- Bagian Gambar -->
        <div class="md:w-1/2 flex justify-center" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="500">
            <img src="{{ asset('img/About.jpg') }}" alt="Bossku Tour & Travel"
                class="rounded-lg drop-shadow-[12px_12px_5px_rgba(252,202,0,1)] w-full md:w-2/3">
        </div>

        <!-- Bagian Teks -->
        <div class="md:w-1/2" data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="500">
            <h2 class="text-3xl font-bold text-gray-800">Tentang Bossku Tour & Travel</h2>
            <p class="text-gray-600 mt-4">
                Bossku Tour & Travel adalah mitra perjalanan terbaik Anda untuk menjelajahi destinasi impian. Kami berkomitmen memberikan pengalaman wisata yang nyaman, aman, dan berkesan. Dengan layanan berkualitas dan berbagai pilihan paket wisata, kami siap membawa Anda menemukan keindahan dunia. Kami menawarkan berbagai layanan perjalanan, mulai dari paket tour domestik dan internasional, cruise tour, land tour, hingga pemesanan tiket pesawat dan akomodasi hotel. Selain itu, kami juga menyediakan layanan pengurusan visa, paspor, serta rental mobil untuk memastikan perjalanan Anda semakin mudah dan menyenangkan. Bersama Bossku Tour & Travel, setiap perjalanan bukan sekadar perjalanan, tetapi petualangan penuh kenangan yang tak terlupakan.
            </p>
        </div>
    </div>
</section>

<section class="py-10 px-10 md:px-24" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="500">
    <h2
        class="relative text-3xl font-bold text-gray-800 before:content-[''] before:absolute before:left-0 before:top-1/2 before:w-12 before:h-2 before:bg-yellow-500 before:-translate-y-1/2 pl-16 before:rounded before:border-l-8 before:border-[#02335B]">
        Produk Kami
    </h2>

    <div class="flex flex-wrap gap-4 justify-center mt-5">

        <!-- Card 1 -->
        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1000" class="max-w-sm bg-white rounded-lg shadow-lg py-4 px-6 border-l-4 border-[#02335B] transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-3">
                <svg fill="#FFCA10" height="70px" width="70px" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-61.2 -61.2 734.40 734.40" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-61.2" y="-61.2" width="734.40" height="734.40" rx="367.2" fill="#02335B" strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g>
                            <path d="M329.056,271.979h-46.109c-26.704,0-48.428,21.724-48.428,48.428v168.015h142.966V320.407 C377.484,293.703,355.76,271.979,329.056,271.979z M342.021,364.907h-69.159c-7.865,0-14.244-6.378-14.244-14.244 s6.378-14.244,14.244-14.244h69.159c7.865,0,14.244,6.378,14.244,14.244S349.886,364.907,342.021,364.907z M389.401,181.931V44.867 C389.401,20.126,369.274,0,344.533,0h-77.067c-24.741,0-44.867,20.126-44.867,44.867v137.064 c-42.993,22.183-72.474,67.019-72.474,118.641v234.601c0,20.172,16.411,36.583,36.583,36.583h2.886v26 c0,7.865,6.378,14.244,14.244,14.244c7.865,0,14.244-6.378,14.244-14.244v-26h175.835v26c0,7.865,6.378,14.244,14.244,14.244 s14.244-6.378,14.244-14.244v-26h2.889c20.172,0,36.583-16.411,36.583-36.583V300.572 C461.878,248.953,432.394,204.117,389.401,181.931z M267.467,28.487h77.067c7.72,0,14.195,5.376,15.916,12.577H251.551 C253.274,33.863,259.747,28.487,267.467,28.487z M251.087,69.552h109.827v101.597c-10.401-2.612-21.277-4.017-32.478-4.017h-44.87 c-11.201,0-22.075,1.404-32.478,4.017V69.552z M220.275,516.91c-7.865,0-14.244-6.378-14.244-14.244V320.407 c0-42.412,34.504-76.916,76.916-76.916h46.109c42.412,0,76.916,34.504,76.916,76.916v182.259c0,7.865-6.378,14.244-14.244,14.244 H220.275z"></path>
                        </g>
                    </g>
                </svg>
                Paket Tour Domestik & Internasional
            </h3>
            <p class="text-gray-600 mt-2 group-hover:opacity-100 transition-opacity duration-300">Jelajahi keindahan dunia dan pesona Nusantara dengan layanan berkualitas.</p>
        </div>

        <!-- {{-- Card 2 --}} -->
        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1200" class="max-w-sm bg-white rounded-lg shadow-lg py-4 px-6 border-l-4 border-[#02335B]  transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-3">
                <svg height="55px" width="55px" viewBox="-9.6 -9.6 67.20 67.20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-9.6" y="-9.6" width="67.20" height="67.20" rx="33.6" fill="#02335B" strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M38 42L41.3908 32.6752C41.738 31.7205 41.3143 30.6572 40.4057 30.2028L24.8944 22.4472C24.3314 22.1657 23.6686 22.1657 23.1056 22.4472L7.59432 30.2028C6.68569 30.6572 6.26199 31.7205 6.60916 32.6752L10 42" stroke="#ffca10" stroke-width="4" stroke-linejoin="round"></path>
                        <path d="M35 14H13C11.8954 14 11 14.8954 11 16V28L23.1619 22.3868C23.6937 22.1414 24.3063 22.1414 24.8381 22.3868L37 28V16C37 14.8954 36.1046 14 35 14Z" fill="#ffca10" stroke="#ffca10" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M29 14V6C29 4.89543 28.1046 4 27 4H21C19.8954 4 19 4.89543 19 6V14" stroke="#ffca10" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M24 32V40" stroke="#ffca10" stroke-width="4" stroke-linecap="round"></path>
                        <path d="M4 44C8 44 8 42 11 42C14 42 14 44 17 44C20 44 20.5 42 24 42C27.5 42 28 44 31 44C34 44 34 42 37 42C40 42 40 44 44 44" stroke="#ffca10" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                Cruise Tour
            </h3>
            <p class="text-gray-600 mt-2 group-hover:opacity-100 transition-opacity duration-300">Liburan mewah di kapal pesiar dengan destinasi eksotis.</p>
        </div>

        <!-- {{-- Card 3 --}} -->
        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1400" class="max-w-sm bg-white rounded-lg shadow-lg py-4 px-6 border-l-4 border-[#02335B]  transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-3">
                <svg height="50px" width="50px" fill="#FFCA10" viewBox="-8 -8 48.00 48.00" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-8" y="-8" width="48.00" height="48.00" rx="24" fill="#02335B" strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title></title>
                        <g id="location">
                            <path d="M16,1A11,11,0,0,0,5,12C5,23.24,15,30.51,15.42,30.81a1,1,0,0,0,1.16,0C17,30.51,27,23.24,27,12A11,11,0,0,0,16,1Zm0,16a5,5,0,1,1,5-5A5,5,0,0,1,16,17Z"></path>
                        </g>
                    </g>
                </svg>
                Land Tour
            </h3>
            <p class="text-gray-600 mt-2 group-hover:opacity-100 transition-opacity duration-300">Wisata seru di destinasi pilihan, Jelajahi destinasi impian kamu.</p>
        </div>

        <!-- {{-- Card 4 --}} -->
        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1600" class="max-w-sm bg-white rounded-lg shadow-lg py-4 px-6 border-l-4 border-[#02335B]  transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-3">
                <svg height="50px" width="50px" fill="#FFCA10" viewBox="-15 -15 80.00 80.00" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-15" y="-15" width="80.00" height="80.00" rx="40" fill="#02335B" strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M12.691406 0L11.564453 2.3320312L9 2.6386719L10.949219 4.3613281L10.435547 7L12.691406 5.6816406L14.949219 7L14.435547 4.3613281L16.384766 2.6386719L13.820312 2.3320312L12.691406 0 z M 14.949219 7L10.435547 7L9.3007812 7C6.3307812 7 4 9.3307812 4 12.300781L4 45C4 45.55 4.45 46 5 46L22 46L22 36L28 36L28 46L45 46C45.55 46 46 45.55 46 45L46 12.300781C46 9.3307812 43.669219 7 40.699219 7L39.564453 7L35.050781 7L31.359375 7L26.845703 7L23.154297 7L18.640625 7L14.949219 7 z M 18.640625 7L20.896484 5.6816406L23.154297 7L22.640625 4.3613281L24.589844 2.6386719L22.025391 2.3320312L20.896484 0L19.769531 2.3320312L17.205078 2.6386719L19.154297 4.3613281L18.640625 7 z M 26.845703 7L29.103516 5.6816406L31.359375 7L30.845703 4.3613281L32.794922 2.6386719L30.230469 2.3320312L29.103516 0L27.974609 2.3320312L25.410156 2.6386719L27.359375 4.3613281L26.845703 7 z M 35.050781 7L37.308594 5.6816406L39.564453 7L39.050781 4.3613281L41 2.6386719L38.435547 2.3320312L37.308594 0L36.179688 2.3320312L33.615234 2.6386719L35.564453 4.3613281L35.050781 7 z M 10 12L16 12L16 16L10 16L10 12 z M 22 12L28 12L28 16L22 16L22 12 z M 34 12L40 12L40 16L34 16L34 12 z M 10 20L16 20L16 24L10 24L10 20 z M 22 20L28 20L28 24L22 24L22 20 z M 34 20L40 20L40 24L34 24L34 20 z M 10 28L16 28L16 32L10 32L10 28 z M 22 28L28 28L28 32L22 32L22 28 z M 34 28L40 28L40 32L34 32L34 28 z M 10 36L16 36L16 40L10 40L10 36 z M 34 36L40 36L40 40L34 40L34 36 z"></path>
                    </g>
                </svg>
                Hotel
            </h3>
            <p class="text-gray-600 mt-2 group-hover:opacity-100 transition-opacity duration-300">Penginapan nyaman dengan fasilitas terbaik untuk liburan Anda.</p>
        </div>

        <!-- {{-- Card 5 --}} -->
        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1800" class="max-w-sm bg-white rounded-lg shadow-lg py-4 px-6 border-l-4 border-[#02335B]  transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-3">
                <svg fill="#FFCA10" height="50px" width="50px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-36.86 -36.86 196.60 196.60" xml:space="preserve">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-36.86" y="-36.86" width="196.60" height="196.60" rx="98.3" fill="#02335B" strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <style type="text/css">
                            .st0 {
                                fill-rule: evenodd;
                                clip-rule: evenodd;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M16.63,105.75c0.01-4.03,2.3-7.97,6.03-12.38L1.09,79.73c-1.36-0.59-1.33-1.42-0.54-2.4l4.57-3.9 c0.83-0.51,1.71-0.73,2.66-0.47l26.62,4.5l22.18-24.02L4.8,18.41c-1.31-0.77-1.42-1.64-0.07-2.65l7.47-5.96l67.5,18.97L99.64,7.45 c6.69-5.79,13.19-8.38,18.18-7.15c2.75,0.68,3.72,1.5,4.57,4.08c1.65,5.06-0.91,11.86-6.96,18.86L94.11,43.18l18.97,67.5 l-5.96,7.47c-1.01,1.34-1.88,1.23-2.65-0.07L69.43,66.31L45.41,88.48l4.5,26.62c0.26,0.94,0.05,1.82-0.47,2.66l-3.9,4.57 c-0.97,0.79-1.81,0.82-2.4-0.54l-13.64-21.57c-4.43,3.74-8.37,6.03-12.42,6.03C16.71,106.24,16.63,106.11,16.63,105.75 L16.63,105.75z"></path>
                        </g>
                    </g>
                </svg>
                Tiket Pesawat
            </h3>
            <p class="text-gray-600 mt-2 group-hover:opacity-100 transition-opacity duration-300">Pemesanan tiket pesawat mudah, cepat, dan terpercaya.</p>
        </div>

        <!-- {{-- Card 6 --}} -->
        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="2000" class="max-w-sm bg-white rounded-lg shadow-lg py-4 px-6 border-l-4 border-[#02335B]  transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-3">
                <svg height="50px" width="50px" viewBox="-2.4 -2.4 28.80 28.80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-2.4" y="-2.4" width="28.80" height="28.80" rx="14.4" fill="#02335B" strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M9.75 13C9.75 11.7574 10.7574 10.75 12 10.75C13.2426 10.75 14.25 11.7574 14.25 13C14.25 14.2426 13.2426 15.25 12 15.25C10.7574 15.25 9.75 14.2426 9.75 13Z" fill="#FFCA10"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4 18.6943V4.69434C4 5.24662 4.44772 5.69434 5 5.69434H17C18.6569 5.69434 20 7.03748 20 8.69434V18.6943C20 20.3512 18.6569 21.6943 17 21.6943H7C5.34315 21.6943 4 20.3512 4 18.6943ZM8.25 13C8.25 10.9289 9.92893 9.25 12 9.25C14.0711 9.25 15.75 10.9289 15.75 13C15.75 15.0711 14.0711 16.75 12 16.75C9.92893 16.75 8.25 15.0711 8.25 13ZM9.25 19C9.25 18.5858 9.58579 18.25 10 18.25H14C14.4142 18.25 14.75 18.5858 14.75 19C14.75 19.4142 14.4142 19.75 14 19.75H10C9.58579 19.75 9.25 19.4142 9.25 19Z" fill="#FFCA10"></path>
                        <path opacity="0.5" d="M18 4.00038V5.86504C17.6872 5.75449 17.3506 5.69434 17 5.69434H5C4.44772 5.69434 4 5.24662 4 4.69434V4.62329C4 4.09027 4.39193 3.63837 4.91959 3.56299L15.7172 2.02048C16.922 1.84835 18 2.78328 18 4.00038Z" fill="#FFCA10"></path>
                    </g>
                </svg>
                Visa
            </h3>
            <p class="text-gray-600 mt-2 group-hover:opacity-100 transition-opacity duration-300">Layanan pengurusan visa cepat, mudah, dan terpercaya.</p>
        </div>

        <!-- {{-- Card 7 --}} -->
        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="2000" class="max-w-sm bg-white rounded-lg shadow-lg py-4 px-6 border-l-4 border-[#02335B]  transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-3">
                <svg height="50px" width="50px" viewBox="-4.8 -4.8 33.60 33.60" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-4.8" y="-4.8" width="33.60" height="33.60" rx="16.8" fill="#02335B" strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M3 8L5.72187 10.2682C5.90158 10.418 6.12811 10.5 6.36205 10.5H17.6379C17.8719 10.5 18.0984 10.418 18.2781 10.2682L21 8M6.5 14H6.51M17.5 14H17.51M8.16065 4.5H15.8394C16.5571 4.5 17.2198 4.88457 17.5758 5.50772L20.473 10.5777C20.8183 11.1821 21 11.8661 21 12.5623V18.5C21 19.0523 20.5523 19.5 20 19.5H19C18.4477 19.5 18 19.0523 18 18.5V17.5H6V18.5C6 19.0523 5.55228 19.5 5 19.5H4C3.44772 19.5 3 19.0523 3 18.5V12.5623C3 11.8661 3.18166 11.1821 3.52703 10.5777L6.42416 5.50772C6.78024 4.88457 7.44293 4.5 8.16065 4.5ZM7 14C7 14.2761 6.77614 14.5 6.5 14.5C6.22386 14.5 6 14.2761 6 14C6 13.7239 6.22386 13.5 6.5 13.5C6.77614 13.5 7 13.7239 7 14ZM18 14C18 14.2761 17.7761 14.5 17.5 14.5C17.2239 14.5 17 14.2761 17 14C17 13.7239 17.2239 13.5 17.5 13.5C17.7761 13.5 18 13.7239 18 14Z" stroke="#FFCA10" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                Rental mobil
            </h3>
            <p class="text-gray-600 mt-2 group-hover:opacity-100 transition-opacity duration-300">Sewa mobil nyaman dengan layanan terbaik di setiap perjalanan.</p>
        </div>

        <!-- {{-- Card 8 --}} -->
        <div data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="2100" class="max-w-sm bg-white rounded-lg shadow-lg py-4 px-6 border-l-4 border-[#02335B]  transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-2xl">
            <h3 class="text-xl font-semibold text-gray-800 flex items-center gap-3">
                <svg height="50px" width="50px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-153.6 -153.6 819.20 819.20" xml:space="preserve" fill="#000000">
                    <g id="SVGRepo_bgCarrier" stroke-width="0">
                        <rect x="-153.6" y="-153.6" width="819.20" height="819.20" rx="409.6" fill="#02335B" strokewidth="0"></rect>
                    </g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <style type="text/css">
                            .st0 {
                                fill: #FFCA10;
                            }
                        </style>
                        <g>
                            <path class="st0" d="M385.486,0H126.513c-41.045,0.008-74.292,33.256-74.3,74.308V437.7c0.008,41.028,33.255,74.283,74.3,74.3 h258.972c41.045-0.017,74.292-33.271,74.3-74.3V74.308C459.778,33.256,426.531,0.008,385.486,0z M426.515,437.7 c-0.008,11.38-4.566,21.534-12.014,29.007c-7.481,7.457-17.635,12.005-29.015,12.022H126.513 c-11.38-0.017-21.534-4.565-29.015-12.022c-7.449-7.473-12.006-17.627-12.014-29.007V74.308 c0.008-11.388,4.565-21.542,12.014-29.023c7.481-7.449,17.626-12.005,29.015-12.014h258.972 c11.389,0.008,21.534,4.565,29.015,12.014c7.448,7.482,12.006,17.635,12.014,29.023V437.7z"></path>
                            <path class="st0" d="M256.008,114.866c-50.776,0-91.91,41.142-91.926,91.91c0.016,50.776,41.15,91.91,91.926,91.918 c50.76-0.008,91.91-41.142,91.91-91.918C347.918,156.008,306.768,114.866,256.008,114.866z M202.194,152.97 c7.928-7.928,17.586-14.101,28.34-17.919c-5.142,6.238-9.455,14.248-12.818,23.475h-20.559 C198.725,156.593,200.423,154.74,202.194,152.97z M191.309,166.69h23.768c-3.046,10.844-4.874,23.052-5.215,36.009h-29.868 C180.701,189.514,184.754,177.241,191.309,166.69z M179.994,210.853h29.908c0.333,12.964,2.104,25.164,5.174,36.017h-23.768 C184.754,236.31,180.701,224.045,179.994,210.853z M202.194,260.589c-1.771-1.771-3.469-3.639-5.036-5.564h20.559 c1.478,4.012,3.071,7.79,4.882,11.274c2.356,4.581,5.004,8.66,7.928,12.209C219.764,274.683,210.114,268.525,202.194,260.589z M251.938,282.773c-1.283-0.065-2.542-0.162-3.818-0.276c-1.99-0.91-3.98-2.128-5.946-3.736 c-5.978-4.89-11.526-13.151-15.758-23.735h25.522V282.773z M251.938,246.87h-28.357c-3.225-10.592-5.215-22.874-5.548-36.017 h33.905V246.87z M251.938,202.698H218.05c0.333-13.143,2.34-25.425,5.572-36.009h28.316V202.698z M251.938,158.526h-25.473 c1.048-2.64,2.161-5.198,3.371-7.538c3.623-7.002,7.871-12.542,12.338-16.197c1.966-1.592,3.956-2.81,5.946-3.72 c1.275-0.113,2.534-0.211,3.818-0.284V158.526z M332.006,202.698h-29.909c-0.317-12.948-2.104-25.165-5.158-36.009h23.751 C327.245,177.241,331.315,189.514,332.006,202.698z M309.83,152.97c1.77,1.771,3.444,3.623,5.036,5.556h-20.583 c-1.454-3.996-3.071-7.798-4.882-11.275c-2.34-4.565-4.996-8.659-7.912-12.2C292.244,138.885,301.894,145.042,309.83,152.97z M260.086,130.786c1.275,0.073,2.534,0.171,3.793,0.284c1.99,0.91,3.98,2.128,5.946,3.72c5.986,4.882,11.551,13.143,15.758,23.735 h-25.498V130.786z M260.086,166.69h28.332c3.241,10.584,5.215,22.866,5.572,36.009h-33.905V166.69z M260.086,210.853h33.864 c-0.349,13.16-2.339,25.425-5.548,36.017h-28.316V210.853z M269.825,278.76c-1.966,1.608-3.956,2.826-5.946,3.736 c-1.259,0.114-2.518,0.211-3.793,0.276v-27.747h25.457c-1.056,2.648-2.161,5.214-3.363,7.538 C278.557,269.574,274.293,275.105,269.825,278.76z M309.83,260.589c-7.944,7.936-17.594,14.094-28.365,17.919 c5.166-6.247,9.455-14.239,12.818-23.483h20.583C313.274,256.95,311.601,258.818,309.83,260.589z M320.69,246.87h-23.768 c3.046-10.852,4.874-23.053,5.215-36.017h29.868C331.315,224.045,327.245,236.31,320.69,246.87z"></path>
                            <path class="st0" d="M168.102,349.665h-26.334l-1.008,0.999V416.5l1.008,0.999h12.671l0.991-0.999v-22.647l0.601-0.593h12.07 c14.67,0,23.638-8.984,23.638-21.753C191.74,358.543,182.87,349.665,168.102,349.665z M167.209,380.589h-11.177l-0.601-0.602 v-17.058l0.601-0.601h11.177c6.173,0,9.877,3.696,9.877,9.179C177.086,376.998,173.382,380.589,167.209,380.589z"></path>
                            <path class="st0" d="M233.28,349.665h-12.574l-1.3,0.999L196.061,416.5l0.698,0.999h13.078l1.284-0.999l3.802-11.868h23.735 l3.899,11.868l1.3,0.999h12.964l0.698-0.999l-22.939-65.836L233.28,349.665z M219.017,392.164l7.668-23.743h0.309l7.684,23.743 H219.017z"></path>
                            <path class="st0" d="M293.568,376.698l-3.607-0.496c-7.765-1.105-10.56-3.598-10.56-7.49c0-4.288,3.087-7.375,9.065-7.375 c5.588,0,10.576,1.795,15.774,5.183l1.397-0.301l6.076-9.073l-0.195-1.494c-5.686-4.394-14.069-7.083-23.052-7.083 c-14.654,0-24.044,8.277-24.044,20.746c0,11.973,7.684,18.456,21.461,20.356l3.59,0.495c8.074,1.097,10.478,3.591,10.478,7.579 c0,4.792-3.996,8.082-11.08,8.082c-7.181,0-13.273-3.388-17.756-6.986l-1.495,0.106l-7.587,8.676l0.098,1.698 c5.296,5.085,15.563,9.276,26.139,9.276c17.562,0,26.643-9.073,26.643-21.347C314.915,384.975,307.523,378.59,293.568,376.698z"></path>
                            <path class="st0" d="M352.946,376.698l-3.59-0.496c-7.782-1.105-10.576-3.598-10.576-7.49c0-4.288,3.087-7.375,9.081-7.375 c5.589,0,10.576,1.795,15.758,5.183l1.397-0.301l6.092-9.073l-0.211-1.494c-5.686-4.394-14.052-7.083-23.036-7.083 c-14.67,0-24.044,8.277-24.044,20.746c0,11.973,7.684,18.456,21.444,20.356l3.59,0.495c8.091,1.097,10.479,3.591,10.479,7.579 c0,4.792-3.997,8.082-11.079,8.082c-7.181,0-13.257-3.388-17.757-6.986L329,398.946l-7.57,8.676l0.098,1.698 c5.28,5.085,15.564,9.276,26.14,9.276c17.545,0,26.626-9.073,26.626-21.347C374.293,384.975,366.917,378.59,352.946,376.698z"></path>
                        </g>
                    </g>
                </svg>
                Passport
            </h3>
            <p class="text-gray-600 mt-2 group-hover:opacity-100 transition-opacity duration-300">Layanan pembuatan paspor mudah, cepat, dan terpercaya.</p>
        </div>
    </div>
</section>

<div class="bg-white shadow-md rounded-lg py-10 px-6 md:px-24">
    <div data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="500">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Lokasi Kantor Kami</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <!-- Bagian Alamat & Jam Operasional -->
            <div>
                <h3 class="text-lg font-semibold text-gray-700 mb-2">Alamat</h3>
                <p class="text-gray-600 mb-4">Jl. Mulyosari Baru No. 42 - 44 Kav. 89, Surabaya, Jawa Timur</p>

                <h3 class="text-lg font-semibold text-gray-700 mb-2">Jam Operasional</h3>
                <p class="text-gray-600"><strong>Senin - Jumat :</strong> 08.00 - 17.00</p>
                <p class="text-gray-600"><strong>Sabtu :</strong> 08.00 - 17.00</p>
                <p class="text-gray-600"><strong>Minggu & Hari Libur :</strong> Tutup</p>
            </div>

            <!-- Bagian Google Maps -->
            <div class="w-full h-72 md:h-96 rounded-lg overflow-hidden shadow-md">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.806769828841!2d112.79571827476042!3d-7.262819092743979!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f90043dffc1f%3A0x909c5b4c3d9400a5!2sBossku%20Tour%20%26%20travel!5e0!3m2!1sid!2sid!4v1739585215625!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>


@endsection