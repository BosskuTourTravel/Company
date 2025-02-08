@extends('main')

@section('content')

<div class="bg-white w-full h-screen">
  <img src="{{ asset('img/Kintamani.jpg') }}" alt="Pulau Kei, Maluku" class="w-full h-full object-cover w-full h-screen bg-cover bg-center">
</div>

<div class="bg-[#f4f4f4] w-full py-3 px-10 flex flex-col items-center space-y-5 mt-10">
  <h1 class="font-bold text-3xl text-center">Selamat Datang di Travel Agensi Kami!</h1>

  <!-- Button Icon -->
  <div class="flex flex-wrap gap-10 justify-between items-center">

    <!-- Icon Tiket Pesawat -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-16 h-16">
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
      <p class="text-sm font-bold text-[#02335B]">Tiket Pesawat</p>
    </div>

    <!-- Icon Sewa Hiace -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-16 h-16">
        <svg class="w-3xs h-3xs" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2 14.803v6.447c0 .414.336.75.75.75h1.614a.75.75 0 0 0 .74-.627L5.5 19h13l.395 2.373a.75.75 0 0 0 .74.627h1.615a.75.75 0 0 0 .75-.75v-6.447a5.954 5.954 0 0 0-1-3.303l-.78-1.17a1.994 1.994 0 0 1-.178-.33h.994a.75.75 0 0 0 .671-.415l.25-.5A.75.75 0 0 0 21.287 8H19.6l-.31-1.546a2.5 2.5 0 0 0-1.885-1.944C15.943 4.17 14.141 4 12 4c-2.142 0-3.943.17-5.405.51a2.5 2.5 0 0 0-1.886 1.944L4.399 8H2.714a.75.75 0 0 0-.67 1.085l.25.5a.75.75 0 0 0 .67.415h.995a1.999 1.999 0 0 1-.178.33L3 11.5c-.652.978-1 2.127-1 3.303zm15.961-4.799a4 4 0 0 0 .34.997H5.699c.157-.315.271-.65.34-.997l.632-3.157a.5.5 0 0 1 .377-.39C8.346 6.157 10 6 12 6c2 0 3.654.156 4.952.458a.5.5 0 0 1 .378.389l.631 3.157zM5.5 16a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM20 14.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" fill="#000000"></path>
          </g>
        </svg>
      </a>
      <p class="text-sm font-bold text-[#02335B]">Sewa Mobil</p>
    </div>

    <!-- Button Paket Tour -->
    <div class="flex flex-col items-center space-y-3">
      <a href="Paket_Tour" class="bg-[#FFCA10] text-[#02335B] font-bold p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-16 h-16">
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
      <p class="text-sm font-bold text-[#02335B]">Paket Tour</p>
    </div>

    <!-- Button Icon Passport -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-16 h-16">
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
      <p class="text-sm font-bold text-[#02335B]">Passport</p>
    </div>

    <!-- Button Icon Cruise -->
    <div class="flex flex-col items-center space-y-3">
      <a href="#" class="bg-[#FFCA10] text-[#02335B] font-bold p-4 rounded-xl hover:bg-white hover:text-[#02335B] transition duration-300 text-sm md:text-base flex items-center justify-center w-16 h-16">
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
      <p class="text-sm font-bold text-[#02335B]">Cruise</p>
    </div>
  </div>
</div>

