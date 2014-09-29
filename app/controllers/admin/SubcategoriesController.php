<?php

class SubcategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /subcategories
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$subcategories = Categories::where('parent', '!=', 0)->get();
		// dd('a');
		return View::make('admin.subcategories.index', compact('subcategories'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /subcategories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$categories = Categories::where('parent', '=' ,0)->lists('name', 'id');
		$subcategory = new StdClass;
		$subcategory->parent = null;
		// dd($categories);
		return View::make('admin.subcategories.create', compact('categories', 'subcategory'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /subcategories
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$data = [
			'name' => Input::get('name'),
			'parent' => Input::get('parent')
		];

		// dd($data);

		$validator = Validator::make( $data, Subcategories::$rules );
		if( $validator->fails() )
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		Categories::create($data);
		return Redirect::route('admin.subcategories.index');
	}

	/**
	 * Display the specified resource.
	 * GET /subcategories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /subcategories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$categories = Categories::where('parent', '=' ,0)->lists('name', 'id');
		$subcategory = Categories::find($id);
		return View::make('admin.subcategories.edit', compact('subcategory', 'categories'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /subcategories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$data = [
			'name' => Input::get('name'),
			'parent' => Input::get('parent')
		];
		$subcategory = Categories::findOrFail($id);
		$validator = Validator::make($data, Subcategories::$rules);

		if( $validator->fails() )
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$subcategory->update($data);
		return Redirect::route('admin.subcategories.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /subcategories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Categories::destroy($id);
		return Redirect::route('admin.subcategories.index');
	}

}