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

		$this->call('TypesTableSeeder');
		$this->call('AuthorsTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('UsersTableSeeder');
	}

}
