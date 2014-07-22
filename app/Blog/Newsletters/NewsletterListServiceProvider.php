<?php namespace Blog\Newletters;

use Illuminate\Support\ServiceProvider;

class NewsletterListServiceProvider extends ServiceProvider {


	public function register()
	{
		$this->app->bind(
			'Blog\Newletters\NewsletterList',
			'Blog\Newletters\Mailchimp\NewsletterList'
		);
	}

}