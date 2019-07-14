<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile(){
    	return view('profile');
    }

    public function address(){
    	return view('address');
    }

    public function phone(){
    	return view('number');
    }

    public function log(){
    	dd(true);
    }
}
