<?php

class TypesController extends \BaseController {

	/**
	 * Type Model
	 * @var Type
	 */
	protected $type;

	/**
	 * Inject the models
	 * @param Type $type
	 * @param Tag  $tag    
	 */
	public function __construct(Type $type)
	{
		$this->type = $type;
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
		return View::make('types.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /types
	 *
	 * @return Response
	 */
	public function store()
	{
		$type = Input::get();

		$this->type->create($type);
		
		return Redirect::to('dashboard');
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
		$type = $this->type->findSlug($slug);

		$posts = $type->posts()->paginate(10);
		$tags = $this->tag->all();

		return View::make('types.show', compact('type', 'posts'));
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
		//Not needed since all editing is done on the dashboard.
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
		$type = Type::findOrFail($id);
		$type->fill(Input::all());
		$type->save();

		return Redirect::to('dashboard');
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
		$this->type->destroy($id);

		return Redirect::to('dashboard');
	}

}