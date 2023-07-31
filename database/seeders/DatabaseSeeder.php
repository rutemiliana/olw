<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        //atualiza o cache da materialized com os novos dados
        DB::unprepared("REFRESH MATERIALIZED VIEW sales_commission_view");
        
    }
}
