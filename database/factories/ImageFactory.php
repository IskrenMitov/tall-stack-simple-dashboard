<?php

namespace Database\Factories;

use App\Repositories\ImageRepository;
use Illuminate\Database\Eloquent\Factories\Factory;
use function Laravel\Prompts\alert;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * @throws \Exception
     */
    public function definition(): array
    {
        $imageRepository = new ImageRepository();

        return [
            'name' => fake()->text(20),
            'alt' => fake()->text(30),
            'is_favorite' => fake()->boolean(25),
            'url' => $imageRepository->urls[random_int(0, (sizeof($imageRepository->urls) - 1))]
        ];
    }
}
