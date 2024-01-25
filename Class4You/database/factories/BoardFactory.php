<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Board;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Board>
 */
class BoardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 years');
        // return [
        //     'BoardCategotyID' => 1,
        //     'UserID' => $this->faker->randomElement([8, 9, 10, 11]),
        //     'ClassID' => null,
        //     'BoardTitle' => $this->faker->realText(50),
        //     'BoardComment' => $this->faker->realText(500),
        //     'BoardView' => $this->faker->randomNumber(2),
        //     'BoardRecommended' => $this->faker->randomNumber(2),
        //     'BoardNotRecommended' => $this->faker->randomNumber(2),
        //     'created_at' => $date,
        //     'updated_at' => $date,
        // ];

        return [
            'BoardCategoryID' => 2,
            'UserID' => $this->faker->randomElement([8, 9, 10, 11]),
            'ClassID' => null,
            'BoardTitle' => $this->faker->realText(50),
            'BoardComment' => $this->faker->realText(500),
            'BoardView' => $this->faker->randomNumber(2),
            'BoardRecommended' => $this->faker->randomNumber(2),
            'BoardNotRecommended' => $this->faker->randomNumber(2),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
