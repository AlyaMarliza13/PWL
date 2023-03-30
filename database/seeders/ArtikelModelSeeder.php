<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artikel_models')->insert([
            [
                'judul' => 'Vaksin Dosis 2 sudah di mulai, maksimal umur 60 tahun ke atas',
                'penulis' => 'Bayu',
                'Kategori' => 'Kesehatan',
                'tahun_terbit' => 2022
            ],
            [
                'judul' => 'Semua sekolah di NTT diwajibkan masuk jam 5 pagi, apakah efektif?',
                'penulis' => 'Dina',
                'Kategori' => 'Pendidikan',
                'tahun_terbit' => 2023
            ],
        ]);
    }
}
