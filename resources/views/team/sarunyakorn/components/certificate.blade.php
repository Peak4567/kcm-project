<section id="certificate"
    class="relative w-full py-24 px-4 md:px-8 lg:px-12 flex flex-col items-center z-20 bg-[#0B1120] font-noto overflow-hidden">

    <style>
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>

    <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#3E4D8A]/10 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="relative w-full flex flex-col items-center mb-16 z-20">
        <span
            class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[4rem] sm:text-[6rem] md:text-[8rem] font-black text-[#3E4D8A]/10 select-none whitespace-nowrap z-0 tracking-tighter uppercase">
            ACHIEVEMENTS
        </span>
        <h2 class="relative text-3xl md:text-5xl font-bold text-white z-10 tracking-wide mt-4">
            My <span class="text-[#4C5C8A]">Certificates</span>
        </h2>
    </div>

    <div class="w-full max-w-full px-4 flex flex-col md:flex-row items-center justify-between gap-6 mb-12 z-20">
        <div class="relative w-full md:w-[400px] group">
            <i class="fas fa-search absolute left-5 top-1/2 -translate-y-1/2 text-gray-500"></i>
            <input type="text" id="search-input" placeholder="ค้นหาเกียรติบัตร..."
                class="w-full bg-[#0A101D] text-white pl-12 pr-5 py-4 rounded-lg outline-none border border-white/5 focus:border-[#3E4D8A] placeholder-gray-500 text-sm transition-all">
        </div>

        <div class="flex items-center gap-2 bg-[#0A101D] p-1.5 rounded-lg border border-white/5">
            <button id="btn-grid" class="p-3 bg-[#3E4D8A] rounded-lg text-white transition-all cursor-pointer shadow-lg">
                <i class="fas fa-th-large"></i>
            </button>
            <button id="btn-carousel" class="p-3 text-gray-500 hover:text-white transition-all cursor-pointer rounded-lg">
                <i class="fas fa-columns"></i>
            </button>
        </div>
    </div>

    <div id="cert-container"
        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-5 w-full max-w-full px-4 z-20 transition-all duration-500 pb-8">

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Agri Future.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">นวัตกรรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 group-hover:text-[#4C5C8A] transition-colors line-clamp-1">
                    Young Aguir Future 2025</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้รับรางวัล รองชนะเลิศอันดับ 2
                    ระดับประเทศ ในโครงการประกวดนวัตกรรมและเทคโนโลยีภาคการเกษตรฯ</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/ศิลปหัตถกรรมนักเรียนครั้งที่ 73.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">แข่งขัน</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">ศิลปหัตถกรรมครั้งที่ 73</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">แข่ง Web TextEditor ได้รางวัลเหรียญทอง รองชนะเลิศอันดับ 1</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/การแข่งขันทักษะสื่อประชา tiktok.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">แข่งขัน</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">การแข่งขันทักษะสื่อประชา Tiktok</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">เหรียญทอง ชนะเลิศ ในการแข่ง ณ โรงเรียนชลประทานวิทยา</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/นิเทศ.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">แข่งขัน</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">Hight School Influencer Stars</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">รางวัล Rising Star ณ มหาลัยธุรกิจบัณฑิตย์</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/AI Hackathon for Green Sustainability.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">อบรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">AI Hackathon</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เข้าร่วม อบรมเป็นเวลา 12 ชั่วโมง</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/volunteer-steam-1.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">จิตอาสา</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 group-hover:text-[#4C5C8A] transition-colors line-clamp-1">
                    จิตอาสา Thailand Steam Project 2025</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้ทําจิตอาสาช่วยถ่ายวิดีโอในงาน</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/อบรม SmartFarm.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">อบรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">อบรม SmartFarm</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เข้ารวมอบรบเป็นเวลา 6 ชั่วโมง</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/การตลาดมืออาชีพ.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">อบรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">การตลาดมืออาชีพ | FutureSkill</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เรียนรู้ออนไลน์ผ่านระบบ เรียน FutureSkill </p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Markpruet.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">โปรแกรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">เขียนโปรแกรมพื้นฐาน Python</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เรียนรู้ผ่านระบบออนไลน์เป็นเวลา 20 ชั่วโมง</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Webpage_TextEditor31.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">แข่งขัน</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">ศิลปหัตถกรรมครั้งที่ 71</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">แข่ง Web TextEditor ได้รางวัลเหรียญทองเลิศ</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Python FutureSkill.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">โปรแกรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 group-hover:text-[#4C5C8A] transition-colors line-clamp-1">
                    UpSkill Python | FutureSkill</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เรียนรู้ออนไลน์ผ่านระบบ เรียน FutureSkill</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/html-futureskill.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">โปรแกรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">HTML | FutureSkill</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เรียนรู้ออนไลน์ผ่านระบบ เรียน FutureSkill</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Bontodev Notion.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">โปรแกรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">เรียนรู้ Notion Database</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เรียนรู้ออนไลน์ผ่านระบบ เรียนของ Bontodev </p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/นิติศาสตร์.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">อบรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">ศาลยุติธรรมเพื่อประชาชน</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เข้าร่วม ณ ที่ ศาลภาษีอากรกลาง</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/solo-html.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">โปรแกรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">HTML | SoloLearning</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">เรียนรู้ผ่านระบบออนไลน์ Sololearning </p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/เรียงความ.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">ภาษา</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 group-hover:text-[#4C5C8A] transition-colors line-clamp-1">
                    ประกวดเรียงความภาษาไทย</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เข้าร่วมการแข่งขันเขียนเรียงความภาษาไทย ในโครงการส่งเสริมและพัฒนาทักษะภาษาไทย</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Cosmic.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">อบรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">Cosmic Classroom Online</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เข้าอบรมในหัวข้อเรื่องรู้จักยานอวกาศและจักรวาลอันน่าทึ่ง โดย องค์การพิพิธภัณฑ์วิทยาศาสตร์แห่งชาติ</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/การตลาดออนไลน์ - FutureSkill.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">อบรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">การตลาดออนไลน์ | FutureSkill</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เรียนรู้ออนไลน์ผ่านระบบ เรียนของ FutureSkill </p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/WebEditor-70.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">แข่งขัน</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">ศิลปหัตถกรรมครั้งที่ 70</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">แข่ง WebEditor ได้รางวัลเหรียญทองแดง</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/ThaiMooc-HTML.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">โปรแกรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">Reponsive WebDesign</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">เรียนรู้ผ่านระบบออนไลน์ ThaiMooc เป็นเวลา 12 ชั่วโมง </p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/CSS-FutureSkill.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">โปรแกรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">CSS | FutureSkill</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เรียนรู้ออนไลน์ผ่านระบบ เรียนของ FutureSkill</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/การวิเคราะห์ธุรกิจ-FutureSkill.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">ธุรกิจ</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">การวิเคราะห์ธุรกิจ | FutureSkill</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">เรียนรู้ผ่านระบบออนไลน์ FutureSkill</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Business English-FutureSkill.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">ภาษา</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 group-hover:text-[#4C5C8A] transition-colors line-clamp-1">
                    Business English | FutureSkill</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เรียนรู้ออนไลน์ผ่านระบบ เรียนของ FutureSkill</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/WebApplication-72.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">แข่งขัน</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">ศิลปหัตถกรรมครั้งที่ 72</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">แข่ง Web TextEditor ได้รางวัลเหรียญทอง</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Comcamp2.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">อบรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">ค่ายพิวเตอร์ครั้งที่ 13 | โรงเรียนชลประทานวิทยา</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้ผ่านการอบรม การเขียนโปรแกรมด้วยภาษา Python เป็นเวลา 18 ชั่วโมง </p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Website API.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">โปรแกรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">Website API | FutureSkill</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้เรียนรู้ออนไลน์ผ่านระบบ เรียนของ FutureSkill</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/Thailand STEM Project 2025.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">จิตอาสา</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">จิตอาสา Thailand Steam Project 2025</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้ทําจิตอาสาช่วยถ่ายวิดีโอในงาน</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/solo-css.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">โปรแกรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">CSS | SoloLearning</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">เรียนรู้ผ่านระบบออนไลน์ Sololearning</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

        <div class="cert-item group bg-[#0A101D]/50 border border-white/5 rounded-lg overflow-hidden hover:border-[#3E4D8A]/50 transition-all duration-500 flex flex-col h-full">
            <div class="relative w-full aspect-[4/3] overflow-hidden">
                <img src="{{ asset('assets/team/sarunyakorn/img/certificate/comcamp1.png') }}" alt="Certificate"
                    class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" />
                <div class="absolute top-4 left-4 z-20">
                    <span class="px-3 py-1 bg-[#3E4D8A]/80 backdrop-blur-md text-white text-[9px] font-bold rounded-lg uppercase border border-white/10">อบรม</span>
                </div>
            </div>
            <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-white font-bold text-base mb-2 line-clamp-1">ค่ายพิวเตอร์ครั้งที่ 12 | โรงเรียนชลประทานวิทยา</h3>
                <p class="text-gray-400 text-[11px] leading-relaxed mb-4 line-clamp-2">ได้ผ่านการอบรม การเขียนโปรแกรมด้วยภาษา Python เป็นเวลา 18 ชั่วโมง</p>
                <a href="#" class="view-cert-btn group/btn relative w-full mt-auto py-3 px-4 flex items-center justify-center gap-2 overflow-hidden rounded-lg bg-[#3E4D8A]/10 border border-[#3E4D8A]/30 text-white font-bold text-xs transition-all duration-300 hover:bg-[#3E4D8A] active:scale-[0.98]">
                    <span class="relative z-10">View Certificate</span>
                    <i class="fas fa-arrow-right relative z-10 text-[10px] transition-all duration-300 group-hover/btn:translate-x-1"></i>
                </a>
            </div>
        </div>

    </div>

    <div id="show-more-section" class="mt-8 z-20 flex flex-col items-center transition-all duration-300">
        <button id="show-more-btn"
            class="group text-white font-bold text-sm bg-white/5 px-10 py-3 rounded-lg border border-white/10 hover:bg-[#3E4D8A] transition-all">
            ดูทั้งหมด <span id="cert-count-text"></span> <i id="show-more-icon" class="fas fa-chevron-down ml-2 group-hover:translate-y-1 transition-transform"></i>
        </button>
    </div>

    <div id="cert-modal" class="fixed inset-0 z-[100] hidden flex items-center justify-center bg-black/90 backdrop-blur-sm opacity-0 transition-opacity duration-300">
        <button id="close-modal-btn" class="absolute top-4 right-4 md:top-8 md:right-8 w-12 h-12 flex items-center justify-center rounded-full bg-black/50 text-white hover:text-white hover:bg-[#4C5C8A] transition-all text-2xl cursor-pointer z-[110] shadow-lg">
            <i class="fas fa-times pointer-events-none"></i>
        </button>
        <div id="modal-content" class="relative w-[90%] md:w-[80%] max-w-5xl max-h-[90vh] rounded-lg overflow-hidden scale-95 transition-transform duration-300 flex justify-center items-center">
            <img id="modal-image" src="" alt="Full Certificate" class="max-w-full max-h-[90vh] object-contain rounded-lg shadow-2xl" />
        </div>
    </div>
</section>