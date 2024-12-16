<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class nthNhaCCTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Tạo đối tượng Factory
        $faker = Faker::create();
        foreach(range(1,100) as $index)
        {
            DB::table('nthnhacc')->insert([
            'nthMaNCC'=>$faker->uuid(),
            // 'nthMaNCC'=>$faker->word(15),
            'nthTenNCC'=>$faker->sentence(5),
            'nthDiachi'=>$faker->address(),
            'nthDienthoai'=>$faker->phoneNumber(10),
            'nthemail'=>$faker->email(),
            'nthstatus'=>$faker->boolean()
        ]);
        }
    }
}
