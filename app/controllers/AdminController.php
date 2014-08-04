<?php

class AdminController extends \BaseController {

	protected $posts;

	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	public function unpublished()
	{
		$posts = $this->post->get();

		return View::make('admin.unpublished', compact('posts'));
	}

}