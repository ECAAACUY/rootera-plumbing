<!-- HERO SECTION COMPONENT -->
<section class="relative bg-brand-navy text-white overflow-hidden">
    <!-- Subtle Background Pattern/Glow -->
    <div class="absolute inset-0 opacity-10 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-brand-green via-transparent to-transparent"></div>

    <!-- 1. HEADER & NAVIGATION -->
    <header class="relative z-50 border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <!-- Brand Logo (With White Background Container as requested) -->
                <div class="flex-shrink-0">
                    <a href="#" class="flex items-center bg-white px-4 py-2 rounded-lg shadow-md hover:opacity-90 transition-all">
                        <img src="{{ asset('images/Logo.png') }}" alt="Rootera Plumbing Logo" class="h-10 sm:h-12 w-auto object-contain">
                    </a>
                </div>

                <!-- Desktop Navigation Menu -->
                <nav class="hidden md:flex space-x-8 text-sm font-medium">
                    <a href="#layanan" class="hover:text-brand-green transition-colors py-2">Layanan Utama</a>
                    <a href="#mengapa-kami" class="hover:text-brand-green transition-colors py-2">Mengapa Kami</a>
                    <a href="#alur-kerja" class="hover:text-brand-green transition-colors py-2">Alur Kerja</a>
                    <a href="#galeri" class="hover:text-brand-green transition-colors py-2">Galeri Proyek</a>
                    <a href="#testimoni" class="hover:text-brand-green transition-colors py-2">Testimoni</a>
                    <a href="#faq" class="hover:text-brand-green transition-colors py-2">FAQ</a>
                </nav>

                <!-- Header CTA Button -->
                <div class="hidden sm:block">
                    <a href="https://wa.me/628123456789" target="_blank" class="inline-flex items-center bg-brand-green hover:bg-brand-green-hover text-white text-sm font-semibold px-5 py-2.5 rounded-lg transition-all shadow-lg hover:shadow-brand-green/20 hover:-translate-y-0.5">
                        <i data-lucide="phone" class="w-4 h-4 mr-2"></i>
                        Hubungi Kami
                    </a>
                </div>

                <!-- Mobile Menu Button (Toggle handled via simple Alpine-like vanilla CSS/JS if needed, or keeping it clean) -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-white hover:text-brand-green focus:outline-none p-2" aria-label="Toggle Menu">
                        <i data-lucide="menu" class="w-6 h-6"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu (Hidden by default, toggled with JS) -->
        <div id="mobile-menu" class="hidden md:hidden bg-brand-navy-dark border-b border-white/10 px-4 pt-2 pb-4 space-y-1">
            <a href="#layanan" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy-light hover:text-brand-green">Layanan Utama</a>
            <a href="#mengapa-kami" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy-light hover:text-brand-green">Mengapa Kami</a>
            <a href="#alur-kerja" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy-light hover:text-brand-green">Alur Kerja</a>
            <a href="#galeri" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy-light hover:text-brand-green">Galeri Proyek</a>
            <a href="#testimoni" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy-light hover:text-brand-green">Testimoni</a>
            <a href="#faq" class="block px-3 py-2 rounded-md text-base font-medium hover:bg-brand-navy-light hover:text-brand-green">FAQ</a>
            <a href="https://wa.me/628123456789" target="_blank" class="block w-full text-center bg-brand-green hover:bg-brand-green-hover text-white text-base font-semibold px-4 py-3 rounded-md mt-4 transition-all">
                <i data-lucide="phone" class="inline w-4 h-4 mr-2"></i> Hubungi Kami
            </a>
        </div>
    </header>

    <!-- 2. HERO BODY CONTENT -->
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-16 lg:pt-20 lg:pb-24">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-8 items-center">
            <!-- Left Info Column -->
            <div class="lg:col-span-7 flex flex-col items-start text-left space-y-6 z-10">
                
                <!-- Badge: Teknisi Berpengalaman & 24/7 (Modified as requested) -->
                <div class="inline-flex items-center bg-white/10 backdrop-blur-md border border-white/20 rounded-full px-4 py-1.5 text-xs sm:text-sm font-semibold text-brand-green tracking-wide">
                    <span class="flex h-2 w-2 relative mr-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-green opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-green"></span>
                    </span>
                    Teknisi Berpengalaman - Tersedia 24/7
                </div>

                <!-- Headline -->
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                    Solusi Plumbing <br>
                    <span class="text-brand-green relative inline-block">
                        Profesional
                    </span><br class="hidden sm:inline"> 
                    untuk Hunian Anda
                </h1>

                <!-- Description -->
                <p class="text-base sm:text-lg text-gray-300 max-w-2xl font-normal leading-relaxed">
                    Rootera Plumbing hadir memberikan layanan instalasi, perbaikan, dan perawatan sistem perpipaan berkualitas tinggi. Teknisi berpengalaman, harga transparan, garansi tertulis.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
                    <a href="https://wa.me/628123456789" target="_blank" class="inline-flex items-center justify-center bg-brand-green hover:bg-brand-green-hover text-white text-base font-bold px-8 py-4 rounded-lg transition-all shadow-lg hover:shadow-brand-green/30 hover:-translate-y-0.5">
                        <i data-lucide="message-square" class="w-5 h-5 mr-2"></i>
                        Hubungi via WhatsApp
                    </a>
                    <a href="#layanan" class="inline-flex items-center justify-center border-2 border-white/30 hover:border-white hover:bg-white/10 text-white text-base font-semibold px-8 py-4 rounded-lg transition-all">
                        Lihat Layanan Kami
                        <i data-lucide="arrow-down" class="w-4 h-4 ml-2 animate-bounce"></i>
                    </a>
                </div>
            </div>

            <!-- Right Visual Column (Premium Plumber Photo Container) -->
            <div class="lg:col-span-5 relative w-full max-w-md lg:max-w-none mx-auto">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border-4 border-white/10 aspect-[4/3] sm:aspect-square lg:aspect-[4/5]">
                    <!-- Plumber Image -->
                    <img src="{{ asset('images/Hero.png') }}" alt="Rootera Plumbing Technician Working" class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-700">
                    
                    <!-- Decorative Overlay Gradient -->
                    <div class="absolute inset-0 bg-gradient-to-t from-brand-navy-dark/90 via-transparent to-transparent"></div>
                    
                    <!-- Floating Badge on Image -->
                    <div class="absolute bottom-6 left-6 right-6 bg-brand-navy-dark/95 border border-white/10 rounded-xl p-4 backdrop-blur-md shadow-lg flex items-center gap-4">
                        <div class="bg-brand-green/20 p-2.5 rounded-lg">
                            <i data-lucide="shield-check" class="w-6 h-6 text-brand-green"></i>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400">Garansi Pekerjaan</p>
                            <p class="text-sm font-bold text-white">30 Hari Jaminan Kepuasan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. STATS BAR (Placed inside container with top margin) -->
        <div class="mt-16 lg:mt-24">
            <div class="bg-brand-navy-dark/85 backdrop-blur-lg border border-white/10 rounded-2xl shadow-2xl p-6 sm:p-8">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-4 divide-y-0 divide-x-0 md:divide-x divide-white/10">
                    <!-- Stat 1 -->
                    <div class="text-center px-4">
                        <p class="text-3xl sm:text-4xl font-extrabold text-brand-green tracking-tight">500+</p>
                        <p class="text-xs sm:text-sm text-gray-300 mt-1 font-medium">Proyek Selesai</p>
                    </div>
                    <!-- Stat 2 -->
                    <div class="text-center px-4 pt-4 sm:pt-0">
                        <p class="text-3xl sm:text-4xl font-extrabold text-brand-green tracking-tight">5+</p>
                        <p class="text-xs sm:text-sm text-gray-300 mt-1 font-medium">Tahun Pengalaman</p>
                    </div>
                    <!-- Stat 3 -->
                    <div class="text-center px-4">
                        <p class="text-3xl sm:text-4xl font-extrabold text-brand-green tracking-tight">98%</p>
                        <p class="text-xs sm:text-sm text-gray-300 mt-1 font-medium">Kepuasan Pelanggan</p>
                    </div>
                    <!-- Stat 4 -->
                    <div class="text-center px-4 pt-4 sm:pt-0">
                        <p class="text-3xl sm:text-4xl font-extrabold text-brand-green tracking-tight">24/7</p>
                        <p class="text-xs sm:text-sm text-gray-300 mt-1 font-medium">Layanan Darurat</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. EMERGENCY ALERT BANNER (Ribbon below Hero Section) -->
<div class="bg-brand-green text-white py-3 text-center text-xs sm:text-sm font-semibold tracking-wide relative z-10 shadow-md">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-center gap-2">
        <i data-lucide="alert-triangle" class="w-4 h-4 animate-pulse"></i>
        <span>Layanan Plumbing Darurat 24 Jam - Siap Datang Kapan Saja Hubungi: <strong>0813-8540-4000</strong></span>
    </div>
</div>

<!-- SIMPLE INTERACTIVE SCRIPT FOR MOBILE MENU TOGGLE -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const btn = document.getElementById('mobile-menu-btn');
        const menu = document.getElementById('mobile-menu');
        
        if (btn && menu) {
            btn.addEventListener('click', function() {
                menu.classList.toggle('hidden');
            });
            
            // Close mobile menu when a link is clicked
            const links = menu.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', function() {
                    menu.classList.add('hidden');
                });
            });
        }
    });
</script>
