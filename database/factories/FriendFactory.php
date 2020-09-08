<?php

namespace Database\Factories;

use App\Models\Friend;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker;

class FriendFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Friend::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker\Factory::create();
        return [
            'name'=>$faker->name,
            'phone'=>$faker->phoneNumber,
            'email'=>$faker->email,
            'mood'=>'sad'
        ];
    }
}
