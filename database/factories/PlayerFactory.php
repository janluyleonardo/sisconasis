<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Player_name' => $this->faker->name(),
            'Player_document' => $this->faker->randomNumber(),
            'Player_email' => $this->faker->safeEmail(),
            'Player_phone' => $this->faker->phoneNumber(),
            'Player_photo' => $this->faker->name(),
            'Player_age' => $this->faker->numberBetween($min = 15, $max = 40),
            'Player_number' => $this->faker->numberBetween($min = 1, $max = 20),
            'Player_position' => $this->faker->randomElement(['Alero','cierre','pivot','arquero']),
            'team_id' => $this->faker->numberBetween($min = 1, $max = 10),
        ];
    }
}
