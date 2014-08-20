<?php

class AuthorsController extends \BaseController {

	/**
	 * Author Model
	 * @var Author
	 */
	protected $author;

	/**
	 * Tag Model
	 * @var Tag
	 */
	protected $tag;

	/**
	 * Inject the models
	 * @param Author $author 
	 * @param Tag    $tag    
	 */
	public function __construct(Author $author, Tag $tag)
	{
		$this->author = $author;
		$this->tag = $tag;
	}

	/**
	 * Display a listing of the resource.
	 * GET /authors
	 *
	 * @return Response
	 */
	public function index()
	{
		$authors = $this->author->all();
		$tags = $this->tag->all();

		return View::make('authors.index', compact('authors','tags'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /authors/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('authors.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /authors
	 *
	 * @return Response
	 */
	public function store()
	{
		$author = Input::get();

		$this->author->create($author);
		
		return Redirect::to('dashboard');
	}

	/**
	 * Display the specified resource.
	 * GET /authors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$author = $this->author->findSlug($slug);
		$tags = $this->tag->all();
		$posts = $author->posts()->paginate(10);

		return View::make('authors.show', compact('author','tags', 'posts'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /authors/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /authors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$author = Author::findOrFail($id);
		$author->fill(Input::all());
		$author->save();

		return Redirect::to('dashboard');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /authors/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->author->destroy($id);

		return Redirect::to('dashboard');
	}

}