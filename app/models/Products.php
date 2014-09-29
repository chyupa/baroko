<?php

class Products extends \Eloquent {
	protected $fillable = ['name', 'ext', 'price', 'description', 'categ_id', 'outlet', 'cant_outlet', 'public', 'featured'];

	public function categories()
	{
		return $this->hasOne('Categories');
	}

	public static $rules = [
		'name' => 'required',
		'categ_id' => 'required|integer',
		'price' => 'required|numeric',
		'ext' => 'required',
		'public'=>'integer',
		'featured'=>'integer',
		'outlet'=>'integer',
		'cant_outlet'=>'numeric',
	];
}