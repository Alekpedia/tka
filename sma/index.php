<?php 
    // [BARU] Definisikan meta tag untuk halaman ini
    $page_title = 'Materi dan  Soal TKA SMA / SMK / MA';
    $page_description = 'Pilih mata pelajaran SMA/SMK/MA yang ingin kamu pelajari: Matematika, Bahasa Indonesia, Bahasa Inggris, dan Mapel Pilihan.';
    
    // Memasukkan file header.php
    include '../header.php'; 
?>

<main>
    <section id="latihan-sma" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900" data-aos="fade-up">Latihan Soal TKA SMA / SMK / MA</h1>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Pilih mata pelajaran yang ingin kamu pelajari.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">

                <a href="bahasa-indonesia" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="book-text" class="w-7 h-7 text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Bahasa Indonesia</h3>
                            <p class="text-sm text-slate-500">Latihan pemahaman bacaan, PUEBI, dan analisis wacana.</p>
                        </div>
                    </div>
                </a>

                <a href="matematika" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-rose-500/20" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-rose-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="calculator" class="w-7 h-7 text-rose-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Matematika</h3>
                            <p class="text-sm text-slate-500">Soal latihan Logika, Peluang, Trigonometri, dan Kalkulus Dasar.</p>
                        </div>
                    </div>
                </a>

                <a href="bahasa-inggris" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-purple-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="globe-2" class="w-7 h-7 text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Bahasa Inggris</h3>
                            <p class="text-sm text-slate-500">Latihan *advanced reading*, *structure*, dan *written expression*.</p>
                        </div>
                    </div>
                </a>

                <a href="mapel-pilihan" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-green-500/20" data-aos="fade-up" data-aos-delay="250">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-green-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="shapes" class="w-7 h-7 text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Mapel Pilihan</h3>
                            <p class="text-sm text-slate-500">Soal Fisika, Kimia, Biologi, Sosiologi, Ekonomi, & Geografi.</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>
</main>
<?php 
    // Memasukkan file footer.php
    include '../footer.php'; 
?>