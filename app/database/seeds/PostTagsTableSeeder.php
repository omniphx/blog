<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTagsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			PostTag::create([
				'post_id' => $faker->randomNumber(0, 10),
				'tag_id' => $faker->randomNumber(0, 10)
			]);
		}
	}

}