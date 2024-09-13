<?php

namespace Database\Factories;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
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
            'name' => $this->faker->name(),
          
            'email' =>$this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
            'dni' =>$this->faker->randomNumber(8,true),
            'address' =>$this->faker->address(),
            'phone' => $this->faker->e164PhoneNumber(),
            'role' => $this->faker->randomElement(['patient','doctor'])
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
    public function patient()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'patient',
            ];
        });
    }
    public function doctor()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'doctor',
            ];
        });
    }
}
