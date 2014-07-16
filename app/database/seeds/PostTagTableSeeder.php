<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTagTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		$post_tag = array();

		foreach(range(1, 30) as $index)
		{
			$row = array(
				'post_id' => $faker->randomNumber(0, 10),
				'tag_id' => $faker->randomNumber(0, 10),
				'created_at' => new DateTime,
				'updated_at' => new DateTime
			);

			array_push($post_tag, $row);
		}

		DB::table('post_tag')->insert($post_tag);
	}



}