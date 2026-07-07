<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- SEO Meta Tags -->
    <title>{{ $title ?? 'Rootera Plumbing - Solusi Plumbing Profesional & Bergaransi' }}</title>
    <meta name="description" content="Layanan plumbing profesional terlengkap dan bergaransi untuk perbaikan kebocoran, saluran mampet, instalasi pipa baru, dan darurat 24/7.">
    <meta name="keywords" content="plumbing, tukang pipa, pipa mampet, bocor, instalasi pipa, rootera plumbing, bandung, jakarta">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Rootera Plumbing - Solusi Plumbing Profesional & Bergaransi">
    <meta property="og:description" content="Mengatasi kebocoran, mampet, dan instalasi pipa baru dengan cepat, bersih, dan bergaransi. Teknisi berpengalaman siap 24/7.">
    
    @fonts

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback styles if Vite manifest isn't generated yet -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @endif
    
    <!-- Lucide Icons for premium illustrations/icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-brand-light font-sans text-brand-navy antialiased">
    
    <!-- Main Content Container -->
    <div class="min-h-screen flex flex-col justify-between">
        <main class="flex-grow">
            {{ $slot }}
        </main>
    </div>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
