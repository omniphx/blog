<?php

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class CreateUsers extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'users:create';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create a new admin user.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		$email = $this->ask('Email:');
			
		$password = $this->secret('Password:');

		User::create([
			'username' => $email,
			'email' => $email,
			'password' => Hash::make($password)
		]);
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	// protected function getArguments()
	// {
	// 	return array(
	// 		array('example', InputArgument::REQUIRED, 'An example argument.'),
	// 	);
	// }

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array(
			array('example', null, InputOption::VALUE_OPTIONAL, 'An example option.', null),
		);
	}

}
