<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;


class NTH_TIN_TUCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('NTH_TIN_TUC')->insert([
                'nthMaTT' => $faker->unique()->word, 
                'nthTieuDe' => $faker->sentence, 
                'nthMoTa' => $faker->text(200), 
                'nthNoiDung' => $faker->paragraph(5), 
                'nthNgayDangTin' => $faker->dateTimeThisYear(), 
                'nthNgayCapNhap' => $faker->dateTimeThisYear(), 
                'nthHinhAnh' => $faker->imageUrl(), 
                'nthTrangThai' => $faker->numberBetween(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
