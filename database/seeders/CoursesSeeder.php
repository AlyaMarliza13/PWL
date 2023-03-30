<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            [
                'nama_mata_kuliah' => 'Statistika 1',
                'dosen_pengampu' => 'Mochammad Aryo Sulistyo S.T., M.T.',
                'jumlah_sks' => 6,
                'semester' => 4,
            ],
            [
                'nama_mata_kuliah' => 'Bahasa Inggris',
                'dosen_pengampu' => 'Silvia Sarasvati S.S., M.S.',
                'jumlah_sks' => 4,
                'semester' => 4,
            ],
            [
                'nama_mata_kuliah' => 'Multimedia',
                'dosen_pengampu' => 'R. Arthur Kusumodiningrat S.Ds., M.Ds.',
                'jumlah_sks' => 6,
                'semester' => 4,
            ],
        ]);
    }
}
