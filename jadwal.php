<?php 
    // Definisikan meta tag untuk halaman ini
    $page_title = 'Jadwal Pelaksanaan TKA 2026';
    $page_description = 'Informasi resmi dan countdown jadwal pelaksanaan TKA untuk jenjang SD, SMP, dan SMA/SMK/MA.';
    
    // Memasukkan file header.php
    include 'header.php'; 
?>

<main>
    <section id="jadwal-tka" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900" data-aos="fade-up">
                    Jadwal Pelaksanaan TKA
                </h1>
                <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">
                    Countdown dan informasi resmi jadwal ujian TKA untuk semua jenjang.
                </p>
            </div>
            
            <div class="max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Waktu Mundur Menuju Ujian TKA</h2>
                <div id="countdown-wrapper" class="cta-gradient grid grid-cols-4 gap-4 p-6 md:p-8 rounded-2xl shadow-2xl text-white">
                    <div class="text-center">
                        <span id="days" class="text-4xl md:text-6xl font-extrabold">00</span>
                        <span class="block text-sm md:text-base font-medium opacity-90">Hari</span>
                    </div>
                    <div class="text-center">
                        <span id="hours" class="text-4xl md:text-6xl font-extrabold">00</span>
                        <span class="block text-sm md:text-base font-medium opacity-90">Jam</span>
                    </div>
                    <div class="text-center">
                        <span id="minutes" class="text-4xl md:text-6xl font-extrabold">00</span>
                        <span class="block text-sm md:text-base font-medium opacity-90">Menit</span>
                    </div>
                    <div class="text-center">
                        <span id="seconds" class="text-4xl md:text-6xl font-extrabold">00</span>
                        <span class="block text-sm md:text-base font-medium opacity-90">Detik</span>
                    </div>
                </div>
            </div>

            <div class="text-center mt-20 mb-10">
                <h2 class="text-3xl font-bold text-gray-800" data-aos="fade-up">Detail Jadwal per Jenjang</h2>
            </div>

            <div class="max-w-3xl mx-auto space-y-4" data-aos="fade-up" data-aos-delay="300">

                <div class="border border-blue-200 rounded-lg bg-white overflow-hidden shadow-lg">
                    <button class="accordion-header w-full flex justify-between items-center p-5 font-semibold text-left text-slate-800 bg-blue-50">
                        <span class="flex items-center space-x-3">
                            <i data-lucide="school-2" class="w-6 h-6 text-blue-600"></i>
                            <span class="text-lg font-bold">TKA SD / MI</span>
                        </span>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform accordion-icon flex-shrink-0 text-slate-500"></i>
                    </button>
                    <div class="accordion-content">
                        <ul class="space-y-3 p-5 text-gray-600">
                            <li class="flex items-center"><i data-lucide="calendar-plus" class="w-5 h-5 mr-3 text-blue-500 flex-shrink-0"></i>Pendaftaran: 1 Februari - 28 Februari 2026</li>
                            <li class="flex items-center"><i data-lucide="printer" class="w-5 h-5 mr-3 text-blue-500 flex-shrink-0"></i>Cetak Kartu Ujian: 10 Maret 2026</li>
                            <li class="flex items-center"><i data-lucide="pencil" class="w-5 h-5 mr-3 text-blue-500 flex-shrink-0"></i>Ujian Tulis: 15 Maret - 20 Maret 2026</li>
                            <li class="flex items-center"><i data-lucide="file-check" class="w-5 h-5 mr-3 text-blue-500 flex-shrink-0"></i>Pengumuman Kelulusan: 5 April 2026</li>
                        </ul>
                    </div>
                </div>

                <div class="border border-purple-200 rounded-lg bg-white overflow-hidden shadow-lg">
                    <button class="accordion-header w-full flex justify-between items-center p-5 font-semibold text-left text-slate-800 bg-purple-50">
                        <span class="flex items-center space-x-3">
                            <i data-lucide="graduation-cap" class="w-6 h-6 text-purple-600"></i>
                            <span class="text-lg font-bold">TKA SMP / MTS</span>
                        </span>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform accordion-icon flex-shrink-0 text-slate-500"></i>
                    </button>
                    <div class="accordion-content">
                        <ul class="space-y-3 p-5 text-gray-600">
                            <li class="flex items-center"><i data-lucide="calendar-plus" class="w-5 h-5 mr-3 text-purple-500 flex-shrink-0"></i>Pendaftaran: 1 Februari - 28 Februari 2026</li>
                            <li class="flex items-center"><i data-lucide="printer" class="w-5 h-5 mr-3 text-purple-500 flex-shrink-0"></i>Cetak Kartu Ujian: 12 Maret 2026</li>
                            <li class="flex items-center"><i data-lucide="pencil" class="w-5 h-5 mr-3 text-purple-500 flex-shrink-0"></i>Ujian Tulis: 18 Maret - 23 Maret 2026</li>
                            <li class="flex items-center"><i data-lucide="file-check" class="w-5 h-5 mr-3 text-purple-500 flex-shrink-0"></i>Pengumuman Kelulusan: 8 April 2026</li>
                        </ul>
                    </div>
                </div>

                <div class="border border-teal-200 rounded-lg bg-white overflow-hidden shadow-lg">
                    <button class="accordion-header w-full flex justify-between items-center p-5 font-semibold text-left text-slate-800 bg-teal-50">
                        <span class="flex items-center space-x-3">
                            <i data-lucide="book-open" class="w-6 h-6 text-teal-600"></i>
                            <span class="text-lg font-bold">TKA SMA / SMK / MA</span>
                        </span>
                        <i data-lucide="chevron-down" class="w-5 h-5 transition-transform accordion-icon flex-shrink-0 text-slate-500"></i>
                    </button>
                    <div class="accordion-content">
                         <ul class="space-y-3 p-5 text-gray-600">
                            <li class="flex items-center"><i data-lucide="calendar-plus" class="w-5 h-5 mr-3 text-teal-500 flex-shrink-0"></i>Pendaftaran: 1 Februari - 28 Februari 2026</li>
                            <li class="flex items-center"><i data-lucide="printer" class="w-5 h-5 mr-3 text-teal-500 flex-shrink-0"></i>Cetak Kartu Ujian: 14 Maret 2026</li>
                            <li class="flex items-center"><i data-lucide="pencil" class="w-5 h-5 mr-3 text-teal-500 flex-shrink-0"></i>Ujian Tulis: 20 Maret - 25 Maret 2026</li>
                            <li class="flex items-center"><i data-lucide="file-check" class="w-5 h-5 mr-3 text-teal-500 flex-shrink-0"></i>Pengumuman Kelulusan: 10 April 2026</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script>
