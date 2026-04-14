<nav class="sticky top-0 z-[100] w-full bg-white/80 backdrop-blur-md border-b border-gray-200/50 transition-all duration-300 font-anuphan">
  <div class="max-w-screen-xl mx-auto flex flex-wrap items-center justify-between p-4">
    
    <a href="/" class="flex items-center space-x-3 transition-all duration-300 hover:scale-105 active:scale-95 group">
      <span class="self-center text-2xl font-black whitespace-nowrap text-gray-800 tracking-tighter">
        KRACHAB<span class="text-[#3E4D8A]">MITR</span>
      </span>
    </a>

    <div class="flex items-center md:hidden">
      <button id="hamburger-btn" type="button" class="inline-flex items-center p-2.5 w-11 h-11 justify-center text-gray-600 bg-gray-50 rounded-xl hover:bg-gray-100 focus:outline-none transition-all duration-200 active:scale-90 shadow-sm border border-gray-100">
        <span class="sr-only">Open main menu</span>
        <i id="burger-icon" class="fa-solid fa-bars-staggered text-xl"></i>
      </button>
    </div>

    <div class="hidden w-full md:block md:w-auto transition-all duration-300 ease-in-out" id="navbar-menu">
      <ul class="flex flex-col p-4 md:p-1 mt-4 font-bold border border-gray-100 rounded-xl bg-white/90 md:flex-row md:space-x-1 md:mt-0 md:border-0 md:bg-transparent backdrop-blur-sm md:backdrop-blur-none shadow-xl md:shadow-none">
        <li>
          <a href="/#home" class="flex items-center gap-2 py-3 px-6 text-gray-500 rounded-xl hover:text-[#3E4D8A] hover:bg-blue-50/50 transition-all duration-300">
            <i class="fa-light fa-house text-lg"></i>
            หน้าหลัก
          </a>
        </li>
        <li>
          <a href="/#information" class="flex items-center gap-2 py-3 px-6 text-gray-500 rounded-xl hover:text-[#3E4D8A] hover:bg-blue-50/50 transition-all duration-300">
            <i class="fa-light fa-circle-info text-lg"></i>
            เกี่ยวกับ
          </a>
        </li>
        <li>
          <a href="/#service" class="flex items-center gap-2 py-3 px-6 text-gray-500 rounded-xl hover:text-[#3E4D8A] hover:bg-blue-50/50 transition-all duration-300">
            <i class="fa-light fa-sparkles text-lg"></i>
            เซอร์วิส
          </a>
        </li>
        <li>
          <a href="/#contact" class="flex items-center gap-2 py-3 px-10 bg-[#3E4D8A] text-white rounded-xl hover:bg-[#2d3a6b] shadow-lg shadow-blue-900/10 transition-all duration-300 md:ml-4 text-center">
            <i class="fa-light fa-phone text-lg"></i>
            ติดต่อ
          </a>
        </li>
      </ul>
    </div>

  </div>
</nav>

<script src="{{asset('assets/js/nav.js')}}"></script>