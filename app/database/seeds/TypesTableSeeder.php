<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class TypesTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$types = ['code','life','sfdc'];

		foreach(range(0, 2) as $index)
		{
			Type::create([
				'name' => $types[$index]
			]);
		}
	}

}