<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassLanguage;

class ClassLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassLanguage::create([
            'ClassLanguageName' => 'HTML'
        ]);

        ClassLanguage::create([
            'ClassLanguageName' => 'CSS'
        ]);

        ClassLanguage::create([
            'ClassLanguageName' => 'JavaScript'
        ]);

        ClassLanguage::create([
            'ClassLanguageName' => 'PHP'
        ]);

        ClassLanguage::create([
            'ClassLanguageName' => 'JAVA'
        ]);

        ClassLanguage::create([
            'ClassLanguageName' => 'DataBase'
        ]);
    }
}
