<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Tag extends \Eloquent implements SluggableInterface {

	protected $fillable = [];

	use SluggableTrait;

	protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

	public function posts()
	{
		return $this->belongsToMany('Post');
	}

}