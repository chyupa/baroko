<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /categories
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$categories = Categories::all();
		return View::make('admin.categories.index', compact('categories'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /categories/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return View::make('admin/categories/create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /categories
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$data = array(
			'name' => Input::get('name')
		);

		$validator = Validator::make($data, Categories::$rules);

		if( $validator->fails() )
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		Categories::create($data);
		
		return Redirect::route('admin.categories.index');
	}

	/**
	 * Display the specified resource.
	 * GET /categories/{id}
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
	 * GET /categories/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$category = Categories::find($id);
		return View::make('admin.categories.edit', compact('category'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$data = [
			'name' => Input::get('name')
		];
		$category = Categories::findOrFail($id);
		$validator = Validator::make( $data, Categories::$rules );

		if( $validator->fails() )
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$category->update($data);
		return Redirect::route('admin.categories.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /categories/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		Categories::destroy($id);
		return Redirect::route('admin.categories.index');
	}

}