<?php

class Gallery extends \Eloquent {
	protected $fillable = ['filename', 'product_id', 'featured'];
	public static $rules = [
		'filename' => 'required|image|max:2000|mimes:jpeg,jpg,bmp,png',
		'product_id' => 'integer',
		'featured' => 'integer'
	];
	protected $table = 'gallery';
}