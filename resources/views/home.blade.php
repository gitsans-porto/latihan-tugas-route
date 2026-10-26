@extends('layouts.main')

@section('title', 'Beranda - Pesona Wisata Gorontalo')

@section('content')
    <section class="relative bg-gradient-to-b from-brand-50/70 via-white to-slate-50 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-20 lg:py-24">
            <div class="max-w-3xl">
                <span
                    class="inline-block text-xs font-semibold uppercase tracking-wider text-brand-800 bg-brand-100/80 px-3 py-1 rounded-md mb-4">
                    Pariwisata Sulawesi Utara &amp; Teluk Tomini
                </span>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight">
                    Pesona Gorontalo: Harmoni Bahari, Warisan Sejarah, dan Budaya
                </h1>
                <p class="mt-5 text-base sm:text-lg text-slate-600 leading-relaxed">
                    Temukan keajaiban alam pesisir Teluk Tomini, kokohnya benteng pertahanan abad ke-16 di tepi Danau
                    Limboto, serta kehangatan tradisi kuliner Serambi Madinah.
                </p>
                <div class="mt-8 flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                    <a href="{{ route('destinasi') }}"
                        class="inline-flex items-center justify-center px-6 py-3 rounded-lg text-sm font-semibold bg-brand-800 text-white hover:bg-brand-900 transition-colors shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 focus-visible:ring-offset-2 min-h-[44px]">
                        Jelajahi 3 Destinasi Pilihan
                    </a>
                    <a href="{{ route('galeri') }}"
                        class="inline-flex items-center justify-center px-6 py-3 rounded-lg text-sm font-semibold bg-white text-slate-700 hover:bg-slate-100 border border-slate-300 transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 focus-visible:ring-offset-2 min-h-[44px]">
                        Lihat Galeri Foto
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                    Tiga Kategori Wisata Utama
                </h2>
                <p class="mt-2 text-slate-600 text-sm sm:text-base">
                    Ragam pengalaman wisata otentik yang ditawarkan Provinsi Gorontalo untuk pengunjung nusantara dan
                    mancanegara.
                </p>
            </div>
            <a href="{{ route('destinasi') }}"
                class="text-sm font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center gap-1 focus-visible:underline">
                Lihat semua lokasi wisata
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <article
                class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 relative overflow-hidden">
                    <img src="{{ asset('images/destinasi/pulo-cinta.jpg') }}" alt="Wisata Alam dan Bahari Gorontalo"
                        class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/40 to-transparent p-6 flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span
                                class="text-xs font-semibold px-2.5 py-1 rounded bg-white/20 text-emerald-100 backdrop-blur-xs">
                                Kategori Bahari
                            </span>
                            <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-amber-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white tracking-tight drop-shadow-sm">
                                Wisata Alam &amp; Bahari
                            </h3>
                            <p class="text-xs text-emerald-200 mt-1 drop-shadow-sm">
                                Teluk Tomini, Olele, dan Danau Limboto
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Gorontalo diberkahi pesisir tenang dengan keanekaragaman karang endemik Salvador Dali di Taman
                            Laut Olele, resor terapung Pulo Cinta, serta keindahan ekosistem Danau Limboto.
                        </p>
                        <ul class="mt-4 space-y-1.5 text-xs text-slate-500" role="list">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                                Diving dan snorkeling dengan terumbu karang tropis
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                                Wisata pengamatan burung migran di Danau Limboto
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="{{ route('destinasi') }}"
                            class="text-sm font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center min-h-[44px]">
                            Buka Katalog Wisata Bahari
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 relative overflow-hidden">
                    <img src="{{ asset('images/destinasi/benteng-otanaha.jpg') }}"
                        alt="Wisata Sejarah dan Tradisi Gorontalo" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/40 to-transparent p-6 flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span
                                class="text-xs font-semibold px-2.5 py-1 rounded bg-white/20 text-slate-200 backdrop-blur-xs">
                                Kategori Cagar Budaya
                            </span>
                            <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-amber-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.333A2.25 2.25 0 0018 8.083H6a2.25 2.25 0 00-2.25 2.25V21" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white tracking-tight drop-shadow-sm">
                                Wisata Sejarah &amp; Tradisi
                            </h3>
                            <p class="text-xs text-slate-200 mt-1 drop-shadow-sm">
                                Benteng Abad 16, Rumah Adat, dan Fosil Kayu
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Jejak pertahanan kuno Kerajaan Ilato yang diabadikan di Benteng Otanaha, Desa Budaya Bubohu
                            dengan tradisi Maulid Walima, serta rumah adat Dulohupa dan Bandayo Pomboide.
                        </p>
                        <ul class="mt-4 space-y-1.5 text-xs text-slate-500" role="list">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                                Arsitektur benteng berbahan kapur dan telur burung Maleo
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                                Pelestarian cagar budaya dan aksara kuno Suwawa
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="{{ route('destinasi') }}"
                            class="text-sm font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center min-h-[44px]">
                            Buka Wisata Sejarah
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-shadow flex flex-col">
                <div class="h-48 relative overflow-hidden">
                    <img src="{{ asset('images/destinasi/binte-biluhuta.jpg') }}"
                        alt="Wisata Kuliner Otentik Gorontalo Binte Biluhuta" class="w-full h-full object-cover">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/40 to-transparent p-6 flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span
                                class="text-xs font-semibold px-2.5 py-1 rounded bg-white/20 text-amber-200 backdrop-blur-xs">
                                Kategori Kuliner
                            </span>
                            <span class="w-8 h-8 rounded-full bg-white/10 flex items-center justify-center text-amber-200">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                    aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </span>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-white tracking-tight drop-shadow-sm">
                                Wisata Kuliner Otentik
                            </h3>
                            <p class="text-xs text-amber-200 mt-1 drop-shadow-sm">
                                Binte Biluhuta, Ilabulo, dan Cakalang Bakar
                            </p>
                        </div>
                    </div>
                </div>
                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div>
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Cita rasa khas rempah Nusantara dengan sajian jagung manis gurih Binte Biluhuta, Ilabulo olahan
                            sagu dan hati ayam berbumbu pedas, serta ikan tuna segar hasil tangkapan nelayan lokal.
                        </p>
                        <ul class="mt-4 space-y-1.5 text-xs text-slate-500" role="list">
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                                Binte Biluhuta dengan parutan kelapa, daun kemangi, dan jeruk nipis
                            </li>
                            <li class="flex items-center gap-2">
                                <span class="w-1.5 h-1.5 rounded-full bg-brand-700"></span>
                                Ilabulo kukus maupun panggang berbungkus daun pisang
                            </li>
                        </ul>
                    </div>
                    <div class="mt-6 pt-4 border-t border-slate-100">
                        <a href="{{ route('destinasi') }}"
                            class="text-sm font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center min-h-[44px]">
                            Buka Ragam Kuliner Khas
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="bg-white border-y border-slate-200 py-14">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-900 rounded-2xl p-8 sm:p-12 text-white relative overflow-hidden">
                <div class="relative z-10 max-w-2xl">
                    <span class="text-xs font-semibold uppercase tracking-wider text-amber-400">
                        Informasi Perjalanan
                    </span>
                    <h2 class="text-2xl sm:text-3xl font-bold tracking-tight mt-2 text-white">
                        Siap Memulai Perjalanan ke Gorontalo?
                    </h2>
                    <p class="mt-3 text-slate-300 text-sm sm:text-base leading-relaxed">
                        Akses transportasi udara tersedia setiap hari melalui Bandara Djalaluddin Gorontalo (GTO), terhubung
                        langsung dari Jakarta, Makassar, dan Manado.
                    </p>
                    <div class="mt-6 flex flex-wrap gap-4">
                        <a href="{{ route('destinasi') }}"
                            class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm font-semibold bg-brand-700 text-white hover:bg-brand-600 transition-colors min-h-[44px]">
                            Lihat Panduan Lokasi
                        </a>
                        <a href="{{ route('kontak') }}"
                            class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm font-semibold bg-slate-800 text-slate-200 hover:bg-slate-700 border border-slate-700 transition-colors min-h-[44px]">
                            Hubungi Layanan Pengunjung
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection