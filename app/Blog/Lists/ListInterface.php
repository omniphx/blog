<?php namespace Blog\Lists;

interface ListInterface {

	/**
	 * @param  $list
	 * @param  $email
	 * @return mixed
	 */
	public function subscribeTo($list, $email);

	/**
	 * @param  $list
	 * @param  $email
	 * @return mixed
	 */
	public function unscribeFrom($list, $email);

	
}