<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //chamada das seeders
        $this->call([
            AddressSeeder::class,
            CompanySeeder::class,
            UserSeeder::class,
        ]);
    }
}
