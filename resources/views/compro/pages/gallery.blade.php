@extends('compro.layouts.app')

@section('title', "Galeri Sekolah - " . ($school['NAMA_SEKOLAH'] ?? 'Sekolah'))

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
                <button onclick="filterGallery('semua', this)"
                    class="gallery-filter-btn active px-6 py-2 rounded-full font-bold text-sm border transition bg-teal-900 text-white border-teal-900">
                    Semua
                </button>

                @foreach($categories as $cat)
                <button onclick="filterGallery('{{ $cat }}', this)"
                    class="gallery-filter-btn px-6 py-2 rounded-full font-bold text-sm border transition bg-white text-gray-600 border-gray-200 hover:bg-teal-50 hover:text-teal-900">
                    {{ $cat }}
                </button>
                @endforeach
            </div>

            <div class="columns-1 md:columns-2 lg:columns-3 gap-6 space-y-6" id="galleryGrid">
                
                @foreach($galleries as $item)
                <div class="gallery-item group relative break-inside-avoid rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition"
                    data-category="{{ $item->kategori }}" onclick="openLightbox(this)">
                    <img src="{{ asset('storage/' . $item->foto) }}" 
                        alt="{{ $item->nama }}"
                        class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-teal-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                        <span class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-1">{{ $item->kategori }}</span>
                        <h3 class="text-white font-bold text-lg leading-tight">{{ $item->nama }}</h3>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="mt-12 text-center">
                <button id="loadMoreBtn" onclick="loadMoreGallery()" 
                    class="bg-gray-100 text-teal-900 px-8 py-3 rounded-full font-bold hover:bg-teal-100 transition">
                    Muat Lebih Banyak
                </button>
                <p id="noMoreData" class="hidden text-gray-500 mt-4 italic">Semua galeri telah ditampilkan.</p>
            </div>

        </div>
    </section>

    <div id="lightbox"
        class="fixed inset-0 z-[9999] hidden bg-black/90 backdrop-blur-sm transition-opacity duration-300 opacity-0"
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
        // Variabel Global untuk Pagination
        let currentSkip = {{ $galleries->count() }}; // Mulai skip setelah data awal (misal 6)
        let currentFilter = 'semua';
        let loading = false;

        // 1. FUNGSI FILTER
        function filterGallery(category, btnElement) {
            // Update UI Tombol
            const buttons = document.querySelectorAll('.gallery-filter-btn');
            buttons.forEach(btn => {
                btn.classList.remove('bg-teal-900', 'text-white', 'border-teal-900');
                btn.classList.add('bg-white', 'text-gray-600', 'border-gray-200');
            });
            btnElement.classList.remove('bg-white', 'text-gray-600', 'border-gray-200');
            btnElement.classList.add('bg-teal-900', 'text-white', 'border-teal-900');

            // Reset Logic
            currentFilter = category;
            currentSkip = 0; // Reset skip ke 0 karena kita mulai dari awal untuk kategori baru
            document.getElementById('galleryGrid').innerHTML = ''; // Kosongkan grid
            
            // Reset Tombol Load More
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            const noMoreData = document.getElementById('noMoreData');
            
            loadMoreBtn.classList.remove('hidden');
            loadMoreBtn.innerHTML = 'Muat Lebih Banyak';
            loadMoreBtn.disabled = false;
            noMoreData.classList.add('hidden');

            // Panggil Load More untuk isi data pertama kali
            loadMoreGallery(); 
        }

        // 2. FUNGSI LOAD MORE (AJAX)
        async function loadMoreGallery() {
            if (loading) return; // Cegah double click
            loading = true;
            
            const btn = document.getElementById('loadMoreBtn');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<span class="animate-pulse">Memuat...</span>';
            btn.disabled = true;

            try {
                // Panggil API endpoint (Pastikan route sudah dibuat)
                const url = `{{ route('compro.load-more') }}?skip=${currentSkip}&category=${currentFilter}`;
                const response = await fetch(url);
                
                if (!response.ok) throw new Error('Network response was not ok');
                
                const data = await response.json();

                if (data.length > 0) {
                    const grid = document.getElementById('galleryGrid');
                    
                    // Loop data JSON dan buat HTML String
                    data.forEach(item => {
                        // Pastikan path image sesuai dengan storage link
                        const imgPath = `/storage/${item.image}`;
                        
                        const html = `
                            <div class="gallery-item group relative break-inside-avoid rounded-2xl overflow-hidden cursor-pointer shadow-md hover:shadow-xl transition mb-6"
                                data-category="${item.kategori}" onclick="openLightbox(this)">
                                <img src="${imgPath}" alt="${item.title}"
                                    class="w-full h-auto object-cover transform group-hover:scale-110 transition duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-teal-900/90 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition duration-300 flex flex-col justify-end p-6">
                                    <span class="text-yellow-400 text-xs font-bold uppercase tracking-wider mb-1">${item.kategori}</span>
                                    <h3 class="text-white font-bold text-lg leading-tight">${item.title}</h3>
                                </div>
                            </div>
                        `;
                        // Insert HTML ke akhir grid
                        grid.insertAdjacentHTML('beforeend', html);
                    });

                    // Update Skip untuk request berikutnya
                    currentSkip += data.length;
                    
                    // Kembalikan tombol ke status normal
                    btn.innerHTML = 'Muat Lebih Banyak';
                    btn.disabled = false;
                } else {
                    // Jika data habis (array kosong)
                    btn.classList.add('hidden');
                    document.getElementById('noMoreData').classList.remove('hidden');
                }

            } catch (error) {
                console.error('Error:', error);
                btn.innerHTML = 'Gagal memuat, coba lagi';
                btn.disabled = false;
            } finally {
                loading = false;
            }
        }

        // 3. LIGHTBOX LOGIC (Standard)
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

            lightbox.classList.remove('hidden');
            setTimeout(() => {
                lightbox.classList.remove('opacity-0');
            }, 10);
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.add('opacity-0');
            setTimeout(() => {
                lightbox.classList.add('hidden');
            }, 300);
            document.body.style.overflow = 'auto';
        }

        document.addEventListener('keydown', function(event) {
            if (event.key === "Escape") closeLightbox();
        });
    </script>

@endsection