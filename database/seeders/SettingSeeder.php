<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Symfony\Component\Clock\now;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $variables = [
            [
                'key' => 'NAMA_SEKOLAH',
                'value' => 'SD NEGERI 1',
            ],
            [
                'key' => 'HEADLINE_SEKOLAH',
                'value' => 'Cerdas, Berkarakter, Berprestasi',
            ],
            [
                'key' => 'AKREDITASI_HURUF_SEKOLAH',
                'value' => 'A',
            ],
            [
                'key' => 'AKREDITASI_SEKOLAH',
                'value' => 'UNGGUL',
            ],
            [
                'key' => 'TOTAL_EKSKUL_SEKOLAH',
                'value' => '15+',
            ],
            [
                'key' => 'MOTIVASI_KEPALA_SEKOLAH',
                'value' => 'Membangun Generasi yang Tidak Hanya Pintar, Tapi Juga Beradab.',
            ],
            [
                'key' => 'SAMBUTAN_KEPALA_SEKOLAH',
                'value' => 'Di era digital ini, tantangan pendidikan semakin kompleks. Kami berkomitmen untuk menjadi partner terbaik bagi orang tua dalam mendidik buah hati, menanamkan nilai-nilai luhur budaya bangsa dan agama, serta membekali mereka dengan keterampilan abad 21.',
            ],
            [
                'key' => 'KEPALA_SEKOLAH',
                'value' => 'Bapak Agun, S.Pd., M.Pd.',
            ],
            [
                'key' => 'PRESTASI_KEPALA_SEKOLAH',
                'value' => 'Kepala Sekolah Berprestasi 2024',
            ],
            [
                'key' => 'TAHUN_BERDIRI_SEKOLAH',
                'value' => '1985',
            ],
            [
                'key' => 'TOTAL_GURU_DAN_STAFF_SEKOLAH',
                'value' => '35+',
            ],
            [
                'key' => 'TOTAL_SISWA_AKTIF',
                'value' => '540',
            ],
            [
                'key' => 'TOTAL_ALUMNI_SEKOLAH',
                'value' => '2K+',
            ],
            [
                'key' => 'ALAMAT_SEKOLAH',
                'value' => 'Jl. Pendidikan No. 123, Kota Tasikmalaya, Jawa Barat',
            ],
            [
                'key' => 'VISI_SEKOLAH',
                'value' => 'Terwujudnya Peserta Didik yang Beriman, Cerdas, Terampil, Mandiri dan Berwawasan Lingkungan.',
            ],
            [
                'key' => 'MISI_SEKOLAH',
                'value' => 'Menanamkan keimanan dan ketaqwaan melalui pengamalan ajaran agama. Melaksanakan pembelajaran Aktif, Inovatif, Kreatif, Efektif dan Menyenangkan. Mengembangkan bakat dan minat siswa melalui kegiatan ekstrakurikuler. Mewujudkan sekolah yang bersih, hijau, dan sehat',
            ],
            [
                'key' => 'LOGO_SEKOLAH',
                'value' => '',
            ],
            [
                'key' => 'TELEPON_SEKOLAH',
                'value' => '087737709694',
            ],
            [
                'key' => 'WHATSAPP_SEKOLAH',
                'value' => '6287737709694',
            ],
            [
                'key' => 'EMAIL_SEKOLAH',
                'value' => 'info@sdnExample.sch.id',
            ],
            [
                'key' => 'FACEBOOK_SEKOLAH',
                'value' => '',
            ],
            [
                'key' => 'INSTAGRAM_SEKOLAH',
                'value' => '',
            ],
            [
                'key' => 'YOUTUBE_SEKOLAH',
                'value' => '',
            ],
        ];

        foreach ($variables as $item) {
            Setting::create([
                'key' => $item['key'],
                'value' => $item['value'],
            ]);
        }
    }
}
