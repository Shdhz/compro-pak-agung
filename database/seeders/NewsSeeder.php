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
            'content' => null,
            'thumbnail' => 'news/juara-umum-lomba-pramuka.avif',
            'tags' => ['Pensi2025', 'Kesenian', 'SiswaKreatif']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Prestasi'),
            'slug' => Str::slug('Tim Futsal Raih Juara 1 Tingkat Kecamatan'),
            'judul' => 'Tim Futsal Raih Juara 1 Tingkat Kecamatan',
            'summary' => 'Prestasi membanggakan kembali diraih oleh tim futsal sekolah dalam ajang O2SN.',
            'content' => null,
            'thumbnail' => 'news/juara-umum-lomba-pramuka.avif',
            'tags' => ['PrestasiSiswa']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Kegiatan'),
            'slug' => Str::slug('Sosialisasi Kesehatan Gigi dan Mulut'),
            'judul' => 'Sosialisasi Kesehatan Gigi dan Mulut',
            'summary' => 'Kerjasama dengan Puskesmas setempat untuk memberikan edukasi kepada siswa kelas 1-3.',
            'content' => null,
            'thumbnail' => 'news/sosialisasi-kesehatan-gigi.avif',
            'tags' => ['Kerjasama', 'Kesehatan']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Pengumuman'),
            'slug' => Str::slug('Penerimaan Peserta Didik Baru (PPDB) 2025'),
            'judul' => 'Penerimaan Peserta Didik Baru (PPDB) 2025',
            'summary' => 'Informasi lengkap mengenai jadwal, syarat, dan jalur pendaftaran siswa baru.',
            'content' => null,
            'thumbnail' => 'news/penerimaan-peserta-didik.avif',
            'tags' => ['PPDB', 'PenerimaanSiswa']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Kegiatan'),
            'slug' => Str::slug('Kunjungan Edukatif ke Museum Geologi'),
            'judul' => 'Kunjungan Edukatif ke Museum Geologi',
            'summary' => 'Siswa kelas 5 belajar sejarah dan batuan secara langsung di Bandung.',
            'content' => null,
            'thumbnail' => 'news/sosialisasi-kesehatan-gigi.avif',
            'tags' => ['Kunjungan', 'StudyTour']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Agenda'),
            'slug' => Str::slug('Rapat Orang Tua Murid Awal Semester'),
            'judul' => 'Rapat Orang Tua Murid Awal Semester',
            'summary' => 'Pembahasan program kerja sekolah dan komite untuk satu tahun ajaran ke depan.',
            'content' => null,
            'thumbnail' => 'news/rapat-orangtua-murid.avif',
            'tags' => ['Rapat', 'Orangtua']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Artikel Edukasi'),
            'slug' => Str::slug('Tips Menjaga Konsentrasi Belajar Anak'),
            'judul' => 'Tips Menjaga Konsentrasi Belajar Anak',
            'summary' => 'Beberapa metode efektif yang bisa diterapkan orang tua di rumah.',
            'content' => null,
            'thumbnail' => 'news/tips-menjaga-konsentrasi.avif',
            'tags' => ['Edukasi', 'Tips']
        ]);
        // tambahan
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Pengumuman'),
            'slug' => Str::slug('Juara Umum Lomba Pramuka Tingkat Kota'),
            'judul' => 'Juara Umum Lomba Pramuka Tingkat Kota',
            'summary' => 'lorem ipsum dolor sit amet',
            'content' => null,
            'thumbnail' => 'news/membanggakan-tim-pramuka.avif',
            'tags' => ['SiswaBerprestasi', 'JuaraPramuka']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Agenda'),
            'slug' => Str::slug('Jadwal Ujian Nasional 2024'),
            'judul' => 'Jadwal Ujian Nasional 2024',
            'summary' => 'lorem ipsum dolor sit amet',
            'content' => null,
            'thumbnail' => 'news/jadwal-ujian-nasional.avif',
            'tags' => ['KurikulumMerdeka', 'Jadwal']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Agenda'),
            'slug' => Str::slug('Karya Wisata ke Jakarta'),
            'judul' => 'Karya Wisata ke Jakarta',
            'summary' => 'lorem ipsum dolor sit amet',
            'content' => null,
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
            'content' => null,
            'thumbnail' => 'news/semangat-kemerdekaan.avif',
            'tags' => ['Kemerdekaan', 'HUTRI']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Prestasi'),
            'slug' => Str::slug('Membanggakan! Tim Pramuka Raih Juara Umum Tingkat Kecamatan'),
            'judul' => 'Membanggakan! Tim Pramuka Raih Juara Umum Tingkat Kecamatan',
            'summary' => 'Regu Elang dan Melati berhasil menyisihkan 20 sekolah lain dalam ajang lomba ketangkasan',
            'content' => null,
            'thumbnail' => 'news/tim-futsal-raih-juara-1.avif',
            'tags' => ['JuaraPramuka', 'Juara', 'TingkatKecamatan']
        ]);
        News::create([
            'user_id' => $user('Udin Soekardjo, S.Pd'),
            'category_id' => $category('Agenda'),
            'slug' => Str::slug('Jadwal Penilaian Tengah Semester (PTS) Ganjil TA 2024/2025'),
            'judul' => 'Jadwal Penilaian Tengah Semester (PTS) Ganjil TA 2024/2025',
            'summary' => 'Persiapkan diri dengan baik, berikut adalah jadwal lengkap pelaksanaan PTS untuk kelas 1',
            'content' => null,
            'thumbnail' => 'news/jadwal-ujian-nasional.avif',
            'tags' => ['PTS', 'Jadwal', 'Penilaian']
        ]);
    }
}
