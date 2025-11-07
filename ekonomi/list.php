<style>
/* Kontainer untuk list */
.tka-list-container {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem; /* 24px */
    justify-content: center; /* Kartu akan di tengah */
    margin-top: 1.5rem;
    padding: 0;
    list-style: none; /* Menghilangkan bullet */
}

/* Desain Kartu */
.tka-card {
    /* Mengatur 2 kolom */
    flex-basis: calc(50% - 0.75rem); 
    min-width: 300px; /* Lebar minimum */
    max-width: 450px; /* Lebar maksimum */
    
    background-color: #fff;
    border-radius: 1rem; /* rounded-2xl */
    padding: 1.5rem; /* p-6 */
    box-shadow: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
    border: 1px solid #e5e7eb; /* border-slate-200 */
    display: flex;
    align-items: flex-start; /* Ikon dan teks sejajar di atas */
    gap: 1rem; /* space-x-4 */
    text-decoration: none;
    color: #1e293b; /* text-slate-800 */
    transition: all 0.3s ease;
}

/* Efek Hover */
.tka-card:hover {
    transform: translateY(-4px);
    /* Variabel --shadow-color akan diisi oleh kelas warna */
    box-shadow: 0 10px 15px -3px var(--shadow-color, rgb(0 0 0 / 0.1)), 0 4px 6px -4px var(--shadow-color, rgb(0 0 0 / 0.1));
}

/* Ikon */
.tka-card-icon {
    flex-shrink: 0;
    width: 3.5rem; /* w-14 */
    height: 3.5rem; /* h-14 */
    border-radius: 0.75rem; /* rounded-xl */
    display: flex;
    align-items: center;
    justify-content: center;
    transition: transform 0.3s ease;
}
.tka-card:hover .tka-card-icon {
    transform: scale(1.1);
}
.tka-card-icon svg {
    width: 1.75rem; /* w-7 */
    height: 1.75rem; /* h-7 */
}

/* Konten Teks */
.tka-card-content h3 {
    font-size: 1.125rem; /* text-lg */
    font-weight: 700; /* font-bold */
    margin-top: 0;
    margin-bottom: 0.25rem;
    color: #1e293b;
}
.tka-card-content p {
    font-size: 0.875rem; /* text-sm */
    color: #64748b; /* text-slate-500 */
    margin: 0;
}

/* [PENTING] Kelas Warna-Warni */
.tka-color-1 { --shadow-color: #f59e0b20; }
.tka-color-1 .tka-card-icon { background-color: #fffbeb; color: #d97706; }

.tka-color-2 { --shadow-color: #3b82f620; }
.tka-color-2 .tka-card-icon { background-color: #eff6ff; color: #2563eb; }

.tka-color-3 { --shadow-color: #8b5cf620; }
.tka-color-3 .tka-card-icon { background-color: #f5f3ff; color: #7c3aed; }

.tka-color-4 { --shadow-color: #10b98120; }
.tka-color-4 .tka-card-icon { background-color: #f0fdfa; color: #059669; }

/* Responsif untuk Mobile */
@media (max-width: 768px) {
    .tka-card {
        flex-basis: 100%; /* Menjadi 1 kolom di mobile */
    }
}
</style>

<h2 style="font-size: 1.875rem; font-weight: 700; color: #1e293b; text-align: center; margin-bottom: 1rem;">
    Materi TKA Ekonomi
</h2>

<div class="tka-list-container">

    <a href="konsep-dasar-ilmu-ekonomi" class="tka-card tka-color-1">
        <div class="tka-card-icon">
            <i data-lucide="line-chart"></i>
        </div>
        <div class="tka-card-content">
            <h3>Konsep Dasar Ilmu Ekonomi</h3>
            <p>Pelajari inti masalah kelangkaan, biaya peluang, dan prinsip ekonomi.</p>
        </div>
    </a>

    <a href="ekonomi-mikro-dan-makro" class="tka-card tka-color-2">
        <div class="tka-card-icon">
            <i data-lucide="scale"></i>
        </div>
        <div class="tka-card-content">
            <h3>Ekonomi Mikro dan Makro</h3>
            <p>Pahami perbedaan permintaan/penawaran vs. inflasi/pendapatan nasional.</p>
        </div>
    </a>

    <a href="ekonomi-internasional" class="tka-card tka-color-3">
        <div class="tka-card-icon">
            <i data-lucide="globe-2"></i>
        </div>
        <div class="tka-card-content">
            <h3>Ekonomi Internasional</h3>
            <p>Pelajari tentang perdagangan antar negara, valuta asing, dan neraca pembayaran.</p>
        </div>
    </a>

    <a href="akuntansi-keuangan-dasar" class="tka-card tka-color-4">
        <div class="tka-card-icon">
            <i data-lucide="notebook-tabs"></i>
        </div>
        <div class="tka-card-content">
            <h3>Akuntansi Keuangan Dasar</h3>
            <p>Pahami dasar-dasar debit/kredit, jurnal, dan laporan keuangan sederhana.</p>
        </div>
    </a>
</div>