<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enrollment;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userIds = range(1, 50000);

        // 시더를 돌릴 클래스 아이디 범위
        $classIds = range(1, 216);

        // 랜덤하게 배열에서 값을 추출하여 생성
        foreach ($userIds as $userId) {
            Enrollment::create([
                'UserID' => $userId,
                'ClassID' => $classIds[array_rand($classIds)],
            ]);
        }
    }
}
