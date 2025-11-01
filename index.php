<?php 
    // [BARU] Definisikan meta tag untuk halaman ini
    $page_title = 'Latihan Soal TKA Lengkap SD SMP SMA Lengkap';
    $page_description = 'Silakan pilih soal TKA yang kamu pelajari, mulai dari SD, SMP, hingga SMA/SMK/MA.';
    // $page_image = 'https' // (Opsional) Ganti gambar jika perlu

    // Memasukkan file header.php
    include 'header.php'; 
?>

<main>
    <section id="latihan-kami" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">
            
            <div class="text-center mb-16">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900" data-aos="fade-up">Latihan Soal TKA Lengkap</h1>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Silakan Pilih Soal TKA yang kamu pelajari</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">

                <a href="/tka/sd" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="school-2" class="w-7 h-7 text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">SD / MI</h3>
                            <p class="text-sm text-slate-500">Kumpulan soal latihan TKA untuk murid Sekolah Dasar dan Madrasah Ibtidaiyah.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-purple-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="graduation-cap" class="w-7 h-7 text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">SMP / MTs</h3>
                            <p class="text-sm text-slate-500">Kumpulan soal latihan TKA untuk murid Sekolah Menengah Pertama dan Madrasah Tsanawiyah.</p>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-teal-500/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-teal-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="book-open" class="w-7 h-7 text-teal-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">SMA / SMK / MA</h3>
                            <p class="text-sm text-slate-500">Kumpulan soal latihan TKA untuk murid Sekolah Menengah Atas, Kejuruan dan Madrasah Aliyah.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-rose-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-rose-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="info" class="w-7 h-7 text-rose-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Info Pelaksanaan TKA</h3>
                            <p class="text-sm text-slate-500">Dapatkan info terbaru seputar jadwal, materi, dan tips sukses TKA.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-amber-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="bar-chart-3" class="w-7 h-7 text-amber-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Lihat Hasil Tryout Kamu</h3>
                            <p class="text-sm text-slate-500">Cek hasil dan analisis mendalam dari performa belajarmu di sini.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-sky-500/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-sky-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="lightbulb" class="w-7 h-7 text-sky-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Belajar Persiapan SNBT</h3>
                            <p class="text-sm text-slate-500">Materi lengkap dan soal latihan untuk persiapan Seleksi Nasional Berdasarkan Tes.</p>
                        </div>
                    </div>
                </a>
                
            </div>
        </div>
    </section>
</main>
<?php 
    // Memasukkan file footer.php
    include 'footer.php'; 
?>