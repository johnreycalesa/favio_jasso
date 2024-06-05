<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;
use App\Models\Availability;
use App\Models\AppointmentStatus;
use App\Models\Appointment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
        ]);
        Service::factory(10)->create();
        AppointmentStatus::factory(5)->create();
        Availability::factory(10)->create();
        Appointment::factory(10)->create();
    }
}
