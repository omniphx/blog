<?php namespace Blog\Handlers;

class PostEventHandler{
	
	public function onPublished($post){

		$mailchimp = new \Mailchimp();

		$postPublished = new \Blog\Notifications\Mailchimp\PostPublished($mailchimp);

		$title = $post['title'];
		$body = $post['body'];

		// dd($postPublished);

		return $postPublished->notify($title,$body);

	}

	public function subscribe($events)
	{
		$events->listen('post.publish', '\Blog\Handlers\PostEventHandler@onPublished');
	}
}