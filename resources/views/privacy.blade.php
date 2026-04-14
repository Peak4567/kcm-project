@extends('layout')

@section('content')
    <section class="py-24 bg-white font-noto min-h-screen relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-blue-50/50 rounded-full blur-[120px] pointer-events-none">
        </div>

        <div class="container mx-auto px-6 max-w-4xl relative z-10">
            <nav class="mb-12">
                <a href="{{ url('/') }}"
                    class="text-slate-400 hover:text-[#3E4D8A] transition-all flex items-center gap-2 text-sm font-medium group">
                    <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i> กลับสู่หน้าหลัก
                </a>
            </nav>

            <div class="mb-16">
                <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4 tracking-tighter">
                    Privacy <span class="text-[#3E4D8A]">Policy</span>
                </h1>
                <p class="text-slate-500 font-anuphan">นโยบายความเป็นส่วนตัวสำหรับกลุ่มเครือข่าย กระชับมิตร (Krachabmitr
                    Team)</p>
                <div class="flex items-center gap-4 mt-6">
                    <div class="px-3 py-1 bg-slate-100 rounded-full text-[10px] font-bold text-slate-500 uppercase">Version
                        1.2</div>
                    <div class="text-slate-400 text-xs font-anuphan">อัปเดตล่าสุด: 14 เมษายน 2569</div>
                </div>
            </div>

            <div class="space-y-12 text-slate-600 font-anuphan leading-relaxed text-base md:text-lg">

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-3">
                        <span
                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-[#3E4D8A] text-white text-sm">01</span>
                        บทนำและความสำคัญ
                    </h2>
                    <p>
                        กลุ่มทีมงาน **กระชับมิตร (Krachabmitr Team)** ให้ความสำคัญกับการคุ้มครองข้อมูลส่วนบุคคลของคุณ
                        นโยบายนี้ระบุถึงวิธีการที่เราจัดเก็บ ใช้
                        และรักษาความปลอดภัยข้อมูลส่วนบุคคลที่ได้รับจากการใช้งานเว็บไซต์ โปรเจกต์ในเครือ (เช่น NaHost,
                        PMCSHOP) และบริการอื่นๆ เพื่อให้เป็นไปตามพระราชบัญญัติคุ้มครองข้อมูลส่วนบุคคล (PDPA)
                    </p>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-3">
                        <span
                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-[#3E4D8A] text-white text-sm">02</span>
                        ข้อมูลที่เราจัดเก็บ
                    </h2>
                    <p>เราอาจเก็บรวบรวมข้อมูลประเภทต่างๆ ดังนี้:</p>
                    <ul class="list-disc ml-6 space-y-3">
                        <li><span class="font-bold text-slate-800">ข้อมูลระบุตัวตน:</span> เช่น ชื่อ-นามสกุล, ชื่อผู้ใช้งาน
                            (Username)</li>
                        <li><span class="font-bold text-slate-800">ข้อมูลการติดต่อ:</span> เช่น อีเมล, หมายเลขโทรศัพท์,
                            ช่องทางโซเชียลมีเดีย (Discord, Facebook)</li>
                        <li><span class="font-bold text-slate-800">ข้อมูลทางเทคนิค:</span> เช่น หมายเลข IP Address,
                            ประเภทเบราว์เซอร์ และพฤติกรรมการใช้งานบนเว็บไซต์ผ่านคุกกี้ (Cookies)</li>
                        <li><span class="font-bold text-slate-800">ข้อมูลการสื่อสาร:</span>
                            รายละเอียดข้อความที่คุณส่งหาเราผ่านฟอร์มติดต่องานหรือการปรึกษาโปรเจกต์</li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-3">
                        <span
                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-[#3E4D8A] text-white text-sm">03</span>
                        วัตถุประสงค์ในการนำข้อมูลไปใช้
                    </h2>
                    <p>Krachabmitr Team นำข้อมูลของคุณไปใช้ภายใต้ความจำเป็นดังนี้:</p>
                    <ul class="list-disc ml-6 space-y-3">
                        <li>เพื่อใช้ในการสื่อสาร ตอบกลับข้อซักถาม หรือประสานงานด้านธุรกิจและโปรเจกต์</li>
                        <li>เพื่อปรับปรุงประสิทธิภาพของเว็บไซต์และบริการในเครือกระชับมิตรให้ตอบโจทย์ผู้ใช้งานมากขึ้น</li>
                        <li>เพื่อป้องกันการแสปม การโจมตีทางไซเบอร์ หรือกิจกรรมที่ผิดกฎหมายต่อระบบของเรา</li>
                        <li>เพื่อส่งข้อมูลข่าวสารสำคัญหรืออัปเดตเกี่ยวกับ Krachabmitr Ecosystem (เฉพาะกรณีที่คุณยินยอม)</li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-3">
                        <span
                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-[#3E4D8A] text-white text-sm">04</span>
                        การรักษาความปลอดภัยของข้อมูล
                    </h2>
                    <p>
                        เราใช้มาตรการทางเทคนิคและการบริหารจัดการที่เหมาะสม เพื่อป้องกันการสูญหาย การเข้าถึง การใช้
                        หรือการเปิดเผยข้อมูลส่วนบุคคลโดยไม่ได้รับอนุญาต เช่น การเข้ารหัสข้อมูลผ่านโปรโตคอล SSL
                        และการใช้ระบบคัดกรองข้อมูลจากพาร์ทเนอร์ที่เชื่อถือได้
                    </p>
                    <div class="p-5 bg-blue-50 border border-blue-100 rounded-2xl text-sm text-blue-800">
                        <i class="fas fa-info-circle mr-2"></i>
                        ข้อมูลของคุณจะถูกเก็บรักษาไว้ในระยะเวลาที่จำเป็นตามวัตถุประสงค์ หรือตามที่กฎหมายกำหนดเท่านั้น
                    </div>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-3">
                        <span
                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-[#3E4D8A] text-white text-sm">05</span>
                        การเปิดเผยข้อมูลแก่บุคคลที่สาม
                    </h2>
                    <p>
                        เราไม่มีนโยบายในการขายหรือให้เช่าข้อมูลส่วนบุคคลของคุณแก่บุคคลภายนอก
                        เว้นแต่จะเป็นการปฏิบัติตามกฎหมาย
                        หรือได้รับความยินยอมโดยชัดแจ้งจากคุณในกรณีที่มีการส่งต่อข้อมูลเพื่อดำเนินงานโปรเจกต์ร่วมกับพันธมิตร
                    </p>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-3">
                        <span
                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-[#3E4D8A] text-white text-sm">06</span>
                        สิทธิของเจ้าของข้อมูลส่วนบุคคล
                    </h2>
                    <p>ตามกฎหมาย PDPA คุณมีสิทธิ์ดังต่อไปนี้:</p>
                    <ul class="list-disc ml-6 space-y-3 text-sm">
                        <li>สิทธิในการเข้าถึงและขอรับสำเนาข้อมูลที่เราจัดเก็บ</li>
                        <li>สิทธิในการขอให้แก้ไขข้อมูลให้เป็นปัจจุบันและถูกต้อง</li>
                        <li>สิทธิในการขอให้ลบ หรือทำลายข้อมูลของคุณออกจากระบบ</li>
                        <li>สิทธิในการถอนความยินยอมในการประมวลผลข้อมูล</li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-slate-900 flex items-center gap-3">
                        <span
                            class="flex items-center justify-center w-8 h-8 rounded-lg bg-[#3E4D8A] text-white text-sm">07</span>
                        ช่องทางการติดต่อเรา
                    </h2>
                    <p>หากคุณมีคำถาม หรือต้องการใช้สิทธิตามนโยบายความเป็นส่วนตัวนี้ สามารถติดต่อทีมงานได้ที่:</p>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-100">
                            <p class="text-xs font-bold text-slate-400 uppercase mb-2">Email Address</p>
                            <p class="text-slate-900 font-bold">kcm2025official@gmail.com</p>
                        </div>
                        <div class="p-6 bg-slate-50 rounded-2xl border border-slate-100">
                            <p class="text-xs font-bold text-slate-400 uppercase mb-2">Social Hub</p>
                            <p class="text-slate-900 font-bold">Discord: Krachabmitr Community</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-24 pt-12 border-t border-slate-100 flex flex-col items-center gap-4 text-center">
                <img src="{{ asset('assets/img/kcmlogo.png') }}" class="h-12 w-12 grayscale opacity-30" alt="Logo">
                <p class="text-slate-400 text-xs">© 2026 Krachabmitr Team Ecosystem. All rights reserved.</p>
            </div>
        </div>
    </section>
@endsection
