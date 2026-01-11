@extends('compro.layouts.app')

@section('title', "Info PPDB - {$school['NAMA_SEKOLAH']}")

@section('content')

    <section class="relative bg-teal-900 py-20 lg:py-28 overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23facc15\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <div
                class="inline-flex items-center gap-2 bg-yellow-400 text-teal-900 px-4 py-2 rounded-full font-bold text-sm mb-6 animate-bounce">
                <span class="w-3 h-3 bg-red-600 rounded-full animate-pulse"></span>
                Pendaftaran Sedang Dibuka!
            </div>

            <h1 class="text-4xl md:text-6xl font-black text-white mb-6 leading-tight">
                Bergabunglah Menjadi Bagian dari <br>
                <span class="text-yellow-400">Generasi Juara.</span>
            </h1>
            <p class="text-teal-100 text-lg max-w-2xl mx-auto mb-10">
                Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran 2025/2026 SD Negeri 1 Contoh. Siapkan masa depan buah hati
                Anda bersama kami.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#"
                    class="px-8 py-4 bg-white text-teal-900 font-bold rounded-xl shadow-[4px_4px_0px_0px_rgba(250,204,21,1)] hover:shadow-none hover:translate-x-0.5 hover:translate-y-0.5 transition border-2 border-transparent">
                    Daftar Sekarang
                </a>
                <a href="#syarat"
                    class="px-8 py-4 bg-transparent border-2 border-teal-500 text-teal-100 font-bold rounded-xl hover:bg-teal-800 transition">
                    Lihat Persyaratan
                </a>
            </div>
        </div>
    </section>

    <div class="max-w-5xl mx-auto px-4 -mt-10 relative z-20">
        <div
            class="bg-white rounded-3xl shadow-xl p-8 grid grid-cols-1 md:grid-cols-3 gap-8 divide-y md:divide-y-0 md:divide-x divide-gray-100">
            <div class="text-center pt-4 md:pt-0">
                <p class="text-gray-500 text-sm font-bold uppercase tracking-wider mb-1">Total Kuota</p>
                <p class="text-4xl font-black text-teal-900">112 Siswa</p>
                <p class="text-xs text-gray-400 mt-1">(4 Rombel)</p>
            </div>
            <div class="text-center pt-8 md:pt-0">
                <p class="text-gray-500 text-sm font-bold uppercase tracking-wider mb-1">Jalur Zonasi</p>
                <p class="text-4xl font-black text-teal-900">80%</p>
                <p class="text-xs text-gray-400 mt-1">Prioritas Warga Sekitar</p>
            </div>
            <div class="text-center pt-8 md:pt-0">
                <p class="text-gray-500 text-sm font-bold uppercase tracking-wider mb-1">Jalur Afirmasi</p>
                <p class="text-4xl font-black text-teal-900">15%</p>
                <p class="text-xs text-gray-400 mt-1">KIP / KIS / PKH</p>
            </div>
        </div>
    </div>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-black text-teal-900 mb-4">Jalur Pendaftaran</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Sesuai dengan Permendikbud, kami membuka 3 jalur pendaftaran
                    utama.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div
                    class="bg-teal-50 rounded-3xl p-8 border border-teal-100 hover:border-teal-500 transition duration-300 group">
                    <div
                        class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-teal-600 shadow-sm mb-6 group-hover:scale-110 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                            </path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-teal-900 mb-3">Jalur Zonasi</h3>
                    <p class="text-gray-600 text-sm mb-4">Diperuntukkan bagi calon peserta didik yang berdomisili di dalam
                        wilayah zonasi yang ditetapkan pemerintah daerah.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Kuota Minimal 70%
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Kartu Keluarga (KK) Asli
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-yellow-50 rounded-3xl p-8 border border-yellow-100 hover:border-yellow-500 transition duration-300 group">
                    <div
                        class="w-16 h-16 bg-white rounded-2xl flex items-center justify-center text-yellow-500 shadow-sm mb-6 group-hover:scale-110 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-teal-900 mb-3">Jalur Afirmasi</h3>
                    <p class="text-gray-600 text-sm mb-4">Bagi peserta didik dari keluarga ekonomi tidak mampu dan
                        penyandang disabilitas.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Kuota Minimal 15%
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Wajib Melampirkan KIP/PKH
                        </li>
                    </ul>
                </div>

                <div
                    class="bg-white rounded-3xl p-8 border border-gray-200 hover:border-teal-500 transition duration-300 group shadow-lg">
                    <div
                        class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center text-gray-600 shadow-sm mb-6 group-hover:scale-110 transition">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-teal-900 mb-3">Perpindahan Orang Tua</h3>
                    <p class="text-gray-600 text-sm mb-4">Untuk peserta didik yang mengikuti kepindahan domisili orang
                        tua/wali.</p>
                    <ul class="text-sm text-gray-500 space-y-2">
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Kuota Maksimal 5%
                        </li>
                        <li class="flex items-center gap-2">
                            <svg class="w-4 h-4 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                                </path>
                            </svg>
                            Surat Tugas Instansi
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="syarat" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row gap-16">

                <div class="w-full lg:w-1/2">
                    <div class="flex items-center gap-3 mb-6">
                        <div
                            class="w-10 h-10 rounded-full bg-teal-900 text-white flex items-center justify-center font-bold">
                            1</div>
                        <h2 class="text-3xl font-black text-teal-900">Persyaratan Berkas</h2>
                    </div>

                    <div class="bg-white rounded-3xl p-8 shadow-sm">
                        <p class="text-gray-600 mb-6 font-medium">Harap siapkan dokumen berikut dalam map warna <span
                                class="text-red-500 font-bold">Merah</span> (Laki-laki) atau <span
                                class="text-yellow-500 font-bold">Kuning</span> (Perempuan):</p>

                        <ul class="space-y-4">
                            <li class="flex items-start gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <strong class="text-gray-900 block">Fotokopi Akta Kelahiran</strong>
                                    <span class="text-sm text-gray-500">Membawa yang asli saat verifikasi (Usia min. 6
                                        tahun per 1 Juli).</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <strong class="text-gray-900 block">Fotokopi Kartu Keluarga (KK)</strong>
                                    <span class="text-sm text-gray-500">Minimal diterbitkan 1 tahun sebelum
                                        pendaftaran.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <strong class="text-gray-900 block">Fotokopi KTP Orang Tua</strong>
                                    <span class="text-sm text-gray-500">Ayah dan Ibu.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <strong class="text-gray-900 block">Pas Foto 3x4</strong>
                                    <span class="text-sm text-gray-500">Berwarna, sebanyak 2 lembar.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <div
                                    class="w-6 h-6 rounded-full bg-green-100 text-green-600 flex items-center justify-center shrink-0 mt-0.5">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <div>
                                    <strong class="text-gray-900 block">Ijazah TK/PAUD (Jika ada)</strong>
                                    <span class="text-sm text-gray-500">Tidak wajib.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="flex items-center gap-3 mb-6">
                        <div
                            class="w-10 h-10 rounded-full bg-yellow-400 text-teal-900 flex items-center justify-center font-bold">
                            2</div>
                        <h2 class="text-3xl font-black text-teal-900">Jadwal Kegiatan</h2>
                    </div>

                    <div class="relative pl-8 border-l-2 border-teal-200 space-y-10">
                        <div class="relative">
                            <div
                                class="absolute -left-10.25 bg-teal-600 h-6 w-6 rounded-full border-4 border-white shadow">
                            </div>
                            <span
                                class="text-sm font-bold text-teal-600 bg-teal-100 px-2 py-1 rounded mb-2 inline-block">17
                                - 22 Juni 2025</span>
                            <h3 class="text-xl font-bold text-gray-900">Pendaftaran Online/Offline</h3>
                            <p class="text-gray-600 text-sm mt-1">Mengisi formulir dan menyerahkan berkas ke sekolah (Pukul
                                08.00 - 12.00 WIB).</p>
                        </div>
                        <div class="relative">
                            <div
                                class="absolute -left-10.25 bg-teal-600 h-6 w-6 rounded-full border-4 border-white shadow">
                            </div>
                            <span
                                class="text-sm font-bold text-teal-600 bg-teal-100 px-2 py-1 rounded mb-2 inline-block">23
                                - 24 Juni 2025</span>
                            <h3 class="text-xl font-bold text-gray-900">Verifikasi Berkas</h3>
                            <p class="text-gray-600 text-sm mt-1">Panitia melakukan verifikasi kelengkapan data dan jarak
                                zonasi.</p>
                        </div>
                        <div class="relative">
                            <div
                                class="absolute -left-10.25 bg-yellow-400 h-6 w-6 rounded-full border-4 border-white shadow">
                            </div>
                            <span
                                class="text-sm font-bold text-yellow-600 bg-yellow-100 px-2 py-1 rounded mb-2 inline-block">26
                                Juni 2025</span>
                            <h3 class="text-xl font-bold text-gray-900">Pengumuman Hasil Seleksi</h3>
                            <p class="text-gray-600 text-sm mt-1">Hasil seleksi ditempel di papan pengumuman sekolah dan
                                website.</p>
                        </div>
                        <div class="relative">
                            <div
                                class="absolute -left-10.25 bg-teal-900 h-6 w-6 rounded-full border-4 border-white shadow">
                            </div>
                            <span
                                class="text-sm font-bold text-teal-800 bg-gray-200 px-2 py-1 rounded mb-2 inline-block">27
                                - 28 Juni 2025</span>
                            <h3 class="text-xl font-bold text-gray-900">Daftar Ulang</h3>
                            <p class="text-gray-600 text-sm mt-1">Bagi siswa yang diterima wajib melakukan lapor diri.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-black text-center text-teal-900 mb-10">Pertanyaan Sering Diajukan (FAQ)</h2>

            <div class="space-y-4">
                <details
                    class="group bg-teal-50 rounded-2xl p-4 cursor-pointer [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between font-bold text-teal-900">
                        Berapa batas usia minimal masuk SD?
                        <svg class="w-5 h-5 transition group-open:rotate-180" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </summary>
                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        Sesuai peraturan, prioritas utama adalah usia 7 tahun. Usia minimal adalah 6 tahun pada tanggal 1
                        Juli tahun berjalan. Untuk usia 5 tahun 6 bulan harus melampirkan rekomendasi psikolog profesional.
                    </p>
                </details>

                <details
                    class="group bg-teal-50 rounded-2xl p-4 cursor-pointer [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between font-bold text-teal-900">
                        Apakah dipungut biaya pendaftaran?
                        <svg class="w-5 h-5 transition group-open:rotate-180" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </summary>
                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        Tidak. Seluruh proses Penerimaan Peserta Didik Baru (PPDB) di SD Negeri 1 Contoh
                        <strong>GRATIS</strong> (Tidak dipungut biaya apapun).
                    </p>
                </details>

                <details
                    class="group bg-teal-50 rounded-2xl p-4 cursor-pointer [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between font-bold text-teal-900">
                        Apakah harus bisa membaca dan berhitung (Calistung)?
                        <svg class="w-5 h-5 transition group-open:rotate-180" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </summary>
                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        <strong>TIDAK.</strong> Seleksi masuk SD dilarang menggunakan tes membaca, menulis, dan berhitung.
                        Seleksi murni berdasarkan Usia dan Jarak Zonasi tempat tinggal.
                    </p>
                </details>

                <details
                    class="group bg-teal-50 rounded-2xl p-4 cursor-pointer [&_summary::-webkit-details-marker]:hidden">
                    <summary class="flex items-center justify-between font-bold text-teal-900">
                        Bagaimana jika KK saya baru pindah kurang dari 1 tahun?
                        <svg class="w-5 h-5 transition group-open:rotate-180" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </summary>
                    <p class="mt-4 text-gray-600 text-sm leading-relaxed">
                        Jika KK kurang dari 1 tahun, bisa menggunakan Surat Keterangan Domisili dari RT/RW yang dilegalisir
                        oleh Lurah/Kepala Desa setempat yang menerangkan bahwa yang bersangkutan telah berdomisili paling
                        singkat 1 tahun.
                    </p>
                </details>
            </div>
        </div>
    </section>

    <section class="py-16 bg-teal-900 text-white text-center">
        <div class="max-w-3xl mx-auto px-4">
            <h2 class="text-3xl font-black mb-4">Butuh Bantuan Pendaftaran?</h2>
            <p class="text-teal-100 mb-8">Tim panitia PPDB kami siap membantu Anda pada jam kerja (Senin - Sabtu, 08.00 -
                12.00).</p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#"
                    class="flex items-center justify-center gap-2 bg-green-500 hover:bg-green-600 text-white px-8 py-3 rounded-full font-bold transition">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                    </svg>
                    Chat WhatsApp Panitia
                </a>
                <a href="#"
                    class="flex items-center justify-center gap-2 bg-transparent border-2 border-white hover:bg-white hover:text-teal-900 text-white px-8 py-3 rounded-full font-bold transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                    </svg>
                    Download Brosur PDF
                </a>
            </div>
        </div>
    </section>

@endsection
