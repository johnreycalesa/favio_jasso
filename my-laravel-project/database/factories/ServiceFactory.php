<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition()
    {
        return [
            'service_name' => $this->faker->words(3, true),
            'service_description' => $this->faker->paragraph,
            'status' => $this->faker->randomElement(['Active', 'Inactive']),
        ];
    }
}
