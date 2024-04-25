<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\category>
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
        // $categoryName = [
        //     "Baby & Kids",
        //     "Set",
        //     "Atasan",
        //     "Muslim",
        //     "Aksesoris"
        // ];

        return [
            // 'slug' => $this->faker->uuid(),
            // 'categoryName' => $categoryName[rand(0, 4)]
        ];
    }
}
