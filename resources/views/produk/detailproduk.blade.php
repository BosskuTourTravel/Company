@extends('main')

@section('content')
<div class="bg-[#F4F4F4] w-full">
    <div class="py-5 px-6 mt-24 md:px-24">
        <a href="javascript:void(0);" onclick="history.back()" class="text-[#CB0001] bg-[#EEEEEE] rounded-full font-bold px-5 py-1 mb-3 text-base mt-[50px] hover:bg-[#CB0001] hover:text-[#FFFFFF]">Back</a>
        <h1 class="text-3xl mt-5 font-bold text-black text-balance">Explore Bali</h1>
    </div>

    <div class="container mx-auto py-12 px-8 flex flex-col md:flex-row items-start justify-between gap-14">
        <div class="w-full md:w-1/2">
            <div class="swiper main-slider p-4 rounded-lg">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img class="box-border object-cover w-full h-72 rounded-lg shadow-lg" src="./img/Bali.jpg" alt="U17">
                    </div>
                    <div class="swiper-slide">
                        <img class="box-border object-cover w-full h-72 rounded-lg shadow-lg" src="./img/China.jpg" alt="Foto Rifky Cahya Putra">
                    </div>
                    <div class="swiper-slide">
                        <img class="box-border object-cover w-full h-72 rounded-lg shadow-lg" src="./img/Dubai.jpg" alt="Foto Rifky Cahya Putra">
                    </div>
                    <div class="swiper-slide">
                        <img class="box-border object-cover w-full h-72 rounded-lg shadow-lg" src="./img/Korea.jpg" alt="Foto Rifky Cahya Putra">
                    </div>
                </div>

                <!-- Navigation buttons -->
                <div class="swiper-button-next custom-swiper-button"></div>
                <div class="swiper-button-prev custom-swiper-button"></div>
            </div>

            <div class="swiper thumbnail-slider mt-4">
                <div class="swiper-wrapper">

                    <div class="swiper-slide cursor-pointer">
                        <img class="box-border object-cover w-full h-24 rounded" src="./img/Bali.jpg" alt="Thumbnail 1">
                    </div>

                    <div class="swiper-slide cursor-pointer">
                        <img class="box-border object-cover w-full h-24 rounded" src="./img/China.jpg" alt="Thumbnail 2">
                    </div>

                    <div class="swiper-slide cursor-pointer">
                        <img class="box-border object-cover w-full h-24 rounded" src="./img/Dubai.jpg" alt="Thumbnail 3">
                    </div>

                    <div class="swiper-slide cursor-pointer">
                        <img class="box-border object-cover w-full h-24 rounded" src="./img/Korea.jpg" alt="Thumbnail 4">
                    </div>
                </div>
            </div>
        </div>

        <div class="w-full md:w-1/2">
            <!-- Sebelah Kanan (Pemesanan) -->
            <div class="p-4 bg-white rounded-lg shadow-lg">
                <h2 class="text-2xl font-bold mb-4 text-gray-800">Pemesanan</h2>

                <p class="mb-4"><strong>Harga:</strong> <span id="harga">-</span></p>
                <p class="mb-4"><strong>Berapa Malam:</strong> <span id="malam">-</span></p>
                <p class="mb-4"><strong>Min Pax:</strong> <span id="min_pax">-</span></p>
                <p class="mb-4"><strong>Tanggal Keberangkatan:</strong> <span id="tanggal_keberangkatan">-</span></p>

                <div class="mb-4">
                    <button class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 transform hover:scale-105 transition-all">Print Flyer</button>
                </div>

                <div class="mb-4">
                    <button class="w-full bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700 transform hover:scale-105 transition-all">Print Itinerary</button>
                </div>

                <div>
                    <a href="https://wa.me/phone_number" target="_blank" class="w-full bg-green-600 text-white p-2 rounded-md hover:bg-green-700 text-center block transform hover:scale-105 transition-all">WhatsApp</a>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<div class="py-5 px-6 md:px-24">
    <!-- Bagian Bawah -->
    <div class="mt-8">
        <h3 class="text-xl font-bold mb-4 text-gray-800">Itinerary</h3>
        <p class="text-gray-600">Deskripsi itinerary akan ditambahkan di sini.</p>

        <div class="mt-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Include</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Poin 1</li>
                <li>Poin 2</li>
                <li>Poin 3</li>
                <!-- Tambahkan list lainnya -->
            </ul>
        </div>

        <div class="mt-6">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Exclude</h3>
            <ul class="list-disc pl-5 text-gray-600">
                <li>Poin 1</li>
                <li>Poin 2</li>
                <li>Poin 3</li>
                <!-- Tambahkan list lainnya -->
            </ul>
        </div>
    </div>
</div>

<style>
    .custom-swiper-button {
        color: #fff;
        background-color: #CB0001;
        display: flex;
        align-items: center;
        justify-content: center;
        --swiper-navigation-size: 18px;
        border-radius: 100%;
        padding: 12px;
        font-weight: bold;
        width: 30px;
        height: 30px;
    }

    .custom-swiper-button:hover {
        background-color: #D90002;
        transform: scale(1.1);
    }

    .swiper-wrapper {
        transition: transform 0.5s ease;
    }

    /* Additional Hover Animations */
    .hover\:scale-105:hover {
        transform: scale(1.05);
    }
</style>

@endsection