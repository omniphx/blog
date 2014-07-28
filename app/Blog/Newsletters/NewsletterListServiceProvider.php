<?php namespace Blog\Newsletters;

use Illuminate\Support\ServiceProvider;

class NewsletterListServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Blog\Newsletters\NewsletterList',
			'Blog\Newsletters\Mailchimp\NewsletterList'
		);
	}

}