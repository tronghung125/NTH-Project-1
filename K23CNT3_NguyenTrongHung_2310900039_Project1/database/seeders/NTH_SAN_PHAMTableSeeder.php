<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NTH_SAN_PHAMTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //MaLoai1
        DB::table('NTH_SAN_PHAM')->insert([
            'nthMaSanPham'  =>"VP001",
            'nthTenSanPham' =>"Cây phú quý",
            'nthHinhAnh'    =>"images/san-pham/VP001.jpg",
            'nthSoLuong'    =>100,
            'nthDonGia'     =>599000,
            'nthMaLoai'     =>1,
            'nthTrangThai'  =>0,    
        ]);
        DB::table('NTH_SAN_PHAM')->insert([
            'nthMaSanPham'  =>"VP002",
            'nthTenSanPham' =>"Cây đại phú quý",
            'nthHinhAnh'    =>"images/san-pham/VP002.jpg",
            'nthSoLuong'    =>100,
            'nthDonGia'     =>499000,
            'nthMaLoai'     =>1,
            'nthTrangThai'  =>0,    
        ]);
        DB::table('NTH_SAN_PHAM')->insert([
            'nthMaSanPham'  =>"VP003",
            'nthTenSanPham' =>"Cây hạnh phúc",
            'nthHinhAnh'    =>"images/san-pham/VP003.jpg",
            'nthSoLuong'    =>100,
            'nthDonGia'     =>399000,
            'nthMaLoai'     =>1,
            'nthTrangThai'  =>0,    
        ]);
        DB::table('NTH_SAN_PHAM')->insert([
            'nthMaSanPham'  =>"VP004",
            'nthTenSanPham' =>"Cây vạn lộc",
            'nthHinhAnh'    =>"images/san-pham/VP004.jpg",
            'nthSoLuong'    =>100,
            'nthDonGia'     =>299000,
            'nthMaLoai'     =>1,
            'nthTrangThai'  =>0,    
        ]);
        //MaLoai3
        DB::table('NTH_SAN_PHAM')->insert([
            'nthMaSanPham'  =>"PT001",
            'nthTenSanPham' =>"Cây thiết mộc lan",
            'nthHinhAnh'    =>"images/san-pham/PT001.jpg",
            'nthSoLuong'    =>100,
            'nthDonGia'     =>619000,
            'nthMaLoai'     =>3,
            'nthTrangThai'  =>0,    
        ]);
        DB::table('NTH_SAN_PHAM')->insert([
            'nthMaSanPham'  =>"PT002",
            'nthTenSanPham' =>"Cây trường sinh",
            'nthHinhAnh'    =>"images/san-pham/PT002.jpg",
            'nthSoLuong'    =>100,
            'nthDonGia'     =>109000,
            'nthMaLoai'     =>3,
            'nthTrangThai'  =>0,    
        ]);
        DB::table('NTH_SAN_PHAM')->insert([
            'nthMaSanPham'  =>"PT003",
            'nthTenSanPham' =>"Cây hạnh phúc",
            'nthHinhAnh'    =>"images/san-pham/PT003.jpg",
            'nthSoLuong'    =>100,
            'nthDonGia'     =>299000,
            'nthMaLoai'     =>3,
            'nthTrangThai'  =>0,    
        ]);
        DB::table('NTH_SAN_PHAM')->insert([
            'nthMaSanPham'  =>"PT004",
            'nthTenSanPham' =>"Cây hoa nhài",
            'nthHinhAnh'    =>"images/san-pham/PT004.jpg",
            'nthSoLuong'    =>100,
            'nthDonGia'     =>199000,
            'nthMaLoai'     =>3,
            'nthTrangThai'  =>0,    
        ]);
    }
}