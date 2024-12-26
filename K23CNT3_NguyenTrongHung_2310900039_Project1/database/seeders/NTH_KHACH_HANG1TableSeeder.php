<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NTH_KHACH_HANG1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('NTH_KHACH_HANG1')->insert([
            'nthMaKhachHang'=>'K001',
            'nthHoTenKhachHang'=>'Nguyễn Trọng Hưng',
            'nthEmail'=>'tronghung122005@gmail.com',
            'nthMatKhau'=>'123456',
            'nthDienThoai'=>'0329930596',
            'nthDiaChi'=>'Gia Lâm',
            'nthNgayDangKy'=>'2024/02/01',
            'nthTrangThai'=>0,
        ]);

        DB::table('NTH_KHACH_HANG1')->insert([
            'nthMaKhachHang'=>'K002',
            'nthHoTenKhachHang'=>'Trần Tuấn Anh',
            'nthEmail'=>'tran@gmail.com',
            'nthMatKhau'=>'anh0027',
            'nthDienThoai'=>'02549325',
            'nthDiaChi'=>'Thanh Xuân',
            'nthNgayDangKy'=>'2024/01/20',
            'nthTrangThai'=>0,
        ]);

        DB::table('NTH_KHACH_HANG1')->insert([
            'nthMaKhachHang'=>'K003',
            'nthHoTenKhachHang'=>'Pham Thanh Mi',
            'nthEmail'=>'Phammi@gmail.com',
            'nthMatKhau'=>'pmi2005',
            'nthDienThoai'=>'04523689',
            'nthDiaChi'=>'Phú Xuân',
            'nthNgayDangKy'=>'2024/12/11',
            'nthTrangThai'=>2,
        ]);

        DB::table('NTH_KHACH_HANG1')->insert([
            'nthMaKhachHang'=>'K004',
            'nthHoTenKhachHang'=>'Trần Thái Linh',
            'nthEmail'=>'linhtran@gmail.com',
            'nthMatKhau'=>'linhtran1999',
            'nthDienThoai'=>'02815221',
            'nthDiaChi'=>'Hà Nội',
            'nthNgayDangKy'=>'2024/06/03',
            'nthTrangThai'=>0,
        ]);
    }
}
