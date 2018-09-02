<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;

class MobileController extends Controller
{
    //
    public function viewMobiles(){
    	$Mobiles = Ads::paginate(5);
    	return view('mobiles')->with('Mobiles',$Mobiles);

    }


    //search function

    //search key where we search using the name coulmn in the data base
    public function searchMobiles(Request $request){

    	if(isset($request->search)){
    		$Ads = Ads::all();
    		foreach ($Ads as $Ad) {
    		$search_result = $Ad->select('ad_title')->where('ad_title', 'like', '%'.$request->search.'%')->get();
    		return view('mobiles')->with('search_result',$search_result); 
    	}   	  		
    		
    	}

    }


    //search
}
