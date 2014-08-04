<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Blog\Traits\EloquentTrait;

class Tag extends \Eloquent implements SluggableInterface {

	use SluggableTrait;
	use EloquentTrait;

	protected $fillable = [];

	protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

	public function posts()
	{
		return $this->belongsToMany('Post');
	}

}