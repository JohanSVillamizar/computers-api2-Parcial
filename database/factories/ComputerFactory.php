<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'computer_brand' => $this->faker->randomElement(['Dell', 'HP', 'Lenovo', 'Acer', 'Asus']),
            'computer_model' => $this->faker->bothify('Model-??###'),
            'computer_price' => $this->faker->randomFloat(2, 200, 2500),
            'computer_ram_size' => $this->faker->randomElement([4, 8, 16, 32, 64]),
            'computer_is_laptop' => $this->faker->boolean(60),
            'category_id' => \App\Models\Category::inRandomOrder()->first()->id,
            'computers_barcode' => strtoupper($this->faker->unique()->regexify('[A-Z0-9]{12}')),
        ];
    }
}
