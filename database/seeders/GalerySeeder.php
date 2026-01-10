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
            'kategori' => 'Prestasi'
        ]);
        Galery::create([
            'nama' => 'Praktik Komputer',
            'kategori' => 'Fasilitas'
        ]);
        Galery::create([
            'nama' => 'Persami Pramuka',
            'kategori' => 'Acara Sekolah'
        ]);
        Galery::create([
            'nama' => 'Belajar Outdoor',
            'kategori' => 'Acara Sekolah'
        ]);
        Galery::create([
            'nama' => 'Musholla Sekolah',
            'kategori' => 'Fasilitas'
        ]);
        Galery::create([
            'nama' => 'Perpustakaan Nyaman',
            'kategori' => 'Fasilitas'
        ]);
    }
}
