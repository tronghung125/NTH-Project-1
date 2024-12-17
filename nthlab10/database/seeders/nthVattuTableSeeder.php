<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

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
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('nthvattu')->insert([
            'nthMaVTu'=>$faker->word(4),
            // 'nthMaNCC'=>$faker->word(15),
            'nthTenVTu'=>$faker->sentence(5),
            'nthDienthoai'=>$faker->phoneNumber(10),
            'nthDvTinh'=>$faker->word(3),
            'nthPhanTram'=>$faker->randomFloat('2',0,100)
        ]);
        }
    }
}
