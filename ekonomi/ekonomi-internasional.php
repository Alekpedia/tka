<?php 
    // [PENTING] Tidak ada kode proteksi di sini (sesuai permintaanmu)

    // ==================================================
    // 2. META TAG & HEADER
    // ==================================================
    $page_title = 'Materi TKA Ekonomi: Ekonomi Internasional';
    $page_description = 'Pelajari materi lengkap Ekonomi SMA tentang perdagangan internasional, teori, kebijakan proteksi, neraca pembayaran, dan kurs valuta asing.';
    
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
                    Ekonomi Internasional
                </h1>
            </div>
            
            <div class="max-w-3xl mx-auto bg-white p-6 md:p-10 rounded-2xl shadow-lg border border-slate-200">
                
                <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="100">
                    <p>Ekonomi Internasional adalah cabang ilmu ekonomi yang mempelajari bagaimana interaksi dan transaksi ekonomi terjadi antar negara. Ini mencakup segala hal, mulai dari perdagangan barang (ekspor-impor) hingga aliran investasi dan pergerakan mata uang.</p>
                    
                    <h3 class="font-bold text-2xl mt-8">1. Latar Belakang dan Manfaat Perdagangan Internasional</h3>
                    
                    <h4 class="font-bold text-xl mt-6">A. Mengapa Negara Berdagang?</h4>
                    <p>Tidak ada satu negara pun di dunia yang dapat memenuhi semua kebutuhannya sendiri. Alasan utamanya adalah:</p>
                    <ul class="materi-list">
                        <li><strong>Perbedaan Sumber Daya Alam (SDA):</strong> Indonesia punya nikel dan sawit, tapi Arab Saudi punya minyak. Perdagangan memungkinkan pertukaran ini.</li>
                        <li><strong>Perbedaan Sumber Daya Manusia (SDM):</strong> Beberapa negara memiliki tenaga ahli di bidang teknologi, sementara negara lain unggul di bidang agraris.</li>
                        <li><strong>Perbedaan Iklim dan Geografis:</strong> Indonesia tidak bisa menanam gandum secara efisien, sehingga mengimpor dari negara subtropis.</li>
                        <li><strong>Keinginan Memperoleh Keuntungan (Spesialisasi):</strong> Negara akan fokus memproduksi barang di mana mereka paling efisien (seperti yang akan kita bahas di teori).</li>
                        <li><strong>Perbedaan Selera:</strong> Adanya keinginan untuk mengonsumsi barang-barang yang tidak diproduksi di dalam negeri (misalnya, orang Indonesia ingin mencoba keju dari Eropa).</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">B. Manfaat Perdagangan Internasional</h4>
                    <ul class="materi-list">
                        <li><strong><span class="text-lime-700">Memperoleh Keuntungan dari Spesialisasi:</span></strong> Setiap negara fokus pada apa yang terbaik bagi mereka, sehingga produksi global meningkat.</li>
                        <li><strong><span class="text-lime-700">Memperluas Pasar (Skala Ekonomi):</span></strong> Produsen dalam negeri bisa menjual ke pasar yang lebih besar, memungkinkan produksi massal dan biaya per unit yang lebih murah.</li>
                        <li><strong><span class="text-lime-700">Transfer Teknologi (Alih Teknologi):</span></strong> Mengimpor mesin atau barang modal canggih membantu negara berkembang mempelajari teknologi baru.</li>
                        <li><strong>Memperoleh Barang yang Tidak Dapat Diproduksi Sendiri:</strong> Kebutuhan dalam negeri terpenuhi.</li>
                        <li><strong>Meningkatkan Pilihan Konsumen:</strong> Masyarakat memiliki lebih banyak variasi barang dan jasa.</li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">2. Teori Perdagangan Internasional</h3>
                    <p>Mengapa negara A mengekspor barang X dan negara B mengekspor barang Y? Teori ini menjelaskannya.</p>

                    <h4 class="font-bold text-xl mt-6">A. Teori Keunggulan Mutlak (Absolute Advantage)</h4>
                    <p>Dikemukakan oleh <strong><span class="text-amber-700">Adam Smith</span></strong>. Teori ini menyatakan bahwa suatu negara akan <span class="text-blue-600">mengekspor</span> barang yang dapat diproduksinya dengan biaya yang <strong><span class="text-teal-600">secara mutlak lebih murah</span></strong> daripada negara lain, dan <span class="text-blue-600">mengimpor</span> barang yang biaya produksinya secara mutlak lebih mahal.</p>
                    
                    <p><strong>Contoh:</strong> Kemampuan produksi 2 negara (Indonesia & Jepang) untuk 2 barang (Kopi & Mobil) per hari kerja.</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Negara</th>
                                <th>Kopi (Unit)</th>
                                <th>Mobil (Unit)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Indonesia</td>
                                <td><strong>80</strong></td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <td>Jepang</td>
                                <td>40</td>
                                <td><strong>50</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>
                        <li>Indonesia <strong>unggul mutlak</strong> dalam produksi Kopi (80 > 40).</li>
                        <li>Jepang <strong>unggul mutlak</strong> dalam produksi Mobil (50 > 10).</li>
                        <li><strong>Solusi:</strong> Indonesia spesialisasi di Kopi, Jepang spesialisasi di Mobil. Keduanya akan saling untung jika bertukar.</li>
                    </p>

                    <h4 class="font-bold text-xl mt-6">B. Teori Keunggulan Komparatif (Comparative Advantage)</h4>
                    <p>Dikemukakan oleh <strong><span class="text-amber-700">David Ricardo</span></strong>. Teori ini adalah penyempurnaan. Bagaimana jika satu negara (Jepang) unggul mutlak di *kedua* barang?</p>
                    <p>Teori ini menyatakan bahwa perdagangan masih bisa menguntungkan selama kedua negara memiliki <strong><span class="text-teal-600">biaya peluang (opportunity cost)</span></strong> yang berbeda. Negara harus berspesialisasi pada barang di mana ia memiliki keunggulan *komparatif* (kerugian terkecil atau keuntungan terbesar).</p>

                    <p><strong>Contoh:</strong> Data produksi baru.</p>
                    <table>
                        <thead>
                            <tr>
                                <th>Negara</th>
                                <th>Kopi (Unit)</th>
                                <th>Mobil (Unit)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Indonesia</td>
                                <td><strong>80</strong></td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <td>Jepang</td>
                                <td><strong>100</strong></td>
                                <td><strong>50</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Di sini, Jepang unggul mutlak di Kopi (100 > 80) DAN Mobil (50 > 20). Apakah perdagangan tidak terjadi? <strong>Tetap terjadi!</strong> Kita hitung biaya peluangnya (Dasar Tukar Dalam Negeri/DTDN):</p>
                    
                    <ul class="materi-list">
                        <li><strong>DTDN Indonesia:</strong>
                            <ul>
                                <li>Untuk 1 Mobil, Indonesia mengorbankan 4 Kopi (80 / 20).</li>
                                <li>Untuk 1 Kopi, Indonesia mengorbankan 1/4 Mobil (20 / 80).</li>
                            </ul>
                        </li>
                        <li><strong>DTDN Jepang:</strong>
                            <ul>
                                <li>Untuk 1 Mobil, Jepang mengorbankan 2 Kopi (100 / 50).</li>
                                <li>Untuk 1 Kopi, Jepang mengorbankan 1/2 Mobil (50 / 100).</li>
                            </ul>
                        </li>
                    </ul>
                    
                    <p><strong>Analisis Biaya Peluang:</strong></p>
                    <ul class="materi-list">
                        <li><strong>Produksi Mobil:</strong> Biaya peluang 1 Mobil di Jepang (2 Kopi) <span class="text-lime-700">lebih murah</span> daripada di Indonesia (4 Kopi).</li>
                        <li><strong>Produksi Kopi:</strong> Biaya peluang 1 Kopi di Indonesia (1/4 Mobil) <span class="text-lime-700">lebih murah</span> daripada di Jepang (1/2 Mobil).</li>
                    </ul>
                    
                    <div class="penting-box">
                        <strong>Kesimpulan Komparatif:</strong><br>
                        <li>Jepang memiliki <strong>Keunggulan Komparatif</strong> di <strong><span class="text-blue-600">Mobil</span></strong>.</li>
                        <li>Indonesia memiliki <strong>Keunggulan Komparatif</strong> di <strong><span class="text-blue-600">Kopi</span></strong>.</li>
                        <li><strong>Solusi:</strong> Jepang spesialisasi penuh di Mobil, Indonesia spesialisasi penuh di Kopi. Keduanya akan berdagang dan saling diuntungkan.</li>
                    </div>
                    
                    
                    <h3 class="font-bold text-2xl mt-8">3. Kebijakan Perdagangan Internasional</h3>
                    <p>Ini adalah tindakan atau peraturan yang dikeluarkan pemerintah yang memengaruhi jalannya perdagangan internasional.</p>

                    <h4 class="font-bold text-xl mt-6">A. Kebijakan Proteksi (Melindungi Industri Dalam Negeri)</h4>
                    <p>Ini adalah kebijakan untuk <strong><span class="text-red-600">menghambat</span></strong> masuknya barang impor untuk melindungi produsen lokal.</p>
                    <ul class="materi-list">
                        <li><strong><span class="text-red-600">Tarif (Bea Masuk):</span></strong> Pajak yang dikenakan pada barang impor. Ini membuat harga barang impor menjadi lebih mahal di pasar domestik.</li>
                        <li><strong><span class="text-red-600">Kuota:</span></strong> Pembatasan <strong>jumlah fisik</strong> barang yang boleh diimpor. (Misal: Indonesia hanya boleh impor 10.000 ton gula per tahun).</li>
                        <li><strong><span class="text-amber-700">Subsidi:</span></strong> Bantuan pemerintah (uang, keringanan pajak) kepada produsen dalam negeri agar mereka bisa menjual barangnya lebih murah dan bersaing dengan barang impor.</li>
                        <li><strong><span class="text-red-600">Larangan Impor (Embargo):</span></strong> Melarang total impor barang tertentu, seringkali karena alasan politik (embargo) atau kesehatan (misal: larangan impor daging dari negara wabah).</li>
                        <li><strong><span class="text-amber-700">Diskriminasi Harga (Dumping):</span></strong> Ini adalah *praktik* (bukan kebijakan) di mana suatu negara menjual barangnya di luar negeri <strong>lebih murah</strong> daripada di dalam negerinya sendiri, bertujuan untuk menguasai pasar. Negara lain bisa merespons dengan <strong>Bea Masuk Anti-Dumping</strong>.</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">B. Kebijakan Perdagangan Bebas (Free Trade)</h4>
                    <p>Kebijakan yang menginginkan perdagangan tanpa hambatan (tarif 0%, tidak ada kuota). Tujuannya adalah untuk mendorong <span class="text-lime-700">efisiensi</span> dan <span class="text-lime-700">spesialisasi</span> global, sesuai dengan teori keunggulan komparatif.</p>

                    <h3 class="font-bold text-2xl mt-8">4. Neraca Pembayaran (Balance of Payments)</h3>
                    
                    <div class="definisi-box">
                        <strong>Neraca Pembayaran Internasional (NPI)</strong> adalah catatan sistematis dari <strong>semua transaksi ekonomi</strong> antara penduduk suatu negara dengan penduduk negara lain dalam periode waktu tertentu (biasanya satu tahun).
                    </div>
                    
                    <p>NPI mencatat semua aliran uang yang <span class="text-lime-700">MASUK</span> (Kredit/Positif) dan <span class="text-red-600">KELUAR</span> (Debit/Negatif).</p>
                    <ul class="materi-list">
                        <li><strong><span class="text-amber-700">NPI Surplus:</span></strong> Terjadi jika Total Transaksi Kredit (Uang Masuk) > Total Transaksi Debit (Uang Keluar).</li>
                        <li><strong><span class="text-red-600">NPI Defisit:</span></strong> Terjadi jika Total Transaksi Kredit (Uang Masuk) < Total Transaksi Debit (Uang Keluar).</li>
                    </ul>

                    <h4 class="font-bold text-xl mt-6">Komponen Utama Neraca Pembayaran</h4>
                    <ul class="materi-list">
                        <li><strong>1. Neraca Berjalan (Current Account):</strong>
                            <p>Ini adalah komponen terpenting yang mencatat transaksi sehari-hari.</p>
                            <ul>
                                <li><strong>Neraca Perdagangan (Barang):</strong> Mencatat <span class="text-blue-600">Ekspor</span> (Kredit) dan <span class="text-blue-600">Impor</span> (Debit) barang. Jika Ekspor > Impor, disebut <strong>Surplus Perdagangan</strong>.</li>
                                <li><strong>Neraca Jasa:</strong> Transaksi jasa (pariwisata, pengiriman, asuransi). Turis asing ke Bali (Kredit), WNI pakai maskapai asing (Debit).</li>
                                <li><strong>Neraca Pendapatan (Income):</strong> Pendapatan dari investasi (dividen, bunga) atau gaji TKI. TKI kirim uang ke RI (Kredit), Freeport kirim laba ke AS (Debit).</li>
                                <li><strong>Neraca Transfer Sepihak:</strong> Transaksi satu arah (hadiah, hibah bencana alam).</li>
                            </ul>
                        </li>
                        <li><strong>2. Neraca Modal (Capital Account):</strong>
                            <p>(Relatif kecil) Mencatat transfer aset seperti hibah modal atau penjualan aset non-finansial.</p>
                        </li>
                        <li><strong>3. Neraca Finansial (Financial Account):</strong>
                            <p>Mencatat aliran modal untuk investasi.</p>
                            <ul>
                                <li><strong>Investasi Langsung (FDI):</strong> Asing bangun pabrik di Indonesia (Kredit), Pertamina bangun kilang di luar negeri (Debit).</li>
                                <li><strong>Investasi Portofolio:</strong> Asing beli saham di BEI (Kredit), WNI beli obligasi pemerintah AS (Debit).</li>
                            </ul>
                        </li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">5. Kurs Valuta Asing (Exchange Rate)</h3>
                    
                    <div class="definisi-box">
                        <strong>Kurs (Rate)</strong> adalah harga suatu mata uang yang dinyatakan dalam mata uang lain. (Contoh: USD 1 = Rp 16.000).<br>
                        <strong>Valuta Asing (Valas)</strong> adalah mata uang asing itu sendiri (USD, Yen, Euro).
                    </div>

                    <p>Pergerakan kurs ditentukan oleh <span class="text-blue-600">Permintaan</span> dan <span class="text-blue-600">Penawaran</span> valas.
                    <ul class="materi-list">
                        <li><strong>Permintaan Valas (USD):</strong> Dibutuhkan oleh <span class="text-red-600">Importir</span> (bayar impor), investor RI (investasi ke luar), turis RI (ke luar negeri).</li>
                        <li><strong>Penawaran Valas (USD):</strong> Dihasilkan oleh <span class="text-lime-700">Eksportir</span> (dapat bayaran USD), investor asing (bawa USD ke RI), turis asing (bawa USD ke RI).</li>
                    </ul>
                    
                    <p><strong>Pergerakan Nilai Tukar:</strong></p>
                    <ul class="materi-list">
                        <li><strong><span class="text-lime-700">Apresiasi (Menguat):</span></strong> Nilai mata uang domestik naik. (Misal: dari Rp 16.000 menjadi Rp 15.000 per USD).</li>
                        <li><strong><span class="text-red-600">Depresiasi (Melemah):</span></strong> Nilai mata uang domestik turun. (Misal: dari Rp 16.000 menjadi Rp 16.500 per USD).</li>
                    </ul>

                    <h4 class="font-bold text-xl mt-6">Sistem Kurs Valuta Asing</h4>
                    <ul class="materi-list">
                        <li><strong>1. Sistem Kurs Tetap (Fixed Rate):</strong>
                            <p>Pemerintah (Bank Sentral) menetapkan nilai kurs secara paksa pada tingkat tertentu. Bank Sentral wajib intervensi terus-menerus untuk menjaganya.</p>
                        </li>
                        <li><strong>2. Sistem Kurs Mengambang Bebas (Floating Rate):</strong>
                            <p>Nilai kurs diserahkan sepenuhnya pada mekanisme pasar (permintaan dan penawaran valas). Pemerintah tidak intervensi.</p>
                        </li>
                        <li><strong>3. Sistem Kurs Mengambang Terkendali (Managed Float):</strong>
                            <p>Nilai kurs dibiarkan bergerak bebas di pasar, NAMUN Bank Sentral akan <strong><span class="text-amber-700">melakukan intervensi</span></strong> jika pergerakannya dianggap terlalu ekstrem (terlalu lemah atau terlalu kuat) untuk menjaga stabilitas. <strong><span class="text-teal-600">Ini adalah sistem yang dianut oleh Indonesia</span></strong>.</p>
                        </li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">6. Devisa</h3>
                    
                    <div class="definisi-box">
                        <strong>Devisa</strong> adalah seluruh valuta asing (valas) yang dimiliki oleh negara (pemerintah dan swasta) yang digunakan sebagai alat pembayaran luar negeri yang sah.
                    </div>
                    
                    <h4 class="font-bold text-xl mt-6">Sumber-Sumber Devisa (Cara Dapat Valas)</h4>
                    <ul class="materi-list">
                        <li><strong><span class="text-lime-700">Ekspor Barang dan Jasa:</span></strong> Sumber utama. Menjual CPO, nikel, atau jasa pariwisata.</li>
                        <li><strong>Pinjaman Luar Negeri:</strong> Pinjaman dari World Bank atau negara lain.</li>
                        <li><strong>Investasi Asing (FDI/Portofolio):</strong> Modal asing yang masuk.</li>
                        <li><strong>Kiriman Uang (Remitansi):</strong> Uang yang dikirim TKI dari luar negeri.</li>
                        <li><strong>Hibah atau Bantuan:</strong> Bantuan luar negeri.</li>
                    </ul>
                    
                    <h4 class="font-bold text-xl mt-6">Fungsi dan Tujuan Penggunaan Devisa</h4>
                    <ul class="materi-list">
                        <li><strong><span class="text-red-600">Membayar Impor:</span></strong> Membeli mesin, gandum, atau BBM dari luar negeri.</li>
                        <li><strong><span class="text-red-600">Membayar Cicilan dan Bunga Utang Luar Negeri.</span></strong></li>
                        <li>Membiayai perwakilan diplomatik (Kedutaan Besar) di luar negeri.</li>
                        <li>Sebagai <strong><span class="text-blue-600">Cadangan Devisa</span></strong> yang dikelola Bank Indonesia untuk menstabilkan kurs (intervensi pasar).</li>
                    </ul>
                    
                    <h3 class="font-bold text-2xl mt-8">7. Organisasi Kerja Sama Ekonomi Internasional</h3>
                    <p>Kerja sama ini bisa berbentuk:</p>
                    <ul class="materi-list">
                        <li><strong>Bilateral:</strong> 2 negara (Indonesia - Jepang).</li>
                        <li><strong>Regional:</strong> Kawasan tertentu (ASEAN, Uni Eropa).</li>
                        <li><strong>Multilateral:</strong> Banyak negara tanpa batas wilayah (WTO, IMF).</li>
                    </ul>
                    <p><strong>Contoh Organisasi:</strong></p>
                    <ul class="materi-list">
                        <li><strong>WTO (World Trade Organization):</strong> Mengatur perdagangan dunia agar adil dan bebas.</li>
                        <li><strong>IMF (International Monetary Fund):</strong> Menjaga stabilitas moneter global, sering memberi pinjaman saat negara krisis neraca pembayaran.</li>
                        <li><strong>IBRD (World Bank / Bank Dunia):</strong> Memberi pinjaman untuk proyek pembangunan jangka panjang (infrastruktur, pendidikan).</li>
                        <li><strong>ASEAN (Association of Southeast Asian Nations):</strong> Kerja sama regional di Asia Tenggara.</li>
                        <li><strong>APEC (Asia-Pacific Economic Cooperation):</strong> Forum kerja sama ekonomi negara-negara lingkar Pasifik.</li>
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