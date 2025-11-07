<?php 
    // [PENTING] Tidak ada kode proteksi di sini (sesuai permintaanmu)

    // ==================================================
    // 2. META TAG & HEADER
    // ==================================================
    $page_title = 'Materi TKA Ekonomi: Ekonomi Mikro dan Makro';
    $page_description = 'Perbedaan mendalam, ruang lingkup, dan contoh Ekonomi Mikro (demand, supply, pasar) dan Ekonomi Makro (inflasi, PDB, pengangguran).';
    
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
        /* [DIHAPUS] CSS terkait accordion dihapus */
        
        /* [DITAMBAH] Styling dasar untuk tabel perbandingan */
        .prose table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .prose th, .prose td {
            border: 1px solid #e2e8f0; /* slate-200 */
            padding: 0.75rem 1rem; /* p-3 md:p-4 */
            text-align: left;
        }
        .prose thead th {
            background-color: #f8fafc; /* slate-50 */
            font-weight: bold;
        }
        .prose tbody tr:nth-child(odd) {
            background-color: #fdfdfe;
        }
    </style>

    <section id="materi-ekonomi" class="py-20 bg-slate-50">
        <div class="container mx-auto px-6">

            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="text-lg font-semibold text-teal-600">Materi TKA Ekonomi SMA</h2>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mt-2">
                    Ekonomi Mikro vs Makro
                </h1>
            </div>
            
            <div class="max-w-3xl mx-auto bg-white p-6 md:p-10 rounded-2xl shadow-lg border border-slate-200">
                
                <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="100">
                    <p>Dalam materi sebelumnya, kita telah belajar bahwa Ilmu Ekonomi dibagi menjadi Ekonomi Deskriptif, Ekonomi Teori, dan Ekonomi Terapan. Nah, <strong>Ekonomi Teori</strong> sebagai inti dari ilmu ekonomi, dibagi lagi menjadi dua cabang utama yang saling melengkapi: <strong>Ekonomi Mikro</strong> dan <strong>Ekonomi Makro</strong>.</</p>
                    
                    <p>Memahami perbedaan keduanya sangat penting. Ibaratnya, jika ekonomi adalah sebuah hutan, maka:</p>
                    <ul class="materi-list">
                        <li><strong>Ekonomi Mikro</strong> mempelajari <span class="text-blue-600">pohon-pohonnya</span> (satu pohon, jenis pohon, interaksi antar pohon).</li>
                        <li><strong>Ekonomi Makro</strong> mempelajari <span class="text-red-600">hutan secara keseluruhan</span> (luas hutan, kesehatan hutan, dampaknya pada iklim).</li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">1. Ekonomi Mikro (Microeconomics)</h3>
                    <p>Ekonomi Mikro adalah cabang ilmu ekonomi yang mempelajari <strong><span class="text-blue-600">perilaku unit-unit ekonomi individual</span></strong> atau bagian-bagian kecil dari perekonomian.</p>
                    
                    <div class="definisi-box">
                        <strong>Fokus Ekonomi Mikro:</strong> Menganalisis bagaimana individu (rumah tangga/konsumen) dan perusahaan (produsen) membuat keputusan dalam mengalokasikan sumber daya, dan bagaimana mereka berinteraksi di pasar tertentu.
                    </div>
                    
                    <p>Ekonomi Mikro sering disebut sebagai <strong><span class="text-teal-600">"Teori Harga" (Price Theory)</span></strong> karena inti bahasannya adalah tentang proses pembentukan harga di pasar.</p>

                    <h4 class="font-bold text-xl mt-6">Ruang Lingkup Ekonomi Mikro:</h4>
                    <ul class="materi-list">
                        <li><strong><span class="text-blue-600">Teori Perilaku Konsumen:</span></strong> Bagaimana konsumen memutuskan barang apa yang akan dibeli dengan pendapatan terbatas untuk mendapat kepuasan maksimal.</li>
                        <li><strong><span class="text-blue-600">Teori Perilaku Produsen:</span></strong> Bagaimana produsen menentukan berapa banyak barang yang akan diproduksi dengan biaya tertentu untuk mendapat laba maksimal.</li>
                        <li><strong><span class="text-teal-600">Permintaan (Demand) dan Penawaran (Supply):</span></strong> Analisis faktor-faktor yang mempengaruhi permintaan dan penawaran suatu barang/jasa.</li>
                        <li><strong><span class="text-teal-600">Elastisitas:</span></strong> Seberapa sensitif permintaan atau penawaran berubah ketika harganya berubah.</li>
                        <li><strong><span class="text-teal-600">Mekanisme Pasar:</span></strong> Proses interaksi antara permintaan dan penawaran yang membentuk <strong>Harga Keseimbangan</strong>.</li>
                        <li><strong><span class="text-lime-700">Struktur Pasar (Bentuk Pasar):</span></strong> Menganalisis berbagai jenis pasar, dari Pasar Persaingan Sempurna, Monopoli, Oligopoli, hingga Monopolistik.</li>
                        <li><strong>Biaya Produksi dan Laba:</strong> Menganalisis berbagai jenis biaya (biaya tetap, biaya variabel) dan cara memaksimalkan keuntungan.</li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">2. Ekonomi Makro (Macroeconomics)</h3>
                    <p>Ekonomi Makro adalah cabang ilmu ekonomi yang mempelajari <strong><span class="text-red-600">perekonomian secara keseluruhan (agregat)</span></strong>.</p>
                    
                    <div class="definisi-box">
                        <strong>Fokus Ekonomi Makro:</strong> Menganalisis variabel-variabel ekonomi total seperti pendapatan nasional, inflasi, pengangguran, dan pertumbuhan ekonomi. Ini melihat gambaran besar ekonomi suatu negara.
                    </div>
                    
                    <p>Ekonomi Makro berkaitan dengan masalah-masalah ekonomi utama yang dihadapi oleh suatu negara dan bagaimana pemerintah dapat memengaruhinya melalui kebijakan.</p>

                    <h4 class="font-bold text-xl mt-6">Ruang Lingkup Ekonomi Makro:</h4>
                    <ul class="materi-list">
                        <li><strong><span class="text-red-600">Pendapatan Nasional:</span></strong> Menghitung total output ekonomi suatu negara (PDB/GDP, PNB/GNP) untuk mengukur kemakmuran.</li>
                        <li><strong><span class="text-red-600">Inflasi dan Deflasi:</span></strong> Menganalisis kenaikan (inflasi) atau penurunan (deflasi) harga-harga secara umum dan dampaknya.</li>
                        <li><strong><span class="text-red-600">Pengangguran:</span></strong> Menganalisis penyebab dan dampak dari orang yang tidak memiliki pekerjaan serta mencari solusinya.</li>
                        <li><strong><span class="text-lime-700">Pertumbuhan Ekonomi:</span></strong> Studi tentang faktor-faktor yang mendorong peningkatan kapasitas produksi suatu negara dari waktu ke waktu.</li>
                        <li><strong>Kebijakan Ekonomi:</strong> Peran pemerintah dalam menstabilkan ekonomi, yang terbagi menjadi:
                            <ul>
                                <li><strong><span class="text-amber-700">Kebijakan Fiskal:</span></strong> Kebijakan yang diambil pemerintah melalui <strong>APBN (Pajak dan Belanja Negara)</strong>.</li>
                                <li><strong><span class="text-amber-700">Kebijakan Moneter:</span></strong> Kebijakan yang diambil <strong>Bank Sentral (Bank Indonesia)</strong> untuk mengontrol <strong>jumlah uang beredar dan suku bunga</strong>.</li>
                            </ul>
                        </li>
                        <li><strong>Perdagangan Internasional:</strong> Menganalisis ekspor, impor, dan neraca pembayaran.</li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">Perbedaan Utama Ekonomi Mikro vs Makro</h3>
                    <p>Tabel berikut merangkum perbedaan mendasar antara kedua cabang ilmu ekonomi ini:</p>
                    
                    <table>
                        <thead>
                            <tr>
                                <th>Aspek Pembeda</th>
                                <th>Ekonomi Mikro</th>
                                <th>Ekonomi Makro</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Fokus Kajian</strong></td>
                                <td>Perilaku unit ekonomi individual (konsumen, produsen).</td>
                                <td>Perilaku perekonomian secara agregat (keseluruhan).</td>
                            </tr>
                            <tr>
                                <td><strong>Unit Analisis</strong></td>
                                <td>Satu perusahaan, satu konsumen, satu pasar (cth: pasar mobil).</td>
                                <td>Satu negara, total belanja konsumen, total investasi nasional.</td>
                            </tr>
                            <tr>
                                <td><strong>Tujuan Analisis</strong></td>
                                <td>Mencapai <span class="text-lime-700">efisiensi</span> dalam alokasi sumber daya di pasar tertentu.</td>
                                <td>Mencapai <span class="text-lime-700">stabilitas</span> dan <span class="text-lime-700">pertumbuhan</span> ekonomi nasional.</td>
                            </tr>
                            <tr>
                                <td><strong>Variabel Utama</strong></td>
                                <td><span class="text-blue-600">Harga (P)</span>, <span class="text-blue-600">Permintaan (D)</span>, <span class="text-blue-600">Penawaran (S)</span>, Biaya (C), Laba (Profit).</td>
                                <td><span class="text-red-600">PDB (Y)</span>, <span class="text-red-600">Inflasi (π)</span>, <span class="text-red-600">Pengangguran (U)</span>, Suku Bunga (i).</td>
                            </tr>
                            <tr>
                                <td><strong>Contoh Masalah</strong></td>
                                <td>Mengapa harga cabai naik? Bagaimana penetapan UMR mempengaruhi permintaan tenaga kerja di pabrik A?</td>
                                <td>Mengapa Indonesia mengalami inflasi 3%? Bagaimana cara menurunkan angka pengangguran nasional?</td>
                            </tr>
                        </tbody>
                    </table>

                    <h3 class="font-bold text-2xl mt-8">Keterkaitan Keduanya (Penting!)</h3>
                    <p>Meskipun berbeda, Ekonomi Mikro dan Makro <strong>sangat erat terkait</strong> dan tidak dapat dipisahkan. Apa yang terjadi di tingkat makro adalah <strong><span class="text-red-600">agregasi (penjumlahan)</span></strong> dari jutaan keputusan <strong><span class="text-blue-600">mikro</span></strong>.</p>
                    
                    <ul class="materi-list">
                        <li><strong>Contoh 1: Inflasi (Makro)</strong> adalah kenaikan harga secara umum. Ini terjadi karena harga <span class="text-blue-600">masing-masing barang</span> (beras, bensin, baju) di pasar (Mikro) mengalami kenaikan.</li>
                        <li><strong>Contoh 2: Pengangguran Nasional (Makro)</strong> adalah jumlah dari keputusan <span class="text-blue-600">setiap perusahaan</span> (Mikro) untuk tidak merekrut atau memberhentikan karyawan.</li>
                        <li><strong>Contoh 3: Pertumbuhan Ekonomi (Makro)</strong> didorong oleh peningkatan produksi dari <span class="text-blue-600">seluruh perusahaan</span> (Mikro) di dalam negeri.</li>
                    </ul>

                    <div class="penting-box">
                        <strong>Kesimpulan Sederhana:</strong><br>
                        Anda tidak dapat memahami kesehatan <span class="text-red-600">hutan (Makro)</span> tanpa mengetahui apa yang terjadi pada <span class="text-blue-600">pohon-pohon (Mikro)</span> di dalamnya. Keduanya saling melengkapi untuk memberikan gambaran utuh tentang perekonomian.
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