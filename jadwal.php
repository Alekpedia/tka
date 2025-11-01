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
            
            <div class="text-center mt-10 mb-10">
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
                        <div class="p-5 border-b border-blue-100 bg-blue-50/50">
                            <h4 class="text-base font-semibold text-blue-800 mb-3 flex items-center">
                                <i data-lucide="alarm-clock" class="w-5 h-5 mr-2"></i>
                                Waktu Mundur Ujian (SD/MI)
                            </h4>
                            <div id="countdown-sd" class="grid grid-cols-4 gap-2 text-center">
                                <div>
                                    <span id="sd-days" class="text-3xl font-bold text-blue-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Hari</span>
                                </div>
                                <div>
                                    <span id="sd-hours" class="text-3xl font-bold text-blue-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Jam</span>
                                </div>
                                <div>
                                    <span id="sd-minutes" class="text-3xl font-bold text-blue-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Menit</span>
                                </div>
                                <div>
                                    <span id="sd-seconds" class="text-3xl font-bold text-blue-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Detik</span>
                                </div>
                            </div>
                        </div>
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
                        <div class="p-5 border-b border-purple-100 bg-purple-50/50">
                            <h4 class="text-base font-semibold text-purple-800 mb-3 flex items-center">
                                <i data-lucide="alarm-clock" class="w-5 h-5 mr-2"></i>
                                Waktu Mundur Ujian (SMP/MTS)
                            </h4>
                            <div id="countdown-smp" class="grid grid-cols-4 gap-2 text-center">
                                <div>
                                    <span id="smp-days" class="text-3xl font-bold text-purple-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Hari</span>
                                </div>
                                <div>
                                    <span id="smp-hours" class="text-3xl font-bold text-purple-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Jam</span>
                                </div>
                                <div>
                                    <span id="smp-minutes" class="text-3xl font-bold text-purple-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Menit</span>
                                </div>
                                <div>
                                    <span id="smp-seconds" class="text-3xl font-bold text-purple-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Detik</span>
                                </div>
                            </div>
                        </div>
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
                        <div class="p-5 border-b border-teal-100 bg-teal-50/50">
                            <h4 class="text-base font-semibold text-teal-800 mb-3 flex items-center">
                                <i data-lucide="alarm-clock" class="w-5 h-5 mr-2"></i>
                                Waktu Mundur Ujian (SMA/SMK/MA)
                            </h4>
                            <div id="countdown-sma" class="grid grid-cols-4 gap-2 text-center">
                                <div>
                                    <span id="sma-days" class="text-3xl font-bold text-teal-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Hari</span>
                                </div>
                                <div>
                                    <span id="sma-hours" class="text-3xl font-bold text-teal-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Jam</span>
                                </div>
                                <div>
                                    <span id="sma-minutes" class="text-3xl font-bold text-teal-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Menit</span>
                                </div>
                                <div>
                                    <span id="sma-seconds" class="text-3xl font-bold text-teal-700">00</span>
                                    <span class="block text-xs font-medium text-slate-500">Detik</span>
                                </div>
                            </div>
                        </div>
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

    // --- 1. [BARU] Countdown Timer ---
    
    /**
     * Fungsi untuk memulai countdown timer.
     * @param {number} targetDate - Waktu tujuan (dalam milidetik).
     * @param {string} idPrefix - Awalan ID untuk elemen (cth: "sd", "smp", "sma").
     * @param {string} wrapperId - ID dari div pembungkus countdown.
     */
    function initializeCountdown(targetDate, idPrefix, wrapperId) {
        const daysEl = document.getElementById(idPrefix + '-days');
        const hoursEl = document.getElementById(idPrefix + '-hours');
        const minutesEl = document.getElementById(idPrefix + '-minutes');
        const secondsEl = document.getElementById(idPrefix + '-seconds');
        const wrapperEl = document.getElementById(wrapperId);

        if (!daysEl || !wrapperEl) return; // Failsafe jika elemen tidak ditemukan

        const interval = setInterval(() => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                clearInterval(interval);
                wrapperEl.innerHTML = '<div class="text-center text-lg font-bold text-slate-700 py-4">Ujian Telah Dimulai!</div>';
                return;
            }

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            daysEl.innerHTML = days < 10 ? '0' + days : days;
            hoursEl.innerHTML = hours < 10 ? '0' + hours : hours;
            minutesEl.innerHTML = minutes < 10 ? '0' + minutes : minutes;
            secondsEl.innerHTML = seconds < 10 ? '0' + seconds : seconds;
        }, 1000);
    }

    // --- [GANTI TANGGAL INI] ---
    // Atur tanggal tujuan countdown kamu (berdasarkan tanggal UJIAN TULIS)
    const dateSD = new Date("March 15, 2026 08:00:00").getTime();
    const dateSMP = new Date("March 18, 2026 08:00:00").getTime();
    const dateSMA = new Date("March 20, 2026 08:00:00").getTime();
    
    // Panggil 3 countdown yang berbeda
    initializeCountdown(dateSD, "sd", "countdown-sd");
    initializeCountdown(dateSMP, "smp", "countdown-smp");
    initializeCountdown(dateSMA, "sma", "countdown-sma");


    // --- 2. Accordion Logic ---
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach((header, index) => {
            const content = header.nextElementSibling;
            const icon = header.querySelector('.accordion-icon');

            // Buka item pertama (SD/MI) secara default
            if (index === 0) {
                if(content) content.style.maxHeight = content.scrollHeight + "px";
                if(icon) icon.style.transform = 'rotate(180deg)';
                header.classList.add('open');
            } else {
                 if(content) content.style.maxHeight = null;
            }

            header.addEventListener('click', () => {
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