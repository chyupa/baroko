<?php

class Gallery extends \Eloquent {
	protected $fillable = ['filename', 'product_id', 'featured'];
	public static $rules = [
		'filename' => 'required|mimes:jpeg,jpg,bmp,png|size:10',
		'product_id' => 'integer',
		'featured' => 'integer'
	];
}