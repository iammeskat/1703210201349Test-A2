<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{
    public function index(){
    	$students = Student::with('district', 'division')->orderBy('id', 'DESC')->get();

    	return response()->json([
            'data' => $students,
            'error'=>'false',
        ]);
    }

    public function show($id){
    	$student = Student::with('district', 'division')->find($id);
    	return response()->json([
            'data' => $student,
            'error'=> 'false',
        ]);
    }

    public function store(Request $r){

    	$validator = Validator::make($r->all(), [
            'student_id' => 'required|numeric|digits:13|unique:students',
            'name' => 'required|max:55',
            'gender' => 'required',
            'dob' => 'required|before:17 years ago',
            'department' => 'required',
            'batch' => 'required',
            'division_id' => 'required|numeric',
            'district_id' => 'required|numeric',
            'phone_number' => 'required|max:15|min:11|unique:students',
            'email' => 'email|required|unique:students',
        ]);
        if($validator->fails()){
            return response()->json([
                'errors'=>$validator->errors()->all(),
                'data'=>$r->input(),
                'error'=>'true',
            ]);
        }

    	$student = Student::create([
    		'student_id' => $r->student_id,
    		'name' => $r->name,
    		'gender' => $r->gender,
    		'dob' => $r->dob,
    		'department' => $r->department,
    		'batch' => $r->batch,
    		'division_id' => intval($r->division_id),
    		'district_id' => intval($r->district_id),
    		'phone_number' => $r->phone_number,
    		'email' => $r->email,
    	]);
    	return response()->json([
            // 'data' => $r->input(),
            'data' => $student,
            'error'=> 'false',
        ]);
    }

    public function update(Request $r, $id){
    	$validator = Validator::make($r->all(), [
            'student_id' => 'required|numeric|digits:13',
            'name' => 'required|max:55',
            'gender' => 'required',
            'dob' => 'required|before:17 years ago',
            'department' => 'required',
            'batch' => 'required',
            'division_id' => 'required|numeric',
            'district_id' => 'required|numeric',
            'phone_number' => 'required|max:15|min:11',
            'email' => 'email|required',
        ]);
        if($validator->fails()){
            return response()->json([
                'errors'=>$validator->errors()->all(),
                'data'=>$r->input(),
                'error'=>'true',
            ]);
        }

        $student = Student::find($id);
        $result = $student->update([
    		'student_id' => $r->student_id,
    		'name' => $r->name,
    		'gender' => $r->gender,
    		'dob' => $r->dob,
    		'department' => $r->department,
    		'batch' => $r->batch,
    		'division_id' => intval($r->division_id),
    		'district_id' => intval($r->district_id),
    		'phone_number' => $r->phone_number,
    		'email' => $r->email,
    	]);
    	if($result){
	    	return response()->json([
	            'error'=> 'false',
	        ]);
    	}
    	else{
    		return response()->json([
	            'error'=> 'true',
	        ]);
    	}

    }

    public function destroy($id){
    	$student = Student::find($id);
    	$student = $student->delete();
    	return response()->json([
            'error'=> !$student,
        ]);
    }
}
