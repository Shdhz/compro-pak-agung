@extends('compro.layouts.app')

@section('title', "Tenaga Pendidik & Staff - {$school['NAMA_SEKOLAH']}")

@section('content')

<section class="relative bg-teal-50 py-16 lg:py-20 overflow-hidden">
    <div class="absolute inset-0 opacity-5"
        style="background-image: url('data:image/svg+xml,%3Csvg width=\'20\' height=\'20\' viewBox=\'0 0 20 20\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'%23115e59\' fill-opacity=\'1\' fill-rule=\'evenodd\'%3E%3Ccircle cx=\'3\' cy=\'3\' r=\'3\'/%3E%3Ccircle cx=\'13\' cy=\'13\' r=\'3\'/%3E%3C/g%3E%3C/svg%3E');">
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        <span class="text-teal-600 font-bold tracking-wider uppercase text-sm mb-2 block">SDM Unggul</span>
        <h1 class="text-4xl md:text-5xl font-black text-teal-900 mb-4">Guru & Staff Sekolah</h1>
        <p class="text-gray-600 text-lg max-w-2xl mx-auto">
            Berkenalan dengan pahlawan tanpa tanda jasa yang berdedikasi mendidik putra-putri Anda.
        </p>
    </div>
</section>

<section class="py-12 bg-white px-4 sm:px-6">
    <div class="max-w-7xl mx-auto">

        <div class="flex items-center gap-3 mb-8">
            <div class="h-10 w-2 bg-yellow-400 rounded-r-full"></div>
            <div>
                <h2 class="text-2xl font-black text-teal-900 leading-none">Struktural Sekolah</h2>
                <p class="text-sm text-gray-500 mt-1">Manajemen & Pimpinan</p>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 auto-rows-auto lg:auto-rows-[180px]">

            <div
                class="col-span-1 sm:col-span-2 lg:col-span-2 lg:row-span-2 relative group overflow-hidden rounded-4xl bg-teal-900 text-white shadow-2xl min-h-100 lg:min-h-0">
                <img src="{{ asset('storage/' . $kepalaSekolah->foto) }}" alt="Kepala Sekolah"
                    class="absolute inset-0 w-full h-full object-cover object-[center_20%] opacity-90 group-hover:scale-105 transition duration-700 ease-in-out">

                <div class="absolute inset-0 bg-linear-to-t from-teal-950 via-teal-900/40 to-transparent"></div>

                <div class="absolute bottom-0 left-0 p-6 md:p-8 w-full z-10">
                    <span
                        class="inline-flex items-center gap-2 bg-yellow-400 text-teal-900 text-[10px] font-bold px-3 py-1 rounded-full mb-3 uppercase tracking-wider">
                        <span class="w-2 h-2 rounded-full bg-teal-900 animate-pulse"></span> {{
                        $kepalaSekolah->jabatan_spesifik }}
                    </span>
                    <h3 class="text-2xl md:text-4xl font-black mb-1 leading-tight">{{ $kepalaSekolah->nama }}</h3>
                    <p class="text-teal-200 text-xs md:text-sm mb-4 font-mono opacity-80">NIP. {{ $kepalaSekolah->nip }}
                    </p>
                    <p class="hidden md:block text-gray-100 text-sm border-l-4 border-yellow-400 pl-4 italic max-w-lg">
                        "Pendidikan bukan persiapan untuk hidup, pendidikan adalah kehidupan itu sendiri. Mari cetak
                        generasi emas."
                    </p>
                </div>
            </div>

            <div
                class="col-span-1 lg:col-span-1 lg:row-span-2 bg-teal-50 border border-teal-100 rounded-4xl p-6 flex flex-col items-center text-center shadow-lg hover:shadow-xl transition relative overflow-hidden group min-h-87.5 lg:min-h-0">
                <div
                    class="absolute top-0 right-0 w-40 h-40 bg-yellow-200 rounded-full blur-3xl -mr-20 -mt-20 opacity-50 group-hover:opacity-80 transition">
                </div>

                <div class="relative w-28 h-28 mb-4 mt-2">
                    <div class="absolute inset-0 bg-yellow-400 rounded-full rotate-6 group-hover:rotate-12 transition">
                    </div>
                    <img src="{{ asset('storage/' . $kurikulum->foto) }}"
                        class="relative w-28 h-28 rounded-full object-cover border-4 border-white shadow-md z-10">
                </div>

                <h3 class="text-lg md:text-xl font-bold text-teal-900 leading-tight">{{ $kurikulum->nama }}</h3>
                <p class="text-teal-600 text-[10px] md:text-xs font-bold uppercase tracking-widest mb-4">{{
                    $kurikulum->jabatan_spesifik }}</p>

                <div class="mt-auto w-full grid grid-cols-1 gap-2 text-left">
                    <div class="bg-white p-3 rounded-xl border border-teal-100 shadow-sm flex items-center gap-3">
                        <div class="bg-teal-100 p-1.5 rounded-lg text-teal-700">
                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <span class="block text-[10px] text-gray-400 uppercase font-bold">Bidang</span>
                            <span class="font-bold text-teal-800 text-xs">{{ $kurikulum->jabatan_spesifik }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div
                class="col-span-1 bg-yellow-400 rounded-4xl p-6 flex flex-col justify-between shadow-lg text-teal-900 group hover:-translate-y-1 transition duration-300 min-h-45">
                <div class="flex justify-between items-start">
                    <div class="bg-white/30 p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <span class="text-[10px] font-bold bg-white/40 px-2 py-1 rounded-lg">Total</span>
                </div>
                <div>
                    <h4 class="font-black text-4xl md:text-5xl mb-1">{{ $school['TOTAL_GURU_DAN_STAFF_SEKOLAH'] }}</h4>
                    <p class="font-bold text-xs md:text-sm leading-tight opacity-90">Guru & Staff <br>Profesional</p>
                </div>
            </div>

            <div
                class="col-span-1 bg-white border-2 border-gray-100 rounded-4xl p-6 flex flex-col justify-center items-center text-center shadow-sm hover:border-teal-400 transition group min-h-45">
                <div
                    class="w-14 h-14 rounded-full bg-gray-100 mb-3 overflow-hidden group-hover:scale-110 transition border-2 border-teal-50">
                    <img src="{{ asset('storage/' . $kepalaTU->foto) }}" class="w-full h-full object-cover">
                </div>
                <h4 class="font-bold text-teal-900 text-sm">{{ $kepalaTU->nama }}</h4>
                <p class="text-[10px] text-gray-500 font-bold uppercase tracking-wider mb-2">{{
                    $kepalaTU->jabatan_spesifik }}</p>
            </div>

            <div
                class="col-span-1 sm:col-span-2 lg:col-span-2 bg-teal-800 rounded-4xl p-6 md:p-8 flex items-center justify-center relative overflow-hidden min-h-45">
                <div class="absolute top-0 right-0 p-4 opacity-10">
                    <svg class="w-24 h-24 md:w-32 md:h-32 text-white" fill="currentColor" viewBox="0 0 24 24">
                        <path
                            d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C19.5693 16 20.017 15.5523 20.017 15V9C20.017 8.44772 19.5693 8 19.017 8H15.017C14.4647 8 14.017 8.44772 14.017 9V11C14.017 11.5523 13.5693 12 13.017 12H12.017V5H22.017V15C22.017 18.3137 19.3307 21 16.017 21H14.017ZM5.0166 21L5.0166 18C5.0166 16.8954 5.91203 16 7.0166 16H10.0166C10.5689 16 11.0166 15.5523 11.0166 15V9C11.0166 8.44772 10.5689 8 10.0166 8H6.0166C5.46432 8 5.0166 8.44772 5.0166 9V11C5.0166 11.5523 4.56889 12 4.0166 12H3.0166V5H13.0166V15C13.0166 18.3137 10.3303 21 7.0166 21H5.0166Z" />
                    </svg>
                </div>
                <div class="text-center relative z-10">
                    <p class="text-teal-50 font-serif text-base md:text-lg italic leading-relaxed">
                        "Guru yang biasa-biasa saja memberitahu. Guru yang baik menjelaskan. Guru yang hebat
                        <strong>mengilhami</strong>."
                    </p>
                    <div class="w-10 h-1 bg-yellow-400 mx-auto mt-4 rounded-full"></div>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-16 bg-teal-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        {{-- Header & Search --}}
        <div class="flex flex-col md:flex-row justify-between items-end mb-10 gap-6">
            <div>
                <h2 class="text-3xl font-black text-teal-900">Direktori Lengkap</h2>
                <p class="text-gray-500 mt-1">Daftar seluruh Tenaga Pendidik (Guru) dan Tenaga Kependidikan (Staff).</p>
            </div>

            <div class="relative w-full md:w-80">
                <input type="text" id="searchInput" placeholder="Cari nama atau jabatan..."
                    class="w-full pl-12 pr-4 py-3 rounded-2xl border-0 shadow-sm ring-1 ring-gray-200 focus:ring-2 focus:ring-teal-500 focus:outline-none transition">
                <svg class="w-5 h-5 text-gray-400 absolute left-4 top-3.5" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
        </div>

        {{-- Filter Buttons --}}
        <div class="grid grid-cols-2 md:flex md:flex-wrap gap-3 mb-8" id="filterContainer">
            {{-- Tombol Default "Semua" --}}
            <button data-filter="Semua"
                class="filter-btn w-full md:w-auto px-6 py-3 md:py-2 bg-teal-900 text-white font-bold rounded-xl md:rounded-full text-sm border border-teal-900 transition hover:bg-teal-800 shadow-sm flex items-center justify-center gap-2">
                <span>Semua</span>
            </button>

            {{-- Loop Tombol Kategori dari Database --}}
            @foreach ($categories as $cat)
            <button data-filter="{{ $cat }}"
                class="filter-btn w-full md:w-auto px-6 py-3 md:py-2 bg-white text-gray-600 font-bold rounded-xl md:rounded-full text-sm border border-gray-200 transition hover:bg-teal-50 hover:text-teal-900 shadow-sm flex items-center justify-center gap-2">
                <span>{{ $cat }}</span>
            </button>
            @endforeach
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6" id="staffGrid">

            {{-- Loop data $teachers dari Controller --}}
            @foreach ($teachers as $staff)
            <div class="staff-card bg-white rounded-3xl p-5 shadow-sm hover:shadow-xl hover:-translate-y-1 transition duration-300 group flex flex-col items-center relative overflow-hidden"
                {{-- DATA ATTRIBUTES UNTUK FILTER JS --}} data-name="{{ strtolower($staff->nama) }}"
                data-role="{{ strtolower($staff->jabatan_spesifik) }}" {{-- Search berdasarkan jabatan spesifik --}}
                data-category="{{ $staff->jabatan }}"> {{-- Filter berdasarkan jabatan utama --}}

                @php
                // Cek apakah jabatan mengandung kata "Guru" atau "Kepala" untuk penentuan warna badge
                $isGuru = stripos($staff->jabatan, 'Guru') !== false || stripos($staff->jabatan, 'Kepala') !== false;
                @endphp

                {{-- LABEL BADGE (Mengambil dari kolom 'jabatan') --}}
                <span
                    class="absolute top-4 right-4 text-[10px] font-bold px-2 py-1 rounded-full {{ $isGuru ? 'bg-teal-50 text-teal-700' : 'bg-yellow-100 text-yellow-800' }}">
                    {{ $staff->jabatan }}
                </span>

                {{-- FOTO --}}
                <div class="relative w-28 h-28 mb-4">
                    <div
                        class="absolute inset-0 bg-yellow-400 rounded-full opacity-0 group-hover:opacity-100 group-hover:scale-105 transition duration-300">
                    </div>

                    {{-- Foto dari storage atau generate avatar --}}
                    <img src="{{ $staff->foto ? asset('storage/'.$staff->foto) : 'https://ui-avatars.com/api/?name='.urlencode($staff->nama).'&background=0D9488&color=fff' }}"
                        alt="{{ $staff->nama }}"
                        class="relative w-28 h-28 rounded-full object-cover border-[6px] border-white shadow-md">
                </div>

                {{-- DETAIL NAMA & JABATAN SPESIFIK --}}
                <div class="text-center w-full">
                    <h3 class="font-bold text-teal-900 text-lg leading-tight mb-1 truncate">
                        {{ $staff->nama }}
                    </h3>
                    {{-- Menampilkan NIP jika ada, atau Jabatan Spesifik --}}
                    <p class="text-xs text-gray-500 font-bold uppercase tracking-wider mb-4">
                        {{ $staff->jabatan_spesifik }}
                    </p>
                </div>
            </div>
            @endforeach

            <div id="noResults" class="hidden col-span-full text-center py-12">
                <p class="text-gray-400 text-lg">Data tidak ditemukan.</p>
            </div>
        </div>

        {{-- Pagination --}}
        <div class="mt-12 flex justify-center" id="paginationControls">
            <nav class="flex items-center gap-2">
                <button id="prevBtn"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 text-gray-400 hover:text-teal-600 transition disabled:opacity-50 disabled:cursor-not-allowed">&laquo;</button>
                <div id="pageNumbers" class="flex gap-2"></div>
                <button id="nextBtn"
                    class="w-10 h-10 flex items-center justify-center rounded-full bg-white border border-gray-200 text-gray-400 hover:text-teal-600 transition disabled:opacity-50 disabled:cursor-not-allowed">&raquo;</button>
            </nav>
        </div>

    </div>
</section>

{{-- Script JS tetap sama --}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const filterBtns = document.querySelectorAll('.filter-btn');
        const allCards = Array.from(document.querySelectorAll('.staff-card'));
        const noResults = document.getElementById('noResults');

        const itemsPerPage = 8;
        let currentPage = 1;
        let filteredCards = [...allCards];

        function render() {
            const searchTerm = searchInput.value.toLowerCase();
            const activeBtn = document.querySelector('.filter-btn.bg-teal-900');
            const currentCategory = activeBtn ? activeBtn.dataset.filter : 'Semua';

            filteredCards = allCards.filter(card => {
                const name = card.dataset.name;
                const role = card.dataset.role;
                const category = card.dataset.category;

                const matchesSearch = name.includes(searchTerm) || role.includes(searchTerm);
                const matchesCategory = currentCategory === 'Semua' || category === currentCategory;

                return matchesSearch && matchesCategory;
            });

            if (filteredCards.length === 0) {
                noResults.classList.remove('hidden');
            } else {
                noResults.classList.add('hidden');
            }

            const totalPages = Math.ceil(filteredCards.length / itemsPerPage);
            if (currentPage > totalPages) currentPage = 1;
            if (currentPage < 1) currentPage = 1;

            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;

            allCards.forEach(card => card.classList.add('hidden'));

            filteredCards.slice(startIndex, endIndex).forEach(card => {
                card.classList.remove('hidden');
            });

            renderPaginationControls(totalPages);
        }

        function renderPaginationControls(totalPages) {
            const pageContainer = document.getElementById('pageNumbers');
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');
            const paginationControls = document.getElementById('paginationControls');

            pageContainer.innerHTML = '';

            if (totalPages <= 1) {
                paginationControls.classList.add('hidden');
                return;
            } else {
                paginationControls.classList.remove('hidden');
            }

            prevBtn.disabled = currentPage === 1;
            nextBtn.disabled = currentPage === totalPages;

            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.textContent = i;
                btn.className = `w-10 h-10 flex items-center justify-center rounded-full font-bold transition ${
            i === currentPage 
            ? 'bg-teal-600 text-white shadow-lg' 
            : 'bg-white border border-gray-200 text-gray-600 hover:bg-teal-50 hover:text-teal-600'
        }`;

                btn.addEventListener('click', () => {
                    currentPage = i;
                    render();
                    document.getElementById('staffGrid').scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                });

                pageContainer.appendChild(btn);
            }
        }

        searchInput.addEventListener('input', () => {
            currentPage = 1;
            render();
        });

        filterBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                filterBtns.forEach(b => {
                    b.classList.remove('bg-teal-900', 'text-white', 'border-teal-900');
                    b.classList.add('bg-white', 'text-gray-600', 'border-gray-200');
                });
                this.classList.remove('bg-white', 'text-gray-600', 'border-gray-200');
                this.classList.add('bg-teal-900', 'text-white', 'border-teal-900');

                currentPage = 1;
                render();
            });
        });

        document.getElementById('prevBtn').addEventListener('click', () => {
            if (currentPage > 1) {
                currentPage--;
                render();
            }
        });

        document.getElementById('nextBtn').addEventListener('click', () => {
            const totalPages = Math.ceil(filteredCards.length / itemsPerPage);
            if (currentPage < totalPages) {
                currentPage++;
                render();
            }
        });

        render();
    });
</script>
@endsection