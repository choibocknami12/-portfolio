<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\BoardRatingState;

class BoardRatingStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50000; $i++) {
            $board = $faker->numberBetween(1, 2272);
            $user = $faker->numberBetween(1, 50000);
            $rating = $faker->numberBetween(-1, 1);
        
            
            BoardRatingState::create([
                'BoardID' => $board,
                'UserID' => $user,
                'BoardRating' => $rating,
            ]);
        }
    }

    
}
