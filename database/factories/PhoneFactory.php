<?php

namespace Database\Factories;

use App\Models\Phone;
use Faker\Factory as FakerFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Phone::class;
    public function definition()
    {
        return [
            'phone'=>$this->faker->e164PhoneNumber,
        ];
    }
}
