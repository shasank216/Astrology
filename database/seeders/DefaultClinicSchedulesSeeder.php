<?php

namespace Database\Seeders;

use App\Models\ClinicSchedule;
use Illuminate\Database\Seeder;

class DefaultClinicSchedulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clinicScheduleExist = ClinicSchedule::first();

        if (! $clinicScheduleExist) {
            for ($i = 1; $i <= 8; $i++) {
                ClinicSchedule::create([
                    'day_of_week' => ($i == 8) ? 0 : $i,
                    'start_time' => '12:00 AM',
                    'end_time' => '11:45 PM',
                ]);
            }
        }
    }
}
