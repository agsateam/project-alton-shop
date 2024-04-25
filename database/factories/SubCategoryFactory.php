<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subCategory>
 */
class SubCategoryFactory extends Factory
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

        // $subName = [
        //     'flanel',
        //     'katun',
        //     'sutra',
        //     'rayon',
        //     'spandek',
        //     'kaos',
        //     'kain',
        //     'bahan',
        //     'kemeja'
        // ];

        return [
            // 'slug' => $this->faker->uuid(),
            // 'categoryName' => $this->faker->randomElement($categoryName),
            // 'subName' => $this->faker->randomElement($subName)
        ];
    }
}
