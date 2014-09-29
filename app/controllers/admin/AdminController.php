<?php

class AdminController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /admin
	 *
	 * @return Response
	 */
	public function getLogin()
	{
		return View::make('admin/login');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /admin/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /admin
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /admin/{id}
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
	 * GET /admin/{id}/edit
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
	 * PUT /admin/{id}
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
	 * DELETE /admin/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function postLogin()
	{
		$credentials = [
			'username' => Input::get('username'),
			'password' => Input::get('password')
		];
		
		$validator = Validator::make($credentials, User::$auth_rules);

		if( $validator->fails() )
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if( Auth::attempt($credentials) )
		{
			return Redirect::intended('admin/dashboard');
		}
		
		return Redirect::route('admin.get.login');
	}
	

	public function getDashboard()
	{
		return View::make('admin/dashboard');
	}


	public function logout()
	{
		Auth::logout();
		return Redirect::route('admin.get.login');
	}

}