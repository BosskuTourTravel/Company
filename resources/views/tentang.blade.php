@extends('main')

@section('content')

<div class="relative w-full h-screen">
  <!-- Gambar -->
  <img src="{{ asset('img/papuabarat.jpg') }}" alt="West Papua" class="w-full h-full object-cover">

  <!-- Overlay Gelap -->
  <div class="absolute inset-0 bg-black/70"></div>

  <!-- Teks di Atas Gambar -->
  <div class="absolute inset-0 flex flex-col items-center justify-center text-white text-center px-5">
    <h1 class="text-4xl font-bold">Tentang Bossku Tour & Travel</h1>
  </div>
</div>

<div class="flex flex-col md:flex-row gap-8 w-full py-5 px-6 md:px-24 mt-12">
  <!-- Article (Lebih Lebar) -->
  <article class="text-[#02335B]  leading-loose mb-3 md:w-2/3">
    <p class="font-medium text-base mb-3 text-balance text-justify">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacus enim, pellentesque id nisi tempus, rutrum efficitur quam. Proin at ante sodales, consectetur felis eu, posuere est. Praesent eu lorem non ex posuere tincidunt at et risus. Pellentesque blandit iaculis ornare. Aliquam ac commodo nulla. Donec nec laoreet felis. Donec at aliquam mi, non malesuada nibh. Donec posuere purus ac ligula feugiat, et elementum ex tempus. Donec mattis facilisis arcu eget porttitor. Quisque viverra erat sed luctus dapibus. In a consequat risus. Phasellus sed facilisis sapien. Sed vulputate nibh velit, eget interdum lectus gravida fermentum.
    </p>

    <p class="font-medium text-base mb-3 text-balance text-justify">
      Vivamus quis neque rhoncus, tempus dui a, gravida diam. In eu tristique tortor. Pellentesque vitae arcu efficitur, condimentum libero sagittis, gravida quam. Nam vulputate libero ex, vitae iaculis orci tincidunt et. Pellentesque eget dolor nec ipsum malesuada fermentum quis ac lacus. Quisque vel ante vitae leo fermentum iaculis sit amet quis dui. Sed vitae magna nec turpis scelerisque facilisis. Cras sollicitudin lorem mollis purus vulputate, in pellentesque odio feugiat. Ut nec lectus risus. Praesent facilisis magna tellus, quis dapibus urna eleifend vitae. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam eget magna auctor, sollicitudin justo quis, egestas mi.
    </p>

    <p class="font-medium text-base mb-3 text-balance text-justify">
      Nam ultricies tempor purus tempus aliquet. Sed dapibus odio vel consectetur tempus. Quisque pulvinar egestas turpis a porttitor. Aenean consectetur eros posuere, sollicitudin quam maximus, tincidunt quam. Mauris semper elementum massa et elementum. Nullam rutrum leo feugiat viverra lobortis. Praesent faucibus est finibus ex ultrices congue. Donec egestas eros lectus, ac aliquet augue vulputate vitae. Aenean at quam vel quam tempus eleifend sed et tellus. Pellentesque convallis, enim nec condimentum malesuada, est libero tincidunt magna, id sollicitudin magna sem et neque. Nam sit amet laoreet velit, quis tincidunt turpis. Maecenas neque diam, condimentum sed diam ut, rutrum maximus dolor. Donec tincidunt purus neque, tempor fermentum magna finibus dignissim. Ut eleifend sed sem quis suscipit. Morbi vestibulum risus at erat sagittis, at lobortis nunc mattis.
    </p>
  </article>

  <!-- Wrapper untuk Card -->
  <div class="flex flex-col gap-4 md:w-1/3">
    <!-- Card 1 -->
    <div class="bg-white shadow-lg rounded-xl py-3 px-5 hover:shadow-xl transition">
      <a href="https://contoh.com" class="block">
        <div class="bg-white cursor-pointer">
          <div class="flex justify-between">
            <span class="text-lg/7 font-semibold text-[#02335B]  inline-block transition-transform duration-300 hover:translate-x-2 ">Hubungi Kami</span>
            <span class="text-lg/7 font-semibold text-[#02335B] ">></span>
          </div>
        </div>
      </a>

    </div>

    <!-- Card 2 -->
    <div class="bg-white shadow-lg rounded-xl py-3 px-5 hover:shadow-xl transition">
      <a href="https://contoh.com" class="block">
        <div class="bg-white cursor-pointer">
          <div class="flex justify-between">
            <span class="text-lg/8 font-semibold text-[#02335B] inline-flex items-center gap-2 transition-transform duration-300 hover:translate-x-2">
              <svg class="w-5 h-5" fill="#02335B" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 512">
                <path fill-rule="nonzero" d="M170.663 256.157c-.083-47.121 38.055-85.4 85.167-85.482 47.121-.092 85.407 38.029 85.499 85.159.091 47.13-38.047 85.4-85.176 85.492-47.112.09-85.399-38.039-85.49-85.169zm-46.108.092c.141 72.602 59.106 131.327 131.69 131.185 72.592-.14 131.35-59.089 131.209-131.691-.141-72.577-59.114-131.336-131.715-131.194-72.585.141-131.325 59.114-131.184 131.7zm237.104-137.092c.033 16.954 13.817 30.682 30.772 30.649 16.961-.034 30.689-13.811 30.664-30.765-.033-16.954-13.818-30.69-30.78-30.656-16.962.033-30.689 13.818-30.656 30.772zm-208.696 345.4c-24.958-1.086-38.511-5.234-47.543-8.709-11.961-4.628-20.496-10.177-29.479-19.093-8.966-8.951-14.532-17.461-19.202-29.397-3.508-9.033-7.73-22.569-8.9-47.527-1.269-26.983-1.559-35.078-1.683-103.433-.133-68.338.116-76.434 1.294-103.441 1.069-24.941 5.242-38.512 8.709-47.536 4.628-11.977 10.161-20.496 19.094-29.478 8.949-8.983 17.459-14.532 29.403-19.202 9.025-3.526 22.561-7.715 47.511-8.9 26.998-1.278 35.085-1.551 103.423-1.684 68.353-.133 76.448.108 103.456 1.294 24.94 1.086 38.51 5.217 47.527 8.709 11.968 4.628 20.503 10.145 29.478 19.094 8.974 8.95 14.54 17.443 19.21 29.413 3.524 8.999 7.714 22.552 8.892 47.494 1.285 26.998 1.576 35.094 1.7 103.432.132 68.355-.117 76.451-1.302 103.442-1.087 24.957-5.226 38.52-8.709 47.56-4.629 11.953-10.161 20.488-19.103 29.471-8.941 8.949-17.451 14.531-29.403 19.201-9.009 3.517-22.561 7.714-47.494 8.9-26.998 1.269-35.086 1.56-103.448 1.684-68.338.133-76.424-.124-103.431-1.294zM149.977 1.773c-27.239 1.286-45.843 5.648-62.101 12.019-16.829 6.561-31.095 15.353-45.286 29.603C28.381 57.653 19.655 71.944 13.144 88.79c-6.303 16.299-10.575 34.912-11.778 62.168C.172 178.264-.102 186.973.031 256.489c.133 69.508.439 78.234 1.741 105.548 1.302 27.231 5.649 45.827 12.019 62.092 6.569 16.83 15.353 31.089 29.611 45.289 14.25 14.2 28.55 22.918 45.404 29.438 16.282 6.294 34.902 10.583 62.15 11.777 27.305 1.203 36.022 1.468 105.521 1.336 69.532-.133 78.25-.44 105.555-1.734 27.239-1.302 45.826-5.664 62.1-12.019 16.829-6.585 31.095-15.353 45.288-29.611 14.191-14.251 22.917-28.55 29.428-45.404 6.304-16.282 10.592-34.904 11.777-62.134 1.195-27.323 1.478-36.049 1.344-105.557-.133-69.516-.447-78.225-1.741-105.522-1.294-27.256-5.657-45.844-12.019-62.118-6.577-16.829-15.352-31.08-29.602-45.288-14.25-14.192-28.55-22.935-45.404-29.429-16.29-6.304-34.903-10.6-62.15-11.778C333.747.164 325.03-.101 255.506.031c-69.507.133-78.224.431-105.529 1.742z" />
              </svg>
              Instagram
            </span>

            <span class="text-lg/8 font-semibold text-[#02335B] ">></span>
          </div>
        </div>
      </a>

      <a href="https://contoh.com" class="block">
        <div class="bg-white cursor-pointer">
          <div class="flex justify-between">
            <span class="text-lg/8 font-semibold text-[#02335B] inline-flex items-center gap-2 transition-transform duration-300 hover:translate-x-2"><svg class="w-5 h-5" fill="#02335B" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 510.125">
                <path fill-rule="nonzero" d="M512 256C512 114.615 397.385 0 256 0S0 114.615 0 256c0 120.059 82.652 220.797 194.157 248.461V334.229h-52.79V256h52.79v-33.709c0-87.134 39.432-127.521 124.977-127.521 16.218 0 44.202 3.18 55.651 6.36v70.916c-6.042-.635-16.537-.954-29.575-.954-41.977 0-58.196 15.901-58.196 57.241V256h83.619l-14.365 78.229h-69.254v175.896C413.771 494.815 512 386.885 512 256z" />
              </svg>Facebook</span>
            <span class="text-lg/8 font-semibold text-[#02335B] ">></span>
          </div>
        </div>
      </a>

      <a href="https://contoh.com" class="block">
        <div class="bg-white cursor-pointer">
          <div class="flex justify-between">
            <span class="text-lg/8 font-semibold text-[#02335B] inline-flex items-center gap-2 transition-transform duration-300 hover:translate-x-2"><svg class="w-5 h-5" fill="#02335B" xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 449.45 515.38">
                <path fill-rule="nonzero" d="M382.31 103.3c-27.76-18.1-47.79-47.07-54.04-80.82-1.35-7.29-2.1-14.8-2.1-22.48h-88.6l-.15 355.09c-1.48 39.77-34.21 71.68-74.33 71.68-12.47 0-24.21-3.11-34.55-8.56-23.71-12.47-39.94-37.32-39.94-65.91 0-41.07 33.42-74.49 74.48-74.49 7.67 0 15.02 1.27 21.97 3.44V190.8c-7.2-.99-14.51-1.59-21.97-1.59C73.16 189.21 0 262.36 0 352.3c0 55.17 27.56 104 69.63 133.52 26.48 18.61 58.71 29.56 93.46 29.56 89.93 0 163.08-73.16 163.08-163.08V172.23c34.75 24.94 77.33 39.64 123.28 39.64v-88.61c-24.75 0-47.8-7.35-67.14-19.96z" />
              </svg>Tiktok</span>
            <span class="text-lg/8 font-semibold text-[#02335B] ">></span>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>




@endsection