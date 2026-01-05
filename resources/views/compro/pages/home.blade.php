@extends('compro.layouts.app')

@section('title', 'Beranda - SD Negri 1 Contoh')

@section('content')

    <section class="relative bg-teal-50 overflow-hidden">
        <div
            class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-yellow-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob">
        </div>
        <div
            class="absolute -bottom-32 -left-20 w-96 h-96 bg-teal-200 rounded-full mix-blend-multiply filter blur-3xl opacity-50 animate-blob animation-delay-2000">
        </div>

        <div
            class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 md:py-28 flex flex-col-reverse md:flex-row items-center gap-12">

            <div class="w-full md:w-1/2 space-y-6 text-center md:text-left z-10">
                <div
                    class="inline-block bg-white text-teal-800 px-4 py-1.5 rounded-full text-sm font-bold shadow-sm border border-teal-100 mb-2">
                    👋 Selamat Datang di Website Resmi
                </div>
                <h1 class="text-4xl md:text-6xl font-extrabold text-teal-900 leading-tight">
                    Sekolah Ramah Anak, <br>
                    <span class="text-transparent bg-clip-text bg-linear-to-r from-teal-600 to-teal-400">Generasi
                        Juara!</span>
                </h1>
                <p class="text-lg text-gray-600 leading-relaxed max-w-lg mx-auto md:mx-0">
                    Membangun fondasi karakter islami dan intelektual siswa melalui pembelajaran yang menyenangkan dan
                    fasilitas modern.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start pt-4">
                    <a href="#"
                        class="bg-yellow-400 text-teal-900 px-8 py-3.5 rounded-xl font-bold hover:bg-yellow-300 transition shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                        Daftar Sekarang (PPDB)
                    </a>
                    <a href="#"
                        class="bg-white text-teal-700 border-2 border-teal-100 px-8 py-3.5 rounded-xl font-bold hover:border-teal-600 hover:text-teal-800 transition shadow-sm">
                        Lihat Profil
                    </a>
                </div>
            </div>

            <div class="w-full md:w-1/2 relative z-10">
                <div class="relative rounded-3xl overflow-hidden shadow-2xl border-8 border-white group">
                    <div class="absolute inset-0 bg-teal-900/10 group-hover:bg-transparent transition duration-500"></div>

                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Siswa SD Belajar"
                        class="w-full h-80 md:h-125 object-cover transform group-hover:scale-105 transition duration-700">
                </div>

                <div
                    class="absolute -bottom-6 -left-6 md:bottom-10 md:-left-10 bg-white p-4 rounded-2xl shadow-xl border-l-4 border-yellow-400 hidden md:block animate-bounce-slow">
                    <div class="flex items-center gap-3">
                        <div class="bg-teal-100 p-2 rounded-full text-teal-600">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-xs text-gray-500 font-bold uppercase">Terakreditasi</p>
                            <p class="text-xl font-extrabold text-teal-900">A (Unggul)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-teal-800 text-white py-10 relative -mt-8 mx-4 md:mx-8 rounded-2xl shadow-lg z-20">
        <div class="max-w-7xl mx-auto px-4 grid grid-cols-2 md:grid-cols-4 gap-8 text-center divide-x divide-teal-700">
            <div>
                <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-1">540+</div>
                <div class="text-sm md:text-base text-teal-100">Siswa Aktif</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-1">32</div>
                <div class="text-sm md:text-base text-teal-100">Guru & Staff</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-1">15+</div>
                <div class="text-sm md:text-base text-teal-100">Ekstrakurikuler</div>
            </div>
            <div>
                <div class="text-3xl md:text-4xl font-bold text-yellow-400 mb-1">50+</div>
                <div class="text-sm md:text-base text-teal-100">Penghargaan</div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="w-full md:w-1/3 flex justify-center">
                    <div class="relative w-64 h-64 md:w-80 md:h-80">
                        <div class="absolute inset-0 bg-yellow-400 rounded-full transform rotate-6"></div>
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            alt="Kepala Sekolah"
                            class="absolute inset-0 w-full h-full object-cover rounded-full border-4 border-white shadow-lg">
                    </div>
                </div>
                <div class="w-full md:w-2/3 text-center md:text-left">
                    <h2 class="text-teal-600 font-bold uppercase tracking-wider text-sm mb-2">Sambutan Kepala Sekolah</h2>
                    <h3 class="text-3xl font-bold text-gray-900 mb-6">Assalamu’alaikum Warahmatullahi Wabarakatuh</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        "Pendidikan adalah tiket ke masa depan. Hari esok dimiliki oleh orang-orang yang mempersiapkannya
                        hari ini.
                        Di SD Negri 1 Contoh, kami tidak hanya mengajarkan ilmu pengetahuan, tetapi juga menanamkan
                        nilai-nilai
                        moral dan etika yang akan menjadi bekal hidup siswa di masa depan."
                    </p>
                    <div>
                        <p class="text-xl font-bold text-teal-900">Bapak Agun, S.Pd., M.Pd.</p>
                        <p class="text-gray-500">Kepala Sekolah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-teal-900 mb-4">Mengapa Memilih Kami?</h2>
                <p class="text-gray-600 max-w-2xl mx-auto">Kami menyediakan lingkungan belajar yang komprehensif untuk
                    mendukung tumbuh kembang anak secara maksimal.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border-b-4 border-teal-500 group">
                    <div
                        class="w-14 h-14 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-teal-600 group-hover:text-white transition duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Kurikulum Merdeka</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Pembelajaran berpusat pada peserta didik, mendorong
                        kreativitas dan kemandirian dalam memecahkan masalah.</p>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border-b-4 border-yellow-400 group">
                    <div
                        class="w-14 h-14 bg-yellow-100 text-yellow-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-yellow-400 group-hover:text-white transition duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Program Tahfidz</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Pembiasaan membaca dan menghafal Al-Qur'an setiap pagi
                        untuk membentuk karakter religius siswa.</p>
                </div>

                <div
                    class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition duration-300 border-b-4 border-teal-500 group">
                    <div
                        class="w-14 h-14 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center mb-6 group-hover:bg-teal-600 group-hover:text-white transition duration-300">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 mb-3">Sains & Teknologi</h3>
                    <p class="text-gray-600 text-sm leading-relaxed">Fasilitas Lab Komputer dan Lab IPA yang lengkap untuk
                        menunjang praktik siswa secara langsung.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-end mb-10">
                <div>
                    <h2 class="text-3xl font-bold text-teal-900">Berita Sekolah</h2>
                    <p class="text-gray-500 mt-2">Kabar terbaru dari kegiatan siswa dan sekolah.</p>
                </div>
                <a href="#"
                    class="hidden md:inline-flex items-center text-teal-600 font-bold hover:text-teal-800 transition">
                    Lihat Semua Berita <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article
                    class="flex flex-col h-full bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                        alt="Upacara" class="h-48 w-full object-cover">
                    <div class="p-6 flex flex-col grow">
                        <span
                            class="text-xs font-bold text-yellow-600 bg-yellow-100 px-2 py-1 rounded w-fit mb-3">Kegiatan</span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 hover:text-teal-600 transition">
                            <a href="#">Peringatan Hari Kemerdekaan RI ke-79 di Sekolah</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Seluruh siswa dan guru mengikuti upacara bendera dengan khidmat, dilanjutkan dengan lomba-lomba
                            tradisional.
                        </p>
                        <div class="mt-auto flex items-center text-xs text-gray-400">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            17 Agustus 2024
                        </div>
                    </div>
                </article>

                <article
                    class="flex flex-col h-full bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                        alt="Pramuka" class="h-48 w-full object-cover">
                    <div class="p-6 flex flex-col grow">
                        <span
                            class="text-xs font-bold text-teal-600 bg-teal-100 px-2 py-1 rounded w-fit mb-3">Prestasi</span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 hover:text-teal-600 transition">
                            <a href="#">Tim Pramuka Raih Juara 1 Lomba Tingkat Kota</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Selamat kepada regu Elang dan Melati yang berhasil membawa pulang piala bergilir walikota.
                        </p>
                        <div class="mt-auto flex items-center text-xs text-gray-400">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            10 September 2024
                        </div>
                    </div>
                </article>

                <article
                    class="flex flex-col h-full bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition duration-300 border border-gray-100">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                        alt="Belajar" class="h-48 w-full object-cover">
                    <div class="p-6 flex flex-col grow">
                        <span
                            class="text-xs font-bold text-yellow-600 bg-yellow-100 px-2 py-1 rounded w-fit mb-3">Akademik</span>
                        <h3 class="text-lg font-bold text-gray-900 mb-2 hover:text-teal-600 transition">
                            <a href="#">Jadwal Penilaian Tengah Semester (PTS) Ganjil</a>
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-3">
                            Diberitahukan kepada seluruh siswa kelas 1-6 bahwa PTS akan dilaksanakan mulai pekan depan.
                        </p>
                        <div class="mt-auto flex items-center text-xs text-gray-400">
                            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            01 Oktober 2024
                        </div>
                    </div>
                </article>
            </div>

            <div class="mt-8 text-center md:hidden">
                <a href="#"
                    class="inline-block bg-teal-100 text-teal-700 px-6 py-2 rounded-full font-bold text-sm">Lihat Semua
                    Berita</a>
            </div>
        </div>
    </section>

    <section class="bg-teal-700 py-16 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23ffffff\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>

        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">Siap Menjadi Bagian dari Keluarga Besar Kami?</h2>
            <p class="text-teal-100 text-lg mb-8">Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran 2025/2026 Segera
                Dibuka. Dapatkan informasi lengkap dan formulir pendaftaran sekarang.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#"
                    class="bg-yellow-400 text-teal-900 px-8 py-4 rounded-full font-bold text-lg hover:bg-yellow-300 transition shadow-lg transform hover:scale-105">
                    Daftar Sekarang
                </a>
                <a href="#"
                    class="bg-transparent border-2 border-white text-white px-8 py-4 rounded-full font-bold text-lg hover:bg-white hover:text-teal-700 transition">
                    Hubungi Panitia
                </a>
            </div>
        </div>
    </section>

@endsection
