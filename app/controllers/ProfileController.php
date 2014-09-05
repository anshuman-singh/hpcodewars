<?php

class ProfileController extends BaseController {

	public function user($username) {

		$user = User::where('username', '=', $username);

		if($user->count()){	
			$user = $user->first();		
			return View::make('profile.user')
					->with('user', $user);
		}

		return App::abort(404);

	}

	public function submit() {

		return View::make('profile.submit');	

	}

	public function upload($username){

		/*if(Input::hasfile('file')){
			return 'success';
		}
		else{
			return 'failure';
		}*/
		if(Auth::check()){

				$file = Input::file('file');
				//$filename = $file->getClientOriginalName();
				$date = new DateTime();

				
				$destinationPath = public_path().'/uploads/'.Auth::user()->username.'_'.Auth::user()->email.'_'.$date->getTimestamp() ;
				// If the uploads fail due to file system, you can try doing public_path().'/uploads' 
				//$filename = str_random(12);
				$filename = $file->getClientOriginalName();
				$extension =$file->getClientOriginalExtension(); 
				if($extension == 'zip'){
					$upload_success = Input::file('file')->move($destinationPath, $filename);
					//$upload_success = Input::upload('file',$destinationPath, $filename);
					if( $upload_success ) {
						return Redirect::route('profile-submission')
							->with('global',  Helper::format_message('Your solution is uploaded successfully!','success'));

							
					  /* return Response::json('success', 200);*/
					} else {
					   return Response::json('error', 400);
					}
				}
				else{
					return Redirect::route('profile-submission')
						->with('global',  Helper::format_message('Please upload only .zip files!','danger'));
				}
				
		}
	}

}	