<?php namespace Blog\Notifications;

use Illuminate\Support\ServiceProvider;

class NewsletterListServiceProvider extends ServiceProvider {


	public function register()
	{
		$this->app->bind(
			'Blog\Notifications\PostPublished',
			'Blog\Notifications\Mailchimp\PostPublished'
		);
	}

}