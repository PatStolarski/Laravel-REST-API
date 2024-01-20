<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' =>$this->faker->lastName(),
            'tel_nr'=>$this->faker->phoneNumber(),
            'street'=>$this->faker->address(),
            'city'=>$this->faker->city(),
            'country'=>$this->faker->country()
        ];
    }
}
