<?php

class Products extends \Eloquent {
	protected $fillable = [];
	public function categories()
	{
		return $this->hasOne('Categories');
	}
}