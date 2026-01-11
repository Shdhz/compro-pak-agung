<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = function ($name) {
            $data = Category::select('id')->where('nama', $name)->first();

            return $data->id;
        };

        $user = function ($name) {
            $data = User::select('id')->where('nama', $name)->first();

            return $data->id;
        };

        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Prestasi'),
            'slug' => Str::slug('Perayaan Pentas Seni Tahunan SD Negeri 1 Contoh Memukau Ratusan Penonton'),
            'judul' => 'Meriah! Perayaan Pentas Seni Tahunan SD Negeri 1 Contoh Memukau Ratusan Penonton',
            'summary' => 'Kegiatan pentas seni tahun ini menampilkan berbagai bakat siswa mulai dari tari tradisional, paduan suara, hingga drama musikal.',
            'content' => '<p><strong>TASIKMALAYA</strong> – Gelak tawa dan tepuk tangan riuh memenuhi halaman utama SD Negeri 1 Contoh pada akhir pekan lalu. Ratusan wali murid, tamu undangan, dan warga sekitar antusias menyaksikan gelaran <strong>Pentas Seni & Kreativitas Siswa (Pensi)</strong> yang menjadi agenda tahunan sekolah.</p><p>Acara dibuka secara resmi oleh Bapak Kepala Sekolah, <strong>Bapak Agun, S.Pd., M.Pd.</strong>, dengan prosesi pemukulan gong dan pelepasan balon ke udara. Dalam sambutannya, beliau menyampaikan bahwa kegiatan ini bukan sekadar hiburan semata, melainkan wadah vital untuk pembentukan karakter peserta didik.</p><blockquote>"Kami ingin anak-anak tidak hanya cerdas secara akademik di dalam kelas, tetapi juga cerdas secara emosional dan sosial. Berani tampil di depan umum adalah modal besar untuk masa depan mereka. Pensi ini adalah panggung mereka untuk berekspresi," ujar Bapak Agun.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Tema: Merawat Tradisi di Era Digital</h3><p>Tahun ini, tema yang diusung panitia terbilang unik, yakni <em>"Merawat Tradisi di Era Digital"</em>. Hal ini terlihat dari ragam penampilan yang didominasi oleh kolaborasi kesenian tradisional yang dikemas dengan sentuhan modern. Beberapa penampilan yang sukses memukau penonton antara lain:</p><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Tari Merak:</strong> Dibawakan dengan sangat luwes dan anggun oleh siswi gabungan kelas 4 dan 5.</li><li><strong>Angklung Masal:</strong> Kolaborasi 50 siswa kelas 3 memainkan lagu \'Manuk Dadali\' dan \'Laskar Pelangi\' yang membuat penonton ikut bernyanyi.</li><li><strong>Kabayan Milenial:</strong> Drama musikal komedi yang diperankan oleh Teater Cilik, menceritakan tokoh Kabayan yang belajar menggunakan internet dengan bijak.</li><li><strong>Pencak Silat:</strong> Atraksi bela diri yang energik dari ekstrakurikuler silat sekolah.</li></ul><p>Salah satu orang tua murid, Ibu Ratna, mengaku terharu melihat anaknya tampil percaya diri di atas panggung. "Biasanya anak saya pemalu di rumah, tapi hari ini dia berani menari di depan banyak orang. Terima kasih kepada bapak/ibu guru yang sudah melatih mereka dengan sabar," ungkapnya.</p><h3 class="text-xl font-bold mt-4 mb-2">Apresiasi Siswa Berprestasi</h3><p>Selain pertunjukan seni, acara ini juga diselingi dengan penganugerahan penghargaan bagi siswa-siswi yang berprestasi dalam bidang akademik maupun non-akademik selama semester ganjil. Hal ini bertujuan untuk memotivasi siswa lain agar terus memacu semangat belajarnya.</p><p>Acara ditutup menjelang sore hari dengan penampilan <em>flashmob</em> seluruh guru dan siswa, serta doa bersama. Pihak sekolah mengucapkan terima kasih yang sebesar-besarnya kepada Komite Sekolah dan para sponsor yang telah mendukung penuh kelancaran acara ini. Sampai jumpa di Pentas Seni tahun depan yang pastinya akan lebih meriah!</p>',
            'thumbnail' => 'news/juara-umum-lomba-pramuka.avif',
            'tags' => ['Pensi2025', 'Kesenian', 'SiswaKreatif']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Prestasi'),
            'slug' => Str::slug('Tim Futsal Raih Juara 1 Tingkat Kecamatan'),
            'judul' => 'Tim Futsal Raih Juara 1 Tingkat Kecamatan',
            'summary' => 'Prestasi membanggakan kembali diraih oleh tim futsal sekolah dalam ajang O2SN.',
            'content' => '<p><strong>TASIKMALAYA</strong> – Prestasi membanggakan kembali ditorehkan oleh tim futsal putra SD Negeri 1 Contoh. Dalam ajang Olimpiade Olahraga Siswa Nasional (O2SN) tingkat Kecamatan yang digelar akhir pekan lalu, tim kebanggaan sekolah berhasil menyabet gelar <strong>Juara 1</strong> setelah menumbangkan lawannya di partai final yang berlangsung sengit.</p><p>Pertandingan final melawan SDN 2 Harapan berlangsung dengan tensi tinggi. Sempat tertinggal 0-1 di babak pertama, semangat pantang menyerah ditunjukkan oleh para pemain cilik ini. Di babak kedua, gol indah dari kapten tim, Rizky Pratama (Kelas 5), berhasil membalikkan keadaan menjadi 2-1 hingga peluit panjang dibunyikan.</p><blockquote>"Anak-anak bermain luar biasa hari ini. Disiplin menjaga posisi dan mental juara mereka sangat terlihat meski sempat tertinggal. Latihan keras selama dua bulan terakhir terbayar lunas," ujar Pak Budi Santoso, Guru Olahraga sekaligus pelatih tim futsal.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Melaju ke Tingkat Kota</h3><p>Kemenangan ini memastikan tiket bagi SD Negeri 1 Contoh untuk mewakili Kecamatan di ajang O2SN tingkat Kota Tasikmalaya bulan depan. Kepala Sekolah, Bapak Agun, memberikan apresiasi setinggi-tingginya saat upacara bendera hari Senin pagi tadi.</p><p>"Ini adalah bukti bahwa usaha tidak akan mengkhianati hasil. Sekolah akan terus mendukung penuh fasilitas dan kebutuhan tim untuk persiapan di tingkat kota nanti. Mohon doa restu dari seluruh orang tua dan warga sekolah," pungkasnya. Selamat kepada para juara!</p>',
            'thumbnail' => 'news/juara-umum-lomba-pramuka.avif',
            'tags' => ['PrestasiSiswa']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Kegiatan'),
            'slug' => Str::slug('Sosialisasi Kesehatan Gigi dan Mulut'),
            'judul' => 'Sosialisasi Kesehatan Gigi dan Mulut',
            'summary' => 'Kerjasama dengan Puskesmas setempat untuk memberikan edukasi kepada siswa kelas 1-3.',
            'content' => '<p><strong>TASIKMALAYA</strong> – Senyum ceria menghiasi wajah siswa-siswi kelas 1 hingga kelas 3 SD Negeri 1 Contoh pagi ini. Sekolah bekerjasama dengan UPTD Puskesmas setempat menggelar kegiatan <strong>Sosialisasi dan Pemeriksaan Kesehatan Gigi dan Mulut</strong> untuk menanamkan kebiasaan hidup sehat sejak dini.</p><p>Drg. Siska, selaku ketua tim kesehatan, memberikan edukasi mengenai cara menyikat gigi yang baik dan benar menggunakan alat peraga. Para siswa tampak antusias mempraktikkan gerakan menyikat gigi bersama-sama di halaman sekolah dengan membawa gelas kumur masing-masing.</p><blockquote>"Masalah gigi berlubang masih sangat tinggi pada usia sekolah dasar. Edukasi ini penting agar anak-anak paham bahwa sikat gigi itu harus rutin, minimal dua kali sehari, pagi setelah sarapan dan malam sebelum tidur," jelas Drg. Siska disela-sela kegiatan.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Rangkaian Kegiatan</h3><p>Selain simulasi sikat gigi, tim Puskesmas juga melakukan pemeriksaan gigi (screening) satu per satu kepada siswa. Hasil pemeriksaan dicatat di Buku Kesehatan Siswa (Rapor Kesehatan) untuk ditindaklanjuti oleh orang tua jika ditemukan masalah serius.</p><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Edukasi Makanan:</strong> Pengenalan jenis makanan yang baik untuk gigi (buah & sayur) dan yang merusak (permen & cokelat berlebih).</li><li><strong>Sikat Gigi Massal:</strong> Praktik langsung teknik "Merah Putih" (gusi ke gigi).</li><li><strong>Pemeriksaan Fisik:</strong> Pengecekan karies, karang gigi, dan kebersihan mulut.</li></ul><p>Kepala Sekolah menyambut baik program rutin tahunan ini. Beliau berharap dengan gigi yang sehat, siswa dapat belajar dengan nyaman tanpa gangguan sakit gigi yang sering menjadi alasan ketidakhadiran di kelas. Kegiatan ditutup dengan pembagian paket sikat dan pasta gigi gratis.</p>',
            'thumbnail' => 'news/sosialisasi-kesehatan-gigi.avif',
            'tags' => ['Kerjasama', 'Kesehatan']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Pengumuman'),
            'slug' => Str::slug('Penerimaan Peserta Didik Baru (PPDB) 2025'),
            'judul' => 'Penerimaan Peserta Didik Baru (PPDB) 2025',
            'summary' => 'Informasi lengkap mengenai jadwal, syarat, dan jalur pendaftaran siswa baru.',
            'content' => '<p><strong>TASIKMALAYA</strong> – SD Negeri 1 Contoh secara resmi mengumumkan pembukaan <strong>Penerimaan Peserta Didik Baru (PPDB) Tahun Ajaran 2025/2026</strong>. Pendaftaran akan dibuka mulai tanggal 1 Juli hingga 10 Juli 2025. Sekolah mengundang putra-putri terbaik bangsa untuk bergabung dan menjadi bagian dari keluarga besar sekolah kami yang berprestasi.</p><p>Tahun ini, kuota penerimaan siswa baru ditetapkan sebanyak 4 rombongan belajar (rombel) dengan total 112 siswa. Proses seleksi akan dilakukan secara transparan dan akuntabel sesuai dengan petunjuk teknis dari Dinas Pendidikan Kota Tasikmalaya.</p><h3 class="text-xl font-bold mt-4 mb-2">Jalur Pendaftaran</h3><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Jalur Zonasi (80%):</strong> Diperuntukkan bagi calon peserta didik yang berdomisili di dalam wilayah zonasi yang ditetapkan.</li><li><strong>Jalur Afirmasi (15%):</strong> Bagi peserta didik dari keluarga ekonomi tidak mampu dan penyandang disabilitas.</li><li><strong>Jalur Perpindahan Tugas Orang Tua/Wali (5%):</strong> Bagi calon peserta didik yang mengikuti kepindahan tugas orang tua.</li></ul><blockquote>"Kami berkomitmen memberikan pelayanan pendidikan terbaik. Fasilitas lengkap dan tenaga pendidik profesional siap menyambut siswa baru untuk mengembangkan potensi akademik maupun non-akademik mereka," tutur Ketua Panitia PPDB, Ibu Siti Aminah.</blockquote><p>Pendaftaran dapat dilakukan secara <em>online</em> melalui website resmi sekolah atau datang langsung ke Sekretariat PPDB di sekolah pada jam kerja (08.00 - 12.00 WIB) dengan membawa persyaratan yang ditentukan. Segera daftarkan putra-putri Anda sebelum kuota terpenuhi!</p>',
            'thumbnail' => 'news/penerimaan-peserta-didik.avif',
            'tags' => ['PPDB', 'PenerimaanSiswa']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Kegiatan'),
            'slug' => Str::slug('Kunjungan Edukatif ke Museum Geologi'),
            'judul' => 'Kunjungan Edukatif ke Museum Geologi',
            'summary' => 'Siswa kelas 5 belajar sejarah dan batuan secara langsung di Bandung.',
            'content' => '<p><strong>BANDUNG</strong> – Suasana penuh semangat terpancar dari wajah siswa-siswi kelas 5 SD Negeri 1 Contoh saat mengikuti kegiatan <strong>Kunjungan Edukatif ke Museum Geologi Bandung</strong> pada akhir pekan lalu. Kegiatan ini merupakan bagian dari pembelajaran di luar kelas (outing class) untuk mata pelajaran Ilmu Pengetahuan Alam (IPA) dan Ilmu Pengetahuan Sosial (IPS).</p><p>Setibanya di museum, rombongan disambut oleh pemandu museum yang ramah. Para siswa diajak berkeliling melihat berbagai koleksi batuan, mineral, dan fosil purba. Mereka tampak sangat antusias saat melihat replika kerangka Tyrannosaurus Rex (T-Rex) yang menjulang tinggi di ruang utama.</p><blockquote>"Wah, besar sekali dinosaurusnya! Ternyata dulu di Indonesia juga ada gajah purba ya, Pak?" tanya Azka, salah satu siswa kelas 5, saat melihat fosil Stegodon trigonocephalus.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Belajar Sejarah Bumi</h3><p>Selain melihat fosil, siswa juga mendapatkan penjelasan mengenai sejarah pembentukan bumi, fenomena gunung berapi, dan kekayaan sumber daya alam Indonesia. Mereka mencatat informasi penting di lembar kerja siswa (LKS) yang telah disiapkan oleh guru.</p><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Ruang Geologi Indonesia:</strong> Mempelajari letak geografis dan potensi bencana alam di Indonesia.</li><li><strong>Ruang Sejarah Kehidupan:</strong> Melihat evolusi makhluk hidup dari masa ke masa.</li><li><strong>Ruang Sumber Daya Geologi:</strong> Mengenal berbagai jenis batuan dan mineral yang bermanfaat bagi kehidupan.</li></ul><p>Kepala Sekolah, Bapak Agun, berharap kegiatan ini dapat menumbuhkan rasa cinta tanah air dan kesadaran menjaga lingkungan. "Belajar langsung dari sumbernya tentu lebih berkesan daripada hanya membaca buku. Semoga pengalaman ini memotivasi mereka untuk menjadi ilmuwan masa depan," tutupnya.</p>',
            'thumbnail' => 'news/sosialisasi-kesehatan-gigi.avif',
            'tags' => ['Kunjungan', 'StudyTour']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Agenda'),
            'slug' => Str::slug('Rapat Orang Tua Murid Awal Semester'),
            'judul' => 'Rapat Orang Tua Murid Awal Semester',
            'summary' => 'Pembahasan program kerja sekolah dan komite untuk satu tahun ajaran ke depan.',
            'content' => '<p><strong>TASIKMALAYA</strong> – Memasuki awal Semester Genap Tahun Ajaran 2024/2025, SD Negeri 1 Contoh menggelar <strong>Rapat Pertemuan Orang Tua Murid dan Komite Sekolah</strong>. Kegiatan yang berlangsung di Aula Sekolah ini dihadiri oleh seluruh wali murid dari kelas 1 hingga kelas 6 dengan tujuan menyamakan persepsi dan membangun sinergi antara sekolah dan rumah.</p><p>Acara dibuka dengan pemaparan evaluasi program semester ganjil oleh Kepala Sekolah. Beliau menyampaikan capaian prestasi siswa serta beberapa area yang perlu peningkatan. Fokus utama rapat kali ini adalah sosialisasi program kerja semester genap, termasuk persiapan Ujian Sekolah bagi kelas 6 dan kegiatan ekstrakurikuler unggulan.</p><blockquote>"Pendidikan anak adalah tanggung jawab bersama. Sekolah sebagai rumah kedua tidak bisa berjalan sendiri tanpa dukungan penuh dari Bapak/Ibu di rumah. Komunikasi yang baik adalah kuncinya," tegas Ketua Komite Sekolah dalam sambutannya.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Agenda Pembahasan</h3><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Kalender Akademik:</strong> Sosialisasi jadwal Penilaian Tengah Semester (PTS), Penilaian Akhir Tahun (PAT), dan libur sekolah.</li><li><strong>Program Keagamaan:</strong> Penguatan program Tahfidz dan pembiasaan sholat Dhuha berjamaah.</li><li><strong>Fasilitas Sekolah:</strong> Laporan penggunaan dana partisipasi dan rencana perbaikan sarana kelas.</li></ul><p>Sesi tanya jawab berlangsung interaktif, di mana orang tua memberikan masukan konstruktif terkait keamanan lingkungan sekolah dan menu kantin sehat. Hasil rapat disepakati bersama dan dituangkan dalam berita acara untuk dilaksanakan dengan penuh tanggung jawab demi kemajuan peserta didik.</p>',
            'thumbnail' => 'news/rapat-orangtua-murid.avif',
            'tags' => ['Rapat', 'Orangtua']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Artikel Edukasi'),
            'slug' => Str::slug('Tips Menjaga Konsentrasi Belajar Anak'),
            'judul' => 'Tips Menjaga Konsentrasi Belajar Anak',
            'summary' => 'Beberapa metode efektif yang bisa diterapkan orang tua di rumah.',
            'content' => '<p><strong>TASIKMALAYA</strong> - Seringkali orang tua mengeluhkan anaknya sulit fokus saat belajar di rumah. Sebentar-sebentar main HP, melamun, atau mudah terdistraksi suara di sekitarnya. Padahal, konsentrasi adalah kunci utama menyerap pelajaran dengan baik. Berikut adalah beberapa tips efektif yang dirangkum dari Psikolog Pendidikan untuk membantu menjaga konsentrasi belajar anak.</p><h3 class="text-xl font-bold mt-4 mb-2">1. Ciptakan Lingkungan Belajar yang Kondusif</h3><p>Pastikan area belajar anak jauh dari gangguan seperti televisi menyala atau keramaian anggota keluarga lain. Pencahayaan yang cukup dan sirkulasi udara yang baik juga sangat mempengaruhi kenyamanan otak untuk bekerja. Rapikan meja belajar dari benda-benda yang tidak diperlukan saat itu.</p><h3 class="text-xl font-bold mt-4 mb-2">2. Terapkan Metode Podomoro</h3><p>Anak-anak memiliki rentang perhatian yang terbatas. Jangan paksa mereka belajar 2 jam nonstop. Gunakan teknik <em>Podomoro</em>: belajar fokus selama 25 menit, lalu istirahat 5 menit. Ulangi siklus ini. Istirahat singkat membantu otak me-refresh kembali energinya.</p><blockquote>"Otak anak ibarat otot, kalau dipaksa bekerja terus menerus tanpa jeda, ia akan lelah dan menolak informasi baru. Jeda istirahat itu justru memperkuat ingatan," ungkap Dr. Aisyah, Psikolog Anak.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">3. Perhatikan Asupan Nutrisi & Tidur</h3><p>Sarapan bergizi seimbang (karbohidrat kompleks, protein, sayur) sangat penting sebagai "bensin" otak. Hindari gula berlebih yang membuat anak hiperaktif lalu cepat lemas (sugar crash). Selain itu, pastikan anak tidur cukup 8-9 jam sehari. Kurang tidur adalah musuh utama konsentrasi.</p><h3 class="text-xl font-bold mt-4 mb-2">4. Kenali Gaya Belajar Anak</h3><p>Setiap anak unik. Ada yang tipe <strong>Visual</strong> (suka gambar/bagan), <strong>Auditori</strong> (suka mendengar/berdiskusi), atau <strong>Kinestetik</strong> (suka bergerak/praktik). Sesuaikan cara mendampingi belajar dengan gaya mereka agar proses belajar terasa menyenangkan, bukan beban.</p>',
            'thumbnail' => 'news/tips-menjaga-konsentrasi.avif',
            'tags' => ['Edukasi', 'Tips']
        ]);
        // tambahan
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Pengumuman'),
            'slug' => Str::slug('Juara Umum Lomba Pramuka Tingkat Kota'),
            'judul' => 'Juara Umum Lomba Pramuka Tingkat Kota',
            'summary' => 'Tim Pramuka Penggalang SD Negeri 1 Contoh kembali mengukir sejarah dengan meraih gelar Juara Umum pada ajang Lomba Tingkat (LT) II se-Kota Tasikmalaya, memborong piala dari berbagai mata lomba unggulan.',
            'content' => '<p><strong>TASIKMALAYA</strong> – Gugus Depan (Gudep) SD Negeri 1 Contoh kembali mengharumkan nama sekolah di kancah pendidikan kota. Kali ini, Pasukan Penggalang Putra dan Putri berhasil memboyong Piala Bergilir Walikota sebagai <strong>Juara Umum</strong> dalam Lomba Tingkat (LT) II Kota Tasikmalaya yang digelar di Bumi Perkemahan, akhir pekan lalu.</p><p>Kompetisi yang berlangsung selama dua hari satu malam ini diikuti oleh puluhan Sekolah Dasar dari berbagai kecamatan. Persaingan berlangsung sangat ketat, namun ketangkasan dan kekompakan tim Pramuka SD Negeri 1 Contoh tak terbendung.</p><blockquote>"Ini adalah buah manis dari kedisiplinan anak-anak. Latihan intensif setiap sore sepulang sekolah, panas maupun hujan tetap mereka lalui dengan semangat. Saya sangat bangga melihat mental juara mereka di lapangan," ujar Kak Rina, Pembina Pramuka dengan penuh haru.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Dominasi Mata Lomba</h3><p>Tim sekolah berhasil mendominasi perolehan medali emas di berbagai pos teknis dan ketangkasan, antara lain:</p><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Teknik Kepramukaan:</strong> Juara 1 Sandi Morse & Semaphore.</li><li><strong>Pioneering:</strong> Juara 1 Tali Temali (Pembuatan Tandu Darurat).</li><li><strong>LKBB Tongkat:</strong> Juara 2 Variasi Formasi Baris Berbaris.</li><li><strong>Yel-yel:</strong> Juara Favorit Paling Semangat.</li></ul><p>Kemenangan ini sekaligus memastikan tiket bagi kontingen SD Negeri 1 Contoh untuk mewakili Kota Tasikmalaya melaju ke Lomba Tingkat III (LT-III) di tingkat Provinsi Jawa Barat mendatang. Kepala Sekolah, Bapak Agun, berkomitmen memfasilitasi persiapan tim secara maksimal agar dapat kembali berprestasi di level yang lebih tinggi. Salam Pramuka!</p>',
            'thumbnail' => 'news/membanggakan-tim-pramuka.avif',
            'tags' => ['SiswaBerprestasi', 'JuaraPramuka']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Agenda'),
            'slug' => Str::slug('Jadwal Ujian Nasional 2024'),
            'judul' => 'Jadwal Ujian Nasional 2024',
            'summary' => 'SD Negeri 1 Contoh resmi merilis jadwal Ujian Sekolah (US) Utama bagi siswa kelas 6 yang akan dilaksanakan pada pertengahan Mei 2024. Sekolah menghimbau siswa dan orang tua untuk mempersiapkan fisik serta mental menghadapi ujian penentu kelulusan ini.',
            'content' => '<p><strong>TASIKMALAYA</strong> – Menindaklanjuti Surat Edaran Dinas Pendidikan Kota Tasikmalaya, SD Negeri 1 Contoh secara resmi merilis jadwal pelaksanaan <strong>Ujian Sekolah (US)</strong> Utama bagi peserta didik kelas 6 Tahun Ajaran 2023/2024. Ujian ini merupakan salah satu indikator penting dalam penentuan kelulusan siswa.</p><p>Pelaksanaan ujian dijadwalkan berlangsung pada pertengahan bulan Mei mendatang dengan sistem tatap muka. Kepala Sekolah mengingatkan agar seluruh siswa menjaga kesehatan fisik dan mental, serta mulai mengurangi aktivitas bermain gawai yang berlebihan.</p><blockquote>"Persiapan mental sama pentingnya dengan akademik. Orang tua dimohon kerjasamanya untuk menciptakan suasana belajar yang kondusif di rumah dan mendampingi anak me-review materi pelajaran dari kelas 4 hingga kelas 6," himbau Wakil Kepala Sekolah Bidang Kurikulum.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Rincian Jadwal Mata Pelajaran</h3><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Senin, 13 Mei 2024:</strong> Bahasa Indonesia & Pendidikan Agama</li><li><strong>Selasa, 14 Mei 2024:</strong> Matematika & PKn</li><li><strong>Rabu, 15 Mei 2024:</strong> Ilmu Pengetahuan Alam (IPA) & IPS</li><li><strong>Kamis, 16 Mei 2024:</strong> Muatan Lokal (Bahasa Sunda) & SBdP</li></ul><p>Sebagai persiapan akhir, sekolah juga akan mengadakan program Pemantapan (Try Out) intensif mulai minggu depan setiap jam pulang sekolah. Bagi siswa yang berhalangan hadir karena sakit pada jadwal utama, wajib melapor untuk dijadwalkan pada Ujian Susulan seminggu kemudian.</p>',
            'thumbnail' => 'news/jadwal-ujian-nasional.avif',
            'tags' => ['KurikulumMerdeka', 'Jadwal']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Agenda'),
            'slug' => Str::slug('Karya Wisata ke Jakarta'),
            'judul' => 'Karya Wisata ke Jakarta',
            'summary' => 'Ratusan siswa kelas 6 SD Negeri 1 Contoh sukses melaksanakan kegiatan Karya Wisata ke Jakarta. Mengunjungi ikon ibukota seperti Monas dan TMII, kegiatan ini bertujuan memberikan pengalaman belajar langsung mengenai sejarah dan keberagaman budaya Indonesia.',
            'content' => '<p><strong>TASIKMALAYA</strong> – Ratusan siswa-siswi kelas 6 SD Negeri 1 Contoh tampak sumringah saat menaiki bus pariwisata yang berjejer di depan gerbang sekolah Sabtu dini hari lalu. Mereka mengikuti agenda tahunan <strong>Karya Wisata (Study Tour)</strong> dengan tujuan ibukota negara, DKI Jakarta.</p><p>Kunjungan pertama diawali di Monumen Nasional (Monas). Siswa diajak masuk ke Museum Sejarah Nasional di bagian dasar cawan Monas untuk melihat diorama perjuangan bangsa. Antusiasme memuncak saat mereka diajak naik ke pelataran puncak untuk melihat pemandangan kota Jakarta dari ketinggian.</p><blockquote>"Senang sekali bisa lihat emas di puncak Monas dari dekat. Biasanya cuma lihat di buku pelajaran IPS, sekarang bisa foto langsung," ujar Aldi, salah satu peserta dengan wajah berseri-seri.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Jelajah Nusantara di TMII</h3><p>Destinasi selanjutnya adalah Taman Mini Indonesia Indah (TMII). Di sini, rombongan belajar mengenai keberagaman rumah adat dari Sabang sampai Merauke.</p><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Museum IPTEK:</strong> Mencoba alat peraga sains interaktif.</li><li><strong>Anjungan Daerah:</strong> Mengenal arsitektur rumah adat dan baju tradisional.</li><li><strong>Teater Keong Mas:</strong> Menonton film dokumenter budaya Indonesia di layar raksasa.</li></ul><p>Kepala Sekolah berharap kegiatan ini dapat menyegarkan pikiran siswa setelah Penilaian Tengah Semester sekaligus menanamkan rasa cinta tanah air. Rombongan tiba kembali di sekolah pada malam hari dengan selamat, membawa oleh-oleh cerita dan pengalaman tak terlupakan.</p>',
            'thumbnail' => 'news/semangat-kemerdekaan.avif',
            'tags' => ['Liburan', 'Belajar', 'StudyTour']
        ]);
        // tambahan 2
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Kegiatan'),
            'slug' => Str::slug('Semangat Kemerdekaan: Upacara dan Lomba Tradisional Siswa'),
            'judul' => 'Semangat Kemerdekaan: Upacara dan Lomba Tradisional Siswa',
            'summary' => 'Peringatan HUT RI berlangsung meriah dengan partisipasi seluruh warga sekolah',
            'content' => '<p><strong>TASIKMALAYA</strong> – Nuansa Merah Putih menyelimuti seluruh penjuru SD Negeri 1 Contoh pagi ini. Dalam rangka memperingati HUT Kemerdekaan Republik Indonesia yang ke-79, sekolah menggelar serangkaian acara meriah yang diawali dengan Upacara Bendera khidmat dan dilanjutkan dengan pesta rakyat lomba tradisional.</p><p>Petugas upacara yang terdiri dari pasukan pengibar bendera (Paskibra) cilik menjalankan tugasnya dengan sempurna. Langkah tegap dan formasi yang rapi saat mengibarkan Sang Saka Merah Putih membuat para guru dan orang tua yang hadir berdecak kagum.</p><blockquote>"Kemerdekaan ini bukan hadiah, tapi hasil perjuangan darah dan air mata para pahlawan. Tugas kalian sebagai pelajar saat ini adalah mengisi kemerdekaan dengan prestasi, belajar giat, dan menjaga akhlak mulia," tegas Kepala Sekolah dalam amanatnya.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Keseruan Lomba 17-an</h3><p>Usai upacara, suasana khidmat berubah menjadi gelak tawa dan sorak sorai. Lapangan sekolah disulap menjadi arena kompetisi yang seru. Berbagai lomba khas "Agustusan" digelar antar kelas, menguji kekompakan dan sportivitas siswa.</p><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Balap Karung Helm:</strong> Lomba favorit yang paling mengundang tawa karena tingkah lucu siswa yang jatuh bangun mengejar garis finish.</li><li><strong>Makan Kerupuk:</strong> Melatih kesabaran dan konsentrasi siswa dengan tangan di belakang.</li><li><strong>Estafet Tepung:</strong> Menguji kerjasama tim, di mana banyak siswa yang wajahnya cemong tertumpah tepung.</li><li><strong>Tarik Tambang:</strong> Adu kekuatan fisik dan strategi antar regu kelas atas.</li></ul><p>Kegiatan ditutup dengan pembagian hadiah berupa buku tulis dan perlengkapan sekolah bagi para pemenang. Melalui kegiatan ini, diharapkan semangat nasionalisme dan kebersamaan warga sekolah semakin erat. <strong>MERDEKA!</strong></p>',
            'thumbnail' => 'news/semangat-kemerdekaan.avif',
            'tags' => ['Kemerdekaan', 'HUTRI']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Prestasi'),
            'slug' => Str::slug('Membanggakan! Tim Pramuka Raih Juara Umum Tingkat Kecamatan'),
            'judul' => 'Membanggakan! Tim Pramuka Raih Juara Umum Tingkat Kecamatan',
            'summary' => 'Regu Elang dan Melati berhasil menyisihkan 20 sekolah lain dalam ajang lomba ketangkasan',
            'content' => '<p><strong>TASIKMALAYA</strong> – Prestasi gemilang kembali diukir oleh Tim Pramuka Penggalang SD Negeri 1 Contoh. Dalam ajang Jambore Ranting (Jamran) tingkat Kecamatan yang digelar di Bumi Perkemahan Sukamulya akhir pekan kemarin, kontingen sekolah berhasil membawa pulang trofi <strong>Juara Umum</strong>.</p><p>Hujan deras yang mengguyur lokasi perkemahan tidak menyurutkan semangat para anggota pramuka. Berbekal latihan intensif selama satu bulan penuh, mereka tampil prima di setiap pos lomba, mulai dari teknik kepramukaan hingga pentas seni budaya.</p><blockquote>"Kunci kemenangan ini adalah kekompakan regu. Anak-anak tidak pernah mengeluh meski lelah. Mental baja inilah yang kami bentuk dalam pendidikan kepramukaan," ujar Kak Budi, Pembina Pramuka Putra.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Borong Piala Bergilir</h3><p>Gelar Juara Umum diraih setelah akumulasi poin tertinggi dari berbagai mata lomba. Berikut adalah daftar piala yang berhasil diamankan:</p><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Juara 1:</strong> Lomba Ketangkasan Baris Berbaris (LKBB) Tongkat.</li><li><strong>Juara 1:</strong> Sandi Morse dan Semaphore.</li><li><strong>Juara 2:</strong> Masak Rimba (Pioneering).</li><li><strong>Juara 3:</strong> Pentas Seni Tari Daerah.</li></ul><p>Dengan hasil ini, Tim Pramuka SD Negeri 1 Contoh berhak mewakili Kecamatan untuk melaju ke kompetisi tingkat Kota Tasikmalaya bulan depan. Kepala Sekolah, Bapak Agun, mengucapkan selamat dan terima kasih atas dedikasi siswa serta dukungan penuh dari para orang tua.</p>',
            'thumbnail' => 'news/tim-futsal-raih-juara-1.avif',
            'tags' => ['JuaraPramuka', 'Juara', 'TingkatKecamatan']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Agenda'),
            'slug' => Str::slug('Jadwal Penilaian Tengah Semester (PTS) Ganjil TA 2024/2025'),
            'judul' => 'Jadwal Penilaian Tengah Semester (PTS) Ganjil TA 2024/2025',
            'summary' => 'Persiapkan diri dengan baik, berikut adalah jadwal lengkap pelaksanaan PTS untuk kelas 1',
            'content' => '<p><strong>TASIKMALAYA</strong> – Berdasarkan Kalender Akademik Tahun Pelajaran 2024/2025, SD Negeri 1 Contoh akan melaksanakan kegiatan <strong>Penilaian Tengah Semester (PTS) Ganjil</strong>. Kegiatan evaluasi ini dijadwalkan berlangsung mulai tanggal <strong>23 September hingga 28 September 2024</strong>.</p><p>PTS bertujuan untuk mengukur pencapaian kompetensi peserta didik setelah menempuh proses pembelajaran selama tiga bulan pertama. Pelaksanaan ujian akan dilakukan secara tatap muka berbasis kertas (Paper Based Test) untuk kelas 1-3 dan berbasis komputer (CBT) sederhana untuk kelas 4-6 sebagai pengenalan teknologi.</p><blockquote>"Kami menghimbau kepada Bapak/Ibu orang tua wali murid untuk lebih intensif mendampingi putra-putrinya belajar di rumah. Pastikan anak-anak istirahat cukup dan sarapan sebelum berangkat sekolah agar bisa mengerjakan soal dengan fokus," pesan Wakil Kepala Sekolah Bidang Kurikulum.</blockquote><h3 class="text-xl font-bold mt-4 mb-2">Jadwal Mata Pelajaran</h3><ul class="list-disc list-inside mb-4 pl-4"><li><strong>Senin:</strong> Pendidikan Agama & Budi Pekerti, Tema 1 (Bahasa Indonesia).</li><li><strong>Selasa:</strong> Matematika, Tema 2 (PKn).</li><li><strong>Rabu:</strong> Ilmu Pengetahuan Alam (IPA) & IPS.</li><li><strong>Kamis:</strong> PJOK & Seni Budaya (SBdP).</li><li><strong>Jumat:</strong> Muatan Lokal (Bahasa Sunda) & Bahasa Inggris.</li></ul><p>Pihak sekolah menekankan bahwa nilai PTS memiliki bobot penting dalam pengolahan nilai rapor semester ganjil nanti. Oleh karena itu, kejujuran (integritas) dan ketelitian dalam mengerjakan soal menjadi aspek karakter yang sangat ditekankan. Selamat belajar dan semoga sukses!</p>',
            'thumbnail' => 'news/jadwal-ujian-nasional.avif',
            'tags' => ['PTS', 'Jadwal', 'Penilaian']
        ]);
    }
}
