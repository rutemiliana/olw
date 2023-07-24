<?php

namespace Database\Factories;

use App\Enums\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'seller_id' => fake()->numberBetween(1,100),
            'client_id' => fake()->numberBetween(1,100),
            'sold_at' => fake()->dateTimeBetween('-8 years' , '-1 year'),
            'total_amount' => fake()->numberBetween(10000, 50000),
            'status' => fake()->randomElement(Status::cases()) //cases função nativa do Enum. Gera um valor aleatorio contido na classe Status. 
        ];
    }
}
