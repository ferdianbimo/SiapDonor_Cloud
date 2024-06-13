<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Bloodtype;
use App\Models\Donor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donor>
 */
class DonorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $bloodtypeId = Bloodtype::inRandomOrder()->first()->id;

        return [
            'firstname' => fake()->firstName(),
            'lastname' => fake()->lastName(),
            'email' => fake()->email(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'age' => fake()->numberBetween(18, 45),
            'bloodtype_id' => $bloodtypeId,
        ];
    }
}
