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
            'thumbnail' => 'facilities/ruang-kelas-digital.avif',
            'badge' => 'AC & Multimedia',
            'nama' => 'Ruang Kelas Digital'
        ]);
        Facility::create([
            'thumbnail' => 'facilities/laboratorium-komputer.avif',
            'badge' => '1 Siswa 1 PC',
            'nama' => 'Laboratorium Komputer'
        ]);
        Facility::create([
            'thumbnail' => 'facilities/perpustakaan.avif',
            'badge' => 'Lengkap & Nyaman',
            'nama' => 'Perpustakaan'
        ]);
        Facility::create([
            'thumbnail' => 'facilities/musholla-sekolah.avif',
            'badge' => 'Ibadah Nyaman',
            'nama' => 'Musholla Sekolah'
        ]);
        Facility::create([
            'thumbnail' => 'facilities/uks-modern.avif',
            'badge' => 'Standar Medis',
            'nama' => 'UKS Modern'
        ]);
        Facility::create([
            'thumbnail' => 'facilities/lapangan-olahraga.avif',
            'badge' => 'Outdoor Luas',
            'nama' => 'Lapangan Olahraga'
        ]);
    }
}
