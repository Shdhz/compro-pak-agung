@extends('compro.layouts.app')

@section('title', "Tentang Kami - {$school['NAMA_SEKOLAH']}")

@section('content')

    <section class="relative bg-teal-900 py-20 lg:py-28 overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23facc15\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
        <div class="absolute -right-20 -top-20 w-96 h-96 bg-teal-800 rounded-full blur-3xl opacity-50"></div>
        <div class="absolute -left-20 bottom-0 w-72 h-72 bg-yellow-600 rounded-full blur-3xl opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <span class="text-yellow-400 font-bold tracking-wider uppercase text-sm mb-4 block">Profil Sekolah</span>
            <h1 class="text-4xl md:text-6xl font-black text-white mb-6">Mengenal Lebih Dekat <br> {{ $school['NAMA_SEKOLAH'] }}</h1>
            <p class="text-teal-100 text-lg max-w-2xl mx-auto leading-relaxed">
                Berdiri sejak {{ $school['TAHUN_BERDIRI_SEKOLAH'] }}, kami berkomitmen mencetak generasi unggul yang berakhlak mulia dan berwawasan global.
            </p>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col lg:flex-row items-center gap-16">

                <div class="w-full lg:w-1/2 relative">
                    <div
                        class="relative rounded-[2.5rem] overflow-hidden border-4 border-teal-50 shadow-2xl transform -rotate-2 hover:rotate-0 transition duration-500">
                        <img src="https://images.unsplash.com/photo-1591123120675-6f7f1aae0e5b?q=80&w=869&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Gedung Sekolah SD Negeri 1 Contoh" class="w-full h-125 object-cover">

                        <div class="absolute top-6 left-6 bg-yellow-400 text-teal-900 p-4 rounded-xl shadow-lg text-center">
                            <span class="block text-xs font-bold uppercase">Berdiri Sejak</span>
                            <span class="block text-3xl font-black">{{ $school['TAHUN_BERDIRI_SEKOLAH'] }}</span>
                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-pattern-dots opacity-20 z-[-1]"></div>
                </div>

                <div class="w-full lg:w-1/2 space-y-6">
                    <div class="inline-flex items-center gap-2 bg-teal-50 px-4 py-2 rounded-full">
                        <span class="w-2 h-2 rounded-full bg-teal-600"></span>
                        <span class="text-teal-800 text-xs font-bold uppercase">Sejarah Perjalanan</span>
                    </div>

                    <h2 class="text-3xl md:text-4xl font-black text-teal-900 leading-tight">
                        Dari Ruang Kelas Sederhana Menjadi Sekolah <span
                            class="text-yellow-500 underline decoration-4 decoration-yellow-200">Terakreditasi
                            {{ $school['AKREDITASI_SEKOLAH'] }}</span>.
                    </h2>

                    <div class="prose prose-lg text-gray-600">
                        <p>
                            {{ $school['NAMA_SEKOLAH'] }} berawal dari inisiatif tokoh masyarakat setempat yang menginginkan pendidikan
                            berkualitas di lingkungan ini. Dimulai dengan hanya 3 ruang kelas dan 50 siswa, kini kami telah
                            berkembang menjadi salah satu sekolah rujukan di kota ini.
                        </p>
                        <p>
                            Komitmen kami terhadap kualitas pendidikan dibuktikan dengan raihan <strong>Akreditasi {{ $school['AKREDITASI_HURUF_SEKOLAH'] }}
                                ({{ $school['AKREDITASI_SEKOLAH'] }})</strong> berturut-turut dari BAN-S/M, serta berbagai prestasi akademik dan
                            non-akademik di tingkat provinsi maupun nasional.
                        </p>
                    </div>

                    <div class="grid grid-cols-3 gap-4 pt-6 border-t border-gray-100">
                        <div class="text-center">
                            <span class="block text-3xl font-black text-teal-900">{{ $school['TOTAL_GURU_DAN_STAFF_SEKOLAH'] }}</span>
                            <span class="text-sm text-gray-500 font-medium">Guru & Staff</span>
                        </div>
                        <div class="text-center border-l border-gray-200">
                            <span class="block text-3xl font-black text-teal-900">{{ $school['TOTAL_SISWA_AKTIF'] }}</span>
                            <span class="text-sm text-gray-500 font-medium">Siswa Aktif</span>
                        </div>
                        <div class="text-center border-l border-gray-200">
                            <span class="block text-3xl font-black text-teal-900">{{ $school['TOTAL_ALUMNI_SEKOLAH'] }}</span>
                            <span class="text-sm text-gray-500 font-medium">Alumni</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-teal-50 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-teal-900 mb-4">Arah & Tujuan Kami</h2>
                <p class="text-gray-600">Landasan kami dalam mendidik putra-putri bangsa.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <div
                    class="bg-white rounded-3xl p-8 lg:p-12 shadow-xl border-t-8 border-teal-600 relative overflow-hidden group hover:-translate-y-2 transition duration-300">
                    <div
                        class="absolute top-0 right-0 p-8 opacity-5 transform group-hover:scale-110 transition duration-500">
                        <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M12 2L2 7l10 5 10-5-10-5zm0 9l2.5-1.25L12 8.5l-2.5 1.25L12 11zm0 2.5l-5-2.5-5 2.5L12 22l10-8.5-5-2.5-5 2.5z" />
                        </svg>
                    </div>
                    <span class="text-teal-600 font-black text-xl mb-4 block tracking-widest uppercase">Visi Sekolah</span>
                    <h3 class="text-2xl lg:text-3xl font-bold text-gray-900 leading-snug italic">
                        "{{ $school['VISI_SEKOLAH'] }}"
                    </h3>
                </div>

                <div
                    class="bg-teal-900 rounded-3xl p-8 lg:p-12 shadow-xl border-t-8 border-yellow-400 text-white relative overflow-hidden group hover:-translate-y-2 transition duration-300">
                    <div
                        class="absolute top-0 right-0 p-8 opacity-5 transform group-hover:scale-110 transition duration-500">
                        <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z" />
                        </svg>
                    </div>
                    <span class="text-yellow-400 font-black text-xl mb-6 block tracking-widest uppercase">Misi
                        Sekolah</span>
                    <ul class="space-y-4">
                        @php
                            $missions = explode(".", $school['MISI_SEKOLAH']);
                        @endphp
                        @foreach ($missions as $item)
                        <li class="flex items-start gap-3">
                            <span class="mt-1 bg-yellow-400 p-1 rounded-full shrink-0">
                                <svg class="w-3 h-3 text-teal-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </span>
                            <span class="text-teal-50">{{ $item }}.</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-teal-600 font-bold uppercase tracking-wider text-sm mb-2 block">Sumber Daya
                    Manusia</span>
                <h2 class="text-3xl md:text-4xl font-black text-teal-900 mb-4">Pendidik Profesional Kami</h2>
                <p class="text-gray-600">Dibimbing oleh tenaga pengajar bersertifikasi yang berdedikasi tinggi dalam dunia
                    pendidikan.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group">
                    <div class="relative overflow-hidden rounded-2xl mb-4 bg-teal-100">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="Bapak Kepala Sekolah"
                            class="w-full h-80 object-cover object-top transform group-hover:scale-105 transition duration-500 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-teal-900 group-hover:text-yellow-600 transition">Bapak Agun,
                            S.Pd.</h3>
                        <p class="text-sm text-gray-500 uppercase tracking-wide">Kepala Sekolah</p>
                    </div>
                </div>

                <div class="group">
                    <div class="relative overflow-hidden rounded-2xl mb-4 bg-teal-100">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="Ibu Guru"
                            class="w-full h-80 object-cover object-top transform group-hover:scale-105 transition duration-500 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-teal-900 group-hover:text-yellow-600 transition">Ibu Siti Aminah,
                            S.Pd.</h3>
                        <p class="text-sm text-gray-500 uppercase tracking-wide">Wali Kelas 1</p>
                    </div>
                </div>

                <div class="group">
                    <div class="relative overflow-hidden rounded-2xl mb-4 bg-teal-100">
                        <img src="https://images.unsplash.com/photo-1613063020776-2497a693d583?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            alt="Guru Olahraga"
                            class="w-full h-80 object-cover object-top transform group-hover:scale-105 transition duration-500 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-teal-900 group-hover:text-yellow-600 transition">Bapak Budi
                            Santoso, S.Pd.</h3>
                        <p class="text-sm text-gray-500 uppercase tracking-wide">Guru Olahraga</p>
                    </div>
                </div>

                <div class="group">
                    <div class="relative overflow-hidden rounded-2xl mb-4 bg-teal-100">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=80"
                            alt="Guru PAI"
                            class="w-full h-80 object-cover object-top transform group-hover:scale-105 transition duration-500 grayscale group-hover:grayscale-0">
                    </div>
                    <div class="text-center">
                        <h3 class="text-lg font-bold text-teal-900 group-hover:text-yellow-600 transition">Ibu Ratna Dewi,
                            S.Pd.I</h3>
                        <p class="text-sm text-gray-500 uppercase tracking-wide">Guru PAI</p>
                    </div>
                </div>

            </div>

            <div class="mt-12 text-center">
                <a href="{{ route('compro.teacher') }}"
                    class="inline-block border-b-2 border-teal-600 text-teal-600 font-bold hover:text-teal-800 hover:border-teal-800 transition pb-1">Lihat
                    Seluruh Tenaga Pendidik &rarr;</a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-teal-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-4">
                <div>
                    <h2 class="text-3xl md:text-4xl font-black text-teal-900">Fasilitas Sekolah</h2>
                    <p class="text-gray-600 mt-2">Sarana penunjang kegiatan belajar mengajar yang modern dan lengkap.</p>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white p-4 rounded-2xl shadow-sm hover:shadow-lg transition duration-300 group">
                    <div class="h-48 rounded-xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500"
                            alt="Kelas">
                        <div
                            class="absolute bottom-2 left-2 bg-yellow-400 text-teal-900 text-xs font-bold px-2 py-1 rounded">
                            AC & Multimedia</div>
                    </div>
                    <h3 class="font-bold text-teal-900 text-lg">Ruang Kelas Digital</h3>
                </div>

                <div class="bg-white p-4 rounded-2xl shadow-sm hover:shadow-lg transition duration-300 group">
                    <div class="h-48 rounded-xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500"
                            alt="Lab Komputer">
                        <div
                            class="absolute bottom-2 left-2 bg-yellow-400 text-teal-900 text-xs font-bold px-2 py-1 rounded">
                            1 Siswa 1 PC</div>
                    </div>
                    <h3 class="font-bold text-teal-900 text-lg">Laboratorium Komputer</h3>
                </div>

                <div class="bg-white p-4 rounded-2xl shadow-sm hover:shadow-lg transition duration-300 group">
                    <div class="h-48 rounded-xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500"
                            alt="Perpustakaan">
                        <div
                            class="absolute bottom-2 left-2 bg-yellow-400 text-teal-900 text-xs font-bold px-2 py-1 rounded">
                            Lengkap & Nyaman</div>
                    </div>
                    <h3 class="font-bold text-teal-900 text-lg">Perpustakaan</h3>
                </div>

                <div class="bg-white p-4 rounded-2xl shadow-sm hover:shadow-lg transition duration-300 group">
                    <div class="h-48 rounded-xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1564121211835-e88c852648ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500"
                            alt="Musholla">
                        <div
                            class="absolute bottom-2 left-2 bg-yellow-400 text-teal-900 text-xs font-bold px-2 py-1 rounded">
                            Ibadah Nyaman</div>
                    </div>
                    <h3 class="font-bold text-teal-900 text-lg">Musholla Sekolah</h3>
                </div>

                <div class="bg-white p-4 rounded-2xl shadow-sm hover:shadow-lg transition duration-300 group">
                    <div class="h-48 rounded-xl overflow-hidden mb-4 relative">
                        <img src="https://images.unsplash.com/photo-1538108149393-fbbd81895907?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition duration-500"
                            alt="UKS">
                        <div
                            class="absolute bottom-2 left-2 bg-yellow-400 text-teal-900 text-xs font-bold px-2 py-1 rounded">
                            Standar Medis</div>
                    </div>
                    <h3 class="font-bold text-teal-900 text-lg">UKS Modern</h3>
                </div>

                <div class="bg-white p-4 rounded-2xl shadow-sm hover:shadow-lg transition duration-300 group">
                    <div class="h-48 rounded-xl overflow-hidden mb-4 relative">
                        <img src="https://plus.unsplash.com/premium_photo-1684106554224-1df87e5c2e29?q=80&w=870&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="w-full h-full object-cover transform group-hover:scale-80 transition duration-500"
                            alt="Lapangan">
                        <div
                            class="absolute bottom-2 left-2 bg-yellow-400 text-teal-900 text-xs font-bold px-2 py-1 rounded">
                            Outdoor Luas</div>
                    </div>
                    <h3 class="font-bold text-teal-900 text-lg">Lapangan Olahraga</h3>
                </div>
            </div>
        </div>
    </section>

@endsection
