<?php

class Subcategories extends \Eloquent {
	protected $fillable = ['name'];
	protected $table = 'categories';
	public static $rules = [
		'name' => 'required',
		'parent' => 'required'
	];
	public function categories()
	{
		return $this->hasOne('Categories');
	}
}