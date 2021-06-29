<?php

namespace Database\Factories;

use App\Models\Blood;
use Illuminate\Database\Eloquent\Factories\Factory;

class BloodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Blood::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'age' => $this->faker->randomDigit(),
            'address' => $this->faker->address(),
            'mobile_number' => $this->faker->phoneNumber(),
            'blood_group' => $this->faker->word(),
        ];
    }
}
