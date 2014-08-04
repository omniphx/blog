<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Post extends \Eloquent implements SluggableInterface {

	use SluggableTrait;

	protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

	protected $guarded = ['id'];

	public static function boot()
	{
		parent::boot();

		//Commenting out, becuase it may not be necessary. Could notify through RSS feed.

		// static::saving(function($model)
		// {
		// 	if($model->published()){
		// 		return $model->notify();
		// 	}
		// });
	}

	public function type()
	{
		return $this->belongsTo('Type');
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

	public function scopePublished($query)
	{
		return $query->where('published','=','1');
	}

	public function FunctionName($value='')
	{
		# code...
	}

	public function notify()
	{
		$post = $this->getAttributes();

		return Event::fire('post.publish', [$post]);

	}
}