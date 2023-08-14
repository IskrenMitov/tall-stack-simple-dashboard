<?php

namespace Database\Factories;

use App\Repositories\CarRepository;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $carRepository = new CarRepository();
        return [
            'brand' => $carRepository->brands[rand(0, (sizeof($carRepository->brands) -1))],
            'model' => $carRepository->brand_models[rand(0, (sizeof($carRepository->brand_models) -1))],
        ];
    }
}
