<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinations')->insert([
            [
                'id'=> 1,
                'name' => "Outbond Pantai Kuta Bali",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur minus pariatur dolorem impedit aut inventore sequi quas, alias commodi suscipit, nulla est. Doloribus vel quisquam molestias reiciendis, alias fuga quod.",
                'rundown' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur minus pariatur dolorem impedit aut inventore sequi quas, alias commodi suscipit, nulla est. Doloribus vel quisquam molestias reiciendis, alias fuga quod.

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur minus pariatur dolorem impedit aut inventore sequi quas, alias commodi suscipit, nulla est. Doloribus vel quisquam molestias reiciendis, alias fuga quod.",
                'maps' => "Jl. Pantai Kuta, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361",
                'photo' => "assets/img/des1.png",
                'price1' => 10000,
                'price2' => 20000,
                'price3' => 30000,
                'price4' => 40000,
            ],


        ]);
    }
}
