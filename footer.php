<footer class="bg-white border-t border-slate-200">
    <div class="container mx-auto px-6 py-12">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="mb-6 md:mb-0">
                <h3 class="text-2xl font-bold text-blue-800 mb-4">Kampus Impian</h3>
                <p class="text-slate-500 text-sm">Platform terintegrasi untuk persiapan Ujian Sekolah, TKA, dan UTBK.</p>
            </div>
            <div>
                <h3 class="font-semibold text-slate-900 mb-4">Fitur Unggulan</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-slate-500 hover:text-indigo-600 transition-colors">Materi TKA</a></li>
                    <li><a href="#" class="text-slate-500 hover:text-indigo-600 transition-colors">Materi UTBK</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-slate-900 mb-4">Bantuan & Panduan</h3>
                <ul class="space-y-3">
                    <li><a href="https://kampusimpian.com/about/" class="text-slate-500 hover:text-indigo-600 transition-colors">Tentang Kami</a></li>
                    <li><a href="https://kampusimpian.com/contact/" class="text-slate-500 hover:text-indigo-600 transition-colors">Kontak Kami</a></li>
                    <li><a href="https://kampusimpian.com/privacy-policy/" class="text-slate-500 hover:text-indigo-600 transition-colors">Kebijakan Privasi</a></li>
                    <li><a href="https://kampusimpian.com/disclaimer/" class="text-slate-500 hover:text-indigo-600 transition-colors">Disclaimer</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="font-semibold text-slate-900 mb-4">Ikuti Kami</h3>
                <div class="flex space-x-4">
                    <a href="#" class="text-slate-400 hover:text-indigo-600 hover:scale-110 transition-all transform"><i data-lucide="facebook" class="w-6 h-6"></i></a>
                    <a href="#" class="text-slate-400 hover:text-indigo-600 hover:scale-110 transition-all transform"><i data-lucide="twitter" class="w-6 h-6"></i></a>
                    <a href="#" class="text-slate-400 hover:text-indigo-600 hover:scale-110 transition-all transform"><i data-lucide="instagram" class="w-6 h-6"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-12 border-t border-slate-200 pt-8 text-center text-slate-500 text-sm">
            <p>© 2025 Kampus Impian. Semua Hak Cipta Dilindungi.</p>
        </div>
    </div>
</footer>    

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
       AOS.init({
            duration: 800,
            once: true,
            easing: 'ease-in-out-cubic',
        });

        // Initialize Lucide icons
        lucide.createIcons();

        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenuButton) {
            mobileMenuButton.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
        }
        
        // Anti-inspect dari file referensi
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
        document.addEventListener('keydown', function(e) {
            if (e.key === "F12" || ((e.ctrlKey || e.metaKey) && e.shiftKey && (e.key === 'I' || e.key === 'J')) || ((e.ctrlKey || e.metaKey) && e.key === 'U')) {
                e.preventDefault();
            }
        });
    </script>

    <script>
document.addEventListener('DOMContentLoaded', () => {

    // --- Accordion Logic ---
    const accordionHeaders = document.querySelectorAll('.accordion-header');
    
    if (accordionHeaders.length > 0) {
        accordionHeaders.forEach((header, index) => {
            const content = header.nextElementSibling;
            const icon = header.querySelector('.accordion-icon');

            // Buka item pertama (Tips Umum) secara default
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
    
</body>
</html>