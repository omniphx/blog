<?php

class PostsController extends \BaseController {

	/**
	 * Post Model
	 * @var Post
	 */
	protected $post;

	/**
	 * Tag Model
	 * @var Tag
	 */
	protected $tag;

	/**
	 * Inject the models
	 * @param Post $post
	 * @param Tag  $tag
	 */
	public function __construct(Post $post, Tag $tag)
	{
		$this->post = $post;
		$this->tag = $tag;
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
			? $this->post->search($query)->orderBy('created_at', 'DESC')->paginate(10)
			: $this->post->published()->orderBy('created_at', 'DESC')->paginate(10);

		$tags = $this->tag->all();

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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /posts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		$post = $this->post->findSlug($slug);
		$tags = $this->tag->all();

		return View::make('posts.show', compact('post', 'tags'));
	}

	public function preview($slug)
	{
		return 'preview';
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

		return View::make('posts.edit', compact('post'));

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

		return Redirect::to("/post/{$post->slug}");
		
	}

	public function publish($id)
	{
		return 'published';
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
		//
	}

}