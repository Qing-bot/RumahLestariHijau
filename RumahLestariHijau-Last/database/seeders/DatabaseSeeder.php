<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(CategorySeeder::class);
        $this->call(CulinarySeeder::class);
        $this->call(DestinationSeeder::class);
        $this->call(HomestaySeeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(PromoSeeder::class);
        $this->call(SouvenirSeeder::class);
        $this->call(UserSeeder::class);

    }
}
