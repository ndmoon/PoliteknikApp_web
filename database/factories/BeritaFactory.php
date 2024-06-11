<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Berita>
 */
class BeritaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(mt_rand(2,4)),
            'excerpt' => fake()->paragraph(mt_rand(2,4)),
            'body' => fake()->paragraph(mt_rand(7,10)),
            'user_id' => mt_rand(1,5),
            'kategori_id' => mt_rand(1,3),
        ];
    }
}
