@extends('layouts.main')

@section('title', 'Galeri Dokumentasi Wisata - Gorontalo')

@section('content')
<section class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-800 bg-brand-50 px-3 py-1 rounded-md">
                Dokumentasi Visual
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-3">
                Galeri Foto Pariwisata Gorontalo
            </h1>
            <p class="mt-4 text-base sm:text-lg text-slate-600 leading-relaxed">
                Potret keindahan bentang alam pesisir, arsitektur batu kapur abad ke-16, keanekaragaman hayati bawah laut, serta kearifan tradisi masyarakat lokal.
            </p>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="group bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col">
            <div class="relative aspect-4/3 bg-slate-900 overflow-hidden">
                <img src="{{ asset('images/destinasi/pulo-cinta.jpg') }}" alt="Gugusan pasir putih dan perairan jernih pesisir Pulo Cinta Boalemo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                <span class="absolute top-3 left-3 text-xs font-semibold px-2.5 py-1 rounded bg-black/50 text-white backdrop-blur-xs">
                    Bahari
                </span>
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <h2 class="text-base font-bold text-slate-900">
                        Pulo Cinta Eco Resort
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">
                        Teluk Tomini, Kabupaten Boalemo
                    </p>
                    <p class="text-xs text-slate-600 mt-2 line-clamp-2">
                        Panorama perairan tenang berwarna toska dengan deretan villa kayu di atas gundukan karang alami.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" onclick="openLightbox('{{ asset('images/destinasi/pulo-cinta.jpg') }}', 'Pulo Cinta Eco Resort', 'Teluk Tomini, Kabupaten Boalemo')" class="text-xs font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center gap-1 min-h-[44px]">
                        Perbesar Foto
                    </button>
                    <span class="text-xs text-slate-400">Dokumentasi 2025</span>
                </div>
            </div>
        </div>

        <div class="group bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col">
            <div class="relative aspect-4/3 bg-slate-900 overflow-hidden">
                <img src="{{ asset('images/destinasi/benteng-otanaha.jpg') }}" alt="Kompleks benteng batu bersejarah peninggalan Raja Ilato di atas bukit Dembe I" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                <span class="absolute top-3 left-3 text-xs font-semibold px-2.5 py-1 rounded bg-black/50 text-white backdrop-blur-xs">
                    Sejarah
                </span>
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <h2 class="text-base font-bold text-slate-900">
                        Tangga Menuju Benteng Otanaha
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">
                        Kelurahan Dembe I, Kota Gorontalo
                    </p>
                    <p class="text-xs text-slate-600 mt-2 line-clamp-2">
                        Rute tangga berundak menuju benteng pertahanan batu kapur dengan sudut pandang lepas Danau Limboto.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" onclick="openLightbox('{{ asset('images/destinasi/benteng-otanaha.jpg') }}', 'Benteng Otanaha', 'Kelurahan Dembe I, Kota Gorontalo')" class="text-xs font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center gap-1 min-h-[44px]">
                        Perbesar Foto
                    </button>
                    <span class="text-xs text-slate-400">Dokumentasi 2025</span>
                </div>
            </div>
        </div>

        <div class="group bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col">
            <div class="relative aspect-4/3 bg-slate-900 overflow-hidden">
                <img src="{{ asset('images/destinasi/taman-laut-olele.jpg') }}" alt="Deretan terumbu karang dangkal dan air laut kristal di pesisir Olele" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                <span class="absolute top-3 left-3 text-xs font-semibold px-2.5 py-1 rounded bg-black/50 text-white backdrop-blur-xs">
                    Bawah Laut
                </span>
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <h2 class="text-base font-bold text-slate-900">
                        Taman Laut Olele
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">
                        Kabupaten Bone Bolango
                    </p>
                    <p class="text-xs text-slate-600 mt-2 line-clamp-2">
                        Habitat karang unik Salvador Dali Sponge yang hanya ditemukan di perairan teluk Gorontalo.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" onclick="openLightbox('{{ asset('images/destinasi/taman-laut-olele.jpg') }}', 'Taman Laut Olele', 'Kabupaten Bone Bolango')" class="text-xs font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center gap-1 min-h-[44px]">
                        Perbesar Foto
                    </button>
                    <span class="text-xs text-slate-400">Dokumentasi 2025</span>
                </div>
            </div>
        </div>

        <div class="group bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col">
            <div class="relative aspect-4/3 bg-slate-900 overflow-hidden">
                <img src="{{ asset('images/destinasi/desa-bubohu.jpg') }}" alt="Bangunan pondok kayu tradisional di Desa Wisata Religius Bubohu Bongo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                <span class="absolute top-3 left-3 text-xs font-semibold px-2.5 py-1 rounded bg-black/50 text-white backdrop-blur-xs">
                    Budaya
                </span>
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <h2 class="text-base font-bold text-slate-900">
                        Desa Budaya Bubohu
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">
                        Desa Bongo, Batudaa Pantai
                    </p>
                    <p class="text-xs text-slate-600 mt-2 line-clamp-2">
                        Pusat perayaan Maulid Walima dan museum fosil kayu alam di lereng perbukitan Batudaa.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" onclick="openLightbox('{{ asset('images/destinasi/desa-bubohu.jpg') }}', 'Desa Budaya Bubohu', 'Desa Bongo, Batudaa Pantai')" class="text-xs font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center gap-1 min-h-[44px]">
                        Perbesar Foto
                    </button>
                    <span class="text-xs text-slate-400">Dokumentasi 2025</span>
                </div>
            </div>
        </div>

        <div class="group bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col">
            <div class="relative aspect-4/3 bg-slate-900 overflow-hidden">
                <img src="{{ asset('images/destinasi/danau-limboto.jpg') }}" alt="Suasana fajar berkabut di perairan luas Danau Limboto" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                <span class="absolute top-3 left-3 text-xs font-semibold px-2.5 py-1 rounded bg-black/50 text-white backdrop-blur-xs">
                    Danau
                </span>
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <h2 class="text-base font-bold text-slate-900">
                        Danau Limboto Saat Fajar
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">
                        Kabupaten Gorontalo
                    </p>
                    <p class="text-xs text-slate-600 mt-2 line-clamp-2">
                        Kawasan lahan basah alami dengan keanekaragaman spesies burung air dan aktivitas nelayan jaring apung.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" onclick="openLightbox('{{ asset('images/destinasi/danau-limboto.jpg') }}', 'Danau Limboto Saat Fajar', 'Kabupaten Gorontalo')" class="text-xs font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center gap-1 min-h-[44px]">
                        Perbesar Foto
                    </button>
                    <span class="text-xs text-slate-400">Dokumentasi 2025</span>
                </div>
            </div>
        </div>

        <div class="group bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col">
            <div class="relative aspect-4/3 bg-slate-900 overflow-hidden">
                <img src="{{ asset('images/destinasi/binte-biluhuta.jpg') }}" alt="Sajian hidangan sup jagung rempah Binte Biluhuta khas Gorontalo" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300" loading="lazy">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950/70 via-transparent to-transparent"></div>
                <span class="absolute top-3 left-3 text-xs font-semibold px-2.5 py-1 rounded bg-black/50 text-white backdrop-blur-xs">
                    Kuliner
                </span>
            </div>
            <div class="p-4 flex-1 flex flex-col justify-between">
                <div>
                    <h2 class="text-base font-bold text-slate-900">
                        Binte Biluhuta &amp; Rempah Lokal
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">
                        Pusat Kuliner Kota Gorontalo
                    </p>
                    <p class="text-xs text-slate-600 mt-2 line-clamp-2">
                        Sup jagung manis siram berpadu parutan kelapa, daun kemangi, udang segar, dan perasan jeruk nipis.
                    </p>
                </div>
                <div class="mt-4 pt-3 border-t border-slate-100 flex items-center justify-between">
                    <button type="button" onclick="openLightbox('{{ asset('images/destinasi/binte-biluhuta.jpg') }}', 'Binte Biluhuta & Rempah Lokal', 'Pusat Kuliner Kota Gorontalo')" class="text-xs font-semibold text-brand-800 hover:text-brand-900 inline-flex items-center gap-1 min-h-[44px]">
                        Perbesar Foto
                    </button>
                    <span class="text-xs text-slate-400">Dokumentasi 2025</span>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="lightbox-modal" class="fixed inset-0 z-50 hidden bg-slate-950/90 backdrop-blur-sm flex items-center justify-center p-4 sm:p-6" role="dialog" aria-modal="true" aria-labelledby="lightbox-caption">
    <div class="max-w-4xl w-full flex flex-col items-center">
        <div class="w-full flex items-center justify-between text-white pb-3">
            <div>
                <h3 id="lightbox-caption" class="text-base sm:text-lg font-bold"></h3>
                <p id="lightbox-sub" class="text-xs text-slate-300"></p>
            </div>
            <button type="button" onclick="closeLightbox()" class="p-2 rounded-lg bg-white/10 hover:bg-white/20 text-white min-h-[44px] min-w-[44px] flex items-center justify-center focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white" aria-label="Tutup pratinjau foto">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <div class="w-full max-h-[75vh] flex items-center justify-center rounded-xl overflow-hidden bg-black">
            <img id="lightbox-img" src="" alt="Pratinjau galeri diperbesar" class="max-h-[75vh] max-w-full object-contain">
        </div>
    </div>
</div>

<script>
    function openLightbox(src, caption, sub) {
        document.getElementById('lightbox-img').src = src;
        document.getElementById('lightbox-caption').textContent = caption;
        document.getElementById('lightbox-sub').textContent = sub;
        document.getElementById('lightbox-modal').classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
    }

    function closeLightbox() {
        document.getElementById('lightbox-modal').classList.add('hidden');
        document.getElementById('lightbox-img').src = '';
        document.body.classList.remove('overflow-hidden');
    }

    document.getElementById('lightbox-modal')?.addEventListener('click', function(e) {
        if (e.target === this) {
            closeLightbox();
        }
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !document.getElementById('lightbox-modal')?.classList.contains('hidden')) {
            closeLightbox();
        }
    });
</script>
@endsection
