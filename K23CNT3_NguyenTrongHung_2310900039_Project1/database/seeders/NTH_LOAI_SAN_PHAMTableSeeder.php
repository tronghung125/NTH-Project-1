<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NTH_LOAI_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NTH_LOAI_SAN_PHAM')->insert([
            'nthMaLoai'     =>"L001",
            'nthTenLoai'    =>"Cây cảnh văn phòng",
            'nthTrangThai'  =>0 
        ]);
        DB::table('NTH_LOAI_SAN_PHAM')->insert([
            'nthMaLoai'     =>"L002",
            'nthTenLoai'    =>"Cây để bàn",
            'nthTrangThai'  =>0 
        ]);
        DB::table('NTH_LOAI_SAN_PHAM')->insert([
            'nthMaLoai'     =>"L003",
            'nthTenLoai'    =>"Cây cảnh phong thuỷ",
            'nthTrangThai'  =>0 
        ]);
        DB::table('NTH_LOAI_SAN_PHAM')->insert([
            'nthMaLoai'     =>"L004",
            'nthTenLoai'    =>"Cây thuỷ cảnh",
            'nthTrangThai'  =>0 
        ]);
    }
}
