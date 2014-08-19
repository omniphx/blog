<?php namespace Blog\Handlers;

class NewsletterEventHandler{

	public function onSubscribeToNewsletter($email)
	{
		$mailchimp = new \Mailchimp();

		$newsletterlist = new \Blog\Newsletters\Mailchimp\NewsLetterList($mailchimp);

		$newsletterlist->subscribeTo('PostNotification', $email);
	}

	public function subscribe($events)
	{
		$events->listen('newsletter.subscribe', '\Blog\Handlers\NewsletterEventHandler@onSubscribeToNewsletter');
	}
}