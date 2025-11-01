<?php 
    // [BARU] Definisikan meta tag untuk halaman ini
    $page_title = 'Latihan Soal Matematika SD / MI';
    $page_description = 'Pilih paket soal latihan TKA Matematika SD/MI yang ingin kamu kerjakan di bawah ini.';
    
    // [PENTING] Path include berubah menjadi '../../' karena kita 2 level di dalam folder
    include 'header.php'; 
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
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
                
                <a href="#" 
                   class="block w-full text-center text-white font-bold text-lg bg-blue-600 rounded-lg shadow-lg py-4 px-6 
                          transition-all duration-300 hover:bg-blue-700 hover:-translate-y-1 hover:shadow-xl" 
                   data-aos="fade-up" data-aos-delay="100">
                    Mulai Paket 1
                </a>

                <a href="#" 
                   class="block w-full text-center text-white font-bold text-lg bg-blue-600 rounded-lg shadow-lg py-4 px-6 
                          transition-all duration-300 hover:bg-blue-700 hover:-translate-y-1 hover:shadow-xl" 
                   data-aos="fade-up" data-aos-delay="200">
                    Mulai Paket 2
                </a>

                <a href="#" 
                   class="block w-full text-center text-white font-bold text-lg bg-blue-600 rounded-lg shadow-lg py-4 px-6 
                          transition-all duration-300 hover:bg-blue-700 hover:-translate-y-1 hover:shadow-xl" 
                   data-aos="fade-up" data-aos-delay="300">
                    Mulai Paket 3
                </a>

                <div class="block w-full text-center text-slate-500 font-bold text-lg bg-slate-200 rounded-lg py-4 px-6 cursor-not-allowed" 
                     data-aos="fade-up" data-aos-delay="400">
                    Paket 4 (Segera Hadir)
                </div>
                
                <div class="block w-full text-center text-slate-500 font-bold text-lg bg-slate-200 rounded-lg py-4 px-6 cursor-not-allowed" 
                     data-aos="fade-up" data-aos-delay="500">
                    Paket 5 (Segera Hadir)
                </div>

                <a href="#" 
                   class="block w-full text-center text-white font-bold text-lg bg-blue-600 rounded-lg shadow-lg py-4 px-6 
                          transition-all duration-300 hover:bg-blue-700 hover:-translate-y-1 hover:shadow-xl" 
                   data-aos="fade-up" data-aos-delay="600">
                    TryOut
                </a>
            </div>

        </div>
    </section>
</main>
<?php 
    // [PENTING] Path include berubah menjadi '../../' 
    include 'footer.php'; 
?>