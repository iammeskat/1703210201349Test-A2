<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function indexPage(){
    	return view('admin.pages.students.index');
    }
    public function showForm(){
    	return view('admin.pages.students.create');
    }
    public function details(){
    	return view('admin.pages.students.details');
    }


    public function images(){
    	return view('admin.pages.images.images');
    }
}
