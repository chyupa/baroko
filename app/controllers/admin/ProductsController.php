<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$products = Products::all();

		return View::make('admin.products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$categories = Categories::where('parent', '<>', 0)->lists('name', 'id');
		$ext = ['m'=>'m', 'buc'=>'buc', 'punga'=>'punga'];
		return View::make('admin.products.create', compact('categories', 'ext'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$data = [
			'name' => Input::get('name'),
			'categ_id' => Input::get('categ_id'),
			'price' => Input::get('price'),
			'ext' => Input::get('ext'),
			'description' => Input::get('description'),
		];

		//this is how we know which checkboxes are checked
		if( Input::get('featured') == '1' )
		{
			$data['featured'] = 1;
		}

		if( Input::get('outlet') == '1' )
		{
			$data['outlet'] = 1;
			$data['cant_outlet'] = Input::get('cant_outlet');
		}

		if( Input::get('public') == '1' )
		{
			$data['public'] = 1;
		}

		dd(Input::all());

		$validator = Validator::make($data, Products::$rules);
		if( $validator->fails() )
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		Products::create($data);
		return Redirect::route('admin.products.index');
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
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
	 * GET /products/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$product = Products::find($id);
		$ext = ['m'=>'m', 'buc'=>'buc', 'punga'=>'punga'];
		$categories = Categories::where('parent', '<>', 0)->lists('name', 'id');
		return View::make('admin.products.edit', compact('product', 'ext', 'categories'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$data = [
			'name' => Input::get('name'),
			'categ_id' => Input::get('categ_id'),
			'price' => Input::get('price'),
			'ext' => Input::get('ext'),
			'description' => Input::get('description'),
		];

		//this is how we know which checkboxes are checked
		if( Input::get('featured') == '1' )
		{
			$data['featured'] = 1;
		}

		if( Input::get('outlet') == '1' )
		{
			$data['outlet'] = 1;
			$data['cant_outlet'] = Input::get('cant_outlet');
		}

		if( Input::get('public') == '1' )
		{
			$data['public'] = 1;
		}

		if( Input::get('image') )
		{
			$fileValidator = Validator::make( array( 'filename'=>Input::get('image') ), Gallery::$rules );
			// dd($fileValidator->errors());
			if( $fileValidator->fails() )
			{
				return Redirect::back()->withInput()->withErrors($fileValidator);
			}
		}

		// dd('asd');
		$validator = Validator::make($data, Products::$rules);
		if( $validator->fails() )
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$product = Products::findOrFail($id);
		$product->update($data);
		return Redirect::route('admin.products.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}