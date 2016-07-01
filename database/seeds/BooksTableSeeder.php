<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
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
        while ($i < 100) {
            \App\Book::create([
                'book_name' => $faker->lastName,
                'author' => $faker->name,
                'publisher' => $faker->company,
                'subject_id' => rand(1, 7),
                'department_id' => rand(1, 7),
                'file_name' => sha1(rand(1111, 9999))
            ]);
            $i++;
        }
    }
}
