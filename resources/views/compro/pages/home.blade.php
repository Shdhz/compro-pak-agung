@extends('compro.layouts.app')

@section('title', 'Beranda - SD Negri 1')

@section('content')

    <section class="relative bg-teal-50 overflow-hidden pt-12 pb-20 lg:pt-20 lg:pb-28">
        <div class="absolute inset-0 opacity-5 pointer-events-none"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23115e59\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'3\'/%3E%3Ccircle cx=\'13\' cy=\'13\' r=\'3\'/%3E%3C/g%3E%3C/svg%3E');">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-16">

                <div class="w-full lg:w-5/12 text-center lg:text-left space-y-6">

                    <div
                        class="inline-flex items-center gap-4 bg-white border-2 border-yellow-400 p-2 pr-6 rounded-full shadow-lg transform hover:scale-105 transition duration-300 mb-2">
                        <div
                            class="bg-yellow-400 text-teal-900 h-14 w-14 rounded-full flex items-center justify-center shadow-inner">
                            <span class="text-3xl font-black">A</span>
                        </div>
                        <div class="flex flex-col text-left">
                            <span
                                class="text-[10px] font-bold text-teal-600 uppercase tracking-widest leading-tight">Terakreditasi
                                Nasional</span>
                            <span class="text-xl font-black text-teal-900 leading-none">UNGGUL</span>
                            <span class="text-[10px] text-gray-500 font-medium">Badan Akreditasi Nasional S/M</span>
                        </div>
                    </div>

                    <h1 class="text-5xl lg:text-6xl font-black text-teal-900 leading-tight tracking-tight">
                        Sekolahnya <br>
                        <span class="relative inline-block text-white mt-2">
                            <span class="absolute inset-0 bg-teal-800 transform -skew-x-6 rounded-lg shadow-xl"></span>
                            <span class="relative px-4 py-1">Para Juara</span>
                        </span>
                    </h1>

                    <p class="text-lg text-gray-700 leading-relaxed font-medium">
                        Mewujudkan generasi berkarakter islami, cerdas, dan kompetitif melalui lingkungan belajar yang
                        inspiratif.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-3 justify-center lg:justify-start pt-2">
                        <a href="#"
                            class="px-8 py-4 bg-yellow-400 text-teal-900 font-black rounded-xl shadow-[4px_4px_0px_0px_#115e59] hover:shadow-none hover:translate-x-0.5 hover:translate-y-0.5 transition-all duration-200">
                            Daftar PPDB 2026
                        </a>
                        <a href="{{ route('profil.tentang-kami') }}"
                            class="px-8 py-4 bg-white text-teal-900 border-2 border-teal-900 font-bold rounded-xl hover:bg-teal-50 transition-colors duration-200">
                            Profil Sekolah
                        </a>
                    </div>
                </div>

                <div class="w-full lg:w-7/12 relative">
                    <div
                        class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-linear-to-tr from-teal-200/50 to-yellow-200/50 rounded-full blur-3xl -z-10">
                    </div>

                    <div class="transform rotate-2 hover:rotate-0 transition duration-700 ease-out">
                        <div class="bg-white p-3 rounded-2xl shadow-2xl border-4 border-white">
                            <div class="flex justify-between items-center mb-3 px-2">
                                <div class="flex items-center gap-2">
                                    <span class="w-3 h-3 rounded-full bg-red-500"></span>
                                    <span class="w-3 h-3 rounded-full bg-yellow-500"></span>
                                    <span class="w-3 h-3 rounded-full bg-green-500"></span>
                                </div>
                                <span class="text-xs font-bold text-gray-400 uppercase tracking-widest">Galeri Prestasi
                                    Siswa</span>
                            </div>

                            <div class="grid grid-cols-3 gap-3 h-112.5">

                                <div class="col-span-2 row-span-2 relative group overflow-hidden rounded-xl bg-gray-200">
                                    <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                                        class="w-full h-full object-cover transition duration-700 group-hover:scale-110"
                                        alt="Juara Umum">
                                    <div
                                        class="absolute inset-0 bg-linear-to-t from-teal-900/90 via-transparent to-transparent opacity-100">
                                    </div>
                                    <div class="absolute bottom-0 left-0 p-4">
                                        <span
                                            class="bg-yellow-400 text-teal-900 text-[10px] font-bold px-2 py-1 rounded mb-1 inline-block">Internasional</span>
                                        <p class="text-white font-bold text-sm md:text-base leading-tight">Medali Emas
                                            Olimpiade Sains 2024</p>
                                    </div>
                                </div>

                                <div class="col-span-1 row-span-1 relative group overflow-hidden rounded-xl bg-gray-200">
                                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110"
                                        alt="Pramuka">
                                    <div class="absolute inset-x-0 bottom-0 bg-teal-900/80 p-2">
                                        <p class="text-white text-[10px] font-bold text-center">Juara Umum Pramuka</p>
                                    </div>
                                </div>

                                <div class="col-span-1 row-span-1 relative group overflow-hidden rounded-xl bg-gray-200">
                                    <img src="https://images.unsplash.com/photo-1564951434112-64d74cc2a2d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110"
                                        alt="Futsal">
                                    <div class="absolute inset-x-0 bottom-0 bg-teal-900/80 p-2">
                                        <p class="text-white text-[10px] font-bold text-center">Juara 1 Futsal Kota</p>
                                    </div>
                                </div>

                                <div class="col-span-2 row-span-1 relative group overflow-hidden rounded-xl bg-gray-200">
                                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110"
                                        alt="Tahfidz">
                                    <div class="absolute inset-0 bg-linear-to-t from-teal-900/90 to-transparent"></div>
                                    <div class="absolute bottom-3 left-3">
                                        <p class="text-white font-bold text-xs">Wisuda Tahfidz Juz 30</p>
                                    </div>
                                </div>

                                <div class="col-span-1 row-span-1 relative group overflow-hidden rounded-xl bg-gray-200">
                                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=400&q=80"
                                        class="w-full h-full object-cover transition duration-500 group-hover:scale-110"
                                        alt="Coding">
                                    <div class="absolute inset-x-0 bottom-0 bg-teal-900/80 p-2">
                                        <p class="text-white text-[10px] font-bold text-center">Juara Coding Kids</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-teal-900 mb-4">Lingkungan Belajar Terbaik</h2>
                <p class="text-gray-600 text-lg">Kami memadukan kurikulum nasional dengan program unggulan khas untuk
                    memaksimalkan potensi anak.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 auto-rows-[minmax(200px,auto)]">

                <div
                    class="md:col-span-2 bg-teal-50 rounded-3xl p-8 border-2 border-teal-100 hover:border-teal-500 transition duration-300 relative overflow-hidden group">
                    <div class="relative z-10">
                        <span class="bg-teal-600 text-white text-xs font-bold px-3 py-1 rounded-full">Akademik</span>
                        <h3 class="text-2xl font-bold text-teal-900 mt-4 mb-2">Kurikulum Merdeka Belajar</h3>
                        <p class="text-gray-600 max-w-md">Siswa diberikan kebebasan untuk mengeksplorasi minat mereka
                            melalui metode pembelajaran berbasis proyek (Project Based Learning).</p>
                    </div>
                    <img src="https://img.freepik.com/free-vector/happy-students-classroom_74855-5844.jpg"
                        class="absolute right-0 bottom-0 w-48 opacity-50 group-hover:scale-110 transition duration-500"
                        alt="Ilustrasi Belajar">
                </div>

                <div
                    class="md:row-span-2 bg-yellow-50 rounded-3xl p-8 border-2 border-yellow-100 hover:border-yellow-400 transition duration-300 flex flex-col justify-between group">
                    <div>
                        <span class="bg-yellow-500 text-white text-xs font-bold px-3 py-1 rounded-full">Unggulan</span>
                        <h3 class="text-2xl font-bold text-teal-900 mt-4 mb-2">Tahfidz Qur'an Juz 30</h3>
                        <p class="text-gray-600">Program hafalan rutin setiap pagi sebelum KBM dimulai, mencetak generasi
                            qur'ani.</p>
                    </div>
                    <div class="mt-6 flex justify-center">
                        <div
                            class="w-24 h-24 bg-yellow-200 rounded-full flex items-center justify-center text-4xl group-hover:rotate-12 transition">
                            📖</div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-8 border-2 border-gray-100 hover:shadow-xl transition duration-300">
                    <div
                        class="w-12 h-12 bg-teal-100 text-teal-600 rounded-xl flex items-center justify-center mb-4 text-2xl">
                        ⚽</div>
                    <h3 class="text-xl font-bold text-teal-900 mb-2">15+ Ekstrakurikuler</h3>
                    <p class="text-gray-600 text-sm">Mulai dari Futsal, Tari, Pramuka, hingga Coding Kids.</p>
                </div>

                <div class="bg-teal-900 rounded-3xl p-8 text-white relative overflow-hidden group">
                    <div class="relative z-10">
                        <h3 class="text-xl font-bold mb-2">Fasilitas Digital</h3>
                        <p class="text-teal-200 text-sm">Lab Komputer modern dan Smart TV di setiap kelas.</p>
                    </div>
                    <div
                        class="absolute -right-4 -bottom-4 w-24 h-24 bg-teal-800 rounded-full opacity-50 group-hover:scale-150 transition duration-500">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-teal-50 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div
                class="bg-white rounded-[3rem] p-8 md:p-12 shadow-xl border border-teal-100 flex flex-col md:flex-row gap-12 items-center">
                <div class="w-full md:w-1/3 flex justify-center">
                    <div class="relative">
                        <div class="absolute inset-0 bg-yellow-400 rounded-4xl transform translate-x-4 translate-y-4">
                        </div>
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            alt="Kepala Sekolah SD Negeri 1 Contoh - Bapak Agun"
                            class="relative w-64 h-80 object-cover rounded-4xl border-2 border-teal-900 grayscale hover:grayscale-0 transition duration-500">
                    </div>
                </div>

                <div class="w-full md:w-2/3">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="h-1 w-12 bg-yellow-400 rounded-full"></div>
                        <span class="text-teal-600 font-bold uppercase tracking-wider text-sm">Sambutan Kepala
                            Sekolah</span>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 mb-6">"Membangun Generasi yang Tidak Hanya Pintar, Tapi
                        Juga
                        Beradab."</h2>
                    <blockquote class="text-gray-600 mb-8 leading-relaxed italic border-l-4 border-teal-200 pl-4">
                        Di era digital ini, tantangan pendidikan semakin kompleks. Kami berkomitmen untuk menjadi partner
                        terbaik bagi orang tua dalam mendidik buah hati, menanamkan nilai-nilai luhur budaya bangsa dan
                        agama, serta membekali mereka dengan keterampilan abad 21.
                    </blockquote>
                    <div class="flex items-center gap-4">
                        <div>
                            <p class="text-xl font-black text-teal-900">Bapak Agun, S.Pd., M.Pd.</p>
                            <p class="text-gray-500 text-sm">Kepala Sekolah Berprestasi 2024</p>
                        </div>
                        <div class="font-serif text-4xl text-gray-300 transform -rotate-6">Agun.</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-4xl font-black text-teal-900">Kabar Sekolah</h2>
                    <p class="text-gray-600 mt-2 text-lg">Informasi terkini seputar kegiatan dan prestasi.</p>
                </div>
                <a href="/berita"
                    class="group flex items-center gap-2 font-bold text-teal-700 hover:text-yellow-600 transition">
                    Lihat Semua
                    <span class="bg-teal-100 p-2 rounded-full group-hover:bg-yellow-100 transition">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                        </svg>
                    </span>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <article class="flex flex-col group cursor-pointer">
                    <figure class="relative h-60 overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            alt="Upacara HUT RI di SD Negeri 1 Contoh"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-xs font-bold text-teal-800 shadow-sm">
                            Kegiatan
                        </div>
                    </figure>
                    <div class="flex flex-col grow">
                        <time datetime="2024-08-17" class="text-sm text-gray-400 font-medium mb-2">17 Agustus 2024</time>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug group-hover:text-teal-600 transition">
                            <a href="#">Semangat Kemerdekaan: Upacara dan Lomba Tradisional Siswa</a>
                        </h3>
                        <p class="text-gray-600 line-clamp-2 text-sm">Peringatan HUT RI berlangsung meriah dengan
                            partisipasi seluruh warga sekolah dalam berbagai lomba ketangkasan.</p>
                    </div>
                </article>

                <article class="flex flex-col group cursor-pointer">
                    <figure class="relative h-60 overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            alt="Pramuka Juara"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-xs font-bold text-teal-800 shadow-sm">
                            Prestasi
                        </div>
                    </figure>
                    <div class="flex flex-col grow">
                        <time datetime="2024-09-10" class="text-sm text-gray-400 font-medium mb-2">10 September
                            2024</time>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug group-hover:text-teal-600 transition">
                            <a href="#">Membanggakan! Tim Pramuka Raih Juara Umum Tingkat Kecamatan</a>
                        </h3>
                        <p class="text-gray-600 line-clamp-2 text-sm">Regu Elang dan Melati berhasil menyisihkan 20 sekolah
                            lain dalam ajang lomba ketangkasan pramuka tahunan.</p>
                    </div>
                </article>

                <article class="flex flex-col group cursor-pointer">
                    <figure class="relative h-60 overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            alt="Suasana PTS"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-700">
                        <div
                            class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-lg text-xs font-bold text-teal-800 shadow-sm">
                            Akademik
                        </div>
                    </figure>
                    <div class="flex flex-col grow">
                        <time datetime="2024-10-01" class="text-sm text-gray-400 font-medium mb-2">01 Oktober 2024</time>
                        <h3 class="text-xl font-bold text-gray-900 mb-3 leading-snug group-hover:text-teal-600 transition">
                            <a href="#">Jadwal Penilaian Tengah Semester (PTS) Ganjil TA 2024/2025</a>
                        </h3>
                        <p class="text-gray-600 line-clamp-2 text-sm">Persiapkan diri dengan baik, berikut adalah jadwal
                            lengkap pelaksanaan PTS untuk kelas 1 sampai 6.</p>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section class="bg-teal-900 py-20 relative overflow-hidden">
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-teal-800 rounded-full mix-blend-overlay filter blur-3xl opacity-50 transform translate-x-1/2 -translate-y-1/2">
        </div>
        <div
            class="absolute bottom-0 left-0 w-64 h-64 bg-yellow-600 rounded-full mix-blend-overlay filter blur-3xl opacity-20 transform -translate-x-1/2 translate-y-1/2">
        </div>

        <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
            <h2 class="text-3xl md:text-5xl font-black text-white mb-6 tracking-tight">Siap Bergabung Bersama Kami?</h2>
            <p class="text-teal-100 text-lg md:text-xl mb-10 font-light max-w-2xl mx-auto">
                Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran 2025/2026 Segera Dibuka. Kuota terbatas!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#"
                    class="w-full sm:w-auto px-8 py-4 bg-yellow-400 text-teal-900 font-bold rounded-xl shadow-[0px_4px_15px_rgba(250,204,21,0.4)] hover:bg-yellow-300 hover:scale-105 transition transform">
                    Download Brosur PPDB
                </a>
                <a href="#"
                    class="w-full sm:w-auto px-8 py-4 bg-transparent border-2 border-teal-700 text-teal-100 font-bold rounded-xl hover:bg-teal-800 hover:border-teal-600 transition">
                    Hubungi via WhatsApp
                </a>
            </div>
        </div>
    </section>
@endsection