<div class="w-full py-5 px-6 md:px-24 mt-12">

  <!-- Judul -->
  <div class="flex justify-between items-center mb-5">
    <h1 class="font-bold text-2xl">Paket Tour Buat Kamu!</h1>
    <a href="Paket_Tour" class="text-sm font-bold text-[#02335B] hover:text-[#FFCA10]">Lihat Lainnya ></a>
  </div>

  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <a href="#" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
      <img src="{{ asset('img/Bali.jpg') }}" alt="Tour Image" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-[#02335B]">Bali Adventure (5D 4N)</h3>
        <p class="text-gray-600 text-sm mt-2">Liburan seru di Bali dengan paket lengkap.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-[#FFCA10] font-bold">Rp X.XXX.XXX</span>
          <span class="text-[#02335B] font-semibold text-sm">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 2 -->
    <a href="#" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
      <img src="{{ asset('img/Bromo.jpg') }}" alt="Tour Image" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-[#02335B]">Explore Bromo Midnight 1 Day</h3>
        <p class="text-gray-600 text-sm mt-2">Keindahan gunung dan Bukit dalam satu perjalanan.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-[#FFCA10] font-bold">Rp X.XXX.XXX</span>
          <span class="text-[#02335B] font-semibold text-sm">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 3 -->
    <a href="#" class="block bg-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
      <img src="{{ asset('img/Jogja.jpg') }}" alt="Tour Image" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-[#02335B]">Yogyakarta (5D 4N)</h3>
        <p class="text-gray-600 text-sm mt-2">Nikmati petualangan di Yogyakarta.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="text-[#FFCA10] font-bold">Rp X.XXX.XXX</span>
          <span class="text-[#02335B] font-semibold text-sm">Lihat Detail ></span>
        </div>
      </div>
    </a>
  </div>
</div>

<div class="w-full py-5 px-6 md:px-24 mt-12">

  <!-- Judul -->
  <div class="flex justify-between items-center mb-5">
    <h1 class="font-bold text-2xl">Sewa Mobil Buat Kamu Keliling Kota!</h1>
    <a href="#" class="text-sm font-bold text-[#02335B] hover:text-[#FFCA10]">Lihat Lainnya ></a>
  </div>

  <!-- Grid Card -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">

    <!-- Card 1 -->
    <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
      <img src="{{ asset('img/Fortuner.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
          </svg> Toyota Fortuner</h3>
        <p class="text-sm mt-2">Tangguh di Segala Medan, Elegan di Segala Waktu.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="font-bold text-[#FFCA10]">Rp XXX.XXX/hari</span>
          <span class="font-semibold text-white text-sm">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 2 -->
    <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
      <img src="{{ asset('img/Innova.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
          </svg> Toyota Innova </h3>
        <p class="text-sm mt-2">Kenyamanan Keluarga, Perjalanan Tanpa Batas</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="font-bold text-[#FFCA10]">Rp XXX.XXX/hari</span>
          <span class="font-semibold text-white text-sm">Lihat Detail ></span>
        </div>
      </div>
    </a>

    <!-- Card 3 -->
    <a href="#" class="block bg-gradient-to-r from-[#02335B] to-[#045A9E] text-white shadow-lg rounded-xl overflow-hidden hover:shadow-xl transition">
      <img src="{{ asset('img/Hiace.jpg') }}" alt="Mobil 2" class="w-full h-40 object-cover">
      <div class="p-5">
        <h3 class="text-lg font-bold text-white flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#FFCA10]" viewBox="0 0 20 20" fill="currentColor">
            <path d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm8-5a1 1 0 110 2 1 1 0 010-2zm-2 8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 100-2h4a1 1 0 100-2H8a1 1 0 000 2H6a1 1 0 100 2h2a1 1 0 000 2H6a1 1 0 100 2h8a1 1 0 100-2h-4z" />
          </svg> Toyota Hiace</h3>
        <p class="text-sm mt-2">Lebih Banyak Ruang, Lebih Banyak Petualangan.</p>
        <div class="mt-4 flex justify-between items-center">
          <span class="font-bold text-[#FFCA10]">Rp XXX.XXX/hari</span>
          <span class="font-semibold text-white text-sm">Lihat Detail ></span>
        </div>
      </div>
    </a>

  </div>
</div>

<div class="w-full py-5 px-6 md:px-24 mt-12">
  <!-- Judul -->
  <div class="flex justify-between items-center mb-5">
    <h1 class="font-bold text-2xl">Kenapa Harus Di Bossku Tour & Travel ?</h1>
  </div>

  <!-- Container Card -->
  <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
    <!-- Card 1 -->
    <div class="flex items-center bg-white shadow-lg rounded-xl p-5 hover:shadow-xl transition">
      <div class="text-[#02335B] p-1 bg-[#FFCA10] rounded-full w-12 h-12 flex items-center justify-center">
      <svg class="w-9 h-9" viewBox="-1.6 -1.6 19.20 19.20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M8 16L4.35009 13.3929C2.24773 11.8912 1 9.46667 1 6.88306V3L8 0L15 3V6.88306C15 9.46667 13.7523 11.8912 11.6499 13.3929L8 16ZM12.2071 5.70711L10.7929 4.29289L7 8.08579L5.20711 6.29289L3.79289 7.70711L7 10.9142L12.2071 5.70711Z" fill="#02335B"></path> </g></svg>
      </div>
      <div class="ml-4">
        <h3 class="text-lg font-bold text-[#02335B]">Keamanan Terjamin</h3>
        <p class="text-gray-600 text-sm">Kami memastikan perjalanan Anda aman dan nyaman.</p>
      </div>
    </div>
    
    <!-- Card 2 -->
    <div class="flex items-center bg-white shadow-lg rounded-xl p-5 hover:shadow-xl transition">
      <div class="text-[#02335B] p-1 bg-[#FFCA10] rounded-full w-12 h-12 flex items-center justify-center">
      <svg class="w-8 h-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle cx="12" cy="12" r="9" stroke="#02335B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></circle> <path d="M14.5 9.08333L14.3563 8.96356C13.9968 8.66403 13.5438 8.5 13.0759 8.5H10.75C9.7835 8.5 9 9.2835 9 10.25V10.25C9 11.2165 9.7835 12 10.75 12H13.25C14.2165 12 15 12.7835 15 13.75V13.75C15 14.7165 14.2165 15.5 13.25 15.5H10.412C9.8913 15.5 9.39114 15.2969 9.01782 14.934L9 14.9167" stroke="#02335B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 8L12 7" stroke="#02335B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> <path d="M12 17V16" stroke="#02335B" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
      </div>
      <div class="ml-4">
        <h3 class="text-lg font-bold text-[#02335B]">Harga Terbaik</h3>
        <p class="text-gray-600 text-sm">Dapatkan harga terbaik untuk perjalanan impian Anda.</p>
      </div>
    </div>
    
    <!-- Card 3 -->
    <div class="flex items-center bg-white shadow-lg rounded-xl p-5 hover:shadow-xl transition">
    <div class="text-[#02335B] p-1 bg-[#FFCA10] rounded-full w-12 h-12 flex items-center justify-center">
      <svg class="w-7 h-7" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#02335B"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <rect width="16" height="16" id="icon-bound" fill="none"></rect> <path d="M8,0C4.688,0,2,2.688,2,6c0,6,6,10,6,10s6-4,6-10C14,2.688,11.312,0,8,0z M8,8C6.344,8,5,6.656,5,5s1.344-3,3-3s3,1.344,3,3 S9.656,8,8,8z"></path> </g></svg>
      </div>
      <div class="ml-4">
        <h3 class="text-lg font-bold text-[#02335B]">Destinasi Beragam</h3>
        <p class="text-gray-600 text-sm">Jelajahi berbagai destinasi wisata terbaik.</p>
      </div>
    </div>
  </div>
</div>
@endsection