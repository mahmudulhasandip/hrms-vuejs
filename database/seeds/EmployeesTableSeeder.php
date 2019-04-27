<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // DB::table('employees')->insert([
        //     'fname' => 'Md. Mahmudul Hasan',
        //     'lname' => 'Dip',
        //     'email' => 'ablaze.dip@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'gender' => 'male',
        //     'date_of_birth' => '1991-04-10',
        //     'current_address' => 'Mohammadpur, Dhaka',
        //     'permanent_address' => 'Shalbon, Rangpur',
        //     'city' => 'Dhaka',
        //     'country' => 'Bangladesh',
        //     'nationality' => 'Bangladeshi',
        //     'nid' => '19948524910000068',
        //     'phone' => '01737849573',
        //     'role_id' => '3',
        //     'marital_status' => 'unmarried',
        //     'father_name' => '(late) Md. Abdul Mannan',
        //     'mother_name' => 'Mst. Dilruba Akter',
        //     'linkedin' => 'https://linkedin.com/in/mahmudulhasandip/',
        //     'dp' => 'https://linkedin.com/in/mahmudulhasandip/',
        //     'salary' => '22000',
        //     'leave' => '12',
        // ]);
    }
}
