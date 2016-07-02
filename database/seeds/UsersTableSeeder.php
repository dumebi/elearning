<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $i = 0;
        \App\User::create([
            'name' => 'Sarnodeep Agarwalla',
            'email' => 'example@admin.com',
            'password' => bcrypt('secret'),
            'department_id' => rand(1, 7),
            'roll_no' => time() . rand(10000, 99999),
            'dob' => rand(1988, 1997) . '-' . rand(1, 12) . '-' . rand(1, 30),
            'phone' => '9475131965'
        ]);
        while ($i < 50) {
            \App\User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->email,
                'password' => bcrypt('secret'),
                'department_id' => rand(1, 7),
                'roll_no' => time() . rand(10000, 99999),
                'dob' => rand(1988, 1997) . '-' . rand(1, 12) . '-' . rand(1, 30),
                'phone' => rand(7, 9) . rand(0, 9) . rand(10000000, 99999999)
            ]);
            $i++;
        }
    }
}
