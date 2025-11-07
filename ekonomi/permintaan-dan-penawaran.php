<?php 
    // [PENTING] Tidak ada kode proteksi di sini (sesuai permintaanmu)

    // ==================================================
    // 2. META TAG & HEADER
    // ==================================================
    $page_title = 'Materi TKA Ekonomi: Permintaan & Penawaran';
    $page_description = 'Pelajari materi lengkap TKA Ekonomi tentang permintaan, penawaran, hukum, faktor, fungsi, dan keseimbangan pasar.';
    
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
        /* [DITAMBAH] Styling dasar untuk tabel perbandingan */
        .prose table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
            font-size: 0.9em; /* Ukuran font lebih kecil untuk tabel */
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
                    Permintaan, Penawaran, & Keseimbangan Pasar
                </h1>
            </div>
            
            <div class="max-w-3xl mx-auto bg-white p-6 md:p-10 rounded-2xl shadow-lg border border-slate-200">
                
                <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="100">
                    <p>Konsep permintaan dan penawaran adalah fondasi utama dalam ilmu ekonomi mikro. Keduanya menjelaskan bagaimana harga dan kuantitas barang ditentukan di dalam suatu pasar.</p>
                    
                    <h3 class="font-bold text-2xl mt-8">1. Permintaan (Demand)</h3>
                    
                    <h4 class="font-bold text-xl mt-6">A. Definisi Permintaan</h4>
                    <div class="definisi-box">
                        <strong>Permintaan</strong> adalah jumlah barang atau jasa yang <strong>ingin dan mampu</strong> dibeli oleh konsumen pada berbagai tingkat harga dan pada waktu tertentu.
                    </div>
                    <p>Penting untuk diingat dua kata kuncinya:</p>
                    <ul class="materi-list">
                        <li><strong>Ingin (Willing):</strong> Konsumen memiliki selera atau kebutuhan akan barang tersebut.</li>
                        <li><strong>Mampu (Able):</strong> Konsumen memiliki daya beli atau uang untuk membelinya.</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">B. Hukum Permintaan</h4>
                    <p>Hukum permintaan menyatakan bahwa, <strong>Ceteris Paribus</strong> (ketika faktor-faktor lain dianggap konstan/tetap), hubungan antara harga (P) dan jumlah barang yang diminta (Qd) adalah <strong>berbanding terbalik (negatif)</strong>.</p>
                    
                    <div class="definisi-box" style="background-color: #fef2f2; border-color: #dc2626; font-style: normal; text-align: center; color: #991b1b;">
                        <strong>Jika Harga (P) Naik 🔼, maka Jumlah Permintaan (Qd) Turun 🔽</strong><br>
                        <strong>Jika Harga (P) Turun 🔽, maka Jumlah Permintaan (Qd) Naik 🔼</strong>
                    </div>

                    <h4 class="font-bold text-xl mt-6">C. Kurva Permintaan</h4>
                    <p>Karena hubungannya yang terbalik, kurva permintaan memiliki kemiringan (slope) <strong>negatif</strong>, bergerak dari <strong>kiri atas ke kanan bawah</strong>.</p>
                    
                    <h4 class="font-bold text-xl mt-6">D. Faktor-Faktor yang Mempengaruhi Permintaan</h4>
                    <p>Faktor-faktor ini adalah bagian dari <i>Ceteris Paribus</i>. Jika salah satu faktor ini berubah, kurva permintaan akan <strong>bergeser</strong> (shifting).</p>
                    <ul class="materi-list">
                        <li><strong>Harga Barang Itu Sendiri (P):</strong> Ini adalah satu-satunya faktor yang menyebabkan <strong>pergerakan</strong> (movement) <i>di sepanjang</i> kurva, bukan pergeseran.</li>
                        <li><strong>Harga Barang Lain (Substitusi & Komplementer):</strong>
                            <ul>
                                <li><strong>Substitusi (Pengganti):</strong> Jika harga kopi (P Kopi) naik, permintaan teh (Qd Teh) akan naik. Hubungan <strong>Positif</strong>.</li>
                                <li><strong>Komplementer (Pelengkap):</strong> Jika harga bensin (P Bensin) naik, permintaan mobil (Qd Mobil) akan turun. Hubungan <strong>Negatif</strong>.</li>
                            </ul>
                        </li>
                        <li><strong>Pendapatan Konsumen (I):</strong>
                            <ul>
                                <li><strong>Barang Normal:</strong> Pendapatan naik, permintaan naik (geser ke kanan).</li>
                                <li><strong>Barang Inferior:</strong> Pendapatan naik, permintaan turun (geser ke kiri). (Contoh: Nasi aking).</li>
                            </ul>
                        </li>
                        <li><strong>Selera Konsumen (Taste):</strong> Jika selera terhadap suatu barang meningkat, permintaan naik (geser ke kanan).</li>
                        <li><strong>Jumlah Penduduk:</strong> Semakin banyak penduduk, permintaan pasar semakin besar (geser ke kanan).</li>
                        <li><strong>Ekspektasi/Perkiraan Harga di Masa Depan:</strong> Jika konsumen memprediksi harga akan naik besok, permintaan hari ini akan naik.</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">E. Pergerakan vs. Pergeseran Kurva Permintaan</h4>
                    <div class="penting-box">
                        <ul class="materi-list" style="margin-top: 0; margin-bottom: 0;">
                            <li><strong>Pergerakan (Movement):</strong> Hanya disebabkan oleh <strong>perubahan harga barang itu sendiri</strong>. Bergerak di sepanjang kurva yang sama.</li>
                            <li><strong>Pergeseran (Shift):</strong> Disebabkan oleh <strong>faktor selain harga barang itu sendiri</strong> (pendapatan, selera, dll.). Kurva bergeser ke kanan (permintaan naik) atau ke kiri (permintaan turun).</li>
                        </ul>
                    </div>

                    <h4 class="font-bold text-xl mt-6">F. Fungsi Permintaan</h4>
                    <p>Secara matematis, fungsi permintaan umumnya linear dan memiliki slope negatif. Bentuk umumnya:</p>
                    <p><code>Qd = a - bP</code> &nbsp; atau &nbsp; <code>Pd = a' - b'Q</code></p>
                    <ul class="materi-list">
                        <li><code>Qd</code> = Kuantitas yang diminta</li>
                        <li><code>P</code> = Harga</li>
                        <li><code>a</code> = Konstanta</li>
                        <li><code>b</code> = Koefisien kemiringan (slope), <strong>nilainya selalu negatif</strong>.</li>
                    </ul>

                    <hr>

                    <h3 class="font-bold text-2xl mt-8">2. Penawaran (Supply)</h3>
                    
                    <h4 class="font-bold text-xl mt-6">A. Definisi Penawaran</h4>
                    <div class="definisi-box">
                        <strong>Penawaran</strong> adalah jumlah barang atau jasa yang <strong>ingin dan mampu</strong> ditawarkan (dijual) oleh produsen pada berbagai tingkat harga dan pada waktu tertentu.
                    </div>

                    <h4 class="font-bold text-xl mt-6">B. Hukum Penawaran</h4>
                    <p>Hukum penawaran menyatakan bahwa, <strong>Ceteris Paribus</strong>, hubungan antara harga (P) dan jumlah barang yang ditawarkan (Qs) adalah <strong>berbanding lurus (positif)</strong>.</p>
                    
                    <div class="definisi-box" style="background-color: #f0fdf4; border-color: #16a34a; font-style: normal; text-align: center; color: #14532d;">
                        <strong>Jika Harga (P) Naik 🔼, maka Jumlah Penawaran (Qs) Naik 🔼</strong><br>
                        <strong>Jika Harga (P) Turun 🔽, maka Jumlah Penawaran (Qs) Turun 🔽</strong>
                    </div>

                    <h4 class="font-bold text-xl mt-6">C. Kurva Penawaran</h4>
                    <p>Karena hubungannya yang lurus, kurva penawaran memiliki kemiringan (slope) <strong>positif</strong>, bergerak dari <strong>kiri bawah ke kanan atas</strong>.</p>

                    <h4 class="font-bold text-xl mt-6">D. Faktor-Faktor yang Mempengaruhi Penawaran</h4>
                    <p>Faktor-faktor ini akan <strong>menggeser</strong> kurva penawaran.</p>
                    <ul class="materi-list">
                        <li><strong>Harga Barang Itu Sendiri (P):</strong> Menyebabkan <strong>pergerakan</strong> (movement) <i>di sepanjang</i> kurva.</li>
                        <li><strong>Biaya Produksi (Input):</strong> Jika biaya input (gaji UMR, bahan baku) naik, penawaran berkurang (geser ke kiri).</li>
                        <li><strong>Teknologi:</strong> Kemajuan teknologi membuat produksi lebih efisien, penawaran bertambah (geser ke kanan).</li>
                        <li><strong>Ekspektasi/Perkiraan Harga di Masa Depan:</strong> Jika produsen memprediksi harga akan naik, mereka menahan stok hari ini, sehingga penawaran hari ini turun.</li>
                        <li><strong>Jumlah Produsen:</strong> Semakin banyak produsen, penawaran total bertambah (geser ke kanan).</li>
                        <li><strong>Kebijakan Pemerintah (Pajak & Subsidi):</strong>
                            <ul>
                                <li><strong>Pajak (Tax):</strong> Menaikkan biaya, mengurangi penawaran (geser ke kiri/atas).</li>
                                <li><strong>Subsidi (Subsidy):</strong> Mengurangi biaya, menambah penawaran (geser ke kanan/bawah).</li>
                            </ul>
                        </li>
                    </ul>

                    <h4 class="font-bold text-xl mt-6">E. Fungsi Penawaran</h4>
                    <p>Secara matematis, fungsi penawaran memiliki slope positif. Bentuk umumnya:</p>
                    <p><code>Qs = a + bP</code> &nbsp; atau &nbsp; <code>Ps = a' + b'Q</code></p>
                    <ul class="materi-list">
                        <li><code>Qs</code> = Kuantitas yang ditawarkan</li>
                        <li><code>b</code> = Koefisien kemiringan (slope), <strong>nilainya selalu positif</strong>.</li>
                    </ul>

                    <hr>

                    <h3 class="font-bold text-2xl mt-8">3. Keseimbangan Pasar (Market Equilibrium)</h3>
                    
                    <h4 class="font-bold text-xl mt-6">A. Definisi Keseimbangan</h4>
                    <div class="definisi-box">
                        <strong>Keseimbangan Pasar (Ekuilibrium)</strong> adalah kondisi di mana jumlah barang yang diminta sama dengan jumlah barang yang ditawarkan di pasar (<code>Qd = Qs</code>). Pada titik ini, terbentuk <strong>Harga Keseimbangan (Pe)</strong> dan <strong>Kuantitas Keseimbangan (Qe)</strong>.
                    </div>

                    <h4 class="font-bold text-xl mt-6">B. Kondisi Tidak Seimbang</h4>
                    <ul class="materi-list">
                        <li><strong>Surplus (Kelebihan Penawaran / Excess Supply):</strong>
                            <ul>
                                <li>Terjadi jika harga pasar (P) berada <strong>di atas</strong> Harga Ekuilibrium (Pe).</li>
                                <li>Kondisi: <strong><code>Qs > Qd</code></strong> (Penawaran > Permintaan).</li>
                                <li>Efek: Produsen akan menurunkan harga kembali menuju Pe.</li>
                            </ul>
                        </li>
                        <li><strong>Shortage (Kekurangan Penawaran / Excess Demand):</strong>
                            <ul>
                                <li>Terjadi jika harga pasar (P) berada <strong>di bawah</strong> Harga Ekuilibrium (Pe).</li>
                                <li>Kondisi: <strong><code>Qd > Qs</code></strong> (Permintaan > Penawaran).</li>
                                <li>Efek: Konsumen berebut, harga akan terdorong naik kembali menuju Pe.</li>
                            </ul>
                        </li>
                    </ul>

                    <h4 class="font-bold text-xl mt-6">C. Contoh Perhitungan Keseimbangan</h4>
                    <p>Diketahui:<br>
                    Fungsi Permintaan: <code>Qd = 80 - 10P</code><br>
                    Fungsi Penawaran: <code>Qs = -40 + 20P</code></p>
                    <p>Ditanya: Harga (Pe) dan Kuantitas (Qe) Keseimbangan?</p>
                    <p><strong>Jawab:</strong><br>
                    Syarat Keseimbangan: <code>Qd = Qs</code><br>
                    <code>80 - 10P = -40 + 20P</code><br>
                    <code>80 + 40 = 20P + 10P</code><br>
                    <code>120 = 30P</code><br>
                    <code>P = 120 / 30</code><br>
                    <strong><code>Pe = 4</code></strong> (Ini adalah Harga Keseimbangan)</p>
                    <p>Substitusikan Pe ke salah satu fungsi (misal Qd):<br>
                    <code>Q = 80 - 10P</code><br>
                    <code>Q = 80 - 10(4)</code><br>
                    <code>Q = 80 - 40</code><br>
                    <strong><code>Qe = 40</code></strong> (Ini adalah Kuantitas Keseimbangan)</p>

                    <hr>
                    
                    <h3 class="font-bold text-2xl mt-8">4. Analisis Pergeseran Keseimbangan</h3>
                    <p>Ini adalah analisis yang paling sering diujikan di TKA. Apa yang terjadi pada Pe dan Qe jika salah satu kurva bergeser?</p>

                    <table>
                        <thead>
                            <tr>
                                <th>Pergeseran Kurva</th>
                                <th>Contoh Penyebab</th>
                                <th>Harga (Pe)</th>
                                <th>Kuantitas (Qe)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Permintaan Naik</strong> (D geser ke kanan)</td>
                                <td>Pendapatan naik, selera meningkat</td>
                                <td style="color: #16a34a;"><strong>NAIK 🔼</strong></td>
                                <td style="color: #16a34a;"><strong>NAIK 🔼</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Permintaan Turun</strong> (D geser ke kiri)</td>
                                <td>Barang jadi inferior, harga komplementer naik</td>
                                <td style="color: #dc2626;"><strong>TURUN 🔽</strong></td>
                                <td style="color: #dc2626;"><strong>TURUN 🔽</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Penawaran Naik</strong> (S geser ke kanan)</td>
                                <td>Teknologi baru, biaya produksi turun, ada subsidi</td>
                                <td style="color: #dc2626;"><strong>TURUN 🔽</strong></td>
                                <td style="color: #16a34a;"><strong>NAIK 🔼</strong></td>
                            </tr>
                            <tr>
                                <td><strong>Penawaran Turun</strong> (S geser ke kiri)</td>
                                <td>Biaya produksi (input) naik, gagal panen, ada pajak</td>
                                <td style="color: #16a34a;"><strong>NAIK 🔼</strong></td>
                                <td style="color: #dc2626;"><strong>TURUN 🔽</strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <hr>

                    <h3 class="font-bold text-2xl mt-8">5. Intervensi Pemerintah: Price Control</h3>
                    <p>Terkadang, pemerintah merasa harga ekuilibrium (Pe) tidak adil (terlalu tinggi bagi konsumen atau terlalu rendah bagi produsen). Pemerintah lalu melakukan intervensi:</p>
                    
                    <h4 class="font-bold text-xl mt-6">A. Price Ceiling (Harga Eceran Tertinggi / HET)</h4>
                    <ul class="materi-list">
                        <li><strong>Tujuan:</strong> Melindungi <strong>konsumen</strong> dari harga yang terlalu mahal.</li>
                        <li><strong>Kebijakan:</strong> Menetapkan harga maksimum <strong>DI BAWAH</strong> harga ekuilibrium (Pe).</li>
                        <li><strong>Contoh:</strong> Harga obat, harga sembako, harga tiket pesawat saat mudik.</li>
                        <li><strong>Akibat:</strong> Harga murah, namun memicu <strong>Shortage / Kelangkaan</strong> (<code>Qd > Qs</code>) karena produsen enggan menjual dan konsumen ingin membeli banyak.</li>
                    </ul>

                    <h4 class="font-bold text-xl mt-6">B. Price Floor (Harga Dasar / UMR)</h4>
                    <ul class="materi-list">
                        <li><strong>Tujuan:</strong> Melindungi <strong>produsen</strong> (atau pekerja) agar tidak mendapat harga yang terlalu murah.</li>
                        <li><strong>Kebijakan:</strong> Menetapkan harga minimum <strong>DI ATAS</strong> harga ekuilibrium (Pe).</li>
                        <li><strong>Contoh:</strong> UMR (Upah Minimum Regional), Harga Gabah Kering Petani.</li>
                        <li><strong>Akibat:</strong> Harga terjamin tinggi, namun memicu <strong>Surplus / Kelebihan</strong> (<code>Qs > Qd</code>) karena produsen semangat menjual tetapi konsumen mengurangi pembelian. (Dalam kasus UMR, ini berarti <i>unemployment</i>/pengangguran).</li>
                    </ul>

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