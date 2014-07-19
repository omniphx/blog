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

	public function author()
	{
		return $this->belongsTo('Author');
	}

	public function scopeSearch($query, $search)
	{
		return $query->where('title','LIKE',"%$search%");
	}
}