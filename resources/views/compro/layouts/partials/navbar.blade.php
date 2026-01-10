<div class="bg-teal-900 text-teal-100 text-xs py-2 border-b border-teal-800">
    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-2 md:gap-0">
        <div class="flex flex-wrap justify-center md:justify-start items-center gap-x-6 gap-y-1">
            <div class="flex items-center gap-2">
                <svg class="w-3.5 h-3.5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                    </path>
                </svg>
                <span>info@sdnExample.sch.id</span>
            </div>
            <div class="flex items-center gap-2">
                <svg class="w-3.5 h-3.5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                    </path>
                </svg>
                <span>087737709694</span>
            </div>
        </div>
        <div class="flex items-center space-x-4">
            <div class="flex items-center space-x-3">
                <a href="#" class="hover:text-yellow-400 transition flex items-center gap-1"><span
                        class="hidden sm:inline">Facebook</span><span class="sm:hidden">FB</span></a>
                <a href="#" class="hover:text-yellow-400 transition flex items-center gap-1"><span
                        class="hidden sm:inline">Instagram</span><span class="sm:hidden">IG</span></a>
                <a href="#" class="hover:text-yellow-400 transition flex items-center gap-1"><span
                        class="hidden sm:inline">Youtube</span><span class="sm:hidden">YT</span></a>
            </div>
            <span class="text-teal-700">|</span>
            <a href="#"
                class="flex items-center gap-1 hover:text-yellow-400 transition font-bold bg-teal-800 md:bg-transparent px-2 py-0.5 md:p-0 rounded md:rounded-none">
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1">
                    </path>
                </svg>
                Login GTK
            </a>
        </div>
    </div>
</div>

<nav class="bg-teal-700 text-white shadow-lg sticky top-0 z-50" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">

            <div class="flex items-center gap-3">
                <div
                    class="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center text-teal-800 font-bold shadow-sm">
                    SD
                </div>
                <div>
                    <h1 class="font-bold text-xl leading-none">SD NEGRI 1</h1>
                    <span class="text-xs text-teal-200 font-light">Cerdas, Berkarakter, Berprestasi</span>
                </div>
            </div>

            <div class="hidden md:flex space-x-8 items-center">

                <a href="{{ route('compro.home') }}"
                    class="{{ request()->is('/') ? 'text-yellow-300 font-bold border-b-2 border-yellow-300' : 'text-white hover:text-yellow-300 font-medium' }} transition pb-1">
                    Beranda
                </a>

                <div class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.outside="open = false"
                        class="{{ request()->is('profil*') ? 'text-yellow-300 font-bold border-b-2 border-yellow-300' : 'text-white hover:text-yellow-300 font-medium' }} flex items-center transition focus:outline-none pb-1">
                        Profil
                        <svg class="w-4 h-4 ml-1 transform transition-transform duration-200"
                            :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>

                    <div x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-75"
                        x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                        style="display: none;"
                        class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-xl py-2 text-gray-700 z-50 border-t-4 border-yellow-400">
                        <a href="{{ route('compro.about-us') }}"
                            class="{{ request()->is('profil/tentang-kami') ? 'bg-teal-50 text-teal-700 font-bold' : 'hover:bg-teal-50 hover:text-teal-700' }} block px-4 py-2 transition">Tentang
                            Kami</a>
                        <a href="{{ route('compro.teacher') }}"
                            class="{{ request()->is('profil/guru-staff') ? 'bg-teal-50 text-teal-700 font-bold' : 'hover:bg-teal-50 hover:text-teal-700' }} block px-4 py-2 transition">Guru
                            & Staff</a>
                    </div>
                </div>

                <a href="{{ route('compro.news') }}"
                    class="{{ request()->is('berita*') ? 'text-yellow-300 font-bold border-b-2 border-yellow-300' : 'text-white hover:text-yellow-300 font-medium' }} transition pb-1">
                    Berita
                </a>

                <a href="{{ route('compro.gallery') }}"
                    class="{{ request()->is('galeri*') ? 'text-yellow-300 font-bold border-b-2 border-yellow-300' : 'text-white hover:text-yellow-300 font-medium' }} transition pb-1">
                    Galeri
                </a>

                <a href="{{ route('compro.info-ppdb') }}"
                    class="bg-yellow-400 text-teal-900 px-5 py-2 rounded-full font-bold hover:bg-yellow-300 transition shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                    Info PPDB
                </a>
            </div>

            <div class="md:hidden flex items-center">
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                        <path x-show="mobileMenuOpen" style="display: none;" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <div x-show="mobileMenuOpen" style="display: none;" class="md:hidden bg-teal-800 border-t border-teal-600">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">

            <a href="{{ url('/') }}"
                class="{{ request()->is('/') ? 'bg-teal-900 text-yellow-300 font-bold' : 'hover:bg-teal-600' }} block px-3 py-2 rounded-md transition">Beranda</a>

            <div x-data="{ subOpen: false }">
                <button @click="subOpen = !subOpen"
                    class="{{ request()->is('profil*') ? 'bg-teal-900 text-yellow-300 font-bold' : 'hover:bg-teal-600' }} w-full text-left px-3 py-2 rounded-md flex justify-between items-center transition">
                    Profil <svg class="w-4 h-4" :class="{ 'rotate-180': subOpen }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                        </path>
                    </svg>
                </button>
                <div x-show="subOpen" class="pl-6 space-y-1 bg-teal-900/50 py-2">
                    <a href="{{ url('profil/tentang-kami') }}"
                        class="{{ request()->is('profil/tentang-kami') ? 'text-yellow-300 font-bold' : 'text-teal-100 hover:text-yellow-300' }} block px-3 py-2 text-sm">Tentang
                        Kami</a>
                    <a href="{{ url('profil/visi-misi') }}"
                        class="{{ request()->is('profil/visi-misi') ? 'text-yellow-300 font-bold' : 'text-teal-100 hover:text-yellow-300' }} block px-3 py-2 text-sm">Visi
                        & Misi</a>
                </div>
            </div>

            <a href="{{ url('berita') }}"
                class="{{ request()->is('berita*') ? 'bg-teal-900 text-yellow-300 font-bold' : 'hover:bg-teal-600' }} block px-3 py-2 rounded-md transition">Berita</a>
            <a href="{{ url('ppdb') }}"
                class="{{ request()->is('ppdb*') ? 'bg-teal-900 text-yellow-300 font-bold' : 'hover:bg-teal-600' }} block px-3 py-2 rounded-md transition">Info
                PPDB</a>
        </div>
    </div>
</nav>
