<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NilaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa_matakuliah')->insert(
            [
                [
                    "mahasiswa_id" => 7,
                    "matakuliah_id" => 1,
                    "semester" => 4,
                    "nilai" => "B+",
                ],
                [
                    "mahasiswa_id" => 7,
                    "matakuliah_id" => 2,
                    "semester" => 4,
                    "nilai" => "B",
                ],
                [
                    "mahasiswa_id" => 7,
                    "matakuliah_id" => 3,
                    "semester" => 4,
                    "nilai" => "A",
                ],
                [
                    "mahasiswa_id" => 7,
                    "matakuliah_id" => 4,
                    "semester" => 4,
                    "nilai" => "C",
                ]
            ]
        );
    }
}
