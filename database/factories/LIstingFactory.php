<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LIstingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence(),
            'tags' => 'laravel, api, backend',
            'company' => $this->faker->name,
            'email' => $this->faker->email,
            'website' => $this->faker->url,
            'location' => $this->faker->city,
            'description' => $this->faker->paragraph(5),

        ];
    }
}
