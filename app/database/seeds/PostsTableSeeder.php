<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 50) as $index)
		{
			Post::create([
				'title' => $faker->sentence(),
				'body' => $faker->paragraph($nbSentences = 15),
				'author_id' => $faker->randomNumber(1, 10),
				'created_at' => $faker->dateTime($max = 'now')
			]);
		}
	}

}