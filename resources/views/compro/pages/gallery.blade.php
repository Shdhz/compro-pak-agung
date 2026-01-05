@extends('compro.layouts.app')

@section('title', 'Galeri Sekolah - SD Negeri 1 Contoh')

@section('content')

    <section class="relative bg-teal-900 py-16 lg:py-24 overflow-hidden">
        <div class="absolute inset-0 opacity-10"
            style="background-image: url('data:image/svg+xml,%3Csvg width=\'60\' height=\'60\' viewBox=\'0 0 60 60\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cg fill=\'none\' fill-rule=\'evenodd\'%3E%3Cg fill=\'%23facc15\' fill-opacity=\'1\'%3E%3Cpath d=\'M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z\'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E');">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl font-black text-white mb-4">Galeri Dokumentasi</h1>
            <p class="text-teal-100 text-lg max-w-2xl mx-auto">
                Merekam jejak prestasi, keceriaan kegiatan belajar, dan fasilitas sekolah kami.
            </p>
        </div>
    </section>

    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <button onclick="filterGallery('semua')"
                    class="gallery-filter-btn active px-6 py-2 rounded-full font-bold text-sm border transition bg-teal-900 text-white border-teal-900">
                    Semua
                </button>
                <button onclick="filterGallery('prestasi')"
                    class="gallery-filter-btn px-6 py-2 rounded-full font-bold text-sm border transition bg-white text-gray-600 border-gray-200 hover:bg-teal-50 hover:text-teal-900">
                    Prestasi Murid
                </button>
                <button onclick="filterGallery('kegiatan')"
                    class="gallery-filter-btn px-6 py-2 rounded-full font-bold text-sm border transition bg-white text-gray-600 border-gray-200 hover:bg-teal-50 hover:text-teal-900">
                    Acara Sekolah
                </button>
                <button onclick="filterGallery('fasilitas')"
                    class="gallery-filter-btn px-6 py-2 rounded-full font-bold text-sm border transition bg-white text-gray-600 border-gray-200 hover:bg-teal-50 hover:text-teal-900">
                    Fasilitas
                </button>
            </div>

            <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6" id="galleryGrid">

                <div class="gallery-item group relative break-inside-avoid rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition"
                    data-category="prestasi" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1544725176-7c40e5a71c5e?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                        alt="Juara Umum Olimpiade Sains"
                        class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-teal-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-1">Prestasi</span>
                        <h3 class="text-white font-bold text-lg leading-tight">Juara Umum Olimpiade Sains</h3>
                    </div>
                </div>

                <div class="gallery-item group relative break-inside-avoid rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition"
                    data-category="kegiatan" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Kegiatan Belajar Mengajar Outdoor"
                        class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-teal-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-1">Kegiatan</span>
                        <h3 class="text-white font-bold text-lg leading-tight">Belajar Outdoor</h3>
                    </div>
                </div>

                <div class="gallery-item group relative break-inside-avoid rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition"
                    data-category="fasilitas" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Perpustakaan Sekolah"
                        class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-teal-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-1">Fasilitas</span>
                        <h3 class="text-white font-bold text-lg leading-tight">Perpustakaan Nyaman</h3>
                    </div>
                </div>

                <div class="gallery-item group relative break-inside-avoid rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition"
                    data-category="kegiatan" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                        alt="Praktikum Komputer"
                        class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-teal-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-1">Kegiatan</span>
                        <h3 class="text-white font-bold text-lg leading-tight">Praktikum Komputer</h3>
                    </div>
                </div>

                <div class="gallery-item group relative break-inside-avoid rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition"
                    data-category="prestasi" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1564951434112-64d74cc2a2d7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Juara Futsal Kota"
                        class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-teal-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-1">Prestasi</span>
                        <h3 class="text-white font-bold text-lg leading-tight">Tim Futsal Juara Kota</h3>
                    </div>
                </div>

                <div class="gallery-item group relative break-inside-avoid rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition"
                    data-category="kegiatan" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=80"
                        alt="Kemah Pramuka"
                        class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-teal-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-1">Kegiatan</span>
                        <h3 class="text-white font-bold text-lg leading-tight">Persami Pramuka</h3>
                    </div>
                </div>

                <div class="gallery-item group relative break-inside-avoid rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition"
                    data-category="fasilitas" onclick="openLightbox(this)">
                    <img src="https://images.unsplash.com/photo-1564121211835-e88c852648ab?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Musholla Sekolah"
                        class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                    <div
                        class="absolute inset-0 bg-linear-to-t from-teal-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-1">Fasilitas</span>
                        <h3 class="text-white font-bold text-lg leading-tight">Musholla Sekolah</h3>
                    </div>
                </div>

            </div>

            <div class="mt-12 text-center">
                <button class="bg-gray-100 text-teal-900 px-8 py-3 rounded-full font-bold hover:bg-teal-100 transition">Muat
                    Lebih Banyak</button>
            </div>
        </div>
    </section>

    <div id="lightbox"
        class="fixed inset-0 z-999 hidden bg-black/90 backdrop-blur-sm transition-opacity duration-300 opacity-0"
        onclick="closeLightbox()">

        <button class="absolute top-6 right-6 text-white hover:text-yellow-400 transition transform hover:scale-110">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>

        <div class="flex items-center justify-center h-full p-4">
            <div class="relative max-w-5xl w-full" onclick="event.stopPropagation()">
                <img id="lightbox-img" src="" alt="Gallery Preview"
                    class="w-full max-h-[80vh] object-contain rounded-lg shadow-2xl">
                <div class="mt-4 text-center">
                    <span id="lightbox-category"
                        class="inline-block bg-yellow-400 text-teal-900 text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider mb-2"></span>
                    <h3 id="lightbox-title" class="text-white text-2xl font-bold"></h3>
                </div>
            </div>
        </div>
    </div>

    <script>
        // 1. FILTER LOGIC
        function filterGallery(category) {
            const items = document.querySelectorAll('.gallery-item');
            const buttons = document.querySelectorAll('.gallery-filter-btn');

            // Reset tombol active
            buttons.forEach(btn => {
                btn.classList.remove('bg-teal-900', 'text-white', 'border-teal-900');
                btn.classList.add('bg-white', 'text-gray-600', 'border-gray-200');
            });

            // Set tombol yang diklik jadi active
            event.target.closest('button').classList.remove('bg-white', 'text-gray-600', 'border-gray-200');
            event.target.closest('button').classList.add('bg-teal-900', 'text-white', 'border-teal-900');

            // Filter item
            items.forEach(item => {
                if (category === 'semua' || item.dataset.category === category) {
                    item.classList.remove('hidden');
                    // Animasi fade in
                    setTimeout(() => item.classList.remove('opacity-0', 'scale-95'), 50);
                } else {
                    item.classList.add('hidden');
                    item.classList.add('opacity-0', 'scale-95');
                }
            });
        }

        // 2. LIGHTBOX LOGIC
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxCat = document.getElementById('lightbox-category');

        function openLightbox(element) {
            const img = element.querySelector('img');
            const title = element.querySelector('h3').innerText;
            const category = element.querySelector('span').innerText;

            lightboxImg.src = img.src;
            lightboxTitle.innerText = title;
            lightboxCat.innerText = category;

            // Show Modal
            lightbox.classList.remove('hidden');
            // Sedikit delay untuk animasi opacity
            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
            }, 10);

            // Disable scroll body
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.add('opacity-0');
            setTimeout(() => {
                lightbox.classList.add('hidden');
            }, 300); // Sesuaikan dengan duration-300 CSS
            document.body.style.overflow = 'auto';
        }

        // Close on Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") {
                closeLightbox();
            }
        });
    </script>

@endsection
