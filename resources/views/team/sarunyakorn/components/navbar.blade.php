<nav x-data="{ mobileMenuOpen: false }" class="fixed top-8 left-0 right-0 z-50 px-4 md:px-0">
    <div class="max-w-6xl mx-auto">
        <div class="bg-black border border-white/5 rounded-full py-2 px-8 flex items-center justify-between shadow-2xl relative">
            
            <div class="flex-shrink-0">
                <a href="#" class="text-white font-bold text-lg tracking-wide hover:opacity-80 transition-opacity">
                    Sarunyakon
                </a>
            </div>

            <div class="hidden md:flex items-center space-x-12 absolute left-1/2 transform -translate-x-1/2">
                <a href="/sarunyakorn/#home" class="text-gray-300 hover:text-white text-sm transition-colors">Home</a>
                <a href="/sarunyakorn/#about" class="text-gray-300 hover:text-white text-sm transition-colors">About</a>
                <a href="/sarunyakorn/#project" class="text-gray-300 hover:text-white text-sm transition-colors">Project</a>
                <a href="/sarunyakorn/#certificate" class="text-gray-300 hover:text-white text-sm transition-colors">Certificate</a>
            </div>

            <div class="flex items-center space-x-4">
                <a href="/" class="hidden md:block bg-[#1A1A1A] hover:bg-[#2A2A2A] text-white px-6 py-2 rounded-full text-sm font-medium transition-all border border-white/10">
                    KrachabMitr
                </a>

                <button @click="mobileMenuOpen = !mobileMenuOpen" class="md:hidden text-white p-2 focus:outline-none">
                    <svg x-show="!mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                    <svg x-show="mobileMenuOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" style="display: none;">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div x-show="mobileMenuOpen" 
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 -translate-y-4"
             x-transition:enter-end="opacity-100 translate-y-0"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 translate-y-0"
             x-transition:leave-end="opacity-0 -translate-y-4"
             class="md:hidden mt-4 bg-black/95 backdrop-blur-lg border border-white/10 rounded-3xl overflow-hidden shadow-2xl"
             style="display: none;">
            <div class="flex flex-col p-6 space-y-4 text-center">
                <a href="#home" @click="mobileMenuOpen = false" class="text-gray-300 hover:text-white py-2 border-b border-white/5">Home</a>
                <a href="#about" @click="mobileMenuOpen = false" class="text-gray-300 hover:text-white py-2 border-b border-white/5">About</a>
                <a href="#project" @click="mobileMenuOpen = false" class="text-gray-300 hover:text-white py-2 border-b border-white/5">Project</a>
                <a href="#certificate" @click="mobileMenuOpen = false" class="text-gray-300 hover:text-white py-2 border-b border-white/5">Certificate</a>
                <a href="#" @click="mobileMenuOpen = false" class="bg-white text-black py-3 rounded-full font-bold">KrachabMitr</a>
            </div>
        </div>
    </div>
</nav>