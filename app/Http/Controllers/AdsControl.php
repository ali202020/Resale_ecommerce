<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ads;
use Image;


class AdsControl extends Controller
{


    //viewing ad form
	public function viewAdForm(){
		return view('ads');

	}


    public function storeAd(Request $request){
    	// this stores add to the data base
    	$Ads = new Ads;
    	$Ads->category = $request->category;
    	$Ads->ad_title = $request->ad_title;
    	$Ads->ad_description = $request->ad_description;
    	$Ads->ad_price = $request->ad_price;
    	$Ads->user_name = $request->user_name;
    	$Ads->user_email = $request->user_email;
    	$Ads->user_phone = $request->user_phone;

    	//saving the images  
    		 
    	$image = $request->file('ad_image');
    	$file_name = time() . '.' . $image->getClientOriginalExtension();
    	$location = public_path('images/'. $file_name);
    	Image::make($image)->save($location);
    	$Ads->ad_image = $file_name;
    	$Ads->save();
    	

    	//flash message


    	//redirecting
    	return redirect()->route('main');





    }

    public function retrieveAd(){
    	//this retrieves add from data base

    } 
}
