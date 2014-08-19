<?php namespace Blog\Lists;

use Illuminate\Support\ServiceProvider;

class SubscriptionListServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind(
			'Blog\Lists\ListInterface',
			'Blog\Lists\Mailchimp\SubscriptionList'
		);
	}

}