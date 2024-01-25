<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\UserStatus;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            // 정지 기간이 지난 경우 UserStatus를 0으로 업데이트
            $updatedUserStatus = UserStatus::where('UserStatus', '1')
                ->where('SuspendedUntil', '<=', now())
                ->update(['UserStatus' => '0']);

            // 업데이트된 UserStatus의 해당하는 User ID를 가져옴
            $userIdsToUpdate = UserStatus::where('UserStatus', '0')
                ->pluck('UserID');

            User::whereIn('UserID', $userIdsToUpdate)
                ->update(['UserState' => '0']);
            
        })->everyMinute(); 
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
