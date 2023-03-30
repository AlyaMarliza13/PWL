<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FamiliesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('families')->insert([
            [
                'nama' => 'Wijaya Pamungkas',
                'status_keluarga' => 'Ayah Kandung',
                'pekerjaan' => 'Pelatih Sepakbola',
                'alamat' => 'Perumahan Griya Shanta II, blok A-23',
            ],
            [
                'nama' => 'Dwi Ratih Sungkara',
                'status_keluarga' => 'Ibu Kandung',
                'pekerjaan' => 'Pengusaha Batik',
                'alamat' => 'Jl. Papa Biru blok B1-30',
            ],
            [
                'nama' => 'Salim Rahayuningtyas',
                'status_keluarga' => 'Ibu Kandung',
                'pekerjaan' => 'Fashion Designer',
                'alamat' => 'Perumahan Ijen Nirwana',
            ],
        ]);
    }
}
