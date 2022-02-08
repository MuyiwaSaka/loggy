<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'companyname' => $this->faker->name(),
            'companyemail' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'companyaddress' => $this->faker->address(),
             
        ];
    }
}
