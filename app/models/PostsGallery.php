<?php

class PostsGallery extends \Eloquent {
	protected $fillable = ['filename', 'post_id'];
	protected $table = 'posts_gallery';
	public static $rules = [
		'filename' => 'image|max:2000|mimes:jpeg,jpg,bmp,png',
		'post_id' => 'integer'
	];

	public function posts()
	{
		return $this->belongsTo('Posts', 'id');
	}
}