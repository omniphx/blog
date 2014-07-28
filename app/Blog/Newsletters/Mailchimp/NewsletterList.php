<?php namespace Blog\Newsletters\Mailchimp;

use Blog\Newsletters\NewsletterList as NewsletterListInterface;
use Mailchimp;

class NewsletterList implements NewsletterListInterface {

	/**
	 * @var Mailchimp
	 */
	protected $mailchimp;

	protected $lists = [
		'PostNotification' => '3122ca9925'
	];

	/**
	 * @param Mailchimp $mailchimp
	 */
	function __construct(Mailchimp $mailchimp)
	{
		$this->mailchimp = $mailchimp;
	}

	/**
	 * Subscribe a user to a Mailchimp list.
	 * @param  $list
	 * @param  $email
	 * @return mixed
	 */
	public function subscribeTo($listName, $email)
	{
		$this->mailchimp->lists->subscribe(
			// Config('apikeys')['MAILCHIMP_APIKEY'],
			$this->lists[$listName],
			['email' => $email],
			null, //merge_var
			'html', //email type
			false, //require double opt-in
			true //update existing customers
		);
	}

	/**
	 * Unsubscribe a user from a Mailchimp list.
	 * @param  $list
	 * @param  $email
	 * @return mixed
	 */
	public function unscribeFrom($list, $email)
	{
		$this->mailchimp->lists->unsubscribe(
			$this->lists[$listName],
			['email' => $email],
			false, //delete member permanently
			false, //send goodbye email?
			false //send an unsubscribe email
		);
	}
}