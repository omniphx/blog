<?php

use Blog\Newsletters\NewsletterList;

class HomeController extends BaseController {

	/**
	 * Post Model
	 * @var Post
	 */
	protected $post;

	/**
	 * Comment Model
	 * @var Comment
	 */
	protected $comment;

	/**
	 * Tag Model
	 * @var Tag
	 */
	protected $tag;

	/**
	 * @var Newsletter
	 */
	protected $newsletterlist;

	/**
	 * Inject the models.
	 * @param Post    $post     
	 * @param Comment $comment 
	 */
	public function __construct(Post $post, Comment $comment, Tag $tag, NewsletterList $newsletterlist) {
		$this->post           = $post;
		$this->comment        = $comment;
		$this->tag            = $tag;
		$this->newsletterlist = $newsletterlist;
	}

	public function index()
	{
		$posts = $this->post->orderBy('created_at', 'DESC')->paginate(10);
		$tags = $this->tag->all();

		return View::make('home.index', compact('posts','tags'));
	}

	public function about()
	{
		$tags = $this->tag->all();

		return View::make('home.about', compact('tags'));
	}

	public function services()
	{
		$tags = $this->tag->all();

		return View::make('home.services', compact('tags'));
	}

	public function contact()
	{
		$tags = $this->tag->all();

		return View::make('home.contact', compact('tags'));
	}

	public function subscribe()
	{
		$email = Input::get('email');

		return Event::fire('newsletter.subscribe', [$email]);
	}

}
