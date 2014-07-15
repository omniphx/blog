<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Comment::create([
				'name'    => $faker->name(),
				'body'    => $faker->paragraph($nbSentences = 2),
				'post_id' => $faker->randomNumber(0, 10)
			]);
		}
	}

}