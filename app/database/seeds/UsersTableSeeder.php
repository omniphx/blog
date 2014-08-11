<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		User::create([
			'username' => 'mattjmitchener@gmail.com',
			'email' => 'mattjmitchener@gmail.com',
			'password' => Hash::make('1234')
		]);
	}

}