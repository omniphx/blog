<?php namespace Blog\Notifications;

interface PostPublished {

	/**
	 * @param $title 
	 * @param $body  
	 * @return mixed
	 */
	public function notify($title, $body);

}