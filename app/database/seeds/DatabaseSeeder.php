<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PostsTableSeeder');
		$this->call('TypesTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('PostTagTableSeeder');
		$this->call('AuthorsTableSeeder');
	}

}
