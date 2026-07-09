<!-- GALLERY SECTION -->
<section id="galeri" class="py-20 bg-brand-light">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16 space-y-4">
            <span class="text-xs sm:text-sm font-extrabold tracking-widest text-brand-green uppercase">
                Galeri Proyek
            </span>
            <h2 class="text-3xl sm:text-4xl font-extrabold text-brand-navy tracking-tight leading-tight">
                Hasil Nyata Dari Tangan Kami
            </h2>
            <p class="text-sm sm:text-base text-brand-gray font-normal">
                Dokumentasi pekerjaan instalasi, deteksi kebocoran, dan perbaikan pipa yang telah kami selesaikan secara rapi dan profesional.
            </p>
        </div>

        <!-- Gallery Grid Layout -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Item 1 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/Gallery_Satu.png') }}" alt="Pemasangan Jalur Pipa Air Bersih" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-4 left-4 bg-brand-navy text-white text-xs font-bold px-3 py-1 rounded-full border border-white/15">Instalasi Baru</span>
                </div>
                <div class="p-6 space-y-2 flex-grow">
                    <h3 class="text-base font-bold text-brand-navy">Pembersihan & Perawatan Floor Drain</h3>
                    <p class="text-xs sm:text-sm text-brand-gray leading-relaxed font-normal">
                        Penataan instalasi pipa tembaga (copper) untuk sistem air panas dan air bersih gedung ruko komersial. Rapi, presisi, dan teruji tekanan.
                    </p>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/Gallery_Dua.png') }}" alt="Perbaikan Saluran Pembuangan Wastafel" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-4 left-4 bg-brand-green text-white text-xs font-bold px-3 py-1 rounded-full">Perbaikan</span>
                </div>
                <div class="p-6 space-y-2 flex-grow">
                    <h3 class="text-base font-bold text-brand-navy">Pembersihan Bak Kontrol Drainase</h3>
                    <p class="text-xs sm:text-sm text-brand-gray leading-relaxed font-normal">
                        Pembersihan bak kontrol dan saluran drainase dari lumpur, sampah, serta endapan agar sistem pembuangan berfungsi optimal dan mengurangi risiko penyumbatan.
                    </p>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 flex flex-col">
                <div class="relative overflow-hidden aspect-[4/3]">
                    <img src="{{ asset('images/Gallery_Tiga.png') }}" alt="Deteksi Kebocoran Pipa Air Bersih" class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                    <span class="absolute top-4 left-4 bg-red-600 text-white text-xs font-bold px-3 py-1 rounded-full">Deteksi Akurat</span>
                </div>
                <div class="p-6 space-y-2 flex-grow">
                    <h3 class="text-base font-bold text-brand-navy">Inspeksi & Deteksi Kebocoran Pipa</h3>
                    <p class="text-xs sm:text-sm text-brand-gray leading-relaxed font-normal">
                        Pemeriksaan titik kebocoran menggunakan alat deteksi khusus untuk menemukan sumber masalah secara akurat tanpa pembongkaran yang berlebihan.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
