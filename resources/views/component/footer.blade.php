<footer class="relative bg-white pt-24 pb-12 font-noto overflow-hidden border-t border-gray-100">
    <div class="absolute bottom-0 left-1/4 w-96 h-96 bg-blue-50 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="flex flex-wrap lg:justify-between items-start gap-12 lg:gap-0">

            <div class="w-full lg:w-4/12 px-4">
                <div class="flex items-center gap-3 mb-6">
                    <img src="assets/img/kcmlogo.png" class="h-10 w-10 object-contain" alt="LOGO">
                    <span class="text-2xl font-black text-slate-900 tracking-tighter">KRACHAB<span
                            class="text-[#3E4D8A]">MITR.</span></span>
                </div>
                <h4 class="text-xl font-bold text-slate-800 mb-2">ช่องทางติดต่อเพิ่มเติม</h4>
                <p class="text-slate-500 text-sm mb-8 font-anuphan">
                    หากติดต่อผ่านโซเชียลมีเดีย ทีมงานจะติดต่อกลับหาคุณภายใน 1-2 วันทำการ
                </p>

                <div class="flex gap-3">
                    <a href="https://x.com" target="_blank"
                        class="w-11 h-11 bg-slate-50 text-slate-600 rounded-2xl flex items-center justify-center hover:bg-slate-900 hover:text-white transition-all shadow-sm">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://web.facebook.com" target="_blank"
                        class="w-11 h-11 bg-slate-50 text-slate-600 rounded-2xl flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all shadow-sm">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="https://kcm.online" target="_blank"
                        class="w-11 h-11 bg-slate-50 text-slate-600 rounded-2xl flex items-center justify-center hover:bg-[#3E4D8A] hover:text-white transition-all shadow-sm">
                        <i class="fas fa-globe"></i>
                    </a>
                    <a href="https://github.com" target="_blank"
                        class="w-11 h-11 bg-slate-50 text-slate-600 rounded-2xl flex items-center justify-center hover:bg-black hover:text-white transition-all shadow-sm">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
            </div>

            <div class="w-full lg:w-7/12 px-4">
                <div class="flex flex-wrap items-top">

                    <div class="w-full sm:w-6/12 md:w-4/12 px-4 ml-auto mb-8 sm:mb-0">
                        <span
                            class="block uppercase text-slate-900 text-xs font-black tracking-[0.2em] mb-6">ลิงก์ทั้งหมด</span>
                        <ul class="space-y-4">
                            <li><a class="text-slate-500 hover:text-[#3E4D8A] font-medium text-sm transition-colors"
                                    href="#home">หน้าหลัก</a></li>
                            <li><a class="text-slate-500 hover:text-[#3E4D8A] font-medium text-sm transition-colors"
                                    href="#information">เกี่ยวกับ</a></li>
                            <li><a class="text-slate-500 hover:text-[#3E4D8A] font-medium text-sm transition-colors"
                                    href="#service">เซอร์วิสต์</a></li>
                            <li><a class="text-slate-500 hover:text-[#3E4D8A] font-medium text-sm transition-colors"
                                    href="#contact">ติดต่อ</a></li>
                        </ul>
                    </div>

                    <div class="w-full sm:w-6/12 md:w-5/12 px-4">
                        <span
                            class="block uppercase text-slate-900 text-xs font-black tracking-[0.2em] mb-6">ลิงก์ข้อมูลอื่นๆ</span>
                        <ul class="space-y-4">
                            <li>
                                <a href="{{ route('terms') }}"
                                    class="text-slate-500 hover:text-[#3E4D8A] font-medium text-sm transition-colors">
                                    เงื่อนไขการใช้งาน
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('privacy') }}"
                                    class="text-slate-500 hover:text-[#3E4D8A] font-medium text-sm transition-colors">
                                    นโยบายด้านส่วนตัว
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-10 border-gray-100" />

        <div class="flex flex-col md:flex-row items-center justify-between gap-6 font-anuphan">
            <div class="text-sm text-slate-400 font-medium">
                Copyright © 2026 <span class="text-slate-900">KRACHABMITR</span>. All rights reserved.
            </div>
            <div class="flex items-center gap-2 text-sm text-slate-400 font-medium">
                Powered by
                <a href="https://nahost.in.th"
                    class="px-3 py-1 bg-gray-50 border border-gray-100 rounded-lg text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-fuchsia-600 hover:scale-105 transition-transform font-bold">
                    NaHost
                </a>
            </div>
        </div>
    </div>

</footer>
