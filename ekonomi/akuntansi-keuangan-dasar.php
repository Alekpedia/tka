<?php 
    // [PENTING] Tidak ada kode proteksi di sini (sesuai permintaanmu)

    // ==================================================
    // 2. META TAG & HEADER
    // ==================================================
    $page_title = 'Materi TKA Ekonomi: Akuntansi Keuangan Dasar';
    $page_description = 'Pelajari materi lengkap Akuntansi SMA, mulai dari Persamaan Dasar Akuntansi, Mekanisme Debit Kredit, Siklus Akuntansi, hingga Laporan Keuangan.';
    
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
        .materi-list ul, .materi-list ol {
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
            font-size: 0.9em; 
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
                <h2 class="text-lg font-semibold text-teal-600">Materi Ekonomi SMA</h2>
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mt-2">
                    Akuntansi Keuangan Dasar
                </h1>
            </div>
            
            <div class="max-w-3xl mx-auto bg-white p-6 md:p-10 rounded-2xl shadow-lg border border-slate-200">
                
                <div class="prose prose-lg max-w-none" data-aos="fade-up" data-aos-delay="100">
                    <p>Selamat datang di Akuntansi! Akuntansi sering disebut sebagai <strong><span class="text-teal-600">"bahasa bisnis" (the language of business)</span></strong>. Ini adalah proses sistematis untuk mengidentifikasi, mencatat, mengukur, mengklasifikasi, meringkas, menginterpretasi, dan mengkomunikasikan informasi keuangan untuk pengambilan keputusan.</p>
                    
                    <h3 class="font-bold text-2xl mt-8">1. Persamaan Dasar Akuntansi (PDA)</h3>
                    <p>Ini adalah fondasi dari seluruh sistem akuntansi. Logikanya sederhana: Sumber daya yang dimiliki perusahaan (Aset) pasti berasal dari dua sumber: dari utang (Liabilitas) atau dari modal pemilik (Ekuitas).</p>
                    
                    <div class="definisi-box">
                        <strong>Rumus Dasar:</strong><br>
                        <span class="text-blue-600 font-bold">ASET (Harta)</span> = <span class="text-red-600 font-bold">LIABILITAS (Utang)</span> + <span class="text-lime-700 font-bold">EKUITAS (Modal)</span>
                    </div>
                    
                    <ul class="materi-list">
                        <li><strong><span class="text-blue-600">Aset (Harta):</span></strong> Sumber daya yang dimiliki perusahaan. (Contoh: Kas, Piutang, Perlengkapan, Peralatan, Gedung).</li>
                        <li><strong><span class="text-red-600">Liabilitas (Utang):</span></strong> Kewajiban perusahaan kepada pihak ketiga. (Contoh: Utang Usaha, Utang Bank).</li>
                        <li><strong><span class="text-lime-700">Ekuitas (Modal):</span></strong> Hak pemilik atas aset perusahaan. (Modal Awal).</li>
                    </ul>
                    
                    <p>Persamaan ini kemudian berkembang dengan memasukkan unsur yang memengaruhi modal:</p>
                    <ul class="materi-list">
                        <li><strong><span class="text-green-600">Pendapatan (Revenue):</span></strong> Menambah Ekuitas.</li>
                        <li><strong><span class="text-orange-600">Beban (Expense):</span></strong> Mengurangi Ekuitas.</li>
                        <li><strong><span class="text-purple-600">Prive (Drawing):</span></strong> Pengambilan pribadi pemilik, mengurangi Ekuitas.</li>
                    </ul>
                    
                    <div class="definisi-box">
                        <strong>Rumus Pengembangan:</strong><br>
                        <strong>Aset</strong> = <strong>Liabilitas</strong> + (<strong>Modal Awal</strong> + <span class="text-green-600"><strong>Pendapatan</strong></span> - <span class="text-orange-600"><strong>Beban</strong></span> - <span class="text-purple-600"><strong>Prive</strong></span>)
                    </div>

                    <h3 class="font-bold text-2xl mt-8">2. Mekanisme Debit dan Kredit</h3>
                    <p>Ini adalah aturan "tangan kiri" dan "tangan kanan" dalam akuntansi. Setiap transaksi <strong>HARUS</strong> memengaruhi minimal dua akun, dan total Debit harus selalu sama dengan total Kredit (Balance).</p>
                    
                    <ul class="materi-list">
                        <li><strong>DEBIT (Dr):</strong> Sisi KIRI dari sebuah akun.</li>
                        <li><strong>KREDIT (Cr):</strong> Sisi KANAN dari sebuah akun.</li>
                    </ul>
                    
                    <p><strong><span class="text-amber-700">Saldo Normal</span></strong> adalah sisi di mana sebuah akun akan bertambah nilainya. Ini adalah aturan yang wajib dihafal.</p>

                    <table>
                        <thead>
                            <tr>
                                <th>Kelompok Akun</th>
                                <th>Saldo Normal</th>
                                <th>Bertambah (+)</th>
                                <th>Berkurang (-)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong><span class="text-blue-600">ASET (Harta)</span></strong></td>
                                <td><span class="text-blue-600">DEBIT</span></td>
                                <td><span class="text-blue-600">DEBIT</span></td>
                                <td><span class="text-red-600">KREDIT</span></td>
                            </tr>
                            <tr>
                                <td><strong><span class="text-red-600">LIABILITAS (Utang)</span></strong></td>
                                <td><span class="text-red-600">KREDIT</span></td>
                                <td><span class="text-red-600">KREDIT</span></td>
                                <td><span class="text-blue-600">DEBIT</span></td>
                            </tr>
                            <tr>
                                <td><strong><span class="text-lime-700">EKUITAS (Modal)</span></strong></td>
                                <td><span class="text-red-600">KREDIT</span></td>
                                <td><span class="text-red-600">KREDIT</span></td>
                                <td><span class="text-blue-600">DEBIT</span></td>
                            </tr>
                            <tr>
                                <td><strong><span class="text-purple-600">PRIVE (Drawing)</span></strong></td>
                                <td><span class="text-blue-600">DEBIT</span></td>
                                <td><span class="text-blue-600">DEBIT</span></td>
                                <td><span class="text-red-600">KREDIT</span></td>
                            </tr>
                            <tr>
                                <td><strong><span class="text-green-600">PENDAPATAN</span></strong></td>
                                <td><span class="text-red-600">KREDIT</span></td>
                                <td><span class="text-red-600">KREDIT</span></td>
                                <td><span class="text-blue-600">DEBIT</span></td>
                            </tr>
                            <tr>
                                <td><strong><span class="text-orange-600">BEBAN</span></strong></td>
                                <td><span class="text-blue-600">DEBIT</span></td>
                                <td><span class="text-blue-600">DEBIT</span></td>
                                <td><span class="text-red-600">KREDIT</span></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="penting-box">
                        <strong>Tips Menghafal (Gunakan 5 Jari):</strong><br>
                        <li>Akun dengan Saldo Normal <strong>DEBIT</strong>: <strong><span class="text-blue-600">Aset</span></strong>, <strong><span class="text-orange-600">Beban</span></strong>, <strong><span class="text-purple-600">Prive</span></strong>. (Jika bertambah, catat di KIRI).</li>
                        <li>Akun dengan Saldo Normal <strong>KREDIT</strong>: <strong><span class="text-red-600">Utang/Liabilitas</span></strong>, <strong><span class="text-lime-700">Modal/Ekuitas</span></strong>, <strong><span class="text-green-600">Pendapatan</span></strong>. (Jika bertambah, catat di KANAN).</li>
                    </div>
                    
                    <h4 class="font-bold text-xl mt-6">Contoh Analisis Transaksi:</h4>
                    <p><i>"Membeli Perlengkapan (Aset) seharga Rp 500.000 secara tunai (Kas/Aset)."</i></p>
                    <ul class="materi-list">
                        <li><strong>Analisis:</strong> Akun <span class="text-blue-600">Perlengkapan</span> (Aset) bertambah. Akun <span class="text-blue-600">Kas</span> (Aset) berkurang.</li>
                        <li><strong>Jurnal:</strong>
                            <ul>
                                <li>(Dr) Perlengkapan Rp 500.000</li>
                                <li>(Cr) Kas ....................... Rp 500.000</li>
                            </ul>
                        </li>
                    </ul>

                    <h3 class="font-bold text-2xl mt-8">3. Siklus Akuntansi</h3>
                    <p>Ini adalah serangkaian langkah yang dilakukan secara berurutan dalam satu periode akuntansi (biasanya bulanan atau tahunan) untuk mengubah data transaksi menjadi Laporan Keuangan.</p>
                    
                    

                    <ol class="materi-list list-decimal">
                        <li><strong>Analisis Bukti Transaksi:</strong> Menganalisis bukti sah (Kuitansi, Faktur, Nota) untuk menentukan akun apa yang terpengaruh.</li>
                        
                        <li><strong>Membuat Jurnal Umum (Journalizing):</strong> Mencatat transaksi ke dalam "buku harian" (Jurnal) secara kronologis (urut tanggal) menggunakan aturan Debit-Kredit.</li>
                        
                        <li><strong>Posting ke Buku Besar (Ledger):</strong> Memindahkan catatan dari Jurnal Umum ke akun masing-masing di Buku Besar (mengelompokkan). (Contoh: Semua transaksi 'Kas' dikumpulkan di 1 akun Buku Besar 'Kas').</li>
                        
                        <li><strong>Menyusun Neraca Saldo (Trial Balance):</strong> Daftar semua akun dari Buku Besar beserta saldo akhirnya (Debit atau Kredit). <strong><span class="text-amber-700">Total Debit dan Kredit di sini HARUS sama.</span></strong></li>
                        
                        <li><strong>Jurnal Penyesuaian (Adjusting Entries):</strong> Dibuat di akhir periode untuk menyesuaikan akun agar mencerminkan keadaan sebenarnya (basis akrual). Wajib dibuat untuk:
                            <ul class="materi-list">
                                <li><strong>Beban Dibayar Dimuka:</strong> (cth: Sewa dibayar untuk 1 tahun).</li>
                                <li><strong>Pendapatan Diterima Dimuka:</strong> (cth: Terima uang DP proyek).</li>
                                <li><strong>Beban yang Masih Harus Dibayar (Utang Beban):</strong> (cth: Utang Gaji).</li>
                                <li><strong>Pendapatan yang Masih Harus Diterima (Piutang Pendapatan).</strong></li>
                                <li><strong>Penyusutan (Depresiasi) Aset Tetap.</strong></li>
                            </ul>
                        </li>
                        
                        <li><strong>Neraca Saldo Setelah Penyesuaian (NSSP):</strong> Neraca Saldo yang telah dikoreksi dengan Jurnal Penyesuaian. Ini adalah dasar utama pembuatan Laporan Keuangan.</li>
                        
                        <li><strong>Menyusun Laporan Keuangan (Financial Statements):</strong> (Dibahas di poin 4).</li>
                        
                        <li><strong>Jurnal Penutup (Closing Entries):</strong> Dibuat di akhir tahun untuk <strong><span class="text-red-600">menutup (menol-kan)</span></strong> akun-akun nominal (sementara) dan memindahkan saldonya ke Ekuitas. Akun yang ditutup:
                            <ul class="materi-list">
                                <li><span class="text-green-600">Pendapatan</span></li>
                                <li><span class="text-orange-600">Beban</span></li>
                                <li><span class="text-purple-600">Prive</span></li>
                                <li>Ikhtisar Laba Rugi</li>
                            </ul>
                        </li>

                        <li><strong>Neraca Saldo Setelah Penutupan:</strong> Berisi sisa akun riil saja (<span class="text-blue-600">Aset</span>, <span class="text-red-600">Liabilitas</span>, <span class="text-lime-700">Ekuitas</span>). Ini adalah saldo awal untuk periode berikutnya.</li>
                    </ol>
                    
                    <h3 class="font-bold text-2xl mt-8">4. Laporan Keuangan Utama</h3>
                    <p>Ini adalah output atau hasil akhir dari proses akuntansi. Ada 3 laporan utama yang saling terkait dan harus dibuat berurutan.</p>

                    <h4 class="font-bold text-xl mt-6">A. Laporan Laba Rugi (Income Statement)</h4>
                    <p>Menunjukkan kinerja perusahaan selama satu periode.</p>
                    <div class="definisi-box">
                        <strong>Rumus:</strong> Total <span class="text-green-600"><strong>Pendapatan</strong></span> - Total <span class="text-orange-600"><strong>Beban</strong></span> = <span class="text-lime-700"><strong>Laba Bersih</strong></span> (jika +) atau <span class="text-red-600"><strong>Rugi Bersih</strong></span> (jika -)
                    </div>

                    <h4 class="font-bold text-xl mt-6">B. Laporan Perubahan Ekuitas/Modal (Statement of Owner's Equity)</h4>
                    <p>Menunjukkan perubahan modal pemilik selama satu periode.</p>
                    <div class="definisi-box">
                        <strong>Rumus:</strong><br>
                        <strong>Modal Awal</strong><br>
                        + <span class="text-lime-700">(Laba Bersih)</span> <-- <i>Diambil dari Laporan Laba Rugi</i><br>
                        - <span class="text-purple-600">(Prive)</span><br>
                        = <strong><span class="text-blue-600">Modal Akhir</span></strong>
                    </div>

                    <h4 class="font-bold text-xl mt-6">C. Neraca (Balance Sheet / Laporan Posisi Keuangan)</h4>
                    <p>Menunjukkan posisi keuangan perusahaan pada <strong>satu tanggal tertentu</strong>. Neraca harus seimbang (Balance).</p>
                    <div class="definisi-box">
                        <strong>Rumus (Kembali ke PDA):</strong><br>
                        <strong><span class="text-blue-600">TOTAL ASET</span></strong> = <strong><span class="text-red-600">TOTAL LIABILITAS</span></strong> + <strong><span class="text-blue-600">MODAL AKHIR</span></strong> <-- <i>Diambil dari Laporan Perubahan Ekuitas</i>
                    </div>
                    
                    <div class="penting-box">
                        <strong>Keterkaitan Laporan Keuangan (WAJIB PAHAM):</strong><br>
                        <ol class="list-decimal ml-5">
                            <li>Buat <strong>Laporan Laba Rugi</strong> dulu untuk menemukan <strong><span class="text-lime-700">Laba Bersih</span></strong>.</li>
                            <li>Masukkan <strong><span class="text-lime-700">Laba Bersih</span></strong> ke <strong>Laporan Perubahan Ekuitas</strong> untuk menemukan <strong><span class="text-blue-600">Modal Akhir</span></strong>.</li>
                            <li>Masukkan <strong><span class="text-blue-600">Modal Akhir</span></strong> ke <strong>Neraca</strong> untuk menyeimbangkan persamaan Aset = Liabilitas + Ekuitas.</li>
                        </ol>
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