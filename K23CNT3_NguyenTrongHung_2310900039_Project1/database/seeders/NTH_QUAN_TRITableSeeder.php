<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NTH_QUAN_TRITableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nthMatKhau = md5("123456");
        DB::table('NTH_QUAN_TRI')->insert([
            'nthTaiKhoan'=>"tronghung122005@gmail.com",
            'nthMatKhau'=>$nthMatKhau,
            'nthTrangThai'=>0,
        ]);
        DB::table('NTH_QUAN_TRI')->insert([
            'nthTaiKhoan'=>"0329930596",
            'nthMatKhau'=>$nthMatKhau,
            'nthTrangThai'=>0,
        ]);
    }
}
