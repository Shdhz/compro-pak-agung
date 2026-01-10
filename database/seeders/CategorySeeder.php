<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'nama' => 'Prestasi'
        ]);
        Category::create([
            'nama' => 'Pengumuman'
        ]);
        Category::create([
            'nama' => 'Kegiatan'
        ]);
        Category::create([
            'nama' => 'Artikel Edukasi'
        ]);
        Category::create([
            'nama' => 'Agenda'
        ]);
    }
}
