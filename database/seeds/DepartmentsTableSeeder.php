<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = ['Physics', 'Chemistry', 'Mathematics', 'Bengali', 'English', 'History', 'Geography'];

        foreach ($departments as $department)
            \App\Department::create([
                'department_name' => $department
            ]);
    }
}
