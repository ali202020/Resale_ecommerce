<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class Register extends Controller
{
    public function register (Request $request){

    	//we ignored performing validation


    	//storing in the data base
    	$User = new User;
		//$User->name = $request->name;
		$User->email = $request->email;
		$User->password = $request->password;
		$User->confirm_password = $request->confirm_password;
		$User->save();
		Session::flash('success','user has been successfully saved');
		return redirect()->route('main');

    }
}
