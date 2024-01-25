<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-1 years');
        return [
            'UserID' => $this->faker->randomElement([8, 9, 10, 11]),
            'BoardID' =>  $this->faker->numberBetween(301, 606),
            'CommentContent' => $this->faker->realText(200),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
