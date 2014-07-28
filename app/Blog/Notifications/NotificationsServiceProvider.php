<?php namespace Blog\Notifications;

use Illuminate\Support\ServiceProvider;

class NotificationsServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Blog\Notifications\PostPublished',
			'Blog\Notifications\Mailchimp\PostPublished'
		);
	}

}