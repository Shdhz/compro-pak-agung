<?php

namespace Database\Seeders;

use App\Models\Facility;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Facility::create([
            'thumbnail' => null,
            'badge' => 'AC & Multimedia',
            'nama' => 'Ruang Kelas Digital'
        ]);
        Facility::create([
            'thumbnail' => null,
            'badge' => '1 Siswa 1 PC',
            'nama' => 'Laboratorium Komputer'
        ]);
        Facility::create([
            'thumbnail' => null,
            'badge' => 'Lengkap & Nyaman',
            'nama' => 'Perpustakaan'
        ]);
        Facility::create([
            'thumbnail' => null,
            'badge' => 'Ibadah Nyaman',
            'nama' => 'Musholla Sekolah'
        ]);
        Facility::create([
            'thumbnail' => null,
            'badge' => 'Standar Medis',
            'nama' => 'UKS Modern'
        ]);
        Facility::create([
            'thumbnail' => null,
            'badge' => 'Outdoor Luas',
            'nama' => 'Lapangan Olahraga'
        ]);
    }
}
