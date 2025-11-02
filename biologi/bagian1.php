<?php 
    // [PENTING] Tidak ada kode proteksi di sini (sesuai permintaanmu)

    // ==================================================
    // 2. META TAG & HEADER
    // ==================================================
    $page_title = 'Materi Biologi: Klasifikasi Makhluk Hidup';
    $page_description = 'Pelajari materi TKA Biologi lengkap tentang klasifikasi dan keanekaragaman makhluk hidup, dari 5 kingdom hingga virus.';
    
    // [DIUBAH] Path include harus menggunakan ../ untuk naik satu level
    include '../header.php'; 
?>

<main>
    <style>
        .materi-list {
            list-style-type: disc;
            list-style-position: outside;
            margin-left: 1.25rem; /* ml-5 */
            margin-top: 0.5rem; /* my-2 */
            margin-bottom: 0.5rem;
            line-height: 1.75; /* leading-7 */
        }
        .definisi-box {
            background-color: #f0f9ff; /* bg-sky-50 */
            border-left: 4px solid #0284c7; /* border-l-4 border-sky-600 */
            padding: 1rem; /* p-4 */
            margin-top: 1rem;
            margin-bottom: 1rem;
            border-radius: 0.25rem;
            font-style: italic;
        }
        .penting-box {
            background-color: #fffbeb; /* bg-amber-50 */
            border-left: 4px solid #f59e0b; /* border-l-4 border-amber-500 */
            padding: 1rem; /* p-4 */
            margin-top: 1rem;
            margin-bottom: 1rem;
            border-radius: 0.25rem;
            color: #78350f; /* text-amber-900 */
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s ease-out;
        }
        .accordion-header.open .accordion-icon {
            transform: rotate(180deg);
        }
    </style>

    <section id="materi-biologi" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-lg font-semibold text-teal-600">Materi TKA Biologi</h2>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mt-2">
                    Klasifikasi & Keanekaragaman Makhluk Hidup
                </h1>
            </div>
            
            <div class="max-w-3xl mx-auto bg-white p-6 md:p-10 rounded-2xl shadow-lg border border-slate-200">
                
                <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="100">
                    <p>Selamat datang di materi Biologi! Topik ini adalah fondasi untuk memahami betapa kayanya kehidupan di bumi. Kita akan mempelajari bagaimana para ilmuwan mengelompokkan jutaan organisme yang ada, dari bakteri terkecil hingga paus terbesar.</p>
                    
                    <div class="definisi-box">
                        <strong>Klasifikasi</strong> adalah proses pengelompokan makhluk hidup berdasarkan persamaan dan perbedaan ciri. Ilmu yang mempelajarinya disebut <strong>Taksonomi</strong>.
                    </div>

                    <h3 class="font-bold text-2xl mt-8">Sistem 5 Kingdom (Whittaker)</h3>
                    <p>Ini adalah sistem klasifikasi yang paling sering digunakan. Mari kita bedah satu per satu.</p>
                </div>
                
                <div class="space-y-4 mt-8" data-aos="fade-up" data-aos-delay="200">

                    <div class="border border-blue-200 rounded-lg bg-white overflow-hidden">
                        <button class="accordion-header w-full flex justify-between items-center p-5 font-semibold text-left text-slate-800 bg-blue-50">
                            <span class="flex items-center space-x-3"><i data-lucide="microscope" class="w-6 h-6 text-blue-600"></i><span class="text-lg font-bold">1. Kingdom Monera (Bakteri & Archaea)</span></span>
                            <i data-lucide="chevron-down" class="w-5 h-5 transition-transform accordion-icon flex-shrink-0 text-slate-500"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="p-5 text-gray-600 prose max-w-none">
                                <p>Ciri utama kingdom ini adalah <strong>prokariotik</strong> (tidak memiliki membran inti sel).</p>
                                <ul class="materi-list">
                                    <li>Bersel satu (uniseluler).</li>
                                    <li>Hidup di lingkungan ekstrem (Archaea) atau umum (Eubacteria).</li>
                                    <li>Contoh: <i>E. coli</i>, <i>Staphylococcus aureus</i>.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="border border-lime-200 rounded-lg bg-white overflow-hidden">
                        <button class="accordion-header w-full flex justify-between items-center p-5 font-semibold text-left text-slate-800 bg-lime-50">
                            <span class="flex items-center space-x-3"><i data-lucide="bug" class="w-6 h-6 text-lime-600"></i><span class="text-lg font-bold">2. Kingdom Protista</span></span>
                            <i data-lucide="chevron-down" class="w-5 h-5 transition-transform accordion-icon flex-shrink-0 text-slate-500"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="p-5 text-gray-600 prose max-w-none">
                                <p>Organisme <strong>eukariotik</strong> (memiliki membran inti) sederhana. Sering disebut "mirip" kingdom lain.</p>
                                <ul class="materi-list">
                                    <li><strong>Protista mirip hewan (Protozoa):</strong> Contoh: <i>Amoeba</i>, <i>Paramecium</i>.</li>
                                    <li><strong>Protista mirip tumbuhan (Alga/Ganggang):</strong> Contoh: <i>Spyrogyra</i>, Diatom.</li>
                                    <li><strong>Protista mirip jamur:</strong> Contoh: Jamur lendir (Oomycota).</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                
                <div class="prose prose-lg max-w-none mt-10" data-aos="fade-up">
                    <h3 class="font-bold text-2xl mt-8">Keanekaragaman Hayati</h3>
                    <p>Keanekaragaman hayati (Biodiversitas) adalah variasi kehidupan di bumi. Dibagi menjadi 3 tingkatan:</p>
                    <ul class="materi-list">
                        <li><strong>Tingkat Gen:</strong> Variasi dalam satu spesies. (Contoh: Bunga mawar merah, putih, kuning).</li>
                        <li><strong>Tingkat Jenis (Spesies):</strong> Variasi antar spesies dalam satu genus. (Contoh: Harimau, Singa, Macan tutul. Semuanya beda spesies tapi mirip).</li>
                        <li><strong>Tingkat Ekosistem:</strong> Variasi habitat. (Contoh: Ekosistem gurun, hutan hujan tropis, laut dalam).</li>
                    </ul>
                    
                    <div class="penting-box">
                        <strong>Catatan Penting: Virus!</strong><br>
                        Virus tidak termasuk dalam 5 kingdom. Mengapa? Karena virus bersifat <strong>aseluler</strong> (bukan sel) dan hanya bisa hidup/bereplikasi di dalam sel inang. Virus adalah parasit obligat.
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
<script>
document.addEventListener('DOMContentLoaded', () => {

    // --- Accordion Logic ---
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach((header, index) => {
            const content = header.nextElementSibling;
            const icon = header.querySelector('.accordion-icon');

            // Buka item pertama (Monera) secara default
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

    // --- Re-run Lucide ---
    lucide.createIcons();
});
</script>

<?php 
    // [DIUBAH] Path include harus menggunakan ../ untuk naik satu level
    include '../footer.php'; 
?>