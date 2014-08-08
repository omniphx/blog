<?php

use Blog\Generators\Feed;

class FeedController extends \BaseController {

	/**
	 * Post model
	 * @var Post
	 */
	protected $post;

	/**
	 * Feed generator
	 * @var Feed
	 */
	protected $feed;

	/**
	 * Inject the dependencies
	 * @param Post $post
	 * @param Feed $feed
	 */
	public function __construct(Post $post, Feed $feed)
	{
		$this->post = $post;
		$this->feed = $feed;
	}

	/**
	 * Display a listing of the resource.
	 * GET /feed
	 *
	 * @return Response
	 */
	public function index()
	{
	    $posts = $this->post->published()->orderBy('created_at', 'DESC')->get();

	    return $this->feed->generate($posts);
	}

}