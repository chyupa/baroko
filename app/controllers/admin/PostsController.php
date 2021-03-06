<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /posts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$posts = Posts::with('postsgallery')->get();
		return View::make('admin.posts.index', compact('posts'));
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
		return View::make('admin.posts.create');
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
		$data = Input::except('_token');
		
		$validator = Validator::make($data, Posts::$rules);
		if( $validator->fails() )
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$post = Posts::create($data);

		if( Input::has('filename') )
		{
			$fileValidator = Validator::make( array('filename' => Input::file('filename')), PostsGallery::$rules );
			if( $fileValidator->fails() )
			{
				return Redirect::back()->withInput()->withErrors($fileValidator);
			}
			$file = Input::file('filename');
			$extension = $file->getClientOriginalExtension();
			$filename = Str::quickRandom($length = 16).time().".{$extension}";

			

			$path = public_path()."/uploads/posts/".$post->id."/";
			try
			{
				$move = $file->move($path, $filename);
			}
			catch(Exception $e)
			{
				Log::error($e->getMessage());
			}

			PostsGallery::create([
				'filename' => $filename,
				'post_id' => $post->id
			]);
		}

		return Redirect::route('admin.posts.index');
	}

	/**
	 * Display the specified resource.
	 * GET /posts/{id}
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
	 * GET /posts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$post = Posts::find($id)->with('postsgallery')->first();
		return View::make('admin.posts.edit', compact('post'));
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
		//
		$data = Input::except('_token', '_method');
		dd($data);
		if( Input::has('filename') )
		{
			$fileValidator = Validator::make($data, PostsGallery::$rules);
			if( $fileValidator->fails() )
			{
				return Redirect::back()->withInput()->withErrors($fileValidator);
			}
		}

		$validator = Validator::make($data, Posts::$rules);
		if( $validator->fails() )
		{
			return Redirect::back()->withInput()->withErrors($validator);
		}

		$post = Posts::findOrFail($id);
		$post->update($data);
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