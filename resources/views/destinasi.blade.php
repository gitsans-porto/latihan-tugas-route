@extends('layouts.main')

@section('title', 'Katalog Destinasi Lokal - Pariwisata Gorontalo')

@section('content')
    <section class="bg-white border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="max-w-3xl">
                <span class="text-xs font-bold uppercase tracking-wider text-brand-800 bg-brand-50 px-3 py-1 rounded-md">
                    Eksplorasi Wilayah
                </span>
                <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-3">
                    Katalog Destinasi Unggulan Gorontalo
                </h1>
                <p class="mt-4 text-base sm:text-lg text-slate-600 leading-relaxed">
                    Tiga ikon wisata utama yang mewakili pesona bahari Teluk Tomini, ketangguhan sejarah Kerajaan Ilato, dan
                    kehangatan tradisi kultural masyarakat Serambi Madinah.
                </p>
            </div>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <article
                class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('images/destinasi/pulo-cinta.jpg') }}" alt="Gugusan resort terapung Pulau Cinta Boalemo" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/35 to-transparent p-6 flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded text-xs font-semibold bg-emerald-800/90 text-emerald-100 border border-emerald-700 backdrop-blur-xs">
                                Wisata Bahari
                            </span>
                            <span class="text-xs font-medium text-emerald-200 drop-shadow-sm">
                                Kabupaten Boalemo
                            </span>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white tracking-tight drop-shadow-sm">
                                Pulau Cinta
                            </h2>
                            <p class="text-xs text-emerald-200 mt-1 drop-shadow-sm">
                                Eco-Resort Teluk Tomini
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div class="space-y-4">
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Resor ramah lingkungan di atas hamparan pasir putih dangkal berbentuk hati di Teluk Tomini.
                            Memiliki perairan kristal dengan terumbu karang yang asri untuk aktivitas snorkeling dan kano.
                        </p>
                        <div class="space-y-2 pt-2 border-t border-slate-100 text-xs text-slate-600">
                            <div class="flex items-start gap-2">
                                <strong class="text-slate-900 w-24 shrink-0">Waktu Tempuh:</strong>
                                <span>2 jam darat dari Kota Gorontalo + 15 menit perahu</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <strong class="text-slate-900 w-24 shrink-0">Aktivitas:</strong>
                                <span>Snorkeling karang dangkal, fotografi panorama, kayak laut</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <strong class="text-slate-900 w-24 shrink-0">Tiket Masuk:</strong>
                                <span>Penyeberangan mulai Rp100.000 (tergantung paket operator lokal)</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                        <button type="button"
                            onclick="openDestinationModal('Pulau Cinta', 'Teluk Tomini, Kabupaten Boalemo', 'Pulo Cinta menyuguhkan penginapan terapung dengan konsep pelestarian alam laut. Konon dinamai Pulo Cinta karena kisah legenda pertemuan putri bangsawan Gorontalo dengan pangeran pedagang dari Belanda di tengah perairan Teluk Tomini. Pengunjung dapat menikmati panorama matahari terbit dan terbenam dari teras villa kayu, serta menyaksikan terumbu karang yang masih terjaga.', 'Waktu terbaik berkunjung adalah bulan April sampai Oktober saat ombak Teluk Tomini sangat tenang. Bawa perlengkapan pelindung matahari dan kamera bawah air.')"
                            class="flex-1 inline-flex items-center justify-center px-4 py-2.5 rounded-lg text-sm font-semibold bg-brand-800 text-white hover:bg-brand-900 transition-colors min-h-[44px] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700">
                            Detail Lengkap
                        </button>
                        <a href="https://maps.google.com/?q=Pulo+Cinta+Gorontalo" target="_blank" rel="noopener noreferrer"
                            class="inline-flex items-center justify-center px-3.5 py-2.5 rounded-lg text-sm font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 transition-colors min-h-[44px]"
                            aria-label="Lihat peta lokasi Pulau Cinta di Google Maps">
                            Peta
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('images/destinasi/benteng-otanaha.jpg') }}" alt="Benteng Otanaha di atas perbukitan Dembe I" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/35 to-transparent p-6 flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded text-xs font-semibold bg-slate-800/90 text-slate-200 border border-slate-700 backdrop-blur-xs">
                                Cagar Budaya
                            </span>
                            <span class="text-xs font-medium text-slate-300 drop-shadow-sm">
                                Kota Gorontalo
                            </span>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white tracking-tight drop-shadow-sm">
                                Benteng Otanaha
                            </h2>
                            <p class="text-xs text-slate-200 mt-1 drop-shadow-sm">
                                Situs Pertahanan Abad ke-16
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div class="space-y-4">
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Benteng peninggalan Raja Ilato yang berdiri di atas bukit Dembe I. Dindingnya dibuat dari batu
                            kapur dengan perekat putih telur burung Maleo, menawarkan sudut pandang terbaik ke arah Danau
                            Limboto.
                        </p>
                        <div class="space-y-2 pt-2 border-t border-slate-100 text-xs text-slate-600">
                            <div class="flex items-start gap-2">
                                <strong class="text-slate-900 w-24 shrink-0">Waktu Tempuh:</strong>
                                <span>20 menit dari pusat Kota Gorontalo (8 km arah barat)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <strong class="text-slate-900 w-24 shrink-0">Aktivitas:</strong>
                                <span>Menapaki 348 anak tangga, belajar sejarah benteng, fotografi danau</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <strong class="text-slate-900 w-24 shrink-0">Tiket Masuk:</strong>
                                <span>Retribusi resmi Rp5.000 per orang</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                        <button type="button"
                            onclick="openDestinationModal('Benteng Otanaha', 'Kelurahan Dembe I, Kecamatan Kota Barat, Kota Gorontalo', 'Kompleks benteng ini memiliki tiga benteng utama: Otanaha (benteng utama), Otahiya, dan Ulupahu. Benteng ini dibangun sekitar tahun 1522 atas inisiatif Raja Ilato bersama para nakhoda kapal Portugis yang singgah di pelabuhan Gorontalo untuk memperkuat pertahanan dari bajak laut. Dari puncak benteng, pengunjung dapat memandangi panorama luas Danau Limboto dan perbukitan kapur sekitarnya.', 'Gunakan sepatu bertali yang nyaman untuk menaiki tangga. Waktu terbaik adalah sore hari sekitar pukul 16.00 WITA untuk melihat senja Danau Limboto.')"
                            class="flex-1 inline-flex items-center justify-center px-4 py-2.5 rounded-lg text-sm font-semibold bg-brand-800 text-white hover:bg-brand-900 transition-colors min-h-[44px] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700">
                            Detail Lengkap
                        </button>
                        <a href="https://maps.google.com/?q=Benteng+Otanaha+Gorontalo" target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center px-3.5 py-2.5 rounded-lg text-sm font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 transition-colors min-h-[44px]"
                            aria-label="Lihat peta lokasi Benteng Otanaha di Google Maps">
                            Peta
                        </a>
                    </div>
                </div>
            </article>

            <article
                class="bg-white rounded-xl border border-slate-200 overflow-hidden shadow-xs hover:shadow-md transition-all flex flex-col">
                <div class="relative h-56 overflow-hidden">
                    <img src="{{ asset('images/destinasi/desa-bubohu.jpg') }}" alt="Pondok adat dan kolam alami Desa Wisata Bubohu Bongo" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/85 via-slate-950/35 to-transparent p-6 flex flex-col justify-between">
                        <div class="flex items-center justify-between">
                            <span
                                class="inline-flex items-center px-2.5 py-1 rounded text-xs font-semibold bg-amber-800/90 text-amber-100 border border-amber-700 backdrop-blur-xs">
                                Desa Wisata &amp; Religi
                            </span>
                            <span class="text-xs font-medium text-amber-200 drop-shadow-sm">
                                Kabupaten Gorontalo
                            </span>
                        </div>
                        <div>
                            <h2 class="text-2xl font-bold text-white tracking-tight drop-shadow-sm">
                                Desa Wisata Bubohu
                            </h2>
                            <p class="text-xs text-amber-200 mt-1 drop-shadow-sm">
                                Kearifan Lokal Bongo &amp; Walima
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-6 flex-1 flex flex-col justify-between">
                    <div class="space-y-4">
                        <p class="text-slate-600 text-sm leading-relaxed">
                            Desa wisata religius yang melestarikan tradisi adat Walima, pesantren alam, serta museum fosil
                            kayu berusia ratusan tahun. Terletak di tepi perbukitan karst Batudaa Pantai.
                        </p>
                        <div class="space-y-2 pt-2 border-t border-slate-100 text-xs text-slate-600">
                            <div class="flex items-start gap-2">
                                <strong class="text-slate-900 w-24 shrink-0">Waktu Tempuh:</strong>
                                <span>30 menit ke arah selatan dari Kota Gorontalo (12 km)</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <strong class="text-slate-900 w-24 shrink-0">Aktivitas:</strong>
                                <span>Wisata religi, studi fosil kayu, pemandian sumber mata air alami</span>
                            </div>
                            <div class="flex items-start gap-2">
                                <strong class="text-slate-900 w-24 shrink-0">Tiket Masuk:</strong>
                                <span>Donasi sukarela pemeliharaan cagar budaya lokal</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6 pt-4 border-t border-slate-100 flex items-center gap-3">
                        <button type="button"
                            onclick="openDestinationModal('Desa Wisata Bubohu', 'Desa Bongo, Kecamatan Batudaa Pantai, Kabupaten Gorontalo', 'Desa Wisata Religius Bubohu digagas sebagai ruang pelestarian adat dan alam. Di desa ini terdapat pondok pesantren alam, puluhan fosil kayu yang membatu secara alami, serta replika rumah panggung kayu khas pedesaan Gorontalo. Setiap perayaan Maulid Nabi Muhammad SAW, warga menggelar tradisi Walima dengan mengarak Tolangga (wadah usungan berhias kue tradisional khas) menuju masjid desa.', 'Hormati norma adat setempat dengan mengenakan pakaian sopan dan tertutup. Anda juga bisa mencoba membasuh muka di sumber mata air suci yang mengalir dari perbukitan kapur.')"
                            class="flex-1 inline-flex items-center justify-center px-4 py-2.5 rounded-lg text-sm font-semibold bg-brand-800 text-white hover:bg-brand-900 transition-colors min-h-[44px] focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700">
                            Detail Lengkap
                        </button>
                        <a href="https://maps.google.com/?q=Desa+Wisata+Religius+Bubohu+Gorontalo" target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex items-center justify-center px-3.5 py-2.5 rounded-lg text-sm font-semibold text-slate-700 bg-slate-100 hover:bg-slate-200 transition-colors min-h-[44px]"
                            aria-label="Lihat peta lokasi Desa Wisata Bubohu di Google Maps">
                            Peta
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <div id="dest-modal"
        class="fixed inset-0 z-50 hidden bg-slate-900/60 backdrop-blur-xs flex items-center justify-center p-4"
        role="dialog" aria-modal="true" aria-labelledby="modal-title">
        <div
            class="bg-white rounded-2xl max-w-lg w-full p-6 sm:p-8 shadow-xl border border-slate-200 transform transition-all relative">
            <div class="flex items-start justify-between gap-4">
                <div>
                    <span id="modal-location" class="text-xs font-semibold text-brand-800 uppercase tracking-wider"></span>
                    <h3 id="modal-title" class="text-2xl font-bold text-slate-900 mt-1"></h3>
                </div>
                <button type="button" onclick="closeDestinationModal()"
                    class="p-2 rounded-lg text-slate-400 hover:text-slate-600 hover:bg-slate-100 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 min-h-[44px] min-w-[44px] flex items-center justify-center"
                    aria-label="Tutup jendela informasi">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="mt-4 space-y-3 text-sm text-slate-600 leading-relaxed">
                <p id="modal-desc"></p>
                <div class="p-3.5 bg-amberbrand-50 border border-amber-200 rounded-lg text-xs text-amber-900">
                    <strong class="block mb-1 font-semibold text-amber-950">Tips Berkunjung:</strong>
                    <span id="modal-tips"></span>
                </div>
            </div>

            <div class="mt-6 pt-4 border-t border-slate-100 flex justify-end">
                <button type="button" onclick="closeDestinationModal()"
                    class="px-5 py-2.5 rounded-lg text-sm font-semibold bg-slate-900 text-white hover:bg-slate-800 min-h-[44px]">
                    Tutup Informasi
                </button>
            </div>
        </div>
    </div>

    <script>
        function openDestinationModal(title, location, desc, tips) {
            document.getElementById('modal-title').textContent = title;
            document.getElementById('modal-location').textContent = location;
            document.getElementById('modal-desc').textContent = desc;
            document.getElementById('modal-tips').textContent = tips;
            document.getElementById('dest-modal').classList.remove('hidden');
            document.body.classList.add('overflow-hidden');
        }

        function closeDestinationModal() {
            document.getElementById('dest-modal').classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }

        document.getElementById('dest-modal')?.addEventListener('click', function (e) {
            if (e.target === this) {
                closeDestinationModal();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !document.getElementById('dest-modal')?.classList.contains('hidden')) {
                closeDestinationModal();
            }
        });
    </script>
@endsection