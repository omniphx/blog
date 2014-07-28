<?php namespace Blog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\Events\Dispatcher
 */
class StringHelper extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'stringhelper'; }

}