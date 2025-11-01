<?php 
    // [BARU] Definisikan meta tag untuk halaman ini
    $page_title = 'Materi dan Soal TKA SD / MI Lengkap';
    $page_description = 'Pilih mata pelajaran TKA SD/MI yang ingin kamu pelajari, tersedia Bahasa Indonesia dan Matematika.';
    // $page_image = 'https(Opsional) Ganti gambar jika perlu, jika tidak akan pakai default';

    // Memasukkan file header.php
    include 'header.php'; 
?>

<main>
    <section id="latihan-sd" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900" data-aos="fade-up">Latihan Soal TKA SD / MI</h1>
                <p class="mt-4 text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-delay="100">Pilih mata pelajaran yang ingin kamu pelajari.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">

                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/20" data-aos="fade-up" data-aos-delay="100">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-blue-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="book-text" class="w-7 h-7 text-blue-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Bahasa Indonesia</h3>
                            <p class="text-sm text-slate-500">Kumpulan soal latihan membaca, kosa kata, dan pemahaman teks.</p>
                        </div>
                    </div>
                </a>

                <a href="#" class="group block bg-white rounded-2xl p-6 shadow-lg border border-slate-200 transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:shadow-rose-500/20" data-aos="fade-up" data-aos-delay="150">
                    <div class="flex items-start space-x-4">
                        <div class="flex-shrink-0 bg-rose-100 p-3 rounded-xl transform transition-transform duration-300 group-hover:scale-110">
                            <i data-lucide="calculator" class="w-7 h-7 text-rose-600"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 mb-1">Matematika</h3>
                            <p class="text-sm text-slate-500">Asah kemampuan berhitung, logika, dan pemecahan masalah dasar.</p>
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