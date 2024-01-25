<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\BoardCategory;

class BoardCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BoardCategory::create([
            'BoardCategoryName' => '자유게시판'
        ]);

        BoardCategory::create([
            'BoardCategoryName' => '질문게시판'
        ]);
    }
}
