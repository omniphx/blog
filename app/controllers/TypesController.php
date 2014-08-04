<?php

class TypesController extends \BaseController {

	/**
	 * Tag Model
	 * @var Tag
	 */
	protected $tag;

	/**
	 * Inject the models
	 * @param Tag    $tag    
	 */
	public function __construct(Tag $tag)
	{
		$this->tag = $tag;
	}

	/**
	 * Display a listing of the resource.
	 * GET /types
	 *
	 * @return Response
	 */
	public function index()
	{
		$types = $this->type->all();

		return View::make('types.index',compact('types'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /types/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /types
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /types/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug)
	{
		$type = $this->type->where('slug', '=', $slug)->first();

		$posts = $type->posts()->paginate(10);
		$tags = $this->tag->all();

		return View::make('types.show', compact('type', 'tags', 'posts'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /types/{id}/edit
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
	 * PUT /types/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /types/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}