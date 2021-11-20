<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'first_name'=>$this->faker->name,
            'last_name'=>$this->faker->name,
            'date_of_birth'=>$this->faker->date,
            'address'=>$this->faker->name,
            'grade_id'=>1,
            'phone_id'=>1
        ];
    }
}
