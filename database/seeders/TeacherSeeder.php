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
        ]);
        Teacher::create([
            'nama' => 'Ibu Sarah, S.Pd.',
            'jabatan' => 'Kepala Sekolah',
            'jabatan_spesifik' => 'Kepala Sekolah',
        ]);
        Teacher::create([
            'nama' => 'Bpk. Hartono',
            'jabatan' => 'Staff',
            'jabatan_spesifik' => 'Kepala Tata Usaha',
        ]);
        Teacher::create([
            'nama' => 'Ibu Siti Aminah',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Wali Kelas 1',
        ]);
        Teacher::create([
            'nama' => 'Bapak Budi Santoso',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Guru Olahraga',
        ]);
        Teacher::create([
            'nama' => 'Ibu Ratna Dewi',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Guru PAI',
        ]);
        Teacher::create([
            'nama' => 'Ibu Ningsih',
            'jabatan' => 'Staff',
            'jabatan_spesifik' => 'Staff Perpus',
        ]);
        Teacher::create([
            'nama' => 'Bapak Joko',
            'jabatan' => 'Staff',
            'jabatan_spesifik' => 'Keamanan',
        ]);
        Teacher::create([
            'nama' => 'Bapak Asep',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Guru Kesenian',
        ]);
        Teacher::create([
            'nama' => 'Ibu Diana',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Guru B. Inggris',
        ]);
        Teacher::create([
            'nama' => 'Bapak Tono',
            'jabatan' => 'Staff',
            'jabatan_spesifik' => 'Operator',
        ]);
        Teacher::create([
            'nama' => 'Ibu Rina',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Wali Kelas 2',
        ]);
        Teacher::create([
            'nama' => 'Bapak Dedi',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Wali Kelas 3',
        ]);
        Teacher::create([
            'nama' => 'Ibu Susi',
            'jabatan' => 'Guru',
            'jabatan_spesifik' => 'Wali Kelas 4',
        ]);
    }
}
