<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClassCategory;

class ClassCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClassCategory::create([
            'CategoryName' => '프로그래밍 언어'
        ]);

        ClassCategory::create([
            'CategoryName' => '협업 툴'
        ]);
    }
}
