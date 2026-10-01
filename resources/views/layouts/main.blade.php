<!DOCTYPE html>
<html lang="id" class="h-full scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portal Pariwisata Resmi Gorontalo: Menampilkan destinasi bahari Pulo Cinta, cagar sejarah Benteng Otanaha, dan kelezatan kuliner tradisional Gorontalo.">
    <title>@yield('title', 'Pesona Gorontalo | Portal Eksplorasi Wisata & Budaya')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        brand: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            200: '#bbf7d0',
                            600: '#16a34a',
                            700: '#15803d',
                            800: '#166534',
                            900: '#14532d',
                        },
                        amberbrand: {
                            50: '#fffbeb',
                            600: '#d97706',
                            700: '#b45309',
                        }
                    },
                    fontFamily: {
                        sans: ['"Plus Jakarta Sans"', 'system-ui', '-apple-system', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-feature-settings: "cv02", "cv03", "cv04", "cv11";
        }
    </style>
</head>
<body class="flex flex-col min-h-full bg-slate-50 text-slate-800 antialiased font-sans selection:bg-brand-100 selection:text-brand-900">
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-brand-900 focus:text-white focus:rounded-lg focus:shadow-lg focus:outline-none focus:ring-2 focus:ring-amberbrand-600">
        Lewati ke konten utama
    </a>

    <header class="sticky top-0 z-40 bg-white/95 backdrop-blur-sm border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 focus-visible:ring-offset-2 rounded-lg py-1 px-1.5" aria-label="Beranda Pesona Gorontalo">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Pesona Wisata Gorontalo" class="w-10 h-10 rounded-lg object-contain shadow-xs group-hover:scale-105 transition-transform">
                    <div>
                        <span class="block text-lg font-bold tracking-tight text-slate-900 leading-tight">
                            Pesona Gorontalo
                        </span>
                        <span class="block text-xs font-medium text-slate-500">
                            Bumi Serambi Madinah
                        </span>
                    </div>
                </a>

                <nav class="hidden md:flex items-center gap-1" aria-label="Navigasi Utama">
                    <a href="{{ route('home') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 {{ request()->routeIs('home') ? 'bg-brand-50 text-brand-800 font-semibold' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                        Beranda
                    </a>
                    <a href="{{ route('destinasi') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 {{ request()->routeIs('destinasi') ? 'bg-brand-50 text-brand-800 font-semibold' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                        Destinasi
                    </a>
                    <a href="{{ route('galeri') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 {{ request()->routeIs('galeri') ? 'bg-brand-50 text-brand-800 font-semibold' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                        Galeri
                    </a>
                    <a href="{{ route('kontak') }}" class="px-4 py-2 rounded-lg text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 {{ request()->routeIs('kontak') ? 'bg-brand-50 text-brand-800 font-semibold' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100' }}">
                        Kontak
                    </a>
                </nav>

                <div class="hidden md:flex items-center">
                    <a href="{{ route('destinasi') }}" class="inline-flex items-center justify-center px-4 py-2 text-sm font-semibold rounded-lg bg-brand-800 text-white hover:bg-brand-900 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 focus-visible:ring-offset-2">
                        Rencanakan Kunjungan
                    </a>
                </div>

                <div class="flex md:hidden">
                    <button id="mobile-menu-btn" type="button" class="inline-flex items-center justify-center p-2.5 min-w-[44px] min-h-[44px] rounded-lg text-slate-700 hover:bg-slate-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700" aria-controls="mobile-menu" aria-expanded="false" aria-label="Buka navigasi menu">
                        <svg id="menu-icon" class="w-6 h-6 block" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg id="close-icon" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden border-t border-slate-200 bg-white px-4 pt-3 pb-6 space-y-1">
            <a href="{{ route('home') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium min-h-[44px] flex items-center {{ request()->routeIs('home') ? 'bg-brand-50 text-brand-800 font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                Beranda
            </a>
            <a href="{{ route('destinasi') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium min-h-[44px] flex items-center {{ request()->routeIs('destinasi') ? 'bg-brand-50 text-brand-800 font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                Destinasi
            </a>
            <a href="{{ route('galeri') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium min-h-[44px] flex items-center {{ request()->routeIs('galeri') ? 'bg-brand-50 text-brand-800 font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                Galeri
            </a>
            <a href="{{ route('kontak') }}" class="block px-3 py-2.5 rounded-lg text-base font-medium min-h-[44px] flex items-center {{ request()->routeIs('kontak') ? 'bg-brand-50 text-brand-800 font-semibold' : 'text-slate-700 hover:bg-slate-100' }}">
                Kontak
            </a>
            <div class="pt-3 mt-2 border-t border-slate-100">
                <a href="{{ route('destinasi') }}" class="w-full inline-flex items-center justify-center px-4 py-2.5 text-base font-semibold rounded-lg bg-brand-800 text-white hover:bg-brand-900 min-h-[44px]">
                    Rencanakan Kunjungan
                </a>
            </div>
        </div>
    </header>

    <main id="main-content" class="flex-1">
        @yield('content')
    </main>

    <footer class="bg-slate-900 text-slate-300 mt-16 border-t border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 lg:gap-12">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Pesona Wisata Gorontalo" class="w-10 h-10 rounded-lg object-contain shadow-xs">
                        <span class="text-lg font-bold text-white tracking-tight">
                            Pariwisata Gorontalo
                        </span>
                    </div>
                    <p class="text-sm text-slate-400 leading-relaxed">
                        Dokumentasi pesona bahari Teluk Tomini, situs peninggalan bersejarah, dan kekayaan gastronomi khas Provinsi Gorontalo, Indonesia.
                    </p>
                    <div class="pt-1 text-xs text-slate-400">
                        Pemerintah Provinsi Gorontalo &middot; Dinas Pariwisata
                    </div>
                </div>

                <div class="space-y-4">
                    <h2 class="text-sm font-semibold uppercase tracking-wider text-slate-100">
                        Eksplorasi Halaman
                    </h2>
                    <ul class="space-y-2.5 text-sm" role="list">
                        <li>
                            <a href="{{ route('home') }}" class="hover:text-white transition-colors focus-visible:outline-none focus-visible:underline">
                                Beranda &amp; Kategori Wisata
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('destinasi') }}" class="hover:text-white transition-colors focus-visible:outline-none focus-visible:underline">
                                Katalog Destinasi Lokal
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('galeri') }}" class="hover:text-white transition-colors focus-visible:outline-none focus-visible:underline">
                                Dokumentasi Galeri Foto
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('kontak') }}" class="hover:text-white transition-colors focus-visible:outline-none focus-visible:underline">
                                Pusat Bantuan &amp; Kontak
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="space-y-4">
                    <h2 class="text-sm font-semibold uppercase tracking-wider text-slate-100">
                        Pusat Layanan Informasi
                    </h2>
                    <div class="space-y-2 text-sm text-slate-400">
                        <p class="leading-relaxed">
                            <strong class="text-slate-300 block">Kantor Layanan Wisata:</strong>
                            Jl. Sapta Marga No. 12, Kelurahan Botu, Kecamatan Dungingi, Kota Gorontalo 96136
                        </p>
                        <p>
                            <span class="text-slate-300">Telepon:</span> (0435) 821-456
                        </p>
                        <p>
                            <span class="text-slate-300">Surat Elektronik:</span> pariwisata@gorontaloprov.go.id
                        </p>
                        <p class="text-xs text-slate-400 pt-1">
                            Jam Pelayanan: Senin sampai Jumat, 08.00 - 16.00 WITA
                        </p>
                    </div>
                </div>
            </div>

            <div class="mt-12 pt-8 border-t border-slate-800 text-center sm:flex sm:justify-between sm:text-left text-xs text-slate-400">
                <p>&copy; {{ date('Y') }} Dinas Pariwisata Gorontalo. Dibuat untuk pemenuhan tugas web pariwisata.</p>
                <p class="mt-2 sm:mt-0 text-slate-400">Framework: Laravel 12 &middot; Styling: Tailwind CSS CDN</p>
            </div>
        </div>
    </footer>

    <script>
        const menuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        if (menuBtn && mobileMenu) {
            menuBtn.addEventListener('click', () => {
                const isOpen = mobileMenu.classList.toggle('hidden');
                menuBtn.setAttribute('aria-expanded', !isOpen);
                menuIcon.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }
    </script>
</body>
</html>
