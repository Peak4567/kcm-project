@extends('layout')

@section('content')
<section class="py-24 bg-white font-noto min-h-screen relative overflow-hidden">
    <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-indigo-50/50 rounded-full blur-[120px] pointer-events-none"></div>

    <div class="container mx-auto px-6 max-w-4xl relative z-10">
        <nav class="mb-12">
            <a href="{{ url('/') }}" class="text-slate-400 hover:text-[#3E4D8A] transition-all flex items-center gap-2 text-sm font-medium group">
                <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i> กลับสู่หน้าหลัก
            </a>
        </nav>
        
        <div class="mb-16">
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4 tracking-tighter uppercase">
                Terms of <span class="text-[#3E4D8A]">Service</span>
            </h1>
            <p class="text-slate-500 font-anuphan italic text-lg">"ข้อตกลงและเงื่อนไขการเข้าถึงบริการในเครือกระชับมิตรทีม"</p>
            <div class="flex flex-wrap items-center gap-4 mt-8">
                <div class="px-4 py-1.5 bg-slate-900 text-white rounded-lg text-[11px] font-bold uppercase tracking-widest">Official Document</div>
                <div class="text-slate-400 text-xs font-anuphan uppercase tracking-tighter">มีผลบังคับใช้ ณ วันที่ 14 เมษายน 2569</div>
            </div>
        </div>

        <div class="space-y-16 text-slate-600 font-anuphan leading-relaxed">
            
            <div class="p-8 bg-slate-50 border-l-8 border-[#3E4D8A] rounded-r-[2rem]">
                <h2 class="text-xl font-bold text-slate-900 mb-4">บทนำ</h2>
                <p class="text-base italic">
                    ข้อกำหนดการให้บริการนี้ เป็นข้อตกลงทางกฎหมายระหว่างผู้ใช้งาน (ซึ่งต่อไปนี้จะเรียกว่า "ท่าน") กับกลุ่มทีมงาน **กระชับมิตร (Krachabmitr Team)** ในการเข้าถึงเว็บไซต์ แอปพลิเคชัน หรือบริการใดๆ ในระบบนิเวศ (Ecosystem) ของเรา
                </p>
            </div>

            <div class="grid grid-cols-1 gap-12">
                
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">01.</span> การยอมรับเงื่อนไข
                    </h3>
                    <p>การที่ท่านเข้าถึงเว็บไซต์หรือใช้บริการของเรา ถือว่าท่านได้อ่าน ทำความเข้าใจ และตกลงที่จะผูกพันตามข้อกำหนดเหล่านี้ทั้งหมด หากท่านไม่ยอมรับข้อตกลงส่วนใดส่วนหนึ่ง กรุณายุติการใช้งานทันที</p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">02.</span> ทรัพย์สินทางปัญญา (Copyright)
                    </h3>
                    <p>เนื้อหาทั้งหมด รวมถึงแต่ไม่จำกัดเพียง ซอร์สโค้ด (Source Code), งานออกแบบ UI/UX, รูปภาพเกียรติบัตร, โลโก้แบรนด์ในเครือ และบทความ เป็นทรัพย์สินทางปัญญาของทีมงานกระชับมิตร:</p>
                    <ul class="list-disc ml-6 space-y-2">
                        <li>ห้ามมิให้ผู้ใดคัดลอก ดัดแปลง แจกจ่าย หรือนำผลงานในพอร์ตโฟลิโอไปใช้แอบอ้างโดยไม่ได้รับอนุญาตเป็นลายลักษณ์อักษร</li>
                        <li>การนำซอร์สโค้ดตัวอย่างไปศึกษา (Learning Purpose) สามารถทำได้ แต่ห้ามนำไปจำหน่ายต่อในนามตนเอง</li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">03.</span> ขอบเขตการให้บริการในเครือ
                    </h3>
                    <p>บริการใน Ecosystem ของเราประกอบด้วย:</p>
                    <ul class="list-disc ml-6 space-y-2">
                        <li><span class="font-bold text-slate-800">NaHost:</span> บริการเว็บโฮสติ้งและการพัฒนาเว็บไซต์</li>
                        <li><span class="font-bold text-slate-800">PMCSHOP:</span> บริการจัดจำหน่ายผลิตภัณฑ์ดิจิทัลและเติมเกม</li>
                        <li><span class="font-bold text-slate-800">Krachabmitr Community:</span> พื้นที่สำหรับแลกเปลี่ยนความรู้และกิจกรรมกลุ่ม</li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">04.</span> ข้อตกลงการจ้างงานและการปรึกษา
                    </h3>
                    <p>ในกรณีที่ท่านติดต่อเพื่อจ้างงานพัฒนาซอฟต์แวร์ผ่านฟอร์มหน้าเว็บ:</p>
                    <ul class="list-disc ml-6 space-y-2">
                        <li>ใบเสนอราคาและกำหนดการส่งมอบงานถือเป็นข้อตกลงเบื้องต้น และอาจมีการเปลี่ยนแปลงตามความต้องการของลูกค้า</li>
                        <li>สิทธิในซอร์สโค้ดสุดท้ายจะถูกส่งมอบให้ลูกค้าตามข้อตกลงในสัญญาจ้างรายบุคคล</li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">05.</span> ข้อห้ามในการใช้งาน (Prohibited Uses)
                    </h3>
                    <p>ท่านตกลงที่จะไม่กระทำการใดๆ ต่อไปนี้:</p>
                    <ul class="list-disc ml-6 space-y-2">
                        <li>ใช้เว็บไซต์เพื่อวัตถุประสงค์ที่ผิดกฎหมายหรือละเมิดสิทธิผู้อื่น</li>
                        <li>พยายามเจาะระบบ (Hacking) หรือแพร่กระจายไวรัสต่อโครงสร้างพื้นฐานของกระชับมิตร</li>
                        <li>การเก็บข้อมูลจากเว็บไซต์โดยใช้ Script หรือ Bot (Scraping) โดยไม่ได้รับอนุญาต</li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">06.</span> ความถูกต้องของข้อมูลผลงาน
                    </h3>
                    <p>ผลงานและเกียรติบัตรที่แสดงบนเว็บไซต์นี้ เป็นผลงานจริงที่เกิดจากการลงมือทำและการเข้าแข่งขันจริง ข้อมูลมีความถูกต้อง ณ วันที่เผยแพร่ อย่างไรก็ตาม ทีมงานขอสงวนสิทธิ์ในการปรับปรุงข้อมูลให้เป็นปัจจุบันโดยไม่ต้องแจ้งล่วงหน้า</p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">07.</span> การลิงก์ไปยังเว็บไซต์บุคคลที่สาม
                    </h3>
                    <p>เว็บไซต์ของเราอาจมีลิงก์ไปยังแพลตฟอร์มภายนอก เช่น Discord, GitHub หรือ Facebook เราไม่รับผิดชอบต่อเนื้อหา นโยบาย หรือความเสียหายที่อาจเกิดขึ้นจากการใช้งานเว็บไซต์เหล่านั้น</p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">08.</span> การยกเลิกและระงับการเข้าถึง
                    </h3>
                    <p>เราขอสงวนสิทธิ์ในการระงับการเข้าถึงบริการใดๆ ในเครือกระชับมิตรแก่ผู้ใช้งานที่ละเมิดข้อกำหนดเหล่านี้ โดยไม่ต้องแจ้งให้ทราบล่วงหน้าและไม่ต้องชดเชยความเสียหายใดๆ</p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">09.</span> การจำกัดความรับผิดชอบ (Disclaimer)
                    </h3>
                    <p>บริการของเราถูกจัดทำขึ้น "ตามสภาพที่เป็น" (As Is) เราไม่รับประกันว่าการใช้งานเว็บไซต์จะไม่มีข้อบกพร่องหรือการขัดข้อง แต่เราสัญญาว่าจะพยายามรักษาเสถียรภาพของระบบให้ดีที่สุดเพื่อผู้ใช้ทุกคน</p>
                </div>

                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-slate-900 flex items-baseline gap-3">
                        <span class="text-[#3E4D8A] font-black italic text-3xl">10.</span> การเปลี่ยนแปลงข้อตกลง
                    </h3>
                    <p>เราอาจปรับปรุงแก้ไขข้อตกลงนี้เป็นครั้งคราวตามความเหมาะสมของการเปลี่ยนแปลงทางเทคโนโลยีและกฎหมาย โดยจะมีผลบังคับใช้ทันทีที่ประกาศบนหน้านี้</p>
                </div>

            </div>

            <div class="mt-20 p-10 bg-slate-900 rounded-xl text-white">
                <h4 class="text-2xl font-bold mb-6 font-anuphan">สอบถามเพิ่มเติมเกี่ยวกับข้อกำหนด</h4>
                <div class="flex flex-col md:flex-row gap-8 items-start md:items-center justify-between">
                    <p class="text-slate-400 text-sm max-w-sm font-anuphan">
                        หากคุณมีข้อสงสัยเกี่ยวกับสัญญาจ้างงาน หรือต้องการขออนุญาตใช้เนื้อหาบางส่วนในเว็บไซต์ สามารถส่งอีเมลอย่างเป็นทางการมาได้ที่
                    </p>
                    <a href="mailto:sarunyakorn.work@gmail.com" class="px-8 py-3 bg-[#3E4D8A] hover:bg-blue-600 rounded-xl font-bold transition-all text-sm whitespace-nowrap">
                        kcm2025official@gmail.com
                    </a>
                </div>
            </div>

        </div>

        <div class="mt-24 pt-12 border-t border-slate-100 flex flex-col items-center gap-6 text-center">
            <div class="flex items-center gap-4 opacity-30 grayscale">
                <img src="{{ asset('assets/img/kcmlogo.png') }}" class="h-10 w-10" alt="Logo">
                <div class="w-px h-6 bg-slate-900"></div>
                <span class="font-black text-xl tracking-tighter">KRACHABMITR</span>
            </div>
            <p class="text-slate-400 text-xs font-anuphan uppercase tracking-widest">© 2026 Legal Document of Krachabmitr Team Ecosystem.</p>
        </div>
    </div>
</section>
@endsection