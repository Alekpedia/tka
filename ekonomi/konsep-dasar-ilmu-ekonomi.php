<?php 
    // [PENTING] Tidak ada kode proteksi di sini (sesuai permintaanmu)

    // ==================================================
    // 2. META TAG & HEADER
    // ==================================================
    $page_title = 'Materi Ekonomi: Konsep Dasar Ilmu Ekonomi';
    $page_description = 'Pelajari materi lengkap Ekonomi SMA tentang konsep dasar ilmu ekonomi, kelangkaan, biaya peluang, prinsip, dan sistem ekonomi.';
    
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
        .materi-list ul {
             margin-left: 1rem;
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
        /* [DIHAPUS] CSS terkait accordion dihapus */
    </style>

    <section id="materi-ekonomi" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-lg font-semibold text-teal-600">Materi Ekonomi SMA</h2>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mt-2">
                    Konsep Dasar Ilmu Ekonomi
                </h1>
            </div>
            
            <div class="max-w-3xl mx-auto bg-white p-6 md:p-10 rounded-2xl shadow-lg border border-slate-200">
                
                <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="100">
                    <p>Selamat datang di materi dasar Ekonomi! Ini adalah fondasi untuk memahami bagaimana manusia dan masyarakat membuat pilihan dalam mengelola sumber daya yang terbatas. Kita akan mempelajari dari mana ilmu ekonomi berasal, masalah utamanya, hingga berbagai sistem yang digunakan untuk mengaturnya.</p>
                    
                    <h3 class="font-bold text-2xl mt-8">1. Pengertian dan Asal Mula Ilmu Ekonomi</h3>
                    <p>Secara etimologis, "ekonomi" berasal dari bahasa Yunani, yaitu <strong><span class="text-teal-600">"Oikonomia"</span></strong>. Kata ini terdiri dari dua kata:</p>
                    <ul class="materi-list">
                        <li><strong>Oikos</strong>, yang berarti "rumah tangga".</li>
                        <li><strong>Nomos</strong>, yang berarti "aturan" atau "hukum".</li>
                    </ul>
                    <p>Jadi, oikonomia berarti <strong><span class="text-teal-600">"aturan-aturan dalam rumah tangga"</span></strong>. Bapak Ilmu Ekonomi Modern, <strong><span class="text-amber-700">Adam Smith</span></strong>, mendefinisikannya sebagai ilmu yang mempelajari tingkah laku manusia dalam usahanya untuk mengalokasikan sumber daya yang terbatas guna mencapai tujuan tertentu.</p>
                    
                    <div class="definisi-box">
                        <strong>Ilmu Ekonomi adalah</strong> ilmu yang mempelajari bagaimana manusia (individu atau kelompok) membuat pilihan untuk menggunakan sumber daya yang terbatas (langka) demi memenuhi kebutuhan dan keinginannya yang tidak terbatas.
                    </div>

                    <h3 class="font-bold text-2xl mt-8">2. Masalah Inti Ekonomi: Kelangkaan (Scarcity)</h3>
                    <p>Inti dari seluruh masalah ekonomi adalah <strong><span class="text-blue-600">Kelangkaan (Scarcity)</span></strong>.</p>
                    
                    <div class="definisi-box">
                        <strong>Kelangkaan</strong> adalah kondisi di mana jumlah alat pemuas kebutuhan (barang dan jasa) yang tersedia <strong><span class="text-red-600">lebih sedikit</span></strong> daripada jumlah kebutuhan dan keinginan manusia yang <strong><span class="text-red-600">tidak terbatas</span></strong>.
                    </div>
                    
                    <h4 class="font-bold text-xl mt-6">Mengapa Kelangkaan Terjadi?</h4>
                    <ul class="materi-list">
                        <li><strong>Keterbatasan Sumber Daya Alam (SDA)</strong>, contoh: minyak bumi.</li>
                        <li><strong>Keterbatasan Kemampuan Manusia (SDM)</strong>, contoh: keahlian, pengetahuan.</li>
                        <li><strong>Keterbatasan Modal</strong>, contoh: mesin, teknologi.</li>
                        <li><strong>Faktor Alam</strong>, contoh: bencana alam.</li>
                        <li><strong>Peningkatan Kebutuhan yang Cepat</strong>, contoh: pertumbuhan penduduk.</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">Akibat dari Kelangkaan:</h4>
                    <p>Manusia dipaksa untuk:</p>
                    <ul class="materi-list">
                        <li><strong><span class="text-blue-600">Membuat Pilihan (Choice)</span></strong>: Memutuskan kebutuhan mana yang akan dipenuhi.</li>
                        <li><strong><span class="text-blue-600">Mengorbankan Sesuatu</span></strong>: Setiap pilihan berarti mengorbankan pilihan lain.</li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">3. Biaya Peluang (Opportunity Cost)</h3>
                    <p>Ketika kita membuat pilihan, kita pasti mengorbankan pilihan lainnya. Pengorbanan inilah yang disebut Biaya Peluang.</p>
                    
                    <div class="definisi-box">
                        <strong>Biaya Peluang (Opportunity Cost)</strong> adalah nilai dari <strong><span class="text-teal-600">alternatif terbaik</span></strong> yang harus dikorbankan karena telah memilih suatu alternatif lain.
                    </div>
                    
                    <h4 class="font-bold text-xl mt-6">Contoh:</h4>
                    <p>Siswa lulus SMA punya pilihan: <strong>(1) Bekerja</strong> (gaji Rp 3jt/bulan) atau <strong>(2) Kuliah</strong> (biaya Rp 2jt/bulan). Jika ia memilih <strong>Kuliah</strong>, maka biaya peluangnya adalah <strong><span class="text-amber-700">gaji Rp 3.000.000 per bulan</span></strong> yang hilang karena tidak bekerja.</p>

                    <h3 class="font-bold text-2xl mt-8">4. Kebutuhan dan Alat Pemuas Kebutuhan</h3>
                    
                    <h4 class="font-bold text-xl mt-6">A. Jenis-jenis Kebutuhan</h4>
                    <ul class="materi-list">
                        <li><strong>Berdasarkan Intensitasnya:</strong> <span class="text-lime-700">Primer</span> (pokok), <span class="text-lime-700">Sekunder</span> (pelengkap), <span class="text-lime-700">Tersier</span> (mewah).</li>
                        <li><strong>Berdasarkan Sifatnya:</strong> <span class="text-lime-700">Jasmani</span> (fisik) dan <span class="text-lime-700">Rohani</span> (jiwa).</li>
                        <li><strong>Berdasarkan Waktu:</strong> <span class="text-lime-700">Sekarang</span> (mendesak) dan <span class="text-lime-700">Masa Depan</span> (direncanakan).</li>
                        <li><strong>Berdasarkan Subjeknya:</strong> <span class="text-lime-700">Individu</span> (pribadi) dan <span class="text-lime-700">Kolektif</span> (bersama).</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">B. Alat Pemuas Kebutuhan</h4>
                    <ul class="materi-list">
                        <li><strong>Cara Memperoleh:</strong> <span class="text-blue-600">Barang Ekonomi</span> (bayar) vs <span class="text-blue-600">Barang Bebas</span> (gratis).</li>
                        <li><strong>Hubungan:</strong> <span class="text-blue-600">Barang Substitusi</span> (pengganti, cth: beras-jagung) vs <span class="text-blue-600">Barang Komplementer</span> (pelengkap, cth: mobil-bensin).</li>
                        <li><strong>Tujuan Penggunaan:</strong> <span class="text-blue-600">Barang Produksi</span> (modal) vs <span class="text-blue-600">Barang Konsumsi</span> (siap pakai).</li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">5. Masalah Pokok Ekonomi (Klasik dan Modern)</h3>
                    
                    <h4 class="font-bold text-xl mt-6">A. Masalah Pokok Ekonomi Klasik</h4>
                    <ul class="materi-list">
                        <li><strong>Produksi:</strong> Bagaimana barang diproduksi?</li>
                        <li><strong>Distribusi:</strong> Bagaimana barang disalurkan?</li>
                        <li><strong>Konsumsi:</strong> Apakah barang akan dikonsumsi?</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">B. Masalah Pokok Ekonomi Modern</h4>
                    <p>Lebih dikenal dengan 3 pertanyaan mendasar:</p>
                    <ul class="materi-list">
                        <li><strong><span class="text-red-600">WHAT?</span></strong> (Barang apa yang akan diproduksi dan berapa banyak?)</li>
                        <li><strong><span class="text-red-600">HOW?</span></strong> (Bagaimana cara memproduksinya? Padat karya atau padat modal?)</li>
                        <li><strong><span class="text-red-600">FOR WHOM?</span></strong> (Untuk siapa barang itu diproduksi? Siapa yang menikmati?)</li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">6. Prinsip, Motif, dan Tindakan Ekonomi</h3>
                    <ul class="materi-list">
                        <li><strong>Tindakan Ekonomi:</strong> Segala kegiatan manusia untuk memenuhi kebutuhan.</li>
                        <li><strong>Motif Ekonomi:</strong> Alasan atau dorongan melakukan tindakan ekonomi (cth: cari laba, penuhi kebutuhan, dapat penghargaan, motif sosial).</li>
                    </ul>
                    
                    <div class="penting-box">
                        <strong>Prinsip Ekonomi:</strong><br>
                        Berusaha dengan <strong>pengorbanan tertentu (minimal)</strong> untuk mendapatkan <strong>hasil tertentu (maksimal)</strong>. Intinya adalah <strong>EFISIENSI</strong>.
                    </div>

                    <h3 class="font-bold text-2xl mt-8">7. Pembagian Ilmu Ekonomi</h3>
                    <ul class="materi-list">
                        <li><strong>Ekonomi Deskriptif:</strong> Mengumpulkan data dan fakta (Contoh: Data inflasi 3%).</li>
                        <li><strong>Ekonomi Teori:</strong> Menganalisis dan membuat teori. Dibagi menjadi:
                            <ul>
                                <li><strong><span class="text-teal-600">Ekonomi Mikro:</span></strong> Ruang lingkup kecil (harga pasar, perilaku konsumen, perusahaan).</li>
                                <li><strong><span class="text-teal-600">Ekonomi Makro:</span></strong> Ruang lingkup besar/agregat (inflasi, pengangguran, pendapatan nasional).</li>
                            </ul>
                        </li>
                        <li><strong>Ekonomi Terapan:</strong> Menerapkan teori untuk masalah praktis (Contoh: Ekonomi Pembangunan, Ekonomi Syariah).</li>
                    </ul>
                    
                    <h3 class="font-bold text-2xl mt-8">8. Sistem Ekonomi</h3>
                    <p>Cara suatu negara memecahkan masalah pokok ekonomi (What, How, For Whom).</p>
                    
                    <h4 class="font-bold text-xl mt-6">A. Sistem Ekonomi Tradisional</h4>
                    <ul class="materi-list">
                        <li><strong>Ciri:</strong> Berdasarkan kebiasaan, adat, turun-temurun.</li>
                        <li><strong>Kelemahan:</strong> Lambat berkembang, tidak efisien.</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">B. Sistem Ekonomi Komando (Terpusat)</h4>
                    <ul class="materi-list">
                        <li><strong>Ciri:</strong> Semua diatur penuh oleh <strong><span class="text-red-600">negara/pemerintah</span></strong>. Hak milik pribadi tidak ada.</li>
                        <li><strong>Kelemahan:</strong> Mematikan inisiatif individu.</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">C. Sistem Ekonomi Pasar (Liberal/Kapitalis)</h4>
                    <ul class="materi-list">
                        <li><strong>Ciri:</strong> Didasarkan pada <strong><span class="text-blue-600">mekanisme pasar</span></strong>. Peran pemerintah minim.</li>
                        <li><strong>Kelemahan:</strong> Kesenjangan ekonomi tinggi, rentan krisis.</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">D. Sistem Ekonomi Campuran</h4>
                    <ul class="materi-list">
                        <li><strong>Ciri:</strong> Gabungan pasar dan komando. <strong><span class="text-blue-600">Swasta bebas</span></strong>, tapi <strong><span class="text-red-600">pemerintah ikut campur</span></strong> sebagai pengatur/pengawas.</li>
                    </ul>
                    
                    <div class="penting-box">
                        <strong>Catatan Penting: Indonesia</strong><br>
                        Indonesia menganut <strong>Sistem Ekonomi Pancasila</strong>, yang merupakan bagian dari sistem ekonomi campuran dengan landasan nilai-nilai Pancasila.
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>
<script>
document.addEventListener('DOMContentLoaded', () => {

    // --- [DIHAPUS] Logic Accordion telah dihapus ---
    
    // --- Re-run Lucide ---
    // (Dibiarkan jika header/footer Anda menggunakannya)
    if (typeof lucide !== 'undefined') {
        lucide.createIcons();
    }
});
</script>

<?php 
    // [DIUBAH] Path include harus menggunakan ../ untuk naik satu level
    include '../footer.php'; 
?>