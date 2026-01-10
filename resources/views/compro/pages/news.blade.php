@extends('compro.layouts.app')

@section('title', 'Berita & Artikel - SD Negeri 1')

@section('content')

    <section class="relative bg-teal-900 py-16 lg:py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23facc15\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">Kabar Sekolah</h1>
            <p class="text-teal-100 text-lg max-w-2xl mx-auto">
                Informasi terbaru, prestasi siswa, dan artikel edukatif seputar kegiatan di SD Negeri 1 Contoh.
            </p>
        </div>
    </section>

    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="mb-16">
                <div
                    class="group relative rounded-4xl overflow-hidden bg-white shadow-xl hover:shadow-2xl transition duration-300 grid grid-cols-1 lg:grid-cols-2">
                    <div class="relative h-64 lg:h-auto overflow-hidden">
                        <div class="absolute inset-0 bg-teal-900/20 group-hover:bg-transparent transition z-10"></div>
                        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=80"
                            alt="Featured News"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition duration-700">
                        <span
                            class="absolute top-4 left-4 z-20 bg-yellow-400 text-teal-900 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider">
                            Berita Utama
                        </span>
                    </div>
                    <div class="p-8 lg:p-12 flex flex-col justify-center">
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-4">
                            <span class="flex items-center gap-1"><svg class="w-4 h-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                    </path>
                                </svg> 12 Januari 2025</span>
                            <span class="w-1 h-1 bg-gray-300 rounded-full"></span>
                            <span class="text-teal-600 font-bold">Kegiatan Sekolah</span>
                        </div>
                        <h2
                            class="text-2xl md:text-3xl font-black text-teal-900 mb-4 leading-tight group-hover:text-teal-700 transition">
                            <a href="#">Meriah! Perayaan Pentas Seni Tahunan SD Negeri 1 Contoh Memukau Ratusan
                                Penonton</a>
                        </h2>
                        <p class="text-gray-600 mb-6 line-clamp-3">
                            Kegiatan pentas seni tahun ini menampilkan berbagai bakat siswa mulai dari tari tradisional,
                            paduan suara, hingga drama musikal. Acara dihadiri oleh pejabat dinas pendidikan setempat...
                        </p>
                        <a href="{{ route('compro.read-news') }}"
                            class="inline-flex items-center gap-2 text-teal-700 font-bold hover:gap-3 transition-all">
                            Baca Selengkapnya <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">

                <div class="lg:col-span-2">
                    <div class="flex items-center justify-between mb-8">
                        <h3 class="text-2xl font-bold text-teal-900">Berita Terbaru</h3>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        @php
                            $news_list = [
                                [
                                    'title' => 'Tim Futsal Raih Juara 1 Tingkat Kecamatan',
                                    'date' => '10 Januari 2025',
                                    'cat' => 'Prestasi',
                                    'img' =>
                                        'https://images.unsplash.com/photo-1574629810360-7efbbe195018?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                    'desc' =>
                                        'Prestasi membanggakan kembali diraih oleh tim futsal sekolah dalam ajang O2SN.',
                                ],
                                [
                                    'title' => 'Sosialisasi Kesehatan Gigi dan Mulut',
                                    'date' => '05 Januari 2025',
                                    'cat' => 'Edukasi',
                                    'img' =>
                                        'https://images.unsplash.com/photo-1588776814546-1ffcf47267a5?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                    'desc' =>
                                        'Kerjasama dengan Puskesmas setempat untuk memberikan edukasi kepada siswa kelas 1-3.',
                                ],
                                [
                                    'title' => 'Penerimaan Peserta Didik Baru (PPDB) 2025',
                                    'date' => '01 Januari 2025',
                                    'cat' => 'Pengumuman',
                                    'img' =>
                                        'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                    'desc' =>
                                        'Informasi lengkap mengenai jadwal, syarat, dan jalur pendaftaran siswa baru.',
                                ],
                                [
                                    'title' => 'Kunjungan Edukatif ke Museum Geologi',
                                    'date' => '28 Desember 2024',
                                    'cat' => 'Kegiatan',
                                    'img' =>
                                        'https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                    'desc' => 'Siswa kelas 5 belajar sejarah dan batuan secara langsung di Bandung.',
                                ],
                                [
                                    'title' => 'Rapat Orang Tua Murid Awal Semester',
                                    'date' => '20 Desember 2024',
                                    'cat' => 'Agenda',
                                    'img' =>
                                        'https://images.unsplash.com/photo-1577962917302-cd874c4e31d2?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                    'desc' =>
                                        'Pembahasan program kerja sekolah dan komite untuk satu tahun ajaran ke depan.',
                                ],
                                [
                                    'title' => 'Tips Menjaga Konsentrasi Belajar Anak',
                                    'date' => '15 Desember 2024',
                                    'cat' => 'Artikel',
                                    'img' =>
                                        'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80',
                                    'desc' => 'Beberapa metode efektif yang bisa diterapkan orang tua di rumah.',
                                ],
                            ];
                        @endphp

                        @foreach ($news_list as $item)
                            <article
                                class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition duration-300 flex flex-col h-full border border-gray-100 group">
                                <div class="relative h-48 overflow-hidden">
                                    <img src="{{ $item['img'] }}" alt="{{ $item['title'] }}"
                                        class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                                    <div
                                        class="absolute top-4 left-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-lg text-xs font-bold text-teal-800">
                                        {{ $item['cat'] }}
                                    </div>
                                </div>
                                <div class="p-6 flex flex-col grow">
                                    <div class="flex items-center gap-2 text-xs text-gray-400 mb-3">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                        {{ $item['date'] }}
                                    </div>
                                    <h3
                                        class="text-lg font-bold text-gray-900 mb-3 leading-snug group-hover:text-teal-600 transition">
                                        <a href="#">{{ $item['title'] }}</a>
                                    </h3>
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-2 grow">
                                        {{ $item['desc'] }}
                                    </p>
                                    <a href="#"
                                        class="inline-flex items-center text-sm font-bold text-teal-600 hover:text-teal-800 transition pt-4 border-t border-gray-100">
                                        Baca Selengkapnya &rarr;
                                    </a>
                                </div>
                            </article>
                        @endforeach
                    </div>

                    <div class="mt-12 flex justify-center">
                        <nav class="flex items-center gap-2">
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:border-teal-600 hover:text-teal-600 transition">&laquo;</button>
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-lg bg-teal-600 text-white font-bold shadow-md">1</button>
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:border-teal-600 hover:text-teal-600 transition">2</button>
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:border-teal-600 hover:text-teal-600 transition">3</button>
                            <span class="text-gray-400 px-2">...</span>
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-600 hover:border-teal-600 hover:text-teal-600 transition">10</button>
                            <button
                                class="w-10 h-10 flex items-center justify-center rounded-lg border border-gray-200 text-gray-400 hover:border-teal-600 hover:text-teal-600 transition">&raquo;</button>
                        </nav>
                    </div>
                </div>

                <div class="lg:col-span-1 space-y-8">

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
                            <li><a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-teal-700 hover:bg-teal-50 px-3 py-2 rounded-lg transition"><span>Prestasi</span> <span
                                        class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-500">12</span></a></li>
                            <li><a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-teal-700 hover:bg-teal-50 px-3 py-2 rounded-lg transition"><span>Pengumuman</span> <span
                                        class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-500">5</span></a></li>
                            <li><a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-teal-700 hover:bg-teal-50 px-3 py-2 rounded-lg transition"><span>Kegiatan</span> <span
                                        class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-500">8</span></a></li>
                            <li><a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-teal-700 hover:bg-teal-50 px-3 py-2 rounded-lg transition"><span>Artikel Edukasi</span> <span
                                        class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-500">20</span></a></li>
                            <li><a href="#"
                                    class="flex justify-between items-center text-gray-600 hover:text-teal-700 hover:bg-teal-50 px-3 py-2 rounded-lg transition"><span>Agenda</span> <span
                                        class="text-xs bg-gray-100 px-2 py-1 rounded-full text-gray-500">3</span></a></li>
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
                            <a href="#" class="flex gap-3 group">
                                <div class="w-20 h-20 rounded-xl overflow-hidden shrink-0">
                                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                </div>
                                <div>
                                    <h5
                                        class="text-sm font-bold text-gray-900 line-clamp-2 group-hover:text-teal-600 transition">
                                        Jadwal Ujian Nasional 2024</h5>
                                    <span class="text-xs text-gray-400 mt-1 block">1 Minggu lalu</span>
                                </div>
                            </a>
                            <a href="#" class="flex gap-3 group">
                                <div class="w-20 h-20 rounded-xl overflow-hidden shrink-0">
                                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                                        class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                                </div>
                                <div>
                                    <h5
                                        class="text-sm font-bold text-gray-900 line-clamp-2 group-hover:text-teal-600 transition">
                                        Karya Wisata ke Jakarta</h5>
                                    <span class="text-xs text-gray-400 mt-1 block">3 Minggu lalu</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="bg-teal-900 p-6 rounded-3xl shadow-lg text-white relative overflow-hidden">
                        <div
                            class="absolute top-0 right-0 w-32 h-32 bg-yellow-400 rounded-full blur-3xl opacity-20 -mr-16 -mt-16">
                        </div>
                        <h4 class="font-bold mb-4 text-lg relative z-10">Tags Populer</h4>
                        <div class="flex flex-wrap gap-2 relative z-10">
                            <a href="#"
                                class="bg-teal-800 hover:bg-yellow-400 hover:text-teal-900 px-3 py-1 rounded-full text-xs font-medium transition">#KurikulumMerdeka</a>
                            <a href="#"
                                class="bg-teal-800 hover:bg-yellow-400 hover:text-teal-900 px-3 py-1 rounded-full text-xs font-medium transition">#Pramuka</a>
                            <a href="#"
                                class="bg-teal-800 hover:bg-yellow-400 hover:text-teal-900 px-3 py-1 rounded-full text-xs font-medium transition">#O2SN</a>
                            <a href="#"
                                class="bg-teal-800 hover:bg-yellow-400 hover:text-teal-900 px-3 py-1 rounded-full text-xs font-medium transition">#PPDB</a>
                            <a href="#"
                                class="bg-teal-800 hover:bg-yellow-400 hover:text-teal-900 px-3 py-1 rounded-full text-xs font-medium transition">#SiswaBerprestasi</a>
                            <a href="#"
                                class="bg-teal-800 hover:bg-yellow-400 hover:text-teal-900 px-3 py-1 rounded-full text-xs font-medium transition">#Parenting</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

@endsection
