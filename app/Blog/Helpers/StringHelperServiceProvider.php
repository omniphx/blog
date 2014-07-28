<?php namespace Blog\Helpers;

use Illuminate\Support\ServiceProvider;

class StringHelperServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'stringhelper',
			'Blog\Helpers\StringHelper'
		);
	}

}