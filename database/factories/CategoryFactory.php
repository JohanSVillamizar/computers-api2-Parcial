<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Laptops',
            'Desktops',
            'Servers',
        ];

        return [
            'categories_name' => $this->faker->unique()->randomElement($categories),
            'categories_description' => $this->faker->optional()->sentence(10),
            'categories_status' => $this->faker->boolean(80),
            'categories_created_date' => optional($this->faker->optional()->dateTimeBetween('-2 years', 'now'))->format('Y-m-d'),
        ];
    }
}
