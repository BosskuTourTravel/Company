@extends('main')

@section('content')
    <section class="py-24 px-10 bg-white">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800">Tentang Bossku Tour & Travel</h2>
            <p class="text-gray-600 mt-4 max-w-2xl mx-auto">Bossku Tour & Travel adalah mitra perjalanan terbaik Anda untuk
                menjelajahi destinasi impian. Kami berkomitmen memberikan pengalaman wisata yang nyaman, aman, dan berkesan.
                Dengan layanan berkualitas dan berbagai pilihan paket wisata, kami siap membawa Anda menemukan keindahan
                dunia.</p>
        </div>

        <div class="container mx-auto mt-10 flex flex-col md:flex-row items-center gap-8 px-6">
            <img src="https://source.unsplash.com/600x400/?travel" class="w-full md:w-1/2 rounded-lg shadow-lg" alt="About Us">
            <div class="md:w-1/2 text-center md:text-left">
                <h3 class="text-2xl font-semibold text-gray-800">Mengapa Memilih Kami?</h3>
                <ul class="text-gray-600 mt-4 space-y-2">
                    <li>✔️ Paket wisata lengkap dan fleksibel</li>
                    <li>✔️ Tim profesional dan berpengalaman</li>
                    <li>✔️ Pelayanan terbaik dan harga terjangkau</li>
                    <li>✔️ Keamanan dan kenyamanan terjamin</li>
                </ul>
            </div>
        </div>
    </section>
@endsection
