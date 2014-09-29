<?php

class Categories extends \Eloquent {
	protected $fillable = ['name', 'parent'];
	public static $rules = [
		'name' => 'required',
		'parent' => 'integer'
	];
	protected $table = 'categories';

	public function products()
	{
		return $this->belongsTo('Products');
	}

	public function subcategories()
	{
		return $this->hasOne('Subcategories');
	}
}