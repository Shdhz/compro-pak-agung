<footer class="bg-teal-900 text-white pt-12 pb-6 mt-10 border-t-4 border-yellow-400">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            
            <div>
                <h3 class="text-xl font-bold text-yellow-400 mb-4">{{ $school['NAMA_SEKOLAH'] }}</h3>
                <p class="text-teal-100 text-sm leading-relaxed">
                    Mewujudkan generasi penerus bangsa yang cerdas secara intelektual, 
                    matang secara emosional, dan mulia secara spiritual.
                </p>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4">Akses Cepat</h3>
                <ul class="space-y-2 text-teal-100 text-sm">
                    <li><a href="#" class="hover:text-yellow-400 transition">Info Pendaftaran</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition">Prestasi Siswa</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition">Agenda Sekolah</a></li>
                    <li><a href="#" class="hover:text-yellow-400 transition">Download Dokumen</a></li>
                </ul>
            </div>

            <div>
                <h3 class="text-lg font-bold text-white mb-4">Hubungi Kami</h3>
                <ul class="space-y-3 text-teal-100 text-sm">
                    <li class="flex items-start gap-3">
                        <svg class="w-5 h-5 text-yellow-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        <span>{{ $school['ALAMAT_SEKOLAH'] }}</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <svg class="w-5 h-5 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                        <span>{{ $school['TELEPON_SEKOLAH'] }}</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="border-t border-teal-800 mt-10 pt-6 text-center text-sm text-teal-400">
            &copy; {{ date('Y') }} {{ $school['NAMA_SEKOLAH'] }}. All rights reserved.
        </div>
    </div>
</footer>