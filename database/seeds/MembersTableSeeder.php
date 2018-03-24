<?php

use Illuminate\Database\Seeder;

class MembersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i = 0; $i < 200; $i++) {
            App\Members::create([
                'title' => $faker->title,
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'email' => $faker->email
            ]);
        }
    }
}
