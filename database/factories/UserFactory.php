<?php

namespace Database\Factories;

use Database\Seeders\testSeeders;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'lastname' => fake()->lastname(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            //'password' =>Hash::make(fake()->password(8)), 
            'password' =>Hash::make("123456789"), 
            'direccion'=> fake()->streetAddress(),
            'ciudad'=>fake()->city(),
            'pais'=>fake()->country(),
            'telefono'=>fake()->numerify(str_repeat('#', fake()->numberBetween(10, 15))),
            'codigo_postal'=>fake()->regexify('[A-Za-z0-9]{1,10}'),
            'fecha_nacimiento'=>fake()->dateTimeBetween('-80 years','-18 years')->format('Y-m-d'),
            'genero'=>fake()->randomElement((['masculino','femenino'])),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
    
}
 