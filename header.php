<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        // Atur nilai default jika variabel tidak di-set di halaman (index.php, latihan-sd.php, dll.)
        $page_title = isset($page_title) ? $page_title : 'Materi dan Soal TKA Lengkap';
        $page_description = isset($page_description) ? $page_description : 'Kumpulan latihan soal TKA, UTBK, dan persiapan masuk PTN.';
        $page_url = 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        // Gunakan logo default yang kamu tentukan
        $page_image = isset($page_image) ? $page_image : 'https://kampusimpian.com/wp-content/uploads/2025/10/kampusimpianlogo.png'; 
    ?>

    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($page_url); ?>">
    <meta name="robots" content="index, follow"> 
    <meta name="author" content="@rangkumanmateri_"> 

    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($page_url); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($page_image); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Latihan TKA">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($page_image); ?>">

    <meta name="msvalidate.01" content="BF002046016B0B7A8843EF446F736C79" class="yoast-seo-meta-tag" />
    <meta name="google-site-verification" content="I6IztRvAjmAR4ZU2QOGK1Mvvpn1DDif6bAu_B9S1T9s" class="yoast-seo-meta-tag" />
    <meta name="yandex-verification" content="26ae70c056d73598" class="yoast-seo-meta-tag" />
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="icon" href="https://kampusimpian.com/wp-content/uploads/2025/10/cropped-android-chrome-512x512-1-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://kampusimpian.com/wp-content/uploads/2025/10/cropped-android-chrome-512x512-1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://kampusimpian.com/wp-content/uploads/2025/10/cropped-android-chrome-512x512-1-180x180.png" />
    <meta name="msapplication-TileImage" content="https://kampusimpian.com/wp-content/uploads/2025/10/cropped-android-chrome-512x512-1-270x270.png" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
            scroll-behavior: smooth;
            background-color: #f8fafc; /* Latar default terang */
            color: #1e293b; 
        }
        
        /* CSS UNTUK STICKY FOOTER */
        html, body { 
            height: 100%; /* Pastikan html dan body setinggi 100% */
        }
        body {
            display: flex;
            flex-direction: column;
        }
        main {
            flex-grow: 1; /* Paksa <main> untuk mengisi ruang kosong */
        }
        /* --- Akhir Sticky Footer --- */


        .cta-gradient { background-image: linear-gradient(to right, #581c87, #0e7490); transition: all 0.3s ease; }
        .cta-gradient:hover { box-shadow: 0 10px 20px -10px rgba(34, 211, 238, 0.4); transform: translateY(-2px); }

        /* Tombol WhatsApp */
        .btn-whatsapp {
            background-color: #25D366;
            transition: all 0.3s ease;
        }
        .btn-whatsapp:hover {
            background-color: #1EBE5A; /* Warna hover sedikit lebih gelap */
            box-shadow: 0 10px 20px -10px rgba(37, 211, 102, 0.4); 
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-slate-50"> 

<header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-blue-800">
            Kampus Impian
        </a>
        
        <div class="hidden md:flex items-center space-x-8">
            <a href="/tka" class="text-gray-600 hover:text-blue-700 font-medium">Beranda</a>
            <a href="/tka/sd" class="text-gray-600 hover:text-blue-700 font-medium">SD/MI</a>
            <a href="/tka/smp" class="text-gray-600 hover:text-blue-700 font-medium">SMP/MTS</a>
            <a href="/tka/sma" class="text-gray-600 hover:text-blue-700 font-medium">SMA/SMK/MA</a>
        </div>

        <a href="#" target="_blank" class="hidden md:inline-flex items-center justify-center btn-whatsapp text-white font-semibold px-6 py-2 rounded-lg shadow-md transition-transform transform">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="w-5 h-5 mr-2">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.626-2.957 6.584-6.591 6.584zm-1.705-4.854c-.146-.077-.82-.403-1.028-.448-.206-.046-.353-.068-.499.068-.146.136-.39.448-.48.543-.09.095-.18.115-.33.068-.15-.046-.63-.232-1.2-.742-.44-.39-.73-.886-.82-1.033-.09-.147-.01-.224.06-.291.06-.06.14-.17.21-.258.07-.09.09-.14.12-.24.03-.09.02-.17 0-.248-.02-.077-.499-1.2-.68-1.646-.18-.445-.36-.383-.499-.383-.14.002-.3.023-.45.023s-.39.068-.59.332c-.2.262-.76.734-.76 1.79 0 1.057.78 2.072.88 2.218.11.146 1.54 2.35 3.74 3.3a12.35 12.35 0 0 0 1.28.473c.49.18.88.14.19.09.28-.05.82-.336.98-.65.16-.31.16-.58.11-.65s-.09-.11-.19-.19z"/>
            </svg>
            Gabung Saluran WA
        </a>

        <button id="mobile-menu-button" class="md:hidden">
            <i data-lucide="menu" class="w-6 h-6 text-gray-600"></i>
        </button>
    </nav>
    
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
        <a href="/tka" class="block py-2 text-gray-600 hover:text-blue-700">Beranda</a>
        <a href="/tka/sd" class="block py-2 text-gray-600 hover:text-blue-700"> SD/MI</a>
        <a href="/tka/smp" class="block py-2 text-gray-600 hover:text-blue-700"> SMP/MTS</a>
        <a href="/tka/sma" class="block py-2 text-gray-600 hover:text-blue-700"> SMA/SMK/MA</a>
        
        <a href="#" target="_blank" class="flex items-center justify-center mt-4 btn-whatsapp text-white text-center font-semibold px-6 py-2 rounded-lg shadow-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" viewBox="0 0 16 16" class="w-5 h-5 mr-2">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.626-2.957 6.584-6.591 6.584zm-1.705-4.854c-.146-.077-.82-.403-1.028-.448-.206-.046-.353-.068-.499.068-.146.136-.39.448-.48.543-.09.095-.18.115-.33.068-.15-.046-.63-.232-1.2-.742-.44-.39-.73-.886-.82-1.033-.09-.147-.01-.224.06-.291.06-.06.14-.17.21-.258.07-.09.09-.14.12-.24.03-.09.02-.17 0-.248-.02-.077-.499-1.2-.68-1.646-.18-.445-.36-.383-.499-.383-.14.002-.3.023-.45.023s-.39.068-.59.332c-.2.262-.76.734-.76 1.79 0 1.057.78 2.072.88 2.218.11.146 1.54 2.35 3.74 3.3a12.35 12.35 0 0 0 1.28.473c.49.18.88.14.19.09.28-.05.82-.336.98-.65.16-.31.16-.58.11-.65s-.09-.11-.19-.19z"/>
            </svg>
            Gabung Saluran WA
        </a>
    </div>
</header>