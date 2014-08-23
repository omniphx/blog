<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Blog\Traits\EloquentTrait;
use Carbon\Carbon;

class Post extends \Eloquent implements SluggableInterface {

	use SluggableTrait;
	use EloquentTrait;

	protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
    );

	protected $guarded = ['id', 'created_at', 'updated_at'];

	protected $timestamp = array('published_at');

	public static function boot()
	{
		parent::boot();
		 
		static::saving(function($model) {

			$model->sluggify();
			$model->setPublished_at();
			
			return true;

		});
	}

	public function setPublished_at()
	{
		$model = $this->getAttributes();

		if(isset($model['published']))
		{
			if($model['published'] == 1 && !isset($model['published_at']))
			{
				$this->attributes['published_at'] = Carbon::now();
			}
		}
		
		return $this;
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

	public function notify()
	{
		$post = $this->getAttributes();

		return Event::fire('post.publish', [$post]);

	}

	public function publish($post)
	{
		$post->published = 1;
		return $post->save();
	}
}