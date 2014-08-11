<?php namespace Blog\Helpers;

class FormHelper {

	public function awesome()
	{
		Form::macro('myfield', function(){
			return '<input type="awesome">';
		})
	}
}