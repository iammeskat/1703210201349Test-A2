<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    public function index(){
    	$images = Image::select('image_name')->get();
    	return response()->json([
    			'data' => $images,
	            'error' => 'false',
	        ]);

    }

    public function store(Request $r){
    	if($r->hasfile('images')){
	        foreach($r->file('images') as $image){

	            $name='images/'.$image->getClientOriginalName();
	            $image->move(public_path().'/images/', $name);  
	            $paths[] = $name;  
	        }

	    	foreach ($paths as $path) {
	    		Image::create([
	    			'image_name' => $path
	    		]);
	    	}

	        return response()->json([
	            'error'=> 'false',
	        ]);

	    }
	    return response()->json([
	            'error'=> 'true',
	        ]);
    }
}
