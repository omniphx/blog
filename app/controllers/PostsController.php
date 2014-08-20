<?php

use Carbon\Carbon;

class PostsController extends \BaseController {

	/**
	 * Post Model
	 * @var Post
	 */
	protected $post;

	/**
	 * Inject the models
	 * @param Post $post
	 * @param Type $type
	 */
	public function __construct(Post $post)
	{
		$this->post = $post;
	}

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$query = Request::get('q');

		$posts = $query
			? $this->post->published()->search($query)->orderBy('published_at', 'DESC')->paginate(10)
			: $this->post->published()->orderBy('published_at', 'DESC')->paginate(10);

		return View::make('posts.index', compact('posts','query'));

	}

	/**
	 * Show the form for creating a new resource.
	 * GET /posts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$types = DB::table('types')->lists('name','id');
		$authors = DB::table('authors')->lists('name','id');

		return View::make('posts.create', compact('types','authors'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = Input::get();

		$this->post->create($post);
		
		return Redirect::to('dashboard');
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$post = $this->post->published()->findSlug($slug);

		return View::make('posts.show', compact('post'));
	}

	public function preview($id)
	{
		$post = $this->post->find($id);

		return View::make('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = $this->post->find($id);
		
		$types = DB::table('types')->lists('name','id');
		$authors = DB::table('authors')->lists('name','id');

		return View::make('posts.edit', compact('post','types','authors'));

	}

	/**
	 * Update the specified resource in storage.
	 * PUT /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);
		$post->fill(Input::all());
		$post->save();

		return Redirect::to("dashboard");
		
	}

	public function publish($id)
	{
		$post = Post::find($id);
		$this->post->publish($post);

		return Redirect::to('dashboard');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /posts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->post->destroy($id);

		return Redirect::to('dashboard');
	}

}