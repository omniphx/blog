<?php namespace Blog\Handlers;

use Blog\Lists\ListInterface;

class SubscribeEventHandler{

	protected $subscriptionList;

	public function __construct(ListInterface $subscriptionList)
	{
		$this->subscriptionList = $subscriptionList;
	}

	public function onSubscribe($email)
	{
		$this->subscriptionList->subscribeTo('Subscription', $email);
	}

	public function subscribe($events)
	{
		$events->listen('subscribe.subscription', '\Blog\Handlers\SubscribeEventHandler@onSubscribe');
	}
}