<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NTH_HOA_DONTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('NTH_HOA_DON')->insert([
            'nthMaHoaDon'=>'HD001',
            'nthMaKhachHang'=>1,
            'nthNgayHoaDon'=>'2024/12/12',
            'nthNgayNhan'=>'2024/12/12',
            'nthHoTenKhachHang'=>'Nguyễn Trọng Hưng',
            'nthEmail'=>'tronghung122005@gmail.com',
            'nthDienThoai'=>'0329930596',
            'nthDiaChi'=>'Gia Lâm',
            'nthTongTriGia'=>'100000',
            'nthTrangThai'=>2,
        ]);

        DB::table('NTH_HOA_DON')->insert([
            'nthMaHoaDon'=>'HD002',
            'nthMaKhachHang'=>2,
            'nthNgayHoaDon'=>'2024/11/11',
            'nthNgayNhan'=>'2024/11/12',
            'nthHoTenKhachHang'=>'Trần Tuấn Anh',
            'nthEmail'=>'tran@gmail.com',
            'nthDienThoai'=>'02549325',
            'nthDiaChi'=>'Thanh Xuân',
            'nthTongTriGia'=>'112000',
            'nthTrangThai'=>0,
        ]);

        DB::table('NTH_HOA_DON')->insert([
            'nthMaHoaDon'=>'HD003',
            'nthMaKhachHang'=>3,
            'nthNgayHoaDon'=>'2024/12/27',
            'nthNgayNhan'=>'2024/12/27',
            'nthHoTenKhachHang'=>'Pham Thanh Mi',
            'nthEmail'=>'Phammi@gmail.com',
            'nthDienThoai'=>'04523689',
            'nthDiaChi'=>'Phú Xuân',
            'nthTongTriGia'=>'199000',
            'nthTrangThai'=>1,
        ]);

        DB::table('NTH_HOA_DON')->insert([
            'nthMaHoaDon'=>'HD004',
            'nthMaKhachHang'=>4,
            'nthNgayHoaDon'=>'2024/12/12',
            'nthNgayNhan'=>'2024/12/12',
            'nthHoTenKhachHang'=>'Trần Thái Linh',
            'nthEmail'=>'linhtran@gmail.com',
            'nthDienThoai'=>'02815221',
            'nthDiaChi'=>'Hà Nội',
            'nthTongTriGia'=>'660000',
            'nthTrangThai'=>1,
        ]);

        DB::table('NTH_HOA_DON')->insert([
            'nthMaHoaDon'=>'HD005',
            'nthMaKhachHang'=>4,
            'nthNgayHoaDon'=>'2024/12/12',
            'nthNgayNhan'=>'2024/12/12',
            'nthHoTenKhachHang'=>'Trần Thái Linh',
            'nthEmail'=>'linhtran@gmail.com',
            'nthDienThoai'=>'02815221',
            'nthDiaChi'=>'Hà Nội',
            'nthTongTriGia'=>'100000',
            'nthTrangThai'=>1,
        ]);

    }
}
