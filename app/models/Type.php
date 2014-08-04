<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;

class Type extends \Eloquent implements SluggableInterface {

	use SluggableTrait;

	protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

	protected $fillable = [];

	public function posts()
	{
		return $this->hasMany('Post');
	}
}