<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassDiffiBanner;

class ClassDiffiBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassDiffiBanner::create([
            'ClassDiffiBanner' => 'img/DiffiBanner/DiffiBanner1.png'
        ]);

        ClassDiffiBanner::create([
            'ClassDiffiBanner' => 'img/DiffiBanner/DiffiBanner2.png'
        ]);

        ClassDiffiBanner::create([
            'ClassDiffiBanner' => 'img/DiffiBanner/DiffiBanner3.png'
        ]);

        ClassDiffiBanner::create([
            'ClassDiffiBanner' => 'img/DiffiBanner/DiffiBanner4.png'
        ]);

    }
}
