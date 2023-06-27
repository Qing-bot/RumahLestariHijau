<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'id' => 1,
                'name' => "Outbond Bali",
                'description' => "Outbond di Bali",
                'rundown' => "1. Berkumpul 2. Berenang",
                'address' => "Jl. Pantai Kuta, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361",
                'photo' => "destination_img/OutbondBal_seeder.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => "Outbond Pantai Kuta Bali",
                'description' => "Outbond di Pantai Kuta",
                'rundown' => "1. Berkumpul 2. Berenang sendiri",
                'address' => "Jl. Pantai Kuta, Kuta, Kec. Kuta, Kabupaten Badung, Bali 80361",
                'photo' => "destination_img/OutbondPan_seeder.jpg",
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);

        DB::table('destination_prices')->insert([
            [
                'id' => 1,
                'destination_id'=> 1,
                'min_person' => 1,
                'max_person' => 2,
                'price' => 50000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'destination_id'=> 1,
                'min_person' => 3,
                'max_person' => 4,
                'price' => 60000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 3,
                'destination_id'=> 2,
                'min_person' => 1,
                'max_person' => 2,
                'price' => 50000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 4,
                'destination_id'=> 2,
                'min_person' => 3,
                'max_person' => 4,
                'price' => 70000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 5,
                'destination_id'=> 2,
                'min_person' => 5,
                'max_person' => 6,
                'price' => 80000,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
