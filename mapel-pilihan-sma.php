<?php 
    // Definisikan meta tag untuk halaman ini
    $page_title = 'Mata Pelajaran Pilihan TKA SMA/SMK/MA';
    $page_description = 'Daftar lengkap mata pelajaran pilihan TKA SMA/SMK/MA, dari Fisika, Kimia, Ekonomi, Sosiologi, dan lainnya.';
    
    // Memasukkan file header.php
    include 'header.php'; // [PENTING] Gunakan ../header.php
?>

<main>
    <section id="latihan-sma-pilihan" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900" data-aos="fade-up">Mapel Pilihan TKA SMA/SMK/MA</h1>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Pilih salah satu mata pelajaran di bawah ini untuk memulai latihan.</p>
            </div>
            
            <div class="flex flex-wrap justify-center gap-6 max-w-6xl mx-auto">

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-rose-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-rose-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="calculator" class="w-7 h-7 text-rose-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Matematika Tkt. Lanjut</h3>
                            <p class="text-sm text-slate-500">Latihan soal Kalkulus, Aljabar Linier, dan Vektor.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/20" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="book-text" class="w-7 h-7 text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Bahasa Indonesia Tkt. Lanjut</h3>
                            <p class="text-sm text-slate-500">Analisis teks sastra, karya ilmiah, dan kebahasaan.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-purple-500/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-purple-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="globe-2" class="w-7 h-7 text-purple-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Bahasa Inggris Tkt. Lanjut</h3>
                            <p class="text-sm text-slate-500">Pemahaman teks akademik dan *listening comprehension*.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-sky-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-sky-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="atom" class="w-7 h-7 text-sky-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Fisika</h3>
                            <p class="text-sm text-slate-500">Latihan soal Mekanika, Listrik, Magnet, dan Fisika Modern.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-green-500/20" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-green-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="flask-conical" class="w-7 h-7 text-green-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Kimia</h3>
                            <p class="text-sm text-slate-500">Soal Stoikiometri, Kimia Organik, dan Termokimia.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-lime-500/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-lime-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="leaf" class="w-7 h-7 text-lime-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Biologi</h3>
                            <p class="text-sm text-slate-500">Soal Genetika, Metabolisme, dan Ekologi.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-amber-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-amber-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="line-chart" class="w-7 h-7 text-amber-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Ekonomi</h3>
                            <p class="text-sm text-slate-500">Latihan Mikro, Makro, dan Akuntansi Dasar.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-indigo-500/20" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-indigo-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="users" class="w-7 h-7 text-indigo-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Sosiologi</h3>
                            <p class="text-sm text-slate-500">Analisis interaksi sosial, kelompok, dan perubahan sosial.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-teal-500/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-teal-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="map" class="w-7 h-7 text-teal-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Geografi</h3>
                            <p class="text-sm text-slate-500">Soal Litosfer, Atmosfer, dan kependudukan.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-orange-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-orange-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="landmark" class="w-7 h-7 text-orange-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Sejarah</h3>
                            <p class="text-sm text-slate-500">Pelajaran sejarah Indonesia dan sejarah dunia.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-cyan-500/20" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-cyan-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="user-search" class="w-7 h-7 text-cyan-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Antropologi</h3>
                            <p class="text-sm text-slate-500">Studi tentang kebudayaan dan evolusi manusia.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-500/20" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-red-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="shield" class="w-7 h-7 text-red-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">PPKn</h3>
                            <p class="text-sm text-slate-500">Soal Pancasila, UUD 1945, dan Kewarganegaraan.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="w-full md:w-[calc(33.333%-1rem)] group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-pink-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-pink-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="lightbulb" class="w-7 h-7 text-pink-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Produk Kreatif (PKK)</h3>
                            <p class="text-sm text-slate-500">Materi kewirausahaan dan pengembangan produk (SMK).</p>
                        </div>
                    </div>
                </a>

            </div>
        </div>
    </section>
</main>
<?php 
    // Memasukkan file footer.php
    include '/footer.php'; // [PENTING] Gunakan ../footer.php
?>