<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert([
            [
                'id' => '1',
                'name' => 'Culinary'
            ],
            [
                'id' => '2',
                'name' => 'Homestay'
            ],
            [
                'id' => '3',
                'name' => 'Destination'
            ],
        ]);
    }
}
