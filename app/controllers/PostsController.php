<?php

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
			? $this->post->published()->search($query)->orderBy('created_at', 'DESC')->paginate(10)
			: $this->post->published()->orderBy('created_at', 'DESC')->paginate(10);

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
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		
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

		return Redirect::to("post/{$post->slug}");
		
	}

	public function publish($id)
	{
		$post = Post::find($id);
		$post->published = 1;
		$post->save();

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