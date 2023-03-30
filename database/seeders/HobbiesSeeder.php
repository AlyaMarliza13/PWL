<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hobbies')->insert([
            [
                'nama' => 'Bima Pamungkas',
                'umur' => 20,
                'jenis_kelamin' => 'Laki-laki',
                'hobi' => 'Futsal',
                'kategori' => 'olahraga',
            ],
            [
                'nama' => 'Noer Dwi Rahayu',
                'umur' => 20,
                'jenis_kelamin' => 'Perempuan',
                'hobi' => 'Menari, Menyanyi',
                'kategori' => 'kesenian',
            ],
            [
                'nama' => 'Ratih Rahaning Ragakusuma',
                'umur' => 20,
                'jenis_kelamin' => 'Perempuan',
                'hobi' => 'Mendesain pakaian, Menjahit, Model',
                'kategori' => 'fashion',
            ],
        ]);
    }
}
