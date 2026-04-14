<footer
    class="relative w-full bg-[#0B1120] pt-20 pb-10 px-6 md:px-12 lg:px-24 border-t border-white/5 font-noto overflow-hidden">

    <div
        class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full h-[300px] bg-indigo-500/5 blur-[120px] pointer-events-none">
    </div>

    <div class="max-w-7xl mx-auto relative z-10">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">

            <div class="space-y-6 lg:col-span-1">
                <div class="flex items-center gap-3">

                    <span class="text-white font-bold text-xl tracking-tight">Sarunyakorn<span
                            class="text-[#4C5C8A]">.</span></span>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    การตัดสินใจในปัจจุบันย่อมส่งผลต่ออนาคตและการใช้ชีวิตของตัวเรา
                </p>
                <div class="flex gap-4">
                    <a href="https://github.com/Peak4567" target="_blank"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:text-white hover:bg-[#3E4D8A] transition-all duration-300">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://www.facebook.com/peak4567"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:text-white hover:bg-[#3E4D8A] transition-all duration-300">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://www.tiktok.com/@_peak4567_"
                        class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-gray-400 hover:text-white hover:bg-[#3E4D8A] transition-all duration-300">
                        <i class="fab fa-tiktok"></i>
                    </a>
                </div>
            </div>

            <div class="space-y-6">
                <h4 class="text-white font-bold text-base uppercase tracking-widest">Navigation</h4>
                <ul class="space-y-4">
                    <li><a href="#home" class="text-gray-400 hover:text-[#4C5C8A] transition-colors text-sm">Home</a>
                    </li>
                    <li><a href="#information"
                            class="text-gray-400 hover:text-[#4C5C8A] transition-colors text-sm">About</a></li>
                    <li><a href="#project"
                            class="text-gray-400 hover:text-[#4C5C8A] transition-colors text-sm">Project</a></li>
                    <li><a href="#certificate"
                            class="text-gray-400 hover:text-[#4C5C8A] transition-colors text-sm">Certificate</a></li>
                </ul>
            </div>

            <div class="space-y-6">
                <h4 class="text-white font-bold text-base uppercase tracking-widest">Contact Info</h4>
                <ul class="space-y-4">
                    <li class="flex items-center gap-3 text-sm text-gray-400">
                        <i class="fas fa-envelope text-[#3E4D8A]"></i>
                        workingpeak2025@gmail.com
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-400">
                        <i class="fas fa-phone-alt text-[#3E4D8A]"></i>
                        086-034-6795
                    </li>
                    <li class="flex items-center gap-3 text-sm text-gray-400">
                        <i class="fas fa-map-marker-alt text-[#3E4D8A]"></i>
                        Nonthaburi, Thailand
                    </li>
                </ul>
            </div>

            <div class="space-y-6">
                <h4 class="text-white font-bold text-base uppercase tracking-widest">Work With Me</h4>
                <div class="p-5 bg-white/5 border border-white/5 rounded-lg">
                    <p class="text-gray-400 text-xs italic leading-relaxed">
                        "สนใจติดต่องาน"
                    </p>
                    <a href="#contact"
                        class="inline-block mt-4 text-[#4C5C8A] text-xs font-bold uppercase hover:text-white transition-colors">
                        ติดต่อตรงนี้! <i class="fas fa-arrow-right ml-1"></i>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4 text-center">
            <p class="text-gray-500 text-xs">
                &copy; <span id="year"></span> <span class="text-gray-400 font-medium">Sarunyakorn
                    Thepsunthorn</span>. All Rights Reserved.
            </p>
            <div class="flex gap-6">
                <a href="{{ route('sarunyakorn.privacy') }}" class="text-gray-500 hover:text-white text-[11px] transition-colors">
                    Privacy Policy
                </a>

                <a href="{{ route('sarunyakorn.terms') }}" class="text-gray-500 hover:text-white text-[11px] transition-colors">
                    Terms of Service
                </a>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</footer>
