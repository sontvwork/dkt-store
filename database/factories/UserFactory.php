<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'full_name' => 'Test user ' . Str::random(3),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake() ->address(),
            'phone_number'=> fake() ->phoneNumber(),
            'password' => Hash::make('123456'),
            'active_flg' => 1,
            'created_at' => fake()->dateTimeThisMonth()->format('Y-m-d H:i:s'),
            'updated_at' => fake()->dateTimeThisMonth()->format('Y-m-d H:i:s'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
