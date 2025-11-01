<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php
        // Atur nilai default jika variabel tidak di-set di halaman (index.php, latihan-sd.php, dll.)
        $page_title = isset($page_title) ? $page_title : 'Latihan TKA - Platform Belajar Online';
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
    </style>
</head>
<body class="bg-slate-50"> 

<header class="bg-white/80 backdrop-blur-md shadow-sm sticky top-0 z-50">
    <nav class="container mx-auto px-6 py-4 flex justify-between items-center">
        <a href="/" class="text-2xl font-bold text-blue-800">
             Kampus Impian
        </a>
        <div class="hidden md:flex items-center space-x-8">
            <a href="#" class="text-gray-600 hover:text-blue-700 font-medium">Info Kampus</a>
            <a href="#" class="text-gray-600 hover:text-blue-700 font-medium">Nilai Raport</a>
            <a href="#" class="text-gray-600 hover:text-blue-700 font-medium">Passing Grade</a>
            <a href="#" class="text-gray-600 hover:text-blue-700 font-medium">KIP Kuliah</a>
            <a href="#" class="text-gray-600 hover:text-blue-700 font-medium">SNBP</a>
            <a href="#" class="text-gray-600 hover:text-blue-700 font-medium">SNBT</a>
        </div>
        <a href="#" target="_blank" class="hidden md:block cta-gradient text-white font-semibold px-6 py-2 rounded-lg shadow-md transition-transform transform hover:scale-105">
            Mulai Belajar
        </a>
        <button id="mobile-menu-button" class="md:hidden">
            <i data-lucide="menu" class="w-6 h-6 text-gray-600"></i>
        </button>
    </nav>
    
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-4">
        <a href="#" class="block py-2 text-gray-600 hover:text-blue-700">Info Kampus</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-blue-700">Nilai Raport</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-blue-700">Passing Grade</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-blue-700">KIP Kuliah</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-blue-700">SNBP</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-blue-700">SNBT</a>
        <a href="#" target="_blank" class="block mt-4 cta-gradient text-white text-center font-semibold px-6 py-2 rounded-lg shadow-md">
            Mulai Belajar
        </a>
    </div>
</header>