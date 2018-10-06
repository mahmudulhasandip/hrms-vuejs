<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'name' => 'Admin',
            'email' => 'ablaze.dip@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