document.addEventListener('DOMContentLoaded', () => {

    // --- 1. Countdown Timer ---
    // [GANTI TANGGAL INI] Atur tanggal tujuan countdown kamu
    const targetDate = new Date("June 1, 2026 08:00:00").getTime(); 

    const countdownInterval = setInterval(() => {
        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance < 0) {
            clearInterval(countdownInterval);
            document.getElementById("countdown-wrapper").innerHTML = '<div class="col-span-4 text-center text-2xl font-bold">Ujian Telah Dimulai!</div>';
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Update elemen HTML
        document.getElementById("days").innerHTML = days < 10 ? '0' + days : days;
        document.getElementById("hours").innerHTML = hours < 10 ? '0' + hours : hours;
        document.getElementById("minutes").innerHTML = minutes < 10 ? '0' + minutes : minutes;
        document.getElementById("seconds").innerHTML = seconds < 10 ? '0' + seconds : seconds;

    }, 1000);

    // --- 2. Accordion Logic ---
    // (Script ini diambil dari file referensi kamu)
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach(header => {
            // Kita buat agar yang pertama (SD/MI) langsung terbuka
            if (header.parentElement.firstElementChild === header) {
                const firstContent = header.nextElementSibling;
                const firstIcon = header.querySelector('.accordion-icon');
                if(firstContent) firstContent.style.maxHeight = firstContent.scrollHeight + "px";
                if(firstIcon) firstIcon.style.transform = 'rotate(180deg)';
                header.classList.add('open');
            } else {
                 header.nextElementSibling.style.maxHeight = null;
            }

            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                const icon = header.querySelector('.accordion-icon');
                const isOpen = content.style.maxHeight;

                // Tutup semua accordion lain
                accordionHeaders.forEach(h => {
                    if (h !== header) {
                        h.nextElementSibling.style.maxHeight = null;
                        const otherIcon = h.querySelector('.accordion-icon');
                        if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                        h.classList.remove('open');
                    }
                });
                
                // Buka/tutup yang diklik
                if (isOpen) {
                    content.style.maxHeight = null; // Tutup
                    if(icon) icon.style.transform = 'rotate(0deg)';
                    header.classList.remove('open');
                } else {
                    content.style.maxHeight = content.scrollHeight + "px"; // Buka
                    if(icon) icon.style.transform = 'rotate(180deg)';
                    header.classList.add('open');
                }
            });
        });
    }

    // --- 3. Re-run Lucide ---
    // (Panggil ulang untuk merender ikon di dalam accordion)
    lucide.createIcons();
});
</script>

<?php 
    // Memasukkan file footer.php
    include 'footer.php'; 
?>