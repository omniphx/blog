<?php

Form::macro('foo', function(){

	return 
		'<div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
		</div>';
});

Form::macro('boottext', function($label,$name){
	return
		"<div class='form-group {$name}'>
			<label>{$label}</label>
			<input type='text' class='form-control' name='{$name}'>
		</div>";
});