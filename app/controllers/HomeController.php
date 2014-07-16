<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

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
	 * Inject the models.
	 * @param Post    $post     
	 * @param Comment $comment 
	 */
	public function __construct(Post $post, Comment $comment, Tag $tag) {
		$this->post = $post;
		$this->comment = $comment;
		$this->tag = $tag;
	}

	public function index()
	{
		$posts = $this->post->orderBy('created_at', 'DESC')->paginate(10);
		$tags = $this->tag->all();

		return View::make('home.index', compact('posts','tags'));
	}

}
