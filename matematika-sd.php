<?php 
    // Definisikan meta tag untuk halaman ini
    $page_title = 'Latihan Soal Matematika SD / MI';
    $page_description = 'Pilih paket soal latihan TKA Matematika SD/MI yang ingin kamu kerjakan di bawah ini.';
    
    // [PENTING] Path include berubah menjadi '../../' karena kita 2 level di dalam folder
    include '../../header.php'; 
?>

<main>
    <section id="latihan-mat-sd" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900" data-aos="fade-up">
                    Latihan Soal TKA
                </h1>
                <h2 class="text-3xl md:text-4xl font-semibold text-gray-700 mt-2" data-aos="fade-up" data-aos-delay="100">
                    Matematika
                </h2>
                <p class="mt-6 text-lg text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                    Silakan pilih paket soal yang ingin Kamu kerjakan di bawah ini.
                </p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
                
                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="play-circle" class="w-7 h-7 text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Mulai Paket 1</h3>
                            <p class="text-sm text-slate-500">Kerjakan set soal pertama untuk menguji pemahaman dasarmu.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-purple-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="play-circle" class="w-7 h-7 text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Mulai Paket 2</h3>
                            <p class="text-sm text-slate-500">Lanjutkan latihanmu dengan set soal kedua yang lebih menantang.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-teal-500/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-teal-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="play-circle" class="w-7 h-7 text-teal-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Mulai Paket 3</h3>
                            <p class="text-sm text-slate-500">Soal-soal variatif di set ketiga untuk memantapkan kemampuan.</p>
                        </div>
                    </div>
                </a>

                <div class="group block bg-slate-100 rounded-2xl p-6 shadow-md border border-slate-200 cursor-not-allowed" data-aos="fade-up" data-aos-delay="250">
                    <div class="flex items-start space-x-4 opacity-70">
                        <div class="flex-shrink-0 bg-slate-200 p-3 rounded-xl">
                            <i data-lucide="lock" class="w-7 h-7 text-slate-500"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-500 mb-1">Paket 4 (Segera Hadir)</h3>
                            <p class="text-sm text-slate-400">Paket soal baru sedang dalam persiapan. Nantikan segera!</p>
                        </div>
                    </div>
                </div>

                <div class="group block bg-slate-100 rounded-2xl p-6 shadow-md border border-slate-200 cursor-not-allowed" data-aos="fade-up" data-aos-delay="300">
                    <div class="flex items-start space-x-4 opacity-70">
                        <div class="flex-shrink-0 bg-slate-200 p-3 rounded-xl">
                            <i data-lucide="lock" class="w-7 h-7 text-slate-500"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-500 mb-1">Paket 5 (Segera Hadir)</h3>
                            <p class="text-sm text-slate-400">Paket soal baru sedang dalam persiapan. Nantikan segera!</p>
                        </div>
                    </div>
                </div>

                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-rose-500/20" data-aos="fade-up" data-aos-delay="350">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-rose-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="timer" class="w-7 h-7 text-rose-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">TryOut</h3>
                            <p class="text-sm text-slate-500">Uji kemampuanmu secara menyeluruh dengan simulasi ujian.</p>
                        </div>
                    </div>
                </a>

            </div>

        </div>
    </section>
</main>
<?php 
    // [PENTING] Path include berubah menjadi '../../' 
    include '../../footer.php'; 
?>