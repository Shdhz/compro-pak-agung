<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Teacher::create([
            'nama' => 'Bapak Agun, S.Pd., M.Pd.',
            'nip' => '19800101 200501 1 001',
            'jabatan' => 'Kepala Sekolah',
            'jabatan_spesifik' => 'Kepala Sekolah',
            'foto' => 'teachers/bapak-agun.avif'
        ]);
        Teacher::create([
            'nama' => 'Ibu Sarah, S.Pd.',
            'jabatan' => 'Staff',
            'jabatan_spesifik' => 'Kurikulum',
            'foto' => 'teachers/ibu-sarah.avif'
        ]);
        Teacher::create([
            'nama' => 'Bpk. Hartono',
            'jabatan' => 'Staff',
            'jabatan_spesifik' => 'Kepala Tata Usaha',
            'foto' => 'teachers/bapak-hartono.jpg'
        ]);
        Teacher::create([
            'nama' => 'Ibu Siti Aminah',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Wali Kelas 1',
            'foto' => 'teachers/ibu-siti-aminah.avif'
        ]);
        Teacher::create([
            'nama' => 'Bapak Budi Santoso',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Guru Olahraga',
            'foto' => 'teachers/bapak-budi-santoso.avif'
        ]);
        Teacher::create([
            'nama' => 'Ibu Ratna Dewi',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Guru PAI',
            'foto' => 'teachers/ibu-ratna-dewi.avif'
        ]);
        Teacher::create([
            'nama' => 'Ibu Ningsih',
            'jabatan' => 'Staff',
            'jabatan_spesifik' => 'Staff Perpus',
            'foto' => 'teachers/ibu-susi.jpg'
        ]);
        Teacher::create([
            'nama' => 'Bapak Joko',
            'jabatan' => 'Staff',
            'jabatan_spesifik' => 'Keamanan',
            'foto' => 'teachers/bapak-joko.jpg'
        ]);
        Teacher::create([
            'nama' => 'Bapak Asep',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Guru Kesenian',
            'foto' => 'teachers/bapak-asep.jpg'
        ]);
        Teacher::create([
            'nama' => 'Ibu Diana',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Guru B. Inggris',
            'foto' => 'teachers/ibu-diana.jpg'
        ]);
        Teacher::create([
            'nama' => 'Bapak Tono',
            'jabatan' => 'Staff',
            'jabatan_spesifik' => 'Operator',
            'foto' => 'teachers/bapak-tono.jpg'
        ]);
        Teacher::create([
            'nama' => 'Ibu Rina',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Wali Kelas 2',
            'foto' => 'teachers/ibu-diana.jpg'
        ]);
        Teacher::create([
            'nama' => 'Bapak Dedi',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Wali Kelas 3',
            'foto' => 'teachers/bapak-dedi.jpg'
        ]);
        Teacher::create([
            'nama' => 'Ibu Susi',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Wali Kelas 4',
            'foto' => 'teachers/ibu-susi.jpg'
        ]);
    }
}
