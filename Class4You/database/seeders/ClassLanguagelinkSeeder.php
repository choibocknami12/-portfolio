<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassLanguagelink;


class ClassLanguagelinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cnt = 1;
        while($cnt <= 32) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 1
            ]);
            $cnt++;
        }

        $cnt = 1;
        while($cnt <= 32) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 2
            ]);
            $cnt++;
        }

        $cnt = 33;
        while($cnt <= 64) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 1
            ]);    
            $cnt++;
        }


        $cnt = 33;
        while($cnt <= 64) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 2
            ]);    
            $cnt++;
        }

        $cnt = 65;
        while($cnt <= 108) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 1
            ]);
            $cnt++;
        }

        $cnt = 65;
        while($cnt <= 108) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 2
            ]);
            $cnt++;
        }

        $cnt = 65;
        while($cnt <= 108) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 3
            ]);
            $cnt++;
        }

        $cnt = 109;
        while($cnt <= 136) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 4
            ]);
            $cnt++;
        }

        $cnt = 109;
        while($cnt <= 124) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 6
            ]);
            $cnt++;
        }

        $cnt = 137;
        while($cnt <= 172) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 5
            ]);
            $cnt++;
        }

        $cnt = 152;
        while($cnt <= 172) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 6
            ]);
            $cnt++;
        }

        $cnt = 173;
        while($cnt <= 216) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 6
            ]);
            $cnt++;
        }

        $cnt = 191;
        while($cnt <= 216) {
            ClassLanguagelink::create([
                'ClassID' => $cnt
                ,'ClassLanguageID' => 4
            ]);
            $cnt++;
        }

    }
}
