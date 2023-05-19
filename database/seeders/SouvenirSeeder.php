<?php

namespace Database\Seeders;

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
            'name' => 'Souvenir Kucing',
            'description' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quo reiciendis veritatis quos inventore est, porro aperiam quod hic amet laudantium maxime cum animi magni id? Ab quia labore maxime?",
            'photo' => "assets/img/sou1.png",
            'price' => 10000
        ]);
    }
}
