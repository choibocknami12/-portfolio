<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Review;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $date = $this->faker->dateTimeBetween('-15 days', '+19 days');
        return [
            'EnrollmentID' => $this->faker->numberBetween(1, 97),
            'ReviewComment' => $this->faker->realText(200),
            'ReviewRating' => $this->faker->randomElement([1, 1.5, 2, 2.5, 3, 3.5, 4, 4.5, 5]),
            'created_at' => $date,
            'updated_at' => $date,
        ];
    }
}
