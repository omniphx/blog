<?php namespace Blog\Traits;

trait EloquentTrait {

	public function scopeFindSlug($query, $slug)
	{
		return $query->where('slug', '=', $slug)->first();
	}
}