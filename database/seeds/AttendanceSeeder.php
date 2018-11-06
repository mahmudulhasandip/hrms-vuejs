<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendances')->insert([
            'employee_id' => '1',
            'in_time' => '09:00',
            'created_at' => date('Y-m-d').' 09:00:00'
        ]);
    }
}
