<?php

class Tag extends \Eloquent {
	protected $fillable = [];

	public function tags()
	{
		return $this->belongsToMany('Post');
	}
}