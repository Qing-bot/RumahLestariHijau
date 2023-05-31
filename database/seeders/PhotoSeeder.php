<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('photos')->insert([
            [
                'table_id' => 1,
                'category_id' => 2,
                'path' => 'assets/img/1.png'

            ],
            [
                'table_id' => 1,
                'category_id' => 2,
                'path' => 'assets/img/2.png'

            ],
            [
                'table_id' => 1,
                'category_id' => 2,
                'path' => 'assets/img/3.png'

            ],
            [
                'table_id' => 1,
                'category_id' => 2,
                'path' => 'assets/img/4.png'

            ],
            [
                'table_id' => 1,
                'category_id' => 1,
                'path' => 'assets/img/cul1.png'

            ],
        ]);
    }
}
