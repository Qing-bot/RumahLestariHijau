<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomestaySeeder extends Seeder
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
                'location' => 'Jakarta, Indonesia',
                'host' => 'Host A',
                'address'=> 'Jl. Pulomas Jaya Via, Jl. Kayu Putih Raya, RW.16, Kayu Putih, Pulo Gadung, East Jakarta City, Jakarta 13210',
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
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'name' => 'Homestay B',
                'location' => 'Samarinda, Indonesia',
                'host' => 'Host B',
                'address'=> 'Jl. Aminah Syukur',
                'rating' => 3.2,
                'like' => 96000,
                'price' => 600000,
                'guest' => 3,
                'bedroom' => 2,
                'bed' => 2,
                'bath' => 2,
                'wifi' => 0,
                'parking' => 0,
                'restaurant' => 0,
                'ac' => 0,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);

        DB::table('homestay_photos')->insert(
        [
            [
                'id' => 1,
                'homestay_id' => 1,
                'index' => 1,
                'path' => 'homestay_img/SleepezzEquestrianParkHotel/thumb_seeder.webp',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 2,
                'homestay_id' => 1,
                'index' => 2,
                'path' => 'homestay_img/SleepezzEquestrianParkHotel/img1_seeder.webp',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 3,
                'homestay_id' => 1,
                'index' => 3,
                'path' => 'homestay_img/SleepezzEquestrianParkHotel/img2_seeder.webp',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 4,
                'homestay_id' => 1,
                'index' => 4,
                'path' => 'homestay_img/SleepezzEquestrianParkHotel/img3_seeder.webp',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 5,
                'homestay_id' => 1,
                'index' => 5,
                'path' => 'homestay_img/SleepezzEquestrianParkHotel/img4_seeder.webp',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'homestay_id' => 2,
                'index' => 1,
                'path' => 'homestay_img/HomestayB/thumb_seeder.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 7,
                'homestay_id' => 2,
                'index' => 2,
                'path' => 'homestay_img/HomestayB/img1_seeder.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 8,
                'homestay_id' => 2,
                'index' => 3,
                'path' => 'homestay_img/HomestayB/img2_seeder.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 9,
                'homestay_id' => 2,
                'index' => 4,
                'path' => 'homestay_img/HomestayB/img3_seeder.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 10,
                'homestay_id' => 2,
                'index' => 5,
                'path' => 'homestay_img/HomestayB/img4_seeder.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
        ]);

        DB::table('nearby_places')->insert(
        [
            [
                'id' => 1,
                'homestay_id' => 1,
                'name' => "Pantai A",
                'distance' => 333,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'homestay_id' => 1,
                'name' => "Pantai B",
                'distance' => 4444,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 3,
                'homestay_id' => 1,
                'name' => "Pantai C",
                'distance' => 55.1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 4,
                'homestay_id' => 1,
                'name' => "Pantai D",
                'distance' => 55,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 5,
                'homestay_id' => 2,
                'name' => "Pantai AA",
                'distance' => 77,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'homestay_id' => 2,
                'name' => "Pantai BB",
                'distance' => 888.8,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);

        DB::table('popular_places')->insert(
        [
            [
                'id' => 1,
                'homestay_id' => 1,
                'name' => "Pantai E",
                'distance' => 333.3,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 2,
                'homestay_id' => 1,
                'name' => "Pantai F",
                'distance' => 333.4,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 3,
                'homestay_id' => 1,
                'name' => "Pantai G",
                'distance' => 6,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 4,
                'homestay_id' => 1,
                'name' => "Pantai H",
                'distance' => 99,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], 
            [
                'id' => 5,
                'homestay_id' => 2,
                'name' => "Pantai EE",
                'distance' => 77,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 6,
                'homestay_id' => 2,
                'name' => "Pantai FF",
                'distance' => 888.2,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => 7,
                'homestay_id' => 2,
                'name' => "Pantai GG",
                'distance' => 77.1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
