<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$types = ['code','life','sports','sfdc'];

		foreach(range(1, 50) as $index)
		{

			$randomNumber = $faker->randomNumber(0,3);

			Post::create([
				'title'      => $faker->sentence(),
				'excerpt'    => $faker->paragraph($nbSentences = 3),
				'body'       => $faker->paragraph($nbSentences = 15),
				'author_id'  => $faker->randomNumber(1, 10),
				'type'       => $types[$randomNumber],
				'published'  => $faker->randomNumber(0,1),
				'created_at' => $faker->dateTime($max = 'now')
			]);
		}
	}

}