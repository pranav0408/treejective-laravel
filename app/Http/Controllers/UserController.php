<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function storeUser(Request $req){
    	$this->validate($req,[
    			'username' => 'bail|required|min:6',
    			'firstname' => 'bail|required|min:5|max:35|alpha',
    			'lastname' => 'bail|required|min:5|max:35|alpha',
    			'email' => 'bail|required|email',	
    			'pwd' => 'bail|required|min:8|max:20|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\X])(?=.*[@!$#%]).*$/',
    			'confirm_password' => 'bail|required|min:8|max:20|same:pwd'
    		],[
    			'firstname.required' => ' The first name field is required.',
    			'firstname.min' => ' The first name must be at least 5 characters.',
    			'firstname.max' => ' The first name may not be greater than 35 characters.',
    			'lastname.required' => 'last name field is required.',
    			'lastname.min' => 'last name must be at least 5 characters.',
    			'lastname.max' => ' last name may not be greater than 35 characters.',
    			'email.required'=>'email is required',
    			'email.email' => 'email is invalid',
    			'pwd.required' =>'password is required',
    			'pwd.min'=>'min character of password should be 8',
    			'pwd.regex'=>'Password doesnot match the criteria'
   
    		]);
    	$query = DB::table('user')->where('email',$req->input('email'))->doesntExist();
    	$query2 =DB::table('users')->where('username',$req->input('username'))->doesntExist();

		if($query && $query2)
		{
			$password = md5($req->input('pwd'));
			
			DB::table('user')->insertGetId(['firstname'=>$req->input('firstname'),
				'lastname'=> $req->input('lastname'),
				'email'=> $req->input('email'),
				'password'=> $password]);

			DB::table('users')->insertGetId(['username'=>$req->username]);

			$session_data = [
            		'firstname'=>$req->firstname,
            		'lastname'=>$req->lastname,
            		'email'=>$req->email,
            		'username'=>$req->username
            	];
			$req->session()->put('user',$session_data);
			return redirect('/');
		}
		else
		{
			if($query2)
    	{
    		return redirect()->route('signup', ['userexists' => "user with this username already exist"]);
    	}
    	if($query){
			return redirect()->route('signup', ['emailexists' => "user with this email already exist"]);
		}
    	}
    }

    function loginUser(Request $req)
    {
    	if($req->validate([
                'email' => 'bail|required|email',
                'userpwd' => 'bail|required'
            ],[
                'email.required'=>'email is required',
    			'email.email' => 'email is invalid',
                'userpwd.required' =>'password is required'
            ]))
            {
            redirect('login')->withInput();
        }

    	$query = DB::table('user')->where('email',$req->input('email'))->exists();

    	if($query)
    	{
            $password = md5($req->userpwd);

            $user = DB::table('user')->where('email',$req->email)->where('password',$password)->first();
            if($user)
            {
				/*This is where user is successfully verified*/
				$username = DB::table('users')->where('email',$req->email)->first();
				
				if( $username ){
					$session_data = [
						'firstname'=>$user->firstname,
						'lastname'=>$user->lastname,
						'email'=>$user->email,
						'username'=>$username->username
					];
					
					$req->session()->put('user',$session_data);
					return redirect('/');
				} else {
					return redirect()->route('login', ['wrongpwd' => "error 500: can't fetch details"])->withInput();
				}
            } 
            else{
                return redirect()->route('login', ['wrongpwd' => "Incorrect Password"])->withInput();
            }
    		
    	}
    	else
		{
			return redirect()->route('login', ['userexists' => "No account with this email id"])->withInput();
		}

    }
    public function logout(Request $request){
    	$request->session()->forget('user');
    	return redirect('/');
    }
}
