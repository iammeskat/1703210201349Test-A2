<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\District;

class DistrictController extends Controller
{
    public function getDivisions(){
    	$divisions = District::select('id', 'name')->whereNull('parent_id')->get();
    	return response()->json([
            'divisions' => $divisions,
            'message'=>'successfully retrieved'
        ]);
    }

    public function getDistricts($div_id){
    	$districts = District::select('id', 'name')->where('parent_id', $div_id)->get();
    	return response()->json([
            'districts' => $districts,
            'message'=>'successfully retrieved'
        ]);
    }
}
