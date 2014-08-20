<?php

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Blog\Traits\EloquentTrait;

class Author extends \Eloquent implements SluggableInterface {

	use SluggableTrait;
	use EloquentTrait;

	protected $sluggable = array(
        'build_from' => 'name',
        'save_to'    => 'slug',
    );

	protected $fillable = ['name'];

	public function posts()
	{
		return $this->hasMany('Post');
	}
}