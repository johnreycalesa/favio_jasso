<?php

namespace Database\Factories;

use App\Models\AppointmentStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentStatusFactory extends Factory
{
    protected $model = AppointmentStatus::class;

    public function definition()
    {
        return [
            'status_name' => $this->faker->word,
        ];
    }
}