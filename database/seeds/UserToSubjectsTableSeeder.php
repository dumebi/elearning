<?php

use Illuminate\Database\Seeder;

class UserToSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 51; $i++)
            for ($j = 0; $j < rand(3, 5); $j++)
                \App\UserToSubject::create([
                    'subject_id' => rand(1, 7),
                    'user_id' => $i
                ]);

    }
}
