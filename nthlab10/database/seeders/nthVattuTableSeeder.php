<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class nthVattuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('nthvattu')->insert([
            'nthMaVTu'=>'DD01',
            'nthTenVTu'=>'Đầu DVD Hitachi 1 cửa',
            'nthDvTinh'=>'Bộ',
            'nthPhanTram'=>40,
        ]);
        DB::table('nthvattu')->insert([
            'nthMaVTu'=>'DD02',
            'nthTenVTu'=>'Đầu DVD Hitachi',
            'nthDvTinh'=>'Bộ',
            'nthPhanTram'=>50,
        ]);
    }
}
