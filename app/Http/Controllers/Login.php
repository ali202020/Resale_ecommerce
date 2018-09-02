<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class Login extends Controller
{
    //checking the user
    public function login (Request $request){
    	$Users = User::all();
    	foreach ($Users as $User) {
    		if(($request->email == $User->email) && ($request->password == $User->password)){
    			Session::flash('login_success','you have been logged in successfully');
    			return redirect()->route('main');
			}else if(!isset($request->password) || !isset($request->email)){
				Session::flash('login_fail','please enter valid data');
    			return redirect()->route('login');

			
    		}else{
    			Session::flash('login_fail','please enter valid data');
    			return redirect()->route('login');
    		}

    		
    	}
    	
    }

}
