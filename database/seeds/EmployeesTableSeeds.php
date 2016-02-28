<?php

use Illuminate\Database\Seeder;
use App\Employee;
class EmployeesTableSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->delete();
        Employee::create(array(
            'name' =>'leontin',
            'email' => 'leontin@caliman.com',
            'contact_number' => '1234567890',
            'position' => 'boss'
        ));

        Employee::create(array(
            'name' =>'leontin1',
            'email' => 'leontin1@caliman.com',
            'contact_number' => '1234567890',
            'position' => 'boss'
        ));

        Employee::create(array(
            'name' =>'leontin2',
            'email' => 'leontin2@caliman.com',
            'contact_number' => '1234567890',
            'position' => 'boss'
        ));

        Employee::create(array(
            'name' =>'leontin3',
            'email' => 'leontin3@caliman.com',
            'contact_number' => '1234567890',
            'position' => 'boss'
        ));

    }
}
