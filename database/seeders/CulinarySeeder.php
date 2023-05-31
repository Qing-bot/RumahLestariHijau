<?php

namespace Database\Seeders;

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
                'name' => "Sop Buntut 1",
                'description' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur minus pariatur dolorem impedit aut inventore sequi quas, alias commodi suscipit, nulla est. Doloribus vel quisquam molestias reiciendis, alias fuga quod.",
                'like' => 3000,
                'price' => 40000
            ],


        ]);
    }
}
