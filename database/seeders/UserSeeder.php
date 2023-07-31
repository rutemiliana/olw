<?php

namespace Database\Seeders;

use App\Models\Seller;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //criando 100 usuários, cada usuário é um vendedor e cada vendedor vai ter 30 vendas 
        User::factory()
            ->count(100)
            ->has(Seller::factory() //menção do relacionamento de usuario com vendedor
                ->hasSales(30)) // menção do relacionamento de vendedor com vendas
            ->create();
    }
}
