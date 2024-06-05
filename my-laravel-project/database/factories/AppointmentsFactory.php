<?php

namespace Database\Factories;

use App\Models\Appointment;
use App\Models\User;
use App\Models\Service;
use App\Models\AppointmentStatus;
use Illuminate\Database\Eloquent\Factories\Factory;

class AppointmentFactory extends Factory
{
    protected $model = Appointment::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'service_id' => Service::factory(),
            'appointment_date' => $this->faker->date,
            'start_time' => $this->faker->time,
            'end_time' => $this->faker->time,
            'notes' => $this->faker->paragraph,
            'status_id' => AppointmentStatus::factory(),
        ];
    }
}