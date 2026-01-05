@extends('compro.layouts.app')

@section('title', 'Meriah! Pentas Seni Tahunan - SD Negeri 1 Contoh')

@section('content')

    <div class="bg-teal-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <nav class="flex text-sm font-medium text-gray-500">
                <a href="/" class="hover:text-teal-600 transition">Beranda</a>
                <span class="mx-2">/</span>
                <a href="/berita" class="hover:text-teal-600 transition">Berita</a>
                <span class="mx-2">/</span>
                <span class="text-teal-800">Kegiatan Sekolah</span>
            </nav>
        </div>
    </div>

    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">

                <article class="lg:col-span-2">

                    <div class="mb-8">
                        <span
                            class="bg-yellow-100 text-yellow-800 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-4 inline-block">
                            Kegiatan Sekolah
                        </span>
                        <h1 class="text-3xl md:text-4xl lg:text-5xl font-black text-teal-900 leading-tight mb-6">
                            Meriah! Perayaan Pentas Seni Tahunan SD Negeri 1 Contoh Memukau Ratusan Penonton
                        </h1>

                        <div class="flex items-center gap-4 border-b border-gray-100 pb-8">
                            <div class="flex items-center gap-3">
                                <img src="https://ui-avatars.com/api/?name=Admin+Sekolah&background=0f766e&color=fff"
                                    alt="Author" class="w-10 h-10 rounded-full">
                                <div>
                                    <p class="text-sm font-bold text-gray-900">Admin Sekolah</p>
                                    <p class="text-xs text-gray-500">Editor Konten</p>
                                </div>
                            </div>
                            <div class="h-8 w-px bg-gray-200 mx-2"></div>
                            <div class="text-sm text-gray-500">
                                <span class="block font-bold text-gray-700">Tanggal</span>
                                12 Januari 2025
                            </div>
                        </div>
                    </div>

                    <div class="rounded-4xl overflow-hidden mb-10 shadow-lg">
                        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-1.2.1&auto=format&fit=crop&w=1200&q=80"
                            alt="Pentas Seni" class="w-full h-auto object-cover">
                        <div class="bg-gray-50 p-3 text-center text-xs text-gray-500 italic">
                            Dokumentasi: Penampilan Tari Saman oleh Siswa Kelas 5
                        </div>
                    </div>

                    <div class="prose prose-lg prose-teal max-w-none text-gray-600 leading-relaxed">
                        <p class="mb-6">
                            <strong class="text-teal-900">Tasikmalaya</strong> – Gelak tawa dan tepuk tangan riuh memenuhi
                            halaman utama SD Negeri 1 Contoh pada hari Sabtu lalu. Ratusan wali murid, tamu undangan, dan
                            warga sekitar antusias menyaksikan gelaran <strong>Pentas Seni & Kreativitas Siswa
                                (Pensi)</strong> yang menjadi agenda tahunan sekolah.
                        </p>

                        <p class="mb-6">
                            Acara dibuka secara resmi oleh Bapak Kepala Sekolah, Agun, S.Pd., M.Pd., dengan pemukulan gong.
                            Dalam sambutannya, beliau menyampaikan bahwa kegiatan ini bukan sekadar hiburan, melainkan wadah
                            pembentukan karakter percaya diri anak.
                        </p>

                        <blockquote
                            class="border-l-4 border-yellow-400 pl-6 py-2 my-8 italic text-gray-700 bg-yellow-50 rounded-r-xl">
                            "Kami ingin anak-anak tidak hanya cerdas secara akademik di dalam kelas, tetapi juga cerdas
                            secara emosional dan sosial. Berani tampil di depan umum adalah modal besar untuk masa depan
                            mereka."
                            <footer class="text-sm font-bold text-teal-900 mt-2">— Bpk. Agun, Kepala Sekolah</footer>
                        </blockquote>

                        <h2 class="text-2xl font-bold text-teal-900 mt-10 mb-4">Ragam Penampilan Budaya</h2>
                        <p class="mb-6">
                            Tahun ini, tema yang diusung adalah <em>"Merawat Tradisi di Era Digital"</em>. Penampilan
                            didominasi oleh kesenian tradisional yang dikemas secara modern. Beberapa penampilan yang
                            menjadi sorotan antara lain:
                        </p>

                        <ul class="list-disc pl-6 mb-8 space-y-2">
                            <li><strong>Tari Merak:</strong> Dibawakan dengan luwes oleh siswi kelas 4.</li>
                            <li><strong>Angklung Masal:</strong> Kolaborasi 50 siswa memainkan lagu 'Manuk Dadali'.</li>
                            <li><strong>Drama Musikal:</strong> Kisah legenda daerah yang diperankan oleh Teater Cilik
                                sekolah.</li>
                        </ul>

                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <img src="https://images.unsplash.com/photo-1516483638261-f4dbaf036963?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                class="rounded-xl w-full h-48 object-cover shadow-sm" alt="Foto 1">
                            <img src="https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                                class="rounded-xl w-full h-48 object-cover shadow-sm" alt="Foto 2">
                        </div>

                        <p class="mb-6">
                            Acara ditutup dengan pembagian hadiah untuk siswa berprestasi semester ganjil dan doa bersama.
                            Kami mengucapkan terima kasih kepada seluruh panitia, komite sekolah, dan sponsor yang telah
                            mendukung kelancaran acara ini. Sampai jumpa di Pensi tahun depan!
                        </p>
                    </div>

                    <div class="mt-12 pt-8 border-t border-gray-100">
                        <div class="flex flex-col md:flex-row justify-between items-center gap-6">
                            <div class="flex gap-2">
                                <span class="font-bold text-teal-900 mr-2">Tags:</span>
                                <a href="#"
                                    class="bg-gray-100 hover:bg-teal-100 text-gray-600 hover:text-teal-700 text-xs px-3 py-1 rounded-full transition">#Pensi2025</a>
                                <a href="#"
                                    class="bg-gray-100 hover:bg-teal-100 text-gray-600 hover:text-teal-700 text-xs px-3 py-1 rounded-full transition">#Kesenian</a>
                                <a href="#"
                                    class="bg-gray-100 hover:bg-teal-100 text-gray-600 hover:text-teal-700 text-xs px-3 py-1 rounded-full transition">#SiswaKreatif</a>
                            </div>

                            <div class="flex items-center gap-3">
                                <span class="font-bold text-teal-900 text-sm">Bagikan:</span>
                                <a href="#"
                                    class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center text-green-600 hover:bg-green-600 hover:text-white transition">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                    </svg>
                                </a>
                                <a href="#"
                                    class="w-8 h-8 rounded-full bg-blue-100 flex items-center justify-center text-blue-600 hover:bg-blue-600 hover:text-white transition">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                        <path
                                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="mt-16">
                        <h3 class="text-2xl font-bold text-teal-900 mb-6">Berita Lainnya</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <a href="#"
                                class="group flex gap-4 bg-white border border-gray-100 p-4 rounded-2xl hover:shadow-lg transition">
                                <div class="w-24 h-24 rounded-xl overflow-hidden shrink-0">
                                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                </div>
                                <div>
                                    <span class="text-xs font-bold text-yellow-600">Prestasi</span>
                                    <h4
                                        class="font-bold text-teal-900 leading-tight mt-1 group-hover:text-teal-600 transition">
                                        Juara Umum Pramuka Tingkat Kota</h4>
                                    <span class="text-xs text-gray-400 mt-2 block">10 Januari 2025</span>
                                </div>
                            </a>
                            <a href="#"
                                class="group flex gap-4 bg-white border border-gray-100 p-4 rounded-2xl hover:shadow-lg transition">
                                <div class="w-24 h-24 rounded-xl overflow-hidden shrink-0">
                                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                </div>
                                <div>
                                    <span class="text-xs font-bold text-yellow-600">Akademik</span>
                                    <h4
                                        class="font-bold text-teal-900 leading-tight mt-1 group-hover:text-teal-600 transition">
                                        Jadwal Ujian Nasional 2024</h4>
                                    <span class="text-xs text-gray-400 mt-2 block">05 Januari 2025</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </article>

                <aside class="lg:col-span-1 space-y-8">
                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                        <h4 class="font-bold text-teal-900 mb-4 text-lg">Cari Berita</h4>
                        <div class="relative">
                            <input type="text" placeholder="Ketik kata kunci..."
                                class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-teal-500 bg-gray-50">
                            <svg class="w-5 h-5 text-gray-400 absolute left-3 top-3.5" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                        <h4 class="font-bold text-teal-900 mb-4 text-lg flex items-center gap-2">
                            <span class="w-1 h-6 bg-yellow-400 rounded-full"></span> Kategori
                        </h4>
                        <ul class="space-y-2">
                            <li>
                                <a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-teal-700 hover:bg-teal-50 px-3 py-2 rounded-lg transition group">
                                    <span class="flex items-center gap-3 font-medium">
                                        <svg class="w-5 h-5 text-gray-400 group-hover:text-yellow-500 transition"
                                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                                            </path>
                                        </svg>
                                        Prestasi
                                    </span>
                                    <span
                                        class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-500 font-bold group-hover:bg-white group-hover:text-teal-600 transition">12</span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="bg-white p-6 rounded-3xl shadow-sm border border-gray-100">
                        <h4 class="font-bold text-teal-900 mb-4 text-lg flex items-center gap-2">
                            <span class="w-1 h-6 bg-yellow-400 rounded-full"></span> Populer
                        </h4>
                        <div class="space-y-4">
                            <a href="#" class="flex gap-3 group">
                                <div class="w-20 h-20 rounded-xl overflow-hidden shrink-0">
                                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                </div>
                                <div>
                                    <h5
                                        class="text-sm font-bold text-gray-900 line-clamp-2 group-hover:text-teal-600 transition">
                                        Juara Umum Lomba Pramuka Tingkat Kota</h5>
                                    <span class="text-xs text-gray-400 mt-1 block">2 Bulan lalu</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </section>

@endsection
