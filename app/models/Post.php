<?php

class Post extends \Eloquent
{
	protected $fillable = [];

	public function comments()
	{
		return $this->hasMany('Comment');
	}

	public function tags()
	{
		return $this->belongsToMany('Tag');
	}
}