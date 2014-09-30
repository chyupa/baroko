<?php

class GalleryController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /gallery
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /gallery/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /gallery
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /gallery/{id}
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
	 * GET /gallery/{id}/edit
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
	 * PUT /gallery/{id}
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
	 * DELETE /gallery/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		$data = Input::all();
		// dd($data);
		if( Request::ajax() )
		{
			$file = Gallery::findOrFail($data['photo_id']);
			$path = public_path() . '/uploads/' . $file->product_id . '/';
			$file_path = $path.$file->filename;
			// dd($file_path);
			$delete_file = File::delete($file_path);
			$delete_id = Gallery::destroy($data['photo_id']);
			if( $delete_file && $delete_id)
			{
				$result = [
					'success' => true,
					'msg' => 'Photo Deleted'
				];
				return Response::json($result);
			}
			else
			{
				$result = [
					'success' => true,
					'msg' => '#37 Something went wrong!'
				];
				return Response::json($result);
			}
		}
		
		// dd($directory);
		// File::deleteDirectory($directory);
		// Gallery::where('product_id', '=', $id)->delete();
		// return Redirect::back();
	}

}