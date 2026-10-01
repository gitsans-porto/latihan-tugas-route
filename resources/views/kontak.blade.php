@extends('layouts.main')

@section('title', 'Pusat Kontak & Informasi - Pariwisata Gorontalo')

@section('content')
<section class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
        <div class="max-w-3xl">
            <span class="text-xs font-bold uppercase tracking-wider text-brand-800 bg-brand-50 px-3 py-1 rounded-md">
                Layanan Informasi
            </span>
            <h1 class="text-3xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mt-3">
                Hubungi Pusat Informasi Wisatawan
            </h1>
            <p class="mt-4 text-base sm:text-lg text-slate-600 leading-relaxed">
                Membutuhkan informasi mengenai rute transportasi, rekomendasi pemandu lokal, atau jadwal tradisi budaya Gorontalo? Sampaikan pertanyaan Anda melalui formulir di bawah ini.
            </p>
        </div>
    </div>
</section>

<section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-12">
        <div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-xs">
            <div id="form-container">
                <div class="mb-6">
                    <h2 class="text-xl font-bold text-slate-900">
                        Formulir Pertanyaan &amp; Konsultasi Wisata
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 mt-1">
                        Tim layanan informasi kami akan membalas ke alamat email Anda dalam 1x24 jam kerja.
                    </p>
                </div>

                <form id="contact-form" onsubmit="handleContactSubmit(event)" class="space-y-5" novalidate>
                    <div>
                        <label for="name" class="block text-sm font-semibold text-slate-900">
                            Nama Lengkap <span class="text-red-600" aria-hidden="true">*</span>
                        </label>
                        <input type="text" id="name" name="name" required class="mt-1.5 block w-full px-4 py-2.5 rounded-lg border border-slate-300 text-slate-900 placeholder:text-slate-400 focus:border-brand-700 focus:ring-2 focus:ring-brand-700/20 text-sm focus:outline-none min-h-[44px]" placeholder="Masukkan nama lengkap Anda">
                        <p id="name-error" class="hidden mt-1 text-xs text-red-600">Mohon isi nama lengkap Anda.</p>
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-slate-900">
                            Alamat Email Aktif <span class="text-red-600" aria-hidden="true">*</span>
                        </label>
                        <input type="email" id="email" name="email" required class="mt-1.5 block w-full px-4 py-2.5 rounded-lg border border-slate-300 text-slate-900 placeholder:text-slate-400 focus:border-brand-700 focus:ring-2 focus:ring-brand-700/20 text-sm focus:outline-none min-h-[44px]" placeholder="nama@email.com">
                        <p id="email-error" class="hidden mt-1 text-xs text-red-600">Mohon masukkan alamat email yang valid.</p>
                    </div>

                    <div>
                        <label for="topic" class="block text-sm font-semibold text-slate-900">
                            Kategori Informasi
                        </label>
                        <select id="topic" name="topic" class="mt-1.5 block w-full px-4 py-2.5 rounded-lg border border-slate-300 text-slate-900 bg-white focus:border-brand-700 focus:ring-2 focus:ring-brand-700/20 text-sm focus:outline-none min-h-[44px]">
                            <option value="rute">Rute Perjalanan &amp; Transportasi</option>
                            <option value="destinasi">Informasi Destinasi (Pulo Cinta / Benteng Otanaha / Bubohu)</option>
                            <option value="budaya">Jadwal Perayaan Tradisi Budaya</option>
                            <option value="panduan">Rekomendasi Pemandu Lokal &amp; Penginapan</option>
                        </select>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-semibold text-slate-900">
                            Pesan atau Pertanyaan Anda <span class="text-red-600" aria-hidden="true">*</span>
                        </label>
                        <textarea id="message" name="message" rows="4" required class="mt-1.5 block w-full px-4 py-2.5 rounded-lg border border-slate-300 text-slate-900 placeholder:text-slate-400 focus:border-brand-700 focus:ring-2 focus:ring-brand-700/20 text-sm focus:outline-none" placeholder="Tuliskan pertanyaan spesifik Anda seputar rencana kunjungan ke Gorontalo..."></textarea>
                        <p id="message-error" class="hidden mt-1 text-xs text-red-600">Mohon tuliskan pesan atau pertanyaan Anda.</p>
                    </div>

                    <div class="pt-2">
                        <button type="submit" id="submit-btn" class="w-full sm:w-auto inline-flex items-center justify-center px-6 py-3 rounded-lg text-sm font-semibold bg-brand-800 text-white hover:bg-brand-900 transition-colors shadow-sm focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-brand-700 focus-visible:ring-offset-2 min-h-[44px]">
                            <span id="btn-text">Kirim Pesan Informasi</span>
                            <span id="btn-loading" class="hidden items-center gap-2">
                                <svg class="animate-spin h-4 w-4 text-white" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                </svg>
                                Mengirimkan...
                            </span>
                        </button>
                    </div>
                </form>
            </div>

            <div id="success-feedback" class="hidden py-8 text-center space-y-4">
                <div class="w-14 h-14 bg-brand-100 text-brand-800 rounded-full flex items-center justify-center mx-auto">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900">
                    Pesan Berhasil Terkirim!
                </h3>
                <p class="text-sm text-slate-600 max-w-md mx-auto leading-relaxed">
                    Terima kasih atas minat Anda mengunjungi Gorontalo. Petugas layanan informasi kami telah menerima pesan Anda dan akan merespons melalui email.
                </p>
                <div class="pt-4">
                    <button type="button" onclick="resetContactForm()" class="inline-flex items-center justify-center px-5 py-2.5 rounded-lg text-sm font-semibold bg-slate-100 text-slate-800 hover:bg-slate-200 transition-colors min-h-[44px]">
                        Kirim Pertanyaan Lain
                    </button>
                </div>
            </div>
        </div>

        <div class="lg:col-span-5 space-y-6">
            <div class="bg-white rounded-2xl border border-slate-200 p-6 sm:p-8 shadow-xs space-y-6">
                <div>
                    <h2 class="text-lg font-bold text-slate-900">
                        Kantor Layanan Wisatawan
                    </h2>
                    <p class="text-xs text-slate-500 mt-1">
                        Dinas Pariwisata Pemerintah Provinsi Gorontalo
                    </p>
                </div>

                <div class="space-y-4 text-sm text-slate-600">
                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-brand-50 text-brand-800 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <strong class="block text-slate-900">Alamat Kantor:</strong>
                            <span>Jl. Sapta Marga No. 12, Kelurahan Botu, Kecamatan Dungingi, Kota Gorontalo 96136</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-brand-50 text-brand-800 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </div>
                        <div>
                            <strong class="block text-slate-900">Telepon Resmi:</strong>
                            <span>(0435) 821-456</span>
                        </div>
                    </div>

                    <div class="flex items-start gap-3">
                        <div class="w-8 h-8 rounded-lg bg-brand-50 text-brand-800 flex items-center justify-center shrink-0 mt-0.5">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <strong class="block text-slate-900">Email Layanan:</strong>
                            <span>pariwisata@gorontaloprov.go.id</span>
                        </div>
                    </div>
                </div>

                <div class="pt-4 border-t border-slate-100 text-xs text-slate-500">
                    <p class="font-medium text-slate-700">Waktu Operasional:</p>
                    <p class="mt-0.5">Senin sampai Jumat: 08.00 - 16.00 WITA</p>
                    <p class="text-slate-400 mt-1">Sabtu, Minggu, dan Hari Libur Nasional: Tutup</p>
                </div>
            </div>

            <div class="bg-brand-900 text-white rounded-2xl p-6 sm:p-8 space-y-3">
                <span class="text-xs font-semibold uppercase tracking-wider text-amber-300">
                    Informasi Darurat
                </span>
                <h3 class="text-lg font-bold">
                    Pusat Kontak Cepat di Lokasi Wisata
                </h3>
                <p class="text-xs sm:text-sm text-brand-100 leading-relaxed">
                    Apabila membutuhkan pertolongan medis atau bantuan keamanan selama menjelajahi perairan Teluk Tomini, hubungi layanan SAR Gorontalo di 115 atau RSUD Aloei Saboe di (0435) 821-014.
                </p>
            </div>
        </div>
    </div>
</section>

<script>
    function handleContactSubmit(event) {
        event.preventDefault();

        const nameInput = document.getElementById('name');
        const emailInput = document.getElementById('email');
        const messageInput = document.getElementById('message');

        const nameError = document.getElementById('name-error');
        const emailError = document.getElementById('email-error');
        const messageError = document.getElementById('message-error');

        let isValid = true;

        if (!nameInput.value.trim()) {
            nameError.classList.remove('hidden');
            nameInput.classList.add('border-red-500');
            isValid = false;
        } else {
            nameError.classList.add('hidden');
            nameInput.classList.remove('border-red-500');
        }

        const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailPattern.test(emailInput.value.trim())) {
            emailError.classList.remove('hidden');
            emailInput.classList.add('border-red-500');
            isValid = false;
        } else {
            emailError.classList.add('hidden');
            emailInput.classList.remove('border-red-500');
        }

        if (!messageInput.value.trim()) {
            messageError.classList.remove('hidden');
            messageInput.classList.add('border-red-500');
            isValid = false;
        } else {
            messageError.classList.add('hidden');
            messageInput.classList.remove('border-red-500');
        }

        if (!isValid) {
            return;
        }

        const submitBtn = document.getElementById('submit-btn');
        const btnText = document.getElementById('btn-text');
        const btnLoading = document.getElementById('btn-loading');

        submitBtn.disabled = true;
        btnText.classList.add('hidden');
        btnLoading.classList.remove('hidden');
        btnLoading.classList.add('inline-flex');

        setTimeout(() => {
            document.getElementById('form-container').classList.add('hidden');
            document.getElementById('success-feedback').classList.remove('hidden');
            submitBtn.disabled = false;
            btnText.classList.remove('hidden');
            btnLoading.classList.add('hidden');
            btnLoading.classList.remove('inline-flex');
        }, 600);
    }

    function resetContactForm() {
        document.getElementById('contact-form').reset();
        document.getElementById('form-container').classList.remove('hidden');
        document.getElementById('success-feedback').classList.add('hidden');
    }
</script>
@endsection
