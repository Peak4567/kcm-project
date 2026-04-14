<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - ไม่พบหน้านี้ | Krachabmitr Team</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.1/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Anuphan:wght@300;400;600;700&family=Noto+Sans+Thai:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .font-anuphan { font-family: 'Anuphan', sans-serif; }
    </style>
</head>
<body class="bg-white font-anuphan antialiased overflow-hidden">

    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full overflow-hidden pointer-events-none z-0">
        <div class="absolute top-[-10%] left-[-10%] w-[40%] h-[40%] bg-blue-50 rounded-full blur-[120px] opacity-60"></div>
        <div class="absolute bottom-[-10%] right-[-10%] w-[40%] h-[40%] bg-indigo-50 rounded-full blur-[120px] opacity-60"></div>
    </div>

    <div class="relative z-10 min-h-screen flex items-center justify-center px-6">
        <div class="text-center">
            
            <div class="relative inline-block ">
                <h1 class="text-[12rem] md:text-[18rem] font-black text-slate-100">404</h1>
            </div>

            <div class="max-w-md mx-auto -mt-10 md:-mt-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4 tracking-tight">
                    หลงทางหรือเปล่าครับ?
                </h2>
                <p class="text-slate-500 mb-10 leading-relaxed">
                    หน้าที่คุณกำลังตามหาอาจจะถูกย้ายไปแล้ว หรือชื่อ URL อาจจะพิมพ์ผิด <br class="hidden md:block"> 
                    ลองกลับไปตั้งหลักที่หน้าหลักก่อนไหมครับ?
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ url('/') }}" class="w-full sm:w-auto px-10 py-4 bg-[#3E4D8A] text-white font-bold rounded-xl hover:bg-[#2d3a6b] hover:-translate-y-1 transition-all duration-300">
                        กลับหน้าหลัก
                    </a>
                    <a href="https://discord.gg/MeSgKFW5zd" target="_blank" class="w-full sm:w-auto px-10 py-4 bg-white border border-gray-100 text-slate-600 font-bold rounded-xl hover:bg-gray-50 transition-all duration-300">
                        <i class="fab fa-discord mr-2"></i> แจ้งปัญหา
                    </a>
                </div>
            </div>

            <div class="mt-20 flex flex-col items-center gap-4 text-slate-300">
                <div class="w-12 h-px bg-slate-100"></div>
                <p class="text-[10px] uppercase tracking-[0.4em] font-bold">Krachabmitr Ecosystem</p>
            </div>
        </div>
    </div>

</body>
</html>