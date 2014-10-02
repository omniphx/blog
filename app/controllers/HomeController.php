<?php

use Blog\Newsletters\NewsletterList;

class HomeController extends BaseController {

	/**
	 * Post Model
	 * @var Post
	 */
	protected $post;

	/**
	 * Author Model
	 * @var Author
	 */
	protected $author;

	/**
	 * Type Model
	 * @var Type
	 */
	protected $type;

	/**
	 * Inject the models.
	 * @param Post    $post     
	 * @param Comment $comment 
	 */
	public function __construct(Post $post, Author $author, Type $type) {
		$this->post   = $post;
		$this->author = $author;
		$this->type   = $type;
	}

	public function index()
	{
		$posts = $this->post->published()->orderBy('created_at', 'DESC')->paginate(10);

		return View::make('home.index', compact('posts'));
	}

	public function about()
	{
		return View::make('home.about', compact('tags'));
	}

	public function services()
	{
		return View::make('home.services', compact('tags'));
	}

	public function contact()
	{
		return View::make('home.contact', compact('tags'));
	}

	public function dashboard()
	{
		$posts = $this->post->orderBy('created_at', 'DESC')->get();
		$authors = $this->author->orderBy('created_at', 'DESC')->get();
		$types = $this->type->orderBy('created_at', 'DESC')->get();

		return View::make('home.dashboard', compact('posts','authors','types'));
	}

}
