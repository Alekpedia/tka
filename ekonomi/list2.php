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
    /* Mengatur 3 kolom */
    flex-basis: calc(33.333% - 1rem); 
    min-width: 300px; /* Lebar minimum */
    max-width: 400px; /* Lebar maksimum */
    
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
.tka-color-1  { --shadow-color: #ef444420; } /* Red */
.tka-color-1  .tka-card-icon { background-color: #fee2e2; color: #dc2626; }
.tka-color-2  { --shadow-color: #f9731620; } /* Orange */
.tka-color-2  .tka-card-icon { background-color: #fff7ed; color: #ea580c; }
.tka-color-3  { --shadow-color: #eab30820; } /* Yellow */
.tka-color-3  .tka-card-icon { background-color: #fefce8; color: #ca8a04; }
.tka-color-4  { --shadow-color: #84cc1620; } /* Lime */
.tka-color-4  .tka-card-icon { background-color: #f7fee7; color: #65a30d; }
.tka-color-5  { --shadow-color: #22c55e20; } /* Green */
.tka-color-5  .tka-card-icon { background-color: #f0fdf4; color: #16a34a; }
.tka-color-6  { --shadow-color: #14b8a620; } /* Teal */
.tka-color-6  .tka-card-icon { background-color: #f0fdfa; color: #0d9488; }
.tka-color-7  { --shadow-color: #06b6d420; } /* Cyan */
.tka-color-7  .tka-card-icon { background-color: #ecfeff; color: #0891b2; }
.tka-color-8  { --shadow-color: #3b82f620; } /* Blue */
.tka-color-8  .tka-card-icon { background-color: #eff6ff; color: #2563eb; }
.tka-color-9  { --shadow-color: #8b5cf620; } /* Indigo */
.tka-color-9  .tka-card-icon { background-color: #f5f3ff; color: #7c3aed; }
.tka-color-10 { --shadow-color: #a855f720; } /* Purple */
.tka-color-10 .tka-card-icon { background-color: #faf5ff; color: #9333ea; }


/* Responsif untuk Mobile */
@media (max-width: 1024px) {
    .tka-card {
        flex-basis: calc(50% - 0.75rem); /* 2 kolom di tablet */
    }
}
@media (max-width: 640px) {
    .tka-card {
        flex-basis: 100%; /* 1 kolom di mobile */
    }
}
</style>

<p style="font-size: 1.125rem; color: #64748b; text-align: center; margin-top: 0; margin-bottom: 1.5rem;">
    Pilih salah satu sub-materi TKA Ekonomi SMA/SMK MA di bawah ini untuk memulai.
</p>

<div class="tka-list-container">

    <a href="/tka/ekonomi/konsep-dasar-ilmu-ekonomi" class="tka-card tka-color-1">
        <div class="tka-card-icon"><i data-lucide="line-chart"></i></div>
        <div class="tka-card-content">
            <h3>Konsep Dasar Ilmu Ekonomi</h3>
            <p>Kelangkaan, biaya peluang, dan kegiatan ekonomi.</p>
        </div>
    </a>

    <a href="/tka/ekonomi/permintaan-dan-penawaran" class="tka-card tka-color-8">
        <div class="tka-card-icon"><i data-lucide="scale"></i></div>
        <div class="tka-card-content">
            <h3>Permintaan & Penawaran</h3>
            <p>Permintaan, penawaran, dan keseimbangan pasar.</p>
        </div>
    </a>

    <a href="/tka/ekonomi/pendapatan-nasional" class="tka-card tka-color-5">
        <div class="tka-card-icon"><i data-lucide="trending-up"></i></div>
        <div class="tka-card-content">
            <h3>Pendapatan Nasional</h3>
            <p>Pertumbuhan ekonomi dan pembangunan ekonomi.</p>
        </div>
    </a>

    <a href="/tka/ekonomi/ketenagakerjaan" class="tka-card tka-color-2">
        <div class="tka-card-icon"><i data-lucide="briefcase"></i></div>
        <div class="tka-card-content">
            <h3>Ketenagakerjaan</h3>
            <p>Membahas angkatan kerja, pengangguran, dan upah.</p>
        </div>
    </a>

    <a href="/tka/ekonomi/indeks-harga-dan-inflasi" class="tka-card tka-color-3">
        <div class="tka-card-icon"><i data-lucide="area-chart"></i></div>
        <div class="tka-card-content">
            <h3>Indeks Harga dan Inflasi</h3>
            <p>Memahami penyebab, jenis, dan dampak kenaikan harga.</p>
        </div>
    </a>

    <a href="/tka/ekonomi/bank-sentral-dan-kebijakan-moneter" class="tka-card tka-color-9">
        <div class="tka-card-icon"><i data-lucide="banknote"></i></div>
        <div class="tka-card-content">
            <h3>Bank Sentral & Kebijakan Moneter</h3>
            <p>Peran Bank Sentral dalam mengendalikan peredaran uang.</p>
        </div>
    </a>

    <a href="/tka/ekonomi/kebijakan-fiskal-dan-perpajakan" class="tka-card tka-color-7">
        <div class="tka-card-icon"><i data-lucide="landmark"></i></div>
        <div class="tka-card-content">
            <h3>Kebijakan Fiskal & Perpajakan</h3>
            <p>Peran pemerintah melalui APBN, perpajakan, dan subsidi.</p>
        </div>
    </a>

    <a href="/tka/ekonomi/manajemen-badan-usaha" class="tka-card tka-color-4">
        <div class="tka-card-icon"><i data-lucide="building-2"></i></div>
        <div class="tka-card-content">
            <h3>Manajemen Badan Usaha</h3>
            <p>BUMN, BUMD, BUMS, dan Koperasi.</p>
        </div>
    </a>

    <a href="https://kampusimpian.com/tka/ekonomi/ekonomi-internasional" class="tka-card tka-color-10">
        <div class="tka-card-icon"><i data-lucide="globe-2"></i></div>
        <div class="tka-card-content">
            <h3>Ekonomi Internasional</h3>
            <p>Perdagangan, valuta asing, dan neraca pembayaran.</p>
        </div>
    </a>
    
    <a href="/tka/ekonomi/akuntansi-keuangan-dasar" class="tka-card tka-color-6">
        <div class="tka-card-icon"><i data-lucide="notebook-tabs"></i></div>
        <div class="tka-card-content">
            <h3>Akuntansi Keuangan Dasar</h3>
            <p>Persamaan dasar, jurnal, dan laporan keuangan.</p>
        </div>
    </a>

</div>