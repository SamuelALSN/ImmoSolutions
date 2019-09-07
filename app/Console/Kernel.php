<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Notification;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->call(function () {
            $reservations = DB::table('reserver')->get();
            if (count($reservations) > 0) {
                foreach ($reservations as $reservation) {
                    // $to = \Carbon\Carbon::createFromFormat('Y-m-d', $reservation->notification_at);
                    //$from = \Carbon\Carbon::createFromFormat('Y-m-d', $reservation->confirm_at);
                    //$diff_in_days = $to->diffInDays($from);
                    if (!empty($reservation->visite_at) and (!empty($reservation->notification_at))) {
                        if (empty($reservation->confirm_at) or ($reservation->status == 0)) {
                            //$reservation->notification_at =null;
                            DB::table('reserver')
                                ->update([
                                    'confirm_at' => null,
                                    'disalow' => 1,
                                ]);
                        }
                    }
                }
            }

        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
