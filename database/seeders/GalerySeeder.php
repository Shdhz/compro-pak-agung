<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Galery::create([
            'nama' => 'Juara Umum Olimpiade Sains',
            'kategori' => 'Prestasi',
            'foto' => 'galleries/juara-umum-olimpiade.avif',
        ]);
        Galery::create([
            'nama' => 'Praktik Komputer',
            'kategori' => 'Fasilitas',
            'foto' => 'galleries/praktikum-komputer.avif',
        ]);
        Galery::create([
            'nama' => 'Persami Pramuka',
            'kategori' => 'Acara Sekolah',
            'foto' => 'galleries/persami-pramuka.avif',
        ]);
        Galery::create([
            'nama' => 'Belajar Outdoor',
            'kategori' => 'Acara Sekolah',
            'foto' => 'galleries/belajar-outdoor.avif',
        ]);
        Galery::create([
            'nama' => 'Musholla Sekolah',
            'kategori' => 'Fasilitas',
            'foto' => 'galleries/musholla-sekolah.avif',
        ]);
        Galery::create([
            'nama' => 'Perpustakaan Nyaman',
            'kategori' => 'Fasilitas',
            'foto' => 'galleries/perpustakaan-nyaman.avif',
        ]);
    }
}
