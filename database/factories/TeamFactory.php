<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Team_name' => $this->faker->name(),
            'Team_manager' => $this->faker->name(),
            'Team_phone' => $this->faker->phoneNumber(),
            'Team_email' => $this->faker->safeEmail(),
            'Team_neighborhood' => $this->faker->streetName(),
            'Team_shield' => $this->faker->name(),
        ];
    }
}
