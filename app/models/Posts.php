<?php

class Posts extends \Eloquent {
	protected $fillable = ['name', 'content', 'public', 'featured_image'];
	protected $table = 'posts';
	public static $rules = [
		'name' => 'required|unique:posts,name',
		'content' => 'required'
	];

	public function postsgallery()
	{
		return $this->hasOne('PostsGallery', 'post_id');
	}
}