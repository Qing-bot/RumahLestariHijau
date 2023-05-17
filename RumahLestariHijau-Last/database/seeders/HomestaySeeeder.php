<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomestaySeeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homestays')->insert([
            [
                'id' => 1,
                'name' => 'Sleepezz Equestrian Park Hotel',
                'thumbnail' => 'assets/img/thumbnail.png',
                'location' => 'Jakarta, Indonesia',
                'host' => 'Host A',
                'maps'=> 'Jl. Pulomas Jaya Via, Jl. Kayu Putih Raya, RW.16, Kayu Putih, Pulo Gadung, East Jakarta City, Jakarta 13210>',
                'rating' => 4.0,
                'like' => 9600,
                'price' => 500000,
                'guest' => 4,
                'bedroom' => 2,
                'bed' => 2,
                'bath' => 2,
                'wifi' => 1,
                'parking' => 1,
                'restaurant' => 1,
                'ac' => 1,
            ]
        ]);
    }
}
