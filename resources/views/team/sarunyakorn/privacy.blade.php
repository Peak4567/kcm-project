@extends('team.sarunyakorn.layout')
@section('content')
    <section id="privacy-policy"
        class="relative w-full py-24 px-6 md:px-12 lg:px-24 bg-[#0B1120] font-noto text-white overflow-hidden">
        <div class="absolute top-0 right-0 w-96 h-96 bg-[#3E4D8A]/10 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto relative z-10">
            <div class="mb-12">
                <h1 class="text-4xl font-bold mb-4">Privacy <span class="text-[#4C5C8A]">Policy</span></h1>
                <p class="text-gray-400 text-sm">อัปเดตล่าสุด: 13 เมษายน 2569</p>
                <div class="w-20 h-1 bg-[#3E4D8A] mt-4 rounded-full"></div>
            </div>

            <div class="space-y-10 text-gray-300 leading-relaxed">

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-user-shield text-[#3E4D8A]"></i> 1. ข้อมูลที่เราจัดเก็บ
                    </h2>
                    <p>ในการใช้งานฟอร์มติดต่อบนเว็บไซต์นี้ ผมจะจัดเก็บข้อมูลที่คุณกรอกเข้ามาโดยสมัครใจ ได้แก่:</p>
                    <ul class="list-disc ml-6 space-y-2 text-sm">
                        <li>ชื่อ-นามสกุล</li>
                        <li>อีเมลติดต่อ</li>
                        <li>หัวข้อและรายละเอียดข้อความที่คุณส่งมา</li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-eye text-[#3E4D8A]"></i> 2. การนำข้อมูลไปใช้
                    </h2>
                    <p>ข้อมูลทั้งหมดจะถูกใช้เพื่อวัตถุประสงค์ดังต่อไปนี้เท่านั้น:</p>
                    <ul class="list-disc ml-6 space-y-2 text-sm">
                        <li>เพื่อใช้ในการติดต่อกลับและตอบข้อซักถามของคุณ</li>
                        <li>เพื่อประเมินรายละเอียดเบื้องต้นในกรณีที่มีการจ้างงานหรือปรึกษาโปรเจกต์</li>
                        <li>ผมจะไม่นำข้อมูลของคุณไปขายหรือเผยแพร่ให้บุคคลภายนอกโดยไม่ได้รับอนุญาต</li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-cookie-bite text-[#3E4D8A]"></i> 3. คุกกี้ (Cookies)
                    </h2>
                    <p>เว็บไซต์นี้อาจมีการใช้คุกกี้พื้นฐาน (เช่น Google Analytics)
                        เพื่อวิเคราะห์สถิติผู้เข้าชมเว็บไซต์และนำมาปรับปรุงประสบการณ์การใช้งานให้ดียิ่งขึ้น
                        คุณสามารถเลือกปิดการใช้งานคุกกี้ได้ในการตั้งค่าเบราว์เซอร์ของคุณ</p>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-lock text-[#3E4D8A]"></i> 4. ความปลอดภัยของข้อมูล
                    </h2>
                    <p>ผมให้ความสำคัญกับความปลอดภัยของข้อมูลคุณอย่างสูงสุด
                        โดยมีการใช้มาตรการทางเทคนิคเพื่อป้องกันการเข้าถึงข้อมูลโดยไม่ได้รับอนุญาตผ่านระบบของ Formspree
                        ที่ได้มาตรฐานสากล</p>
                </div>

                <div class="space-y-4">
                    <h2 class="text-xl font-bold text-white flex items-center gap-3">
                        <i class="fas fa-id-card text-[#3E4D8A]"></i> 5. ช่องทางการติดต่อ
                    </h2>
                    <p>หากคุณมีคำถามเกี่ยวกับนโยบายความเป็นส่วนตัวนี้ หรือต้องการให้ลบข้อมูลของคุณออกจากระบบ
                        สามารถติดต่อผมได้ที่:</p>
                    <div class="bg-[#0A101D] p-6 rounded-lg border border-white/5 space-y-2 text-sm">
                        <p><span class="text-white font-bold">Email:</span> workingpeak2025@gmail.com</p>
                        <p><span class="text-white font-bold">Location:</span> Nonthaburi, Thailand</p>
                    </div>
                </div>

            </div>

            <div class="mt-16">
                <a href="/"
                    class="inline-flex items-center gap-2 text-sm text-gray-400 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left"></i> กลับสู่หน้าหลัก
                </a>
            </div>
        </div>
    </section>
@endsection
