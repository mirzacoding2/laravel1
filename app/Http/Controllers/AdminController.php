<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function profile(){
    	//dd(true);
    	return view('profile');
    }

    public function address(){
    	dd(true);
    }

    public function phone(){
    	dd(true);
    }

    public function log(){
    	dd(true);
    }
}
