<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('office_times')->insert([
            'in_time' => '09:00:00',
            'out_time' => '18:00:00'
        ]);
    }
}
