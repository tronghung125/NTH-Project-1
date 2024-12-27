<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NTH_CT_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('NTH_CT_HOA_DON')->insert([
            'nthHoaDonID'=>1,
            'nthSanPhamID'=>1,
            'nthSoLuongMua'=>12,
            'nthDonGiaMua'=>199000,
            'nthThanhTien'=>199000 * 1,
            'nthTrangThai'=>0,
        ]);

        DB::table('NTH_CT_HOA_DON')->insert([
            'nthHoaDonID'=>2,
            'nthSanPhamID'=>2,
            'nthSoLuongMua'=>20,
            'nthDonGiaMua'=>150000,
            'nthThanhTien'=>150000 * 2,
            'nthTrangThai'=>0,
        ]);

        DB::table('NTH_CT_HOA_DON')->insert([
            'nthHoaDonID'=>3,
            'nthSanPhamID'=>5,
            'nthSoLuongMua'=>5,
            'nthDonGiaMua'=>190000,
            'nthThanhTien'=>190000 *  1,
            'nthTrangThai'=>0,
        ]);

        DB::table('NTH_CT_HOA_DON')->insert([
            'nthHoaDonID'=>4,
            'nthSanPhamID'=>8,
            'nthSoLuongMua'=>3,
            'nthDonGiaMua'=>159000,
            'nthThanhTien'=>159000 * 2,
            'nthTrangThai'=>0,
        ]);
    }
}
