<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BoardLanguagelink;
use Faker\Factory as Faker;
class BoardLanguagelinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 5000; $i++) {
            $board = $faker->numberBetween(1, 10633);
            $HTML = $faker->numberBetween(0, 1);
            $CSS = $faker->numberBetween(0, 1);
            $JavaScript = $faker->numberBetween(0, 1);
            $PHP = $faker->numberBetween(0, 1);
            $JAVA = $faker->numberBetween(0, 1);
            $DataBase = $faker->numberBetween(0, 1);
        
            BoardLanguagelink::create([
                'BoardID' => $board,
                'HTMLFlg' => $HTML,
                'CSSFlg' => $CSS,
                'JavaScriptFlg' => $JavaScript,
                'PHPFlg' => $PHP,
                'JAVAFlg' => $JAVA,
                'DataBaseFlg' => $DataBase,
            ]);
        }
    }
}
