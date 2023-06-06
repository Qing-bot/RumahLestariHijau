<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CulinarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('culinaries')->insert([
            [
                'id'=> 1,
                'name' => "Ikan Goreng",
                'description' => "Ikan Goreng rasa ikannya enak",
                'like' => 3000,
                'price' => 40000,
                'photo' => "culinary_img/IkanGoreng_Seeder.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 2,
                'name' => "Sop Buntut",
                'description' => "Sop buntut rasa sopnya enak",
                'like' => 1234,
                'price' => 50000,
                'photo' => "culinary_img/SopBuntut_Seeder.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id'=> 3,
                'name' => "Ayam Goreng",
                'description' => "Ayam Goreng rasa ayamnya enak",
                'like' => 23456,
                'price' => 20000,
                'photo' => "culinary_img/AyamGoreng_Seeder.jpeg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
