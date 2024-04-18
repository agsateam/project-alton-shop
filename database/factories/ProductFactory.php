<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dummyName = [
            "ALTON Pauline Tunik",
            "ALTON Xavier Short Sleeve",
            "ALTON Flannel Shirt Vol 2",
            "ALTON Set Lilac",
            "ALTON Set Camelia Navy",
            "ALTON Malvin Flannel"
        ];

        $sizes = ['S', 'M', 'L', 'XL'];
        $stock = [
            'S' => $this->faker->numberBetween(0, 20),
            'M' => $this->faker->numberBetween(0, 20),
            'L' => $this->faker->numberBetween(0, 20),
            'XL' => $this->faker->numberBetween(0, 20),
        ];

        return [
            'product_id' => $this->faker->uuid(),
            'name' => $dummyName[$this->faker->numberBetween(0, 5)],
            'price' => $this->faker->numberBetween(20000, 200000),
            'rating' => $this->faker->numberBetween(0, 5),
            'sizes' => serialize($sizes),
            'stock' => serialize($stock),
            'sizeChartImage' => "https://img.lazcdn.com/g/p/5586dc8d9fbdf8f6682ceb8a33e7ab91.png_2200x2200q80.png",
            'description' => $this->faker->paragraphs(5, true),
            'is_promo' => false
        ];
    }
}
