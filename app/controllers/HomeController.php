<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/*public function showWelcome()
	{
		/*$results = User::all();
		return $results;


		return View::make('hello');
	}
	public function showWork()
	{
		return View::make('work');
	}
	*/

	public function home(){

		/*Mail::send('emails.auth.ForgetPassEmail' , array('name' => 'Anshuman'), function($message){
			$message->to('anshuman11089@gmail.com', 'Anshuman Singh')->subject('Forget Password');

		});*/
		/*echo $user = User::find(1)->username;*/
		return View::make('home');
	}

}
