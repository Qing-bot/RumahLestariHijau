<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promos')->insert([
            [
                'name' => "1",
                'photo' => "assets/img/pr1.png"
            ],
            [
                'name' => "2",
                'photo' => "assets/img/pr2.png"
            ],
            [
                'name' => "3",
                'photo' => "assets/img/pr3.png"
            ],

        ]);
    }
}
