<?php

// Composer: "fzaninotto/faker": "v1.4.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
User::unguard();
		foreach(range(1, 10) as $index)
		{
			User::create([
                'email'=>$faker->email,
                'firstname'=>$faker->firstName,
                'lastname'=>$faker->lastName,
                'password'=>Hash::make($faker->word),

			]);
		}
	}

}
