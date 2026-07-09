<!-- SERVICE OVERVIEW SECTION -->
<section id="mengapa-kami" class="py-20 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-center">
            
            <!-- Left Column: Visual Asset -->
            <div class="lg:col-span-6 relative">
                <!-- Outer Decorative Frame -->
                <div class="absolute -top-4 -left-4 w-72 h-72 bg-brand-green/5 rounded-2xl -z-10"></div>
                <div class="absolute -bottom-4 -right-4 w-72 h-72 bg-brand-navy/5 rounded-2xl -z-10"></div>
                
                <!-- Main Image Container -->
                <div class="relative rounded-2xl overflow-hidden shadow-xl border border-gray-100">
                    <img src="{{ asset('images/service.png') }}" alt="Plumber repairing pipes under sink" class="w-full h-auto object-cover aspect-[4/3] sm:aspect-[16/10]">
                    
                    <!-- Floating Badge: Experience -->
                    <div class="absolute bottom-6 right-6 bg-brand-navy text-white px-6 py-3 rounded-xl shadow-lg border border-white/10 flex items-center gap-3">
                        <div class="bg-brand-green p-2 rounded-lg text-white">
                            <i data-lucide="award" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-400 uppercase tracking-widest font-bold">Pengalaman</p>
                            <p class="text-sm font-extrabold text-white">6+ Tahun Kerja</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Text Content -->
            <div class="lg:col-span-6 flex flex-col space-y-6">
                <!-- Section Badge -->
                <span class="text-xs sm:text-sm font-extrabold tracking-widest text-brand-green uppercase">
                    Tentang Kami
                </span>

                <!-- Headline -->
                <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight leading-tight">
                    Membangun Kepercayaan <br class="hidden sm:inline">
                    <span class="text-brand-green">Satu Pipa</span> Demi Satu Pipa
                </h2>

                <!-- Description Paragraphs -->
                <p class="text-sm sm:text-base text-brand-gray leading-relaxed font-normal">
                    Di ROOTERA PLUMBING, kami mengerti betapa krusialnya sistem pipa dan sanitasi yang berfungsi dengan baik bagi kenyamanan hunian Anda. Oleh karena itu, kami hadir dengan layanan profesional terpadu yang memprioritaskan kualitas hasil akhir.
                </p>
                <p class="text-sm sm:text-base text-brand-gray leading-relaxed font-normal">
                    Setiap masalah kebocoran atau saluran tersumbat ditangani dengan analisis menyeluruh agar perbaikan bersifat permanen dan tidak berulang.
                </p>

                <!-- Checkmarks Grid -->
                <div class="grid sm:grid-cols-2 gap-4 pt-2">
                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-brand-green/10 p-1.5 rounded-full text-brand-green">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-brand-navy">Peralatan Modern & Steril</h4>
                            <p class="text-xs text-brand-gray mt-0.5">Menggunakan alat deteksi sonar & kamera pipa.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-brand-green/10 p-1.5 rounded-full text-brand-green">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-brand-navy">Harga Jujur & Transparan</h4>
                            <p class="text-xs text-brand-gray mt-0.5">Estimasi biaya diberikan di awal sebelum kerja.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-brand-green/10 p-1.5 rounded-full text-brand-green">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-brand-navy">Garansi Pekerjaan 30 Hari</h4>
                            <p class="text-xs text-brand-gray mt-0.5">Jaminan perbaikan ulang gratis jika ada kendala.</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="mt-1 bg-brand-green/10 p-1.5 rounded-full text-brand-green">
                            <i data-lucide="check" class="w-4 h-4"></i>
                        </div>
                        <div>
                            <h4 class="text-sm font-bold text-brand-navy">Teknisi Berpengalaman</h4>
                            <p class="text-xs text-brand-gray mt-0.5">Dikerjakan langsung oleh teknisi ahli teruji.</p>
                        </div>
                    </div>
                </div>

                <!-- Section CTA Button -->
                <div class="pt-4">
                    <a href="https://wa.me/6281385404000?text=Halo%20Rootera%20Plumbing%2C%20saya%20tertarik%20dengan%20layanan%20Anda%20dan%20ingin%20tanya-tanya%20mengenai%20garansi%20pekerjaan." target="_blank" class="inline-flex items-center bg-brand-navy hover:bg-brand-navy-light text-white text-sm font-bold px-6 py-3.5 rounded-lg transition-all shadow-md">
                        <i data-lucide="message-square" class="w-4 h-4 mr-2 text-brand-green"></i>
                        Hubungi via WhatsApp
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
