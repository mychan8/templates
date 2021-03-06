<?php

namespace Database\Factories;

use App\Models\Myblog;
use Illuminate\Database\Eloquent\Factories\Factory;

class MyblogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Myblog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username' => $this->faker->unique()->colorName(),
            'password' => $this->faker->colorName(),
            'visitor' => $this->faker->ipv4(),
        ];
    }
}
