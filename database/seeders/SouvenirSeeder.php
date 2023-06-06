<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SouvenirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('souvenirs')->insert([
            [
                'name' => 'Botol Teh',
                'description' => "Botol teh yang menarik",
                'photo' => "souvenir_img/BotolTeh_seeder.jpg",
                'price' => 50000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'name' => 'Souvenir Tumblr',
                'description' => "Tumblr yang kece",
                'photo' => "souvenir_img/SouvenirTu_seeder.jpg",
                'price' => 100000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
