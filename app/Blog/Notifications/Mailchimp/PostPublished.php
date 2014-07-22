<?php namespace Blog\Notifications\Mailchimp;

use Blog\Notifications\PostPublished as PostPublishedInterface;
use Mailchimp;

class PostPublished implements PostPublishedInterface {

	/**
	 * List Id
	 */
	const POST_SUBSCRIBERS_ID = '3122ca9925';

	/**
	 * @var Mailchimp
	 */
	protected $mailchimp;

	/**
	 * @param Mailchimp $mailchimp
	 */
	function __construct(Mailchimp $mailchimp)
	{
		$this->mailchimp;
	}

	/**
	 * @param $title 
	 * @param $body  
	 * @return mixed
	 */
	public function notify($title, $body)
	{
		$options = [
			'list_id'    => self::POST_SUBSCRIBERS_ID,
			'subject'    => 'New post: ' . $title,
			'from_name'  => 'Matt Mitchener',
			'from_email' => 'mattjmitchener@gamil.com',
			'to_name'    => 'Blog subscriber'
		];

		$content = [
			'html' => $body,
			'text' => string_tags($body)
		];
		
		$campaign = $this->mailchimp->campaigns->create('regular', $options, $content);

		$this->mailchimp->campaigns->send($campaign['id']);
	}

}