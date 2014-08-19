<?php

class SubscriptionController extends \BaseController {

	public function subscribe()
	{
		return View::Make('home.subscribe');
	}

	public function fire()
	{
		$email = Input::get('email');

		Event::fire('newsletter.subscribe', [$email]);

		return Redirect::to('/');
	}

}