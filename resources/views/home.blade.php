@extends('main')

@section('content')

<div class="relative w-full h-screen">
    <!-- Gambar -->
    <img src="{{ asset('img/Kintamani.jpg') }}" alt="West Papua" class="w-full h-full object-cover">

    <!-- Overlay Gelap -->
    <div class="absolute inset-0 bg-black/70"></div>

    <!-- Teks di Atas Gambar -->
    <div class="absolute inset-0 flex flex-col justify-center text-[#FFCA10] text-left px-5 shadow-xl" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0" data-aos-duration="1000">
        <h1 class="text-6xl font-bold">Bossku Tour & Travel</h1>
        <p class="line-clamp-3 text-lg">Liburan Seru, Tanpa Ribet!</p>
    </div>
</div>

<!-- Icon Button -->
<div class="bg-[#f4f4f4] w-full py-3 px-4 md:px-10 flex flex-col items-center space-y-5 mt-10" data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1000">
  <h1 class="font-bold text-xl md:text-3xl text-center">Selamat Datang di Travel Agensi Kami!</h1>

  <!-- Button Icon -->
  <div class="flex flex-wrap gap-4 md:gap-10 justify-between items-center">

    <!-- Button Paket Tour -->
    <div class="flex flex-col items-center space-y-3">
      <a href="Paket_Tour" class="bg-[#FFCA10] text-[#02335B] font-bold p-3 md:p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-12 h-12 md:w-16 md:h-16">
      <svg class="w-24 h-24" width="100%" height="100%" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000" stroke="#000000" stroke-width="2.56">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <style type="text/css">
              .st0 {
                fill: #000000;
              }
            </style>
            <g>
              <path class="st0" d="M286.105,88.898c-100.217,0.008-181.43,81.222-181.438,181.438c0.008,100.225,81.222,181.438,181.438,181.446 c100.225-0.008,181.439-81.222,181.446-181.446C467.544,170.119,386.33,88.906,286.105,88.898z M179.43,163.661 c10.19-10.181,21.832-18.91,34.562-25.85c-6.736,10.316-12.612,21.932-17.518,34.646h-25.04 C174.01,169.444,176.627,166.463,179.43,163.661z M153.741,197.944h34.714c-4.795,18.48-7.623,38.589-8.501,59.644h-44.06 C137.7,236.103,143.897,215.901,153.741,197.944z M153.757,342.736c-9.86-17.966-16.057-38.168-17.864-59.661h43.883 c0.877,21.106,3.849,41.164,8.661,59.661H153.757z M179.43,377.01c-2.802-2.802-5.419-5.774-7.986-8.788h25.04 c3.554,9.219,7.581,17.888,12.089,25.875c1.748,3.072,3.614,5.951,5.496,8.814C201.295,395.963,189.645,387.225,179.43,377.01z M273.366,420.555c-1.266-0.101-2.542-0.16-3.808-0.304c-4.153-1.706-8.282-3.96-12.393-7.024 c-12.333-9.16-24.043-24.752-33.109-45.005h49.31V420.555z M273.366,342.736h-58.445c-5.26-18-8.518-38.184-9.481-59.661h67.926 V342.736z M273.366,257.588h-68.112c0.963-21.468,4.34-41.644,9.582-59.644h58.53V257.588z M273.366,172.458h-49.243 c2.094-4.677,4.28-9.176,6.644-13.339c7.801-13.837,16.944-24.617,26.398-31.674c4.112-3.057,8.24-5.302,12.385-7.008 c1.266-0.143,2.55-0.202,3.816-0.312V172.458z M418.478,197.944c9.844,17.957,16.04,38.159,17.846,59.644h-43.89 c-0.878-21.097-3.85-41.146-8.662-59.644H418.478z M392.788,163.661c2.803,2.802,5.42,5.783,7.995,8.797h-25.056 c-3.546-9.219-7.582-17.889-12.098-25.884c-1.739-3.064-3.613-5.943-5.479-8.814C370.906,144.716,382.565,153.454,392.788,163.661z M298.844,120.125c1.266,0.11,2.549,0.169,3.816,0.312c4.136,1.706,8.274,3.951,12.384,7.008 c12.343,9.159,24.044,24.769,33.119,45.013h-49.319V120.125z M298.844,197.944h58.453c5.252,17.999,8.51,38.184,9.472,59.644 h-67.925V197.944z M341.451,381.552c-7.809,13.837-16.952,24.626-26.407,31.675c-4.11,3.064-8.248,5.318-12.393,7.024 c-1.266,0.144-2.541,0.202-3.807,0.304v-52.333h49.252C345.993,372.89,343.816,377.399,341.451,381.552z M298.844,342.736v-59.661 h68.111c-0.962,21.477-4.339,41.662-9.582,59.661H298.844z M392.788,377.01c-10.19,10.198-21.831,18.919-34.562,25.85 c6.728-10.307,12.604-21.924,17.509-34.638h25.038C398.208,371.236,395.591,374.208,392.788,377.01z M418.46,342.736h-34.705 c4.803-18.472,7.623-38.581,8.501-59.661h44.068C434.518,304.568,428.322,324.77,418.46,342.736z"></path>
              <path class="st0" d="M401.652,459.001c-36.09,22.101-75.928,32.604-115.328,32.604c-74.477-0.008-147.146-37.567-188.884-105.721 c-22.102-36.09-32.604-75.929-32.604-115.329c0.009-74.485,37.568-147.129,105.73-188.884L159.92,64.288 C85.503,109.868,44.432,189.274,44.449,270.555c-0.009,43.022,11.506,86.626,35.608,125.974 C125.628,470.93,205.043,512.009,286.324,512c43.021,0,86.625-11.506,125.982-35.608l-10.654-17.382V459.001z"></path>
              <path class="st0" d="M244.587,69.818h95.387c9.818,0,17.787-3.317,17.787-13.152c0-9.819-18.8-19.333-28.618-19.333h-19.704 l-40.1-36.099c-2.009-2.22-9.97-0.768-12.384-0.759c-2.98,0.017-2.33,4.778-1.182,7.547l11.718,29.311h-28.062l-15.39-24.448 c-2.702-2.946-6.932-3.942-10.654-2.499c-3.732,1.444-6.188,5.032-6.188,9.025l-0.253,17.922v5.293 C206.943,57.644,224.993,69.818,244.587,69.818z"></path>
            </g>
          </g>
        </svg>
      </a>
      <p class="text-xs md:text-sm font-bold text-[#02335B]">Paket Tour</p>
    </div>

    <!-- Button Icon Cruise -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-3 md:p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-12 h-12 md:w-16 md:h-16">
      <svg viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="si-glyph si-glyph-cruise" fill="#000000">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <title>649</title>
            <defs> </defs>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(1.000000, 0.000000)" fill="#000000">
                <path d="M3.143,12.728 C3.213,12.792 3.377,12.903 3.504,12.896 C3.584,12.894 3.676,12.838 3.768,12.732 C4.069,12.381 4.403,12.194 4.76,12.174 C5.301,12.143 5.709,12.516 5.906,12.695 C6.176,12.937 6.291,12.958 6.328,12.953 C6.375,12.949 6.754,12.534 6.953,12.408 L6.953,6.059 L3.979,6.713 L3.979,3.558 C3.979,3.215 4.268,2.938 4.622,2.938 L7.02,2.938 L7.02,6.078 C7.283,6.02 7.714,6.02 7.979,6.078 L7.979,2.938 L10.386,2.938 C10.74,2.938 11.028,3.215 11.028,3.558 L11.043,6.74 L8.043,6.059 L8.043,12.226 C8.12,12.206 8.203,12.193 8.293,12.191 C8.56,12.189 8.961,12.265 9.35,12.686 C9.481,12.824 9.618,12.901 9.69,12.9 C9.78,12.895 9.963,12.692 9.977,12.678 C10.024,12.631 10.452,12.217 11.03,12.231 C11.274,12.238 11.634,12.322 11.958,12.695 C12.097,12.854 12.229,12.949 12.325,12.955 C12.483,12.967 12.718,12.751 12.817,12.66 C13.042,12.458 13.334,12.239 13.692,12.188 C13.692,12.188 14.262,9.741 13.829,8.657 C13.599,8.081 13.544,7.579 12.321,7.156 C12.21,7.118 12.094,7.091 11.982,7.053 L11.982,3.388 C11.982,2.633 11.346,2.02 10.563,2.02 L8.98,2.02 L8.98,0.021 L8.002,0.021 L8.002,2.02 L6.98,2.02 L6.98,0.042 L6.002,0.042 L6.002,2.02 L4.455,2.02 C3.672,2.02 3.034,2.633 3.034,3.388 L3.034,7.056 C2.925,7.091 2.813,7.118 2.706,7.156 C1.49,7.579 1.469,8.116 1.201,8.676 C0.687,9.751 1.486,12.466 1.486,12.466 C1.785,12.255 2.06,12.216 2.258,12.229 C2.744,12.262 3.047,12.605 3.143,12.728 Z" class="si-glyph-fill"> </path>
                <path d="M14.918,14.747 C14.65,14.307 14.338,14.064 13.991,14.027 C13.902,14.019 13.82,14.026 13.738,14.041 C13.371,14.105 13.071,14.385 12.84,14.64 C12.738,14.754 12.5,15.031 12.336,15.015 C12.24,15.008 12.102,14.887 11.961,14.685 C11.628,14.212 11.26,14.104 11.01,14.096 C10.416,14.08 9.981,14.603 9.932,14.664 C9.916,14.682 9.902,14.706 9.891,14.726 C9.848,14.799 9.73,14.938 9.635,14.945 C9.562,14.947 9.422,14.847 9.291,14.672 C8.891,14.14 8.48,14.043 8.209,14.046 C8.117,14.049 8.031,14.067 7.949,14.089 C7.776,14.139 7.629,14.227 7.506,14.322 C7.3,14.482 7.175,14.658 7.151,14.693 C7.133,14.716 7.12,14.744 7.106,14.773 C6.997,14.942 6.909,15.009 6.863,15.014 C6.819,15.02 6.704,14.994 6.426,14.686 C6.222,14.46 5.801,13.985 5.24,14.023 C4.874,14.05 4.529,14.288 4.217,14.731 C4.121,14.867 4.028,14.938 3.946,14.942 C3.814,14.948 3.647,14.808 3.574,14.727 C3.477,14.571 3.161,14.136 2.661,14.095 C2.456,14.076 2.172,14.126 1.865,14.394 C1.768,14.479 1.666,14.585 1.566,14.72 C1.471,14.845 1.322,14.988 1.192,14.991 C1.032,14.989 0.862,14.802 0.817,14.735 C0.667,14.519 0.391,14.475 0.196,14.639 C0.00300000001,14.803 -0.039,15.112 0.106,15.328 C0.149,15.394 0.549,15.959 1.166,15.976 C1.44,15.984 1.85,15.88 2.248,15.349 C2.257,15.337 2.265,15.329 2.272,15.318 C2.397,15.163 2.52,15.072 2.594,15.076 C2.686,15.082 2.806,15.222 2.845,15.289 C2.858,15.314 2.873,15.337 2.89,15.357 C2.938,15.418 3.374,15.959 3.968,15.925 C4.217,15.918 4.584,15.808 4.916,15.336 C5.061,15.134 5.196,15.013 5.295,15.007 C5.456,15.002 5.694,15.265 5.799,15.38 C6.061,15.672 6.412,15.997 6.852,15.997 C6.883,15.997 6.916,15.996 6.948,15.993 C7.147,15.972 7.333,15.876 7.507,15.722 C7.638,15.606 7.761,15.461 7.874,15.273 C7.881,15.264 7.885,15.254 7.89,15.245 C7.907,15.226 7.927,15.203 7.951,15.182 C8.025,15.11 8.133,15.032 8.236,15.03 L8.239,15.03 C8.377,15.03 8.515,15.178 8.609,15.302 C9.028,15.858 9.431,15.948 9.705,15.926 C10.205,15.885 10.521,15.451 10.619,15.293 C10.674,15.232 10.851,15.061 10.988,15.08 C11.073,15.081 11.164,15.153 11.261,15.289 C11.573,15.732 11.919,15.972 12.284,15.996 C12.542,16.016 12.773,15.919 12.968,15.789 C13.187,15.644 13.363,15.456 13.472,15.336 C13.747,15.027 13.868,15 13.906,15.008 C13.958,15.013 14.056,15.091 14.181,15.295 C14.318,15.522 14.595,15.582 14.798,15.43 C14.999,15.279 15.055,14.974 14.918,14.747 L14.918,14.747 Z" class="si-glyph-fill"> </path>
              </g>
            </g>
          </g>
        </svg>
      </a>
      <p class="text-xs md:text-sm font-bold text-[#02335B]">Cruise</p>
    </div>

    <!-- Button Icon Land Tour -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-3 md:p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-12 h-12 md:w-16 md:h-16">
      <svg height="200px" width="200px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#02335B">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <style type="text/css">
              .st0 {
                fill: #02335B;
              }
            </style>
            <g>
              <path class="st0" d="M511.434,239.204c-4.138-63.963-31.794-121.624-74.418-164.217c-17.682-17.685-37.951-32.809-60.22-44.74 C340.806,10.962,299.67,0,256,0C185.365,0,121.273,28.67,74.984,74.988C28.663,121.273,0,185.361,0,256 c0,70.639,28.663,134.735,74.984,181.013C121.273,483.329,185.365,512,256,512c10.178,0,20.211-0.593,30.092-1.757 c25.423-2.974,49.714-9.666,72.278-19.558c18.337-8.004,35.573-18.099,51.38-29.968c9.642-7.261,18.755-15.194,27.266-23.704 C483.337,390.734,512,326.639,512,256C512,250.347,511.82,244.748,511.434,239.204z M368.22,213.758 c-8.983,3.483-31.286,4.653-36.252,1.343c-4.943-3.272-17.416-7.379-22.444-6.488c-5.032,0.89,1.604,8.416-4.259,9.338 c-5.86,0.898-13.395-3.208-19.294-7.44c-5.856-4.162-15.144-5.794-15.144-5.794c-2.26-0.273-4.529-0.547-6.789-0.804 c-3.365-6.762-1.608-22.096-13.52-18.63c-11.903,3.475-51.197,10.416-59.77,12.11c-8.573,1.726-18.81,15.39-25.63,25.532 c-6.843,10.244-25.481,42.241-28.842,47.215c-3.365,5.059-4.884,36.65-4.79,44.833c0.085,8.339,37.322,42.623,49.022,44.107 c11.759,1.616,43.697-6.66,52.091-8.417c8.429-1.695,13.309,9.557,19.977,9.431c6.699-0.117,14.948,2.983,8.159,12.689 c-6.82,9.634-6.851,14.413-0.328,20.597c6.547,6.247,19.169,29.381,10.506,47.707c-8.604,18.341-2.292,27.008,2.323,34.262 c0.948,1.491,1.932,3.552,2.916,5.988c-6.637,0.594-13.363,0.89-20.152,0.89c-62.51,0-118.985-25.297-159.97-66.25 C55.07,374.986,29.764,318.51,29.764,256c0-62.51,25.306-118.986,66.266-159.978c40.984-40.952,97.459-66.25,159.97-66.25 c7.765,0,15.476,0.382,23.042,1.155c-1.488,1.101-3.127,2.233-5.032,3.365c-12.649,7.558-17.744,10.931-27.058,13.453 c-9.35,2.506-5.895,21.292-2.475,24.713c3.428,3.42,11.076-0.844,17.006-4.225c5.922-3.365,7.648,3.42,7.675,5.973 c0,2.561,3.424,12.806,8.484,11.111c5.095-1.695,13.457-18.7,12.594-21.222c-0.863-2.569-4.263-9.378,1.608-14.437 c5.805-5.028,12.465-9.198,18.278-13.368c1.811,0.406,3.596,0.891,5.352,1.39c-0.508,1.257-1.667,2.802-3.568,4.498 c-6.64,5.871-9.139,10.103-9.139,10.103s-1.581,13.563,2.62,13.563c4.197,0.023,15.897-2.436,21.698-4.107 c5.836-1.67,5.868,3.428,0.058,5.091c-5.832,1.639-10.834,4.169-10.834,4.169c-0.835,2.522-1.636,5.092-2.471,7.613 c-8.366,5.068-11.7,12.719-11.7,12.719s-37.123,0.804-39.739,1.663c-2.53,0.812-1.694-7.675-1.694-7.675s2.498-8.55-1.729-7.714 c-4.197,0.866-4.224,8.347-4.224,8.55c-0.566,3.396-1.132,6.816-1.667,10.236c0,0-16.194,3.396-19.618,6.84 c-3.392,3.428-14.5,13.672-17.053,15.421c-2.565,1.694-11.134,4.286-14.562,6.012c-3.424,1.734,10.271,7.722,10.271,10.275 c0,2.561,0.031,14.554-5.118,15.414c-5.126,0.866-29.143,0.898-29.143,0.898s-7.683,27.414-5.954,29.982 c1.726,2.553,12.856,8.51,19.708,7.652c6.844-0.874,22.233-8.573,22.233-8.573c2.264-5.153,4.556-10.283,6.848-15.421 c4.552-4.856,9.108-9.713,13.664-14.585c0,0.023,10.236,4.255,13.664,0.828c3.388-3.42,10.15-6.855,10.209-6.855 c0.027,0,6.781,12.781,11.017,14.468c4.251,1.709,11.841,8.487,12.676,12.75c0.836,4.255,1.667,11.907,4.197,10.174 c2.534-1.726,6.789-11.93,6.789-11.93s5.891-3.428-0.836-6.817c-6.73-3.365-18.575-15.272-20.273-17.834 c-1.694-2.561-0.832-10.244,5.091-6.847c5.954,3.428,21.94,18.692,21.94,18.692s0.835,7.675,5.001,11.048 c4.197,3.358,8.366,9.284,8.366,12.68c-0.031,3.396-0.031,5.06,5.801,5.028c5.868-0.031,3.424-11.041,3.424-13.57 c0-2.561-0.8-7.652,3.365-7.652c4.166-0.031,10.806,3.303,10.806,3.303s-4.228,16.974,4.044,19.434 c8.339,2.444,33.82-4.575,33.731-0.351C373.342,191.053,377.246,210.284,368.22,213.758z M415.969,415.977 c-6.043,6.028-12.414,11.728-19.11,17.052c-0.597-11.728-0.445-31.677,1.159-39.477c1.995-9.377,19.559-16.459,27.832-29.405 c8.334-13.008,21.257-27.828,18.844-46.863c-14.141,7.034-22.116,10.603-29.827,6.113c-7.71-4.497-15.178-20.394-18.247-26.828 c-2.862-6.16-29.408-56.733-24.587-60.332c5.032-3.31,28.515,39.212,37.565,51.76c9.142,12.742,5.535,28.975,24.618,18.52 c19.047-10.448,42.358-29.178,45.543-37.362c3.276-8.151-8.334-28.842-13.066-23.846c-4.646,5.06-18.576,7.152-18.607,7.152 c-5.954-10.681-11.997-21.495-18.126-32.387c0,0,7.887-0.149,15.538,6.215c7.71,6.403,22.92,14.109,31.942,15.413 c1.218,0.195,2.678,0.219,4.346,0.133c0.296,4.669,0.448,9.401,0.448,14.164C482.236,318.51,456.93,374.986,415.969,415.977z"></path>
              <path class="st0" d="M205.232,89.526c2.569,1.718-1.698,9.432-5.114,15.429c-3.42,5.996-1.706,9.417-1.706,9.417 s16.272-2.577,19.688-4.295c3.416-1.701,5.973-12.844,3.4-15.412c-2.569-2.569-11.138-10.268-11.15-12.837 c0-2.569,0.839-11.977-2.596-14.523c-3.42-2.576-11.119,2.28-11.103,7.684C196.655,78.415,202.66,87.808,205.232,89.526z"></path>
            </g>
          </g>
        </svg>
      </a>
      <p class="text-xs md:text-sm font-bold text-[#02335B]">Land Tour</p>
    </div>

    <!-- Button Icon Hotel  -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-3 md:p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-12 h-12 md:w-16 md:h-16">
      <svg viewBox="-5 -5 60.00 60.00" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path d="M12.691406 0L11.564453 2.3320312L9 2.6386719L10.949219 4.3613281L10.435547 7L12.691406 5.6816406L14.949219 7L14.435547 4.3613281L16.384766 2.6386719L13.820312 2.3320312L12.691406 0 z M 14.949219 7L10.435547 7L9.3007812 7C6.3307812 7 4 9.3307812 4 12.300781L4 45C4 45.55 4.45 46 5 46L22 46L22 36L28 36L28 46L45 46C45.55 46 46 45.55 46 45L46 12.300781C46 9.3307812 43.669219 7 40.699219 7L39.564453 7L35.050781 7L31.359375 7L26.845703 7L23.154297 7L18.640625 7L14.949219 7 z M 18.640625 7L20.896484 5.6816406L23.154297 7L22.640625 4.3613281L24.589844 2.6386719L22.025391 2.3320312L20.896484 0L19.769531 2.3320312L17.205078 2.6386719L19.154297 4.3613281L18.640625 7 z M 26.845703 7L29.103516 5.6816406L31.359375 7L30.845703 4.3613281L32.794922 2.6386719L30.230469 2.3320312L29.103516 0L27.974609 2.3320312L25.410156 2.6386719L27.359375 4.3613281L26.845703 7 z M 35.050781 7L37.308594 5.6816406L39.564453 7L39.050781 4.3613281L41 2.6386719L38.435547 2.3320312L37.308594 0L36.179688 2.3320312L33.615234 2.6386719L35.564453 4.3613281L35.050781 7 z M 10 12L16 12L16 16L10 16L10 12 z M 22 12L28 12L28 16L22 16L22 12 z M 34 12L40 12L40 16L34 16L34 12 z M 10 20L16 20L16 24L10 24L10 20 z M 22 20L28 20L28 24L22 24L22 20 z M 34 20L40 20L40 24L34 24L34 20 z M 10 28L16 28L16 32L10 32L10 28 z M 22 28L28 28L28 32L22 32L22 28 z M 34 28L40 28L40 32L34 32L34 28 z M 10 36L16 36L16 40L10 40L10 36 z M 34 36L40 36L40 40L34 40L34 36 z"></path>
          </g>
        </svg>
      </a>
      <p class="text-xs md:text-sm font-bold text-[#02335B]">Hotel</p>
    </div>

    <!-- Icon Tiket Pesawat -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-3 md:p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-12 h-12 md:w-16 md:h-16">
      <svg class="w-3xs h-3xs" fill="#000000" height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 122.88 122.88" xml:space="preserve">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
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
      </a>
      <p class="text-xs md:text-sm font-bold text-[#02335B]">Pesawat</p>
    </div>

    <!-- Icon Sewa Hiace -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-3 md:p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-12 h-12 md:w-16 md:h-16">
      <svg class="w-3xs h-3xs" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 14.803v6.447c0 .414.336.75.75.75h1.614a.75.75 0 0 0 .74-.627L5.5 19h13l.395 2.373a.75.75 0 0 0 .74.627h1.615a.75.75 0 0 0 .75-.75v-6.447a5.954 5.954 0 0 0-1-3.303l-.78-1.17a1.994 1.994 0 0 1-.178-.33h.994a.75.75 0 0 0 .671-.415l.25-.5A.75.75 0 0 0 21.287 8H19.6l-.31-1.546a2.5 2.5 0 0 0-1.885-1.944C15.943 4.17 14.141 4 12 4c-2.142 0-3.943.17-5.405.51a2.5 2.5 0 0 0-1.886 1.944L4.399 8H2.714a.75.75 0 0 0-.67 1.085l.25.5a.75.75 0 0 0 .67.415h.995a1.999 1.999 0 0 1-.178.33L3 11.5c-.652.978-1 2.127-1 3.303zm15.961-4.799a4 4 0 0 0 .34.997H5.699c.157-.315.271-.65.34-.997l.632-3.157a.5.5 0 0 1 .377-.39C8.346 6.157 10 6 12 6c2 0 3.654.156 4.952.458a.5.5 0 0 1 .378.389l.631 3.157zM5.5 16a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM20 14.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" fill="#000000"></path>
          </g>
        </svg>
      </a>
      <p class="text-xs md:text-sm font-bold text-[#02335B]">Sewa Mobil</p>
    </div>

    <!-- Button Icon Passport -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-3 md:p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-12 h-12 md:w-16 md:h-16">
      <svg height="200px" width="200px" version="1.1" id="_x32_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <style type="text/css">
              .st0 {
                fill: #000000;
              }
            </style>
            <g>
              <path class="st0" d="M270.465,279.817c4.674-3.824,9.136-9.612,12.926-16.946c1.258-2.431,2.414-5.116,3.519-7.887h-26.634v29.032 c1.334-0.069,2.651-0.171,3.968-0.29C266.327,282.775,268.408,281.5,270.465,279.817z"></path>
              <path class="st0" d="M216.295,200.236h35.457v-37.674h-29.626C218.743,173.636,216.643,186.485,216.295,200.236z"></path>
              <path class="st0" d="M215.947,254.984h-21.51c1.64,2.015,3.417,3.969,5.27,5.822c8.286,8.303,18.382,14.745,29.643,18.748 c-3.059-3.714-5.83-7.98-8.295-12.774C219.159,263.134,217.493,259.182,215.947,254.984z"></path>
              <path class="st0" d="M241.535,279.817c2.058,1.683,4.139,2.958,6.222,3.909c1.334,0.119,2.652,0.221,3.994,0.29v-29.032h-26.703 C229.476,266.058,235.281,274.701,241.535,279.817z"></path>
              <path class="st0" d="M222.083,246.452h29.669v-37.682h-35.474C216.626,222.519,218.709,235.37,222.083,246.452z"></path>
              <path class="st0" d="M295.706,208.769h-35.43v37.682h29.626C293.259,235.37,295.341,222.537,295.706,208.769z"></path>
              <path class="st0" d="M282.644,279.554c11.269-4.003,21.365-10.445,29.676-18.748c1.853-1.853,3.604-3.807,5.27-5.822h-21.536 C292.536,264.656,288.049,273.019,282.644,279.554z"></path>
              <path class="st0" d="M289.919,162.562h-29.643v37.674h35.472C295.375,186.485,293.31,173.636,289.919,162.562z"></path>
              <path class="st0" d="M304.23,200.236h31.292c-0.722-13.794-4.98-26.634-11.838-37.674h-24.85 C302.029,173.908,303.899,186.69,304.23,200.236z"></path>
              <path class="st0" d="M296.055,154.021h21.536c-1.666-2.023-3.417-3.96-5.27-5.813c-8.303-8.294-18.399-14.737-29.651-18.748 c3.051,3.706,5.83,7.989,8.278,12.765C292.842,145.862,294.533,149.84,296.055,154.021z"></path>
              <path class="st0" d="M270.465,129.188c-2.057-1.666-4.139-2.941-6.221-3.892c-1.318-0.119-2.634-0.221-3.968-0.298v29.023h26.677 C282.55,142.938,276.729,134.295,270.465,129.188z"></path>
              <path class="st0" d="M298.817,246.452h24.867c6.858-11.048,11.116-23.881,11.838-37.682h-31.249 C303.916,222.333,302.004,235.098,298.817,246.452z"></path>
              <polygon class="st0" points="225.329,373.625 217.307,398.467 233.692,398.467 225.651,373.625 "></polygon>
              <path class="st0" d="M394.486,0h-276.97C83.453,0,55.84,27.612,55.84,61.674v388.66c0,34.054,27.613,61.666,61.676,61.666h276.97 c34.062,0,61.674-27.612,61.674-61.666V61.674C456.16,27.612,428.548,0,394.486,0z M256.009,104.712 c55.113,0,99.791,44.668,99.791,99.791c0,55.131-44.678,99.791-99.791,99.8c-55.13-0.009-99.791-44.669-99.808-99.8 C156.218,149.38,200.879,104.712,256.009,104.712z M164.037,399.615h-12.629c-0.424,0-0.629,0.204-0.629,0.62v23.694 c0,0.629-0.407,1.045-1.036,1.045h-13.259c-0.628,0-1.053-0.416-1.053-1.045v-68.881c0-0.629,0.424-1.046,1.053-1.046h27.553 c15.451,0,24.731,9.289,24.731,22.853C188.768,390.215,179.385,399.615,164.037,399.615z M256.859,424.974h-13.564 c-0.731,0-1.156-0.314-1.36-1.045l-4.079-12.417h-24.833l-3.978,12.417c-0.204,0.731-0.612,1.045-1.343,1.045H194.02 c-0.731,0-0.935-0.416-0.731-1.045l24.424-68.881c0.205-0.629,0.629-1.046,1.36-1.046h13.156c0.731,0,1.139,0.417,1.36,1.046 l24,68.881C257.794,424.558,257.59,424.974,256.859,424.974z M289.765,426.122c-11.066,0-21.807-4.386-27.348-9.706 c-0.408-0.416-0.629-1.147-0.103-1.776l7.938-9.077c0.408-0.526,1.038-0.526,1.564-0.11c4.692,3.765,11.065,7.308,18.578,7.308 c7.411,0,11.592-3.442,11.592-8.456c0-4.173-2.515-6.782-10.963-7.929l-3.757-0.519c-14.414-1.988-22.454-8.77-22.454-21.298 c0-13.045,9.824-21.705,25.156-21.705c9.399,0,18.17,2.812,24.119,7.411c0.628,0.416,0.73,0.833,0.204,1.564l-6.357,9.493 c-0.424,0.526-0.952,0.628-1.461,0.314c-5.439-3.544-10.658-5.422-16.504-5.422c-6.255,0-9.485,3.23-9.485,7.717 c0,4.071,2.924,6.68,11.049,7.836l3.772,0.518c14.601,1.981,22.336,8.661,22.336,21.502 C317.642,416.628,308.14,426.122,289.765,426.122z M351.908,426.122c-11.065,0-21.825-4.386-27.348-9.706 c-0.426-0.416-0.629-1.147-0.102-1.776l7.92-9.077c0.424-0.526,1.054-0.526,1.564-0.11c4.708,3.765,11.065,7.308,18.578,7.308 c7.41,0,11.592-3.442,11.592-8.456c0-4.173-2.499-6.782-10.964-7.929l-3.756-0.519c-14.397-1.988-22.436-8.77-22.436-21.298 c0-13.045,9.807-21.705,25.156-21.705c9.4,0,18.152,2.812,24.102,7.411c0.629,0.416,0.731,0.833,0.221,1.564l-6.374,9.493 c-0.408,0.526-0.934,0.628-1.462,0.314c-5.422-3.544-10.64-5.422-16.487-5.422c-6.272,0-9.502,3.23-9.502,7.717 c0,4.071,2.923,6.68,11.065,7.836l3.756,0.518c14.618,1.981,22.334,8.661,22.334,21.502 C379.766,416.628,370.264,426.122,351.908,426.122z"></path>
              <path class="st0" d="M225.1,154.021h26.652v-29.023c-1.343,0.077-2.66,0.178-3.994,0.298c-2.082,0.951-4.164,2.226-6.222,3.892 c-4.674,3.825-9.118,9.62-12.909,16.946C227.36,148.582,226.195,151.259,225.1,154.021z"></path>
              <path class="st0" d="M163.102,367.252h-11.694c-0.424,0-0.629,0.212-0.629,0.629v17.847c0,0.416,0.205,0.628,0.629,0.628h11.694 c6.459,0,10.334-3.756,10.334-9.502C173.436,371.118,169.561,367.252,163.102,367.252z"></path>
              <path class="st0" d="M213.184,162.562h-24.867c-6.858,11.04-11.099,23.881-11.838,37.674h31.249 C208.085,186.681,209.997,173.908,213.184,162.562z"></path>
              <path class="st0" d="M229.357,129.46c-11.252,3.994-21.357,10.454-29.651,18.748c-1.853,1.853-3.629,3.79-5.27,5.813h21.51 C219.465,144.366,223.978,135.987,229.357,129.46z"></path>
              <path class="st0" d="M213.184,246.452c-3.212-11.354-5.065-24.118-5.413-37.682h-31.292c0.739,13.802,4.98,26.634,11.838,37.682 H213.184z"></path>
            </g>
          </g>
        </svg>
      </a>
      <p class="text-xs md:text-sm font-bold text-[#02335B]">Passport</p>
    </div>

    <!-- Button Icon Visa -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-3 md:p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-12 h-12 md:w-16 md:h-16">
      <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path d="M9.75 13C9.75 11.7574 10.7574 10.75 12 10.75C13.2426 10.75 14.25 11.7574 14.25 13C14.25 14.2426 13.2426 15.25 12 15.25C10.7574 15.25 9.75 14.2426 9.75 13Z" fill="#000000"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M4 18.6943V4.69434C4 5.24662 4.44772 5.69434 5 5.69434H17C18.6569 5.69434 20 7.03748 20 8.69434V18.6943C20 20.3512 18.6569 21.6943 17 21.6943H7C5.34315 21.6943 4 20.3512 4 18.6943ZM8.25 13C8.25 10.9289 9.92893 9.25 12 9.25C14.0711 9.25 15.75 10.9289 15.75 13C15.75 15.0711 14.0711 16.75 12 16.75C9.92893 16.75 8.25 15.0711 8.25 13ZM9.25 19C9.25 18.5858 9.58579 18.25 10 18.25H14C14.4142 18.25 14.75 18.5858 14.75 19C14.75 19.4142 14.4142 19.75 14 19.75H10C9.58579 19.75 9.25 19.4142 9.25 19Z" fill="#000000"></path>
            <path opacity="0.5" d="M18 4.00038V5.86504C17.6872 5.75449 17.3506 5.69434 17 5.69434H5C4.44772 5.69434 4 5.24662 4 4.69434V4.62329C4 4.09027 4.39193 3.63837 4.91959 3.56299L15.7172 2.02048C16.922 1.84835 18 2.78328 18 4.00038Z" fill="#000000"></path>
          </g>
        </svg>
      </a>
      <p class="text-xs md:text-sm font-bold text-[#02335B]">Visa</p>
    </div>

  </div>
</div>

<!-- Paket Tour  -->
<div class="w-full py-5 px-6 md:px-24 mt-12 " data-aos="fade-up" data-aos-easing="ease-in-sine" data-aos-duration="1000">

  <!-- Judul -->
  <div class="flex justify-between items-center mb-5">
    <h1 class="font-bold text-2xl">Paket Tour Buat Kamu!</h1>
    <a href="Paket_Tour" class="text-sm font-bold text-[#02335B] hover:text-[#FFCA10]">Lihat Lainnya ></a>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <a href="#" class="group block bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-transform transform hover:scale-105 duration-300">
      <img src="{{ asset('img/Bali.jpg') }}" alt="Tour Image" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-[#02335B]">Explore Bali 6 Day</h3>
        <p class="text-gray-600 text-sm mt-2">Liburan seru di Bali.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-[#FFCA10] font-bold">Rp 2.499.000</span>
          <span class="text-[#02335B] font-semibold text-sm group-hover:text-[#FFCA10] transition duration-300">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 2 -->
    <a href="#" class="group block bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-transform transform hover:scale-105 duration-300">
      <img src="{{ asset('img/Bromo.jpg') }}" alt="Tour Image" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-[#02335B]">Explore Bromo Midnight 1 Day</h3>
        <p class="text-gray-600 text-sm mt-2">Keindahan gunung dan Bukit dalam satu perjalanan.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-[#FFCA10] font-bold">Rp 575.000</span>
          <span class="text-[#02335B] font-semibold text-sm group-hover:text-[#FFCA10] transition duration-300">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 3 -->
    <a href="#" class="group block bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-transform transform hover:scale-105 duration-300">
      <img src="{{ asset('img/Jogja.jpg') }}" alt="Tour Image" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-[#02335B]">Yogyakarta (5D 4N)</h3>
        <p class="text-gray-600 text-sm mt-2">Nikmati petualangan di Yogyakarta.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-[#FFCA10] font-bold">Rp X.XXX.XXX</span>
          <span class="text-[#02335B] font-semibold text-sm group-hover:text-[#FFCA10] transition duration-300">Lihat Detail ></span>
        </div>
      </div>
    </a>
  </div>
</div>

<!-- Land Tour  -->
<div class="w-full py-5 px-6 md:px-24 mt-12" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="1000">

  <!-- Judul -->
  <div class="flex justify-between items-center mb-5">
    <h1 class="font-bold text-2xl">Land Tour Spesial Buat Kamu!</h1>
    <a href="Paket_Tour" class="text-sm font-bold text-[#02335B] hover:text-[#FFCA10]">Lihat Lainnya ></a>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <a href="#" class="group block bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-transform transform hover:scale-105 duration-300">
      <img src="{{ asset('img/Bali.jpg') }}" alt="Tour Image" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-[#02335B]">Bali</h3>
        <p class="text-gray-600 text-sm mt-2">Nikmati keindahan pantai dan budaya khas Pulau Dewata.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-[#FFCA10] font-bold">Rp 1.122.000</span>
          <span class="text-[#02335B] font-semibold text-sm group-hover:text-[#FFCA10] transition duration-300">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 2 -->
    <a href="#" class="group block bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-transform transform hover:scale-105 duration-300">
      <img src="{{ asset('img/Bromo.jpg') }}" alt="Tour Image" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-[#02335B]">Lombok</h3>
        <p class="text-gray-600 text-sm mt-2">Jelajahi pesona alam dan pantai eksotisnya.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-[#FFCA10] font-bold">Rp 991.000</span>
          <span class="text-[#02335B] font-semibold text-sm group-hover:text-[#FFCA10] transition duration-300">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 3 -->
    <a href="#" class="group block bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition-transform transform hover:scale-105 duration-300">
      <img src="{{ asset('img/Jogja.jpg') }}" alt="Tour Image" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-[#02335B]">Labuan Bajo</h3>
        <p class="text-gray-600 text-sm mt-2">Temukan keajaiban Pulau Komodo dan laut birunya.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-[#FFCA10] font-bold">Rp 2.476.000</span>
          <span class="text-[#02335B] font-semibold text-sm group-hover:text-[#FFCA10] transition duration-300">Lihat Detail ></span>
        </div>
      </div>
    </a>
  </div>
</div>

<!-- Rental mobil -->
<div class="w-full py-5 px-6 md:px-24 mt-12" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="1000">

  <!-- Judul -->
  <div class="flex justify-between items-center mb-5">
    <h1 class="font-bold text-2xl">Sewa Mobil Buat Kamu Keliling Kota!</h1>
    <a href="#" class="text-sm font-bold text-[#02335B] hover:text-[#FFCA10] transition duration-300">Lihat Lainnya ></a>
  </div>

  <!-- Grid Card -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    <!-- Card 1 -->
    <a href="#" class="group block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-transform transform hover:scale-105 duration-300">
      <img src="{{ asset('img/Hiace.jpg') }}" alt="Toyota Hiace Premio" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-white flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10] animate-pulse" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
          </svg>
          Toyota Hiace Premio
        </h3>
        <div class="mt-4 flex justify-between items-center">
          <span class="font-bold text-[#FFCA10]">Rp 1.300.000/hari</span>
          <span class="font-semibold text-white text-sm group-hover:text-[#FFCA10] transition duration-300">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 2 -->
    <a href="#" class="group block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-transform transform hover:scale-105 duration-300">
      <img src="{{ asset('img/Innova.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
          </svg>Innova Reborn </h3>
        <div class="mt-4 flex justify-between items-center">
          <span class="font-bold text-[#FFCA10]">Rp. 900.000/hari</span>
          <span class="font-semibold text-white text-sm group-hover:text-[#FFCA10] transition duration-300">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 3 -->
    <a href="#" class="group block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-2xl transition-transform transform hover:scale-105 duration-300">
      <img src="{{ asset('img/Avanza.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
          </svg> New Avanza</h3>
        <div class="mt-4 flex justify-between items-center">
          <span class="font-bold text-[#FFCA10]">Rp 600.000/hari</span>
          <span class="font-semibold text-white text-sm group-hover:text-[#FFCA10] transition duration-300">Lihat Detail ></span>
        </div>
      </div>
    </a>
  </div>
</div>

<!-- Section -->
<div class="w-full py-5 px-6 md:px-24 mt-12" data-aos="fade-down" data-aos-easing="ease-in-sine" data-aos-duration="1000">
  <!-- Judul -->
  <div class="flex justify-between items-center mb-5">
    <h1 class="font-bold text-2xl">Kenapa Harus Di Bossku Tour & Travel ?</h1>
  </div>

  <!-- Container Card -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <div class="flex items-center bg-white shadow-lg rounded-xl p-5 hover:shadow-xl transition">
      <div class="text-[#02335B] p-1 bg-[#FFCA10] rounded-full w-12 h-12 flex items-center justify-center">
        <svg class="w-9 h-9" viewBox="-1.6 -1.6 19.20 19.20" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16L4.35009 13.3929C2.24773 11.8912 1 9.46667 1 6.88306V3L8 0L15 3V6.88306C15 9.46667 13.7523 11.8912 11.6499 13.3929L8 16ZM12.2071 5.70711L10.7929 4.29289L7 8.08579L5.20711 6.29289L3.79289 7.70711L7 10.9142L12.2071 5.70711Z" fill="#02335B"></path>
          </g>
        </svg>
      </div>
      <div class="ml-4">
        <h3 class="text-lg font-bold text-[#02335B]">Keamanan Terjamin</h3>
        <p class="text-gray-600 text-sm">Kami memastikan perjalanan Anda aman dan nyaman.</p>
      </div>
    </div>

    <!-- Card 2 -->
    <div class="flex items-center bg-white shadow-lg rounded-xl p-5 hover:shadow-xl transition">
      <div class="text-[#02335B] p-1 bg-[#FFCA10] rounded-full w-12 h-12 flex items-center justify-center">
        <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <circle cx="12" cy="12" r="9" stroke="#02335B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle>
            <path d="M14.5 9.08333L14.3563 8.96356C13.9968 8.66403 13.5438 8.5 13.0759 8.5H10.75C9.7835 8.5 9 9.2835 9 10.25V10.25C9 11.2165 9.7835 12 10.75 12H13.25C14.2165 12 15 12.7835 15 13.75V13.75C15 14.7165 14.2165 15.5 13.25 15.5H10.412C9.8913 15.5 9.39114 15.2969 9.01782 14.934L9 14.9167" stroke="#02335B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M12 8L12 7" stroke="#02335B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            <path d="M12 17V16" stroke="#02335B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
          </g>
        </svg>
      </div>
      <div class="ml-4">
        <h3 class="text-lg font-bold text-[#02335B]">Harga Terbaik</h3>
        <p class="text-gray-600 text-sm">Dapatkan harga terbaik untuk perjalanan impian Anda.</p>
      </div>
    </div>

    <!-- Card 3 -->
    <div class="flex items-center bg-white shadow-lg rounded-xl p-5 hover:shadow-xl transition">
      <div class="text-[#02335B] p-1 bg-[#FFCA10] rounded-full w-12 h-12 flex items-center justify-center">
        <svg class="w-7 h-7" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#02335B">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <rect width="16" height="16" id="icon-bound" fill="none"></rect>
            <path d="M8,0C4.688,0,2,2.688,2,6c0,6,6,10,6,10s6-4,6-10C14,2.688,11.312,0,8,0z M8,8C6.344,8,5,6.656,5,5s1.344-3,3-3s3,1.344,3,3 S9.656,8,8,8z"></path>
          </g>
        </svg>
      </div>
      <div class="ml-4">
        <h3 class="text-lg font-bold text-[#02335B]">Destinasi Beragam</h3>
        <p class="text-gray-600 text-sm">Jelajahi berbagai destinasi wisata terbaik.</p>
      </div>
    </div>
  </div>
</div>
@endsection