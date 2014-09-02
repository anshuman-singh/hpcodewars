<?php

class AccountController extends BaseController {


	public function getSignIn(){
		return View::make('account.signin');
	}

	public function postSignIn(){
		/*return 'you are signed in!';*/
		$validator = Validator::make(Input::all(),
		 	array(
		 		'email'=>'required|email',
		 		'password'=>'required'
		 	)
		);

		if($validator->fails()){
			return Redirect::route('account-sign-in')
				->withErrors($validator)
				->withInput();
		}
		else{

			$remember = (Input::has('remember')) ? true : false;

			$auth = Auth::attempt(array(
				'email'	=> Input::get('email'),
				'password'	=> Input::get('password'),
				'active' => 1

			) , $remember);

			if($auth){
				/*return Redirect::intended('/');*/
				return Redirect::route('profile-user', array('username' => Auth::user()->username));
			}
			else{
				return Redirect::route('account-sign-in')
					->with('global', 'Email and Password wrong!');
			}
		}
		return Redirect::route('account-sign-in')
			->with('global', 'There was a problem signing in. Have you activated your account!');

	}


	public function getSignOut(){
		Auth::logout();
		return Redirect::route('home');
	}

	public function getCreate(){
		return View::make('account.create');
	}

	public function postCreate(){
		 $validator = Validator::make(Input::all(),
		 	array(
		 		'email'=>'required|max:50|email|unique:users',
		 		'email_sec'=>'required|max:50|email|unique:users',
		 		'username'=>'required|max:20|min:3',
		 		'password'=>'required|min:6',
		 		'password_again'=>'required|same:password'

		 	)
		);

		if($validator->fails()){
			return Redirect::route('account-create')
					->withErrors($validator)
					->withInput();
		}
		else{
			$email	=Input::get('email');
			$email_sec =Input::get('email_sec');
			$username	=Input::get('username');
			$password	=Input::get('password');

			//Activation 
			$code = str_random(60);

			$user = User::create(array(
				'email'=> $email,
				'email_sec' => $email_sec,
				'username' => $username,
				'password'=> Hash::make($password),
				'code'=> $code,
				'active'=> 0
			));

			if($user){

				Mail::send('emails.auth.activate' ,array('link' => URL::route('account-activate' , $code), 'username' =>$username), function($message) use ($user) {
					$message->to($user->email, $user->username)->subject('Activate your account');
				});
				/*return Redirect::route('home');*/
				return Redirect::route('home')
					->with('global', 'Your account has been created ! We have sent you an email to your Primary Email-Id to activate your account.');
			}


		} 
	}

		public function getActivate($code){
				$user = User::where('code', '=', $code)->where('active','=', 0);

				if($user->count()){
					$user = $user->first();
					
					//update user active state
					$user->active = 1;
					$user->code ='';

					if($user->save()){
						return Redirect::route('home')
								->with('global', 'Activated! You can now sign-in');	
					}
				}

				return Redirect::route('home')
					->with('global', 'We could not activate your account! Try again later.');
		}


		public function getChangePassword(){
			return View::make('account.password');
		}

		public function postChangePassword(){
			$validator = Validator::make(Input::all(),
			 	array(
			 		'old_password'=>'required',			 		
			 		'password'=>'required|min:6',
			 		'password_again'=>'required|same:password'

			 	)
			);


			if($validator->fails()){
				return Redirect::route('account-change-password')
						->withErrors($validator);
			}
			else{

				$user = USer::find(Auth::user()->id);

				$old_password = Input::get('old_password');
				$password = Input::get('password');

				if(Hash::check($old_password, $user->getAuthPassword())){
					$user->password = Hash::make($password);

					if($user->save()){
						return Redirect::route('home')
							->with('global', 'Your Password has been changed.');
					}
				}else{
					return Redirect::route('account-change-password')
						->with('global', 'Your old password is incorrect.');
				}

			}

			return Redirect::route('account-change-password')
					->with('global', 'You couldnot change your password! Try again later.');
		}

		public function getForgotPassword(){
			return View::make('account.forgot');
		}

		public function postForgotPassword(){
			$validator = Validator::make(Input::all(),
			 	array(
			 		'email' => 'required|email'

			 	)
			);

			if($validator->fails()){
				return Redirect::route('account-forgot-password')
					->withErrors($validator)
					->withInput();
			}
			else{

				$user = User::where('email', '=', Input::get('email'));
				if($user->count()){
					$user = $user->first();

					$code = str_random(60);
					$password = str_random(10);

					$user->code = $code;
					$user->password_temp = Hash::make($password);

					if($user->save()){
						Mail::send('emails.auth.recover' ,array('link' =>URL::route('account-recover' , $code) , 'username' =>$user->username , 'password' => $password), function($message) use ($user) {
							$message->to($user->email, $user->username)->subject('Your new password');
						});	

						return Redirect::route('home')
							->with('global', 'We have sent you a new password.');
					}


				}	

			}

			return Redirect::route('account-forgot-password')
					->with('global', 'Couldnot request new password.');
		}


		public function getRecover($code){
			$user = User::where('code', '=', $code)
					->where('active','!=', '');

			if($user->count()){
				$user = $user->first();

				$user->password = $user->password_temp;
				$user->password_temp = '';
				$user->code = '';

				if($user->save()){
					return Redirect::route('home')
						->with('global', 'your account has been recovered and you can signin with new password.');

				}

			}
			return Redirect::route('home')
				->with('global', 'Could not recover you account.');

		}

}