<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();

        // DB::table('users')->insert([
        //    'email' => 'admin@admin.com',
        //    'password' => Hash::make('12345678')
        // ]);

        //\App\Models\User::factory(10)->create();

    }
}
