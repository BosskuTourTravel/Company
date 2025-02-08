@extends('main')

@section('content')

<div class="relative w-full h-screen">
  <!-- Gambar -->
  <img src="{{ asset('img/papuabarat.jpg') }}" alt="West Papua" class="w-full h-full object-cover">

  <!-- Overlay Gelap -->
  <div class="absolute inset-0 bg-black/70"></div>

  <!-- Teks di Atas Gambar -->
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-5 animate-fade-in">
    <h1 class="text-4xl font-bold drop-shadow-lg">Tentang Bossku Tour & Travel</h1>
  </div>
</div>

<section class="flex flex-col md:flex-row gap-8 w-full py-10 px-6 md:px-24 mt-12 bg-gray-100 relative overflow-hidden">
  <!-- Background Shapes -->
  <div class="absolute top-0 left-0 w-full h-full opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]"></div>

  <!-- Content -->
  <div class="relative z-10 md:w-2/3">
    <h2 class="text-3xl font-bold text-[#02335B] mb-4 animate-slide-up">About Us</h2>
    <p class="font-medium text-base text-gray-700 leading-loose text-justify">
      We are a team of passionate professionals dedicated to delivering exceptional experiences. With expertise in technology and innovation, we aim to create meaningful solutions that make a difference. Our mission is to inspire and connect people through our work.
    </p>
    <p class="font-medium text-base text-gray-700 leading-loose text-justify mt-3">
      From the start, we have been driven by creativity and a relentless pursuit of excellence. Whether it's developing cutting-edge applications or crafting visually stunning designs, we bring ideas to life with precision and care.
    </p>
  </div>

  <!-- Cards -->
  <div class="relative z-10 flex flex-col gap-4 md:w-1/3">
    <!-- Contact Us Card -->
    <div class="bg-white shadow-lg rounded-xl p-5 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate-slide-up">
      <a href="https://contoh.com" class="flex justify-between items-center text-[#02335B] font-semibold text-lg">
        <span>Contact Us</span>
        <span class="text-2xl">&rarr;</span>
      </a>
    </div>

    <!-- Social Media Cards -->
    @php
      $socials = [
        ['name' => 'Instagram', 'url' => 'https://instagram.com', 'icon' => '<path d="M7.75 2A5.75 5.75 0 0 0 2 7.75v8.5A5.75 5.75 0 0 0 7.75 22h8.5A5.75 5.75 0 0 0 22 16.25v-8.5A5.75 5.75 0 0 0 16.25 2h-8.5Zm6.08 3h1.17c.65 0 1.17.52 1.17 1.17v1.17c0 .65-.52 1.17-1.17 1.17h-1.17c-.65 0-1.17-.52-1.17-1.17V6.17c0-.65.52-1.17 1.17-1.17ZM12 7.75a4.25 4.25 0 1 1 0 8.5 4.25 4.25 0 0 1 0-8.5Z"'],
        ['name' => 'Facebook', 'url' => 'https://facebook.com', 'icon' => '<path d="M12 2.04C6.48 2.04 2 6.48 2 12c0 4.86 3.91 8.87 8.77 9.83v-6.96H8.08V12h2.69V9.69c0-2.66 1.61-4.13 4.02-4.13 1.16 0 2.37.2 2.37.2v2.6h-1.34c-1.32 0-1.73.82-1.73 1.66V12h2.95l-.47 2.87h-2.48v6.96C18.09 20.87 22 16.86 22 12c0-5.52-4.48-9.96-10-9.96Z"'],
        ['name' => 'TikTok', 'url' => 'https://tiktok.com', 'icon' => '<path d="M9.4 21.6c-3.7 0-6.8-3-6.8-6.8s3-6.8 6.8-6.8c.3 0 .6 0 .8.1v2.2c-.3 0-.5 0-.8-.1-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5c1.3 0 2.6-.6 3.4-1.5v2.5c-1 .7-2.2 1.4-3.4 1.4zm8.3-14.5c-1.2-.3-2.1-1.2-2.4-2.3h-2.4v12.5c-.9.6-2 .9-3.2.9-3.1 0-5.6-2.5-5.6-5.6s2.5-5.6 5.6-5.6c.3 0 .6 0 .8.1v2.2c-.3 0-.5 0-.8-.1-2.5 0-4.5 2-4.5 4.5s2 4.5 4.5 4.5c1.3 0 2.6-.6 3.4-1.5v-8.6c1 .9 2.2 1.4 3.6 1.4v2.3c-.3 0-.6 0-.9-.1z"/>']
      ];
    @endphp

    @foreach ($socials as $social)
      <div class="bg-white shadow-lg rounded-xl p-5 hover:shadow-2xl transition-all duration-300 transform hover:scale-105 animate-slide-up">
        <a href="{{ $social['url'] }}" class="flex justify-between items-center text-black font-semibold text-lg">
          <div class="flex items-center gap-2">
            <svg class="w-6 h-6" fill="#02335B" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">{!! $social['icon'] !!}</svg>
            {{ $social['name'] }}
          </div>
          <span class="text-2xl">&rarr;</span>
        </a>
      </div>
    @endforeach

  </div>
</section>

@endsection
