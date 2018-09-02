<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Ads;

class SingleView extends Controller
{
    public function viewSingle($id){
    	$Mobile = Ads::find($id);
    	return view('single')->with('Mobile',$Mobile);

    }
}
