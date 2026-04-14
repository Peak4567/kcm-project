@extends('team.sarunyakorn.layout')

@section('content')
    <section
        class="relative w-full py-24 px-6 md:px-12 lg:px-24 bg-[#0B1120] font-noto text-white min-h-screen overflow-hidden">
        <div class="absolute top-0 left-0 w-96 h-96 bg-[#3E4D8A]/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto relative z-10">
            <div class="mb-12">
                <h1 class="text-4xl font-bold mb-4 uppercase tracking-tight">Terms of <span
                        class="text-[#4C5C8A]">Service</span></h1>
                <p class="text-gray-400 text-sm">มีผลบังคับใช้ตั้งแต่วันที่: 13 เมษายน 2569</p>
                <div class="w-20 h-1 bg-[#3E4D8A] mt-4 rounded-full"></div>
            </div>

            <div class="space-y-10 text-gray-300 leading-relaxed">

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-file-contract text-[#3E4D8A]"></i> 1. การยอมรับข้อตกลง
                    </h2>
                    <p>การเข้าถึงและใช้งานเว็บไซต์นี้ ถือว่าคุณได้อ่าน เข้าใจ
                        และตกลงที่จะปฏิบัติตามข้อกำหนดและเงื่อนไขการใช้งานทั้งหมดที่ระบุไว้ในหน้านี้
                        หากคุณไม่ตกลงตามเงื่อนไข โปรดระงับการใช้งานเว็บไซต์ทันที</p>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-copyright text-[#3E4D8A]"></i> 2. ทรัพย์สินทางปัญญา
                    </h2>
                    <p>เนื้อหาทั้งหมดบนเว็บไซต์นี้ รวมถึงแต่ไม่จำกัดเพียง ข้อความ, รูปภาพเกียรติบัตร, โลโก้,
                        ซอร์สโค้ดโปรเจกต์ และงานดีไซน์ เป็นทรัพย์สินของคุณ <span class="text-white font-semibold">ศรัณยกร
                            เทพสุนทร</span> ยกเว้นไอคอนหรือเครื่องหมายการค้าที่เป็นของบุคคลที่สาม (เช่น
                        โลโก้ภาษาคอมพิวเตอร์)</p>
                    <p class="bg-white/5 p-4 border-l-4 border-[#3E4D8A] rounded-r-lg text-sm italic">
                        "ห้ามมิให้ทำการคัดลอก ดัดแปลง แจกจ่าย หรือนำผลงานใน Portfolio นี้ไปแอบอ้างเป็นของตนเองโดยเด็ดขาด"
                    </p>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-user-check text-[#3E4D8A]"></i> 3. ขอบเขตการใช้งาน
                    </h2>
                    <p>ผู้ใช้งานสามารถเข้าชมเว็บไซต์เพื่อวัตถุประสงค์ในการทำความรู้จักประวัติการทำงาน ติดต่อจ้างงาน
                        หรือศึกษาผลงานเท่านั้น การกระทำใดๆ ที่เป็นการรบกวนการทำงานของระบบ (Cyber Attack)
                        จะถูกดำเนินคดีตามกฎหมายที่เกี่ยวข้อง</p>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-exclamation-triangle text-[#3E4D8A]"></i> 4. การปฏิเสธความรับผิดชอบ
                    </h2>
                    <p>ข้อมูลโปรเจกต์และผลงานต่างๆ ถูกจัดทำขึ้นเพื่อแสดงทักษะความสามารถในขณะนั้น
                        ผลลัพธ์จากการนำโค้ดตัวอย่างไปใช้งานต่อโดยไม่ได้รับคำแนะนำจากผู้พัฒนา
                        ผู้พัฒนาจะไม่รับผิดชอบต่อความเสียหายใดๆ ที่เกิดขึ้น</p>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-gavel text-[#3E4D8A]"></i> 5. การเปลี่ยนแปลงข้อกำหนด
                    </h2>
                    <p>ผมขอสงวนสิทธิ์ในการแก้ไขหรือเปลี่ยนแปลงข้อกำหนดการให้บริการนี้ได้ตลอดเวลาโดยไม่ต้องแจ้งให้ทราบล่วงหน้า
                        โดยการเปลี่ยนแปลงจะมีผลทันทีเมื่อมีการเผยแพร่บนเว็บไซต์</p>
                </div>

            </div>

            <div class="mt-16 border-t border-white/5 pt-8">
                <a href="{{ url('/') }}"
                    class="group inline-flex items-center gap-2 text-sm text-gray-400 hover:text-white transition-all">
                    <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i> กลับสู่หน้าหลัก
                </a>
            </div>
        </div>
    </section>
@endsection
