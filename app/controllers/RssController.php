<?php

class RssController extends \BaseController {

	/**
	 * Post model
	 * @var Post
	 */
	protected $post;

	/**
	 * Inject the models
	 * @param Post $post
	 */
	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	/**
	 * Display a listing of the resource.
	 * GET /rsses
	 *
	 * @return Response
	 */
	public function index()
	{
		$data['posts'] = $this->post->orderBy('created_at', 'DESC')->get();

		return Response::view('rss.index', $data)->header('Content-Type', 'application/atom+xml; charset=UTF-8');

	}

}