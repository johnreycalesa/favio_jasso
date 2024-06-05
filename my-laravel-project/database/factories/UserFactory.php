<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Favio Jasso',
            'address' => 'Dover, New Jersey',
            'email' => 'abc@gmail.com',
            'phone_number' => '09772143141',
            'role' => 'admin',
            'password' => Hash::make('12345'),
            'remember_token' => Str::random(10),
        ];
    }
}
