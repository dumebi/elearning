<?php

use Illuminate\Database\Seeder;

class SubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Subjects = ['Physics', 'Chemistry', 'Mathematics', 'Bengali', 'English', 'History', 'Geography'];

        foreach ($Subjects as $subject)
            \App\Subject::create([
                'subject_name' => $subject
            ]);
    }
}
