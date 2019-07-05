<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use schema;
use App\Models\users;

class UserController extends Controller
{
    public function index(){
    	return view('home');
    }

    public function account(){
    	return view('newaccount');
    }

    public function create(Request $Request){
    	$billing = new users;
    	$billing->name = $Request->name;
    	$billing->brith_day = $Request->brith_day;
    	$billing->sex = $Request->sex;
    	$billing->username = $Request->username;
    	$billing->password = $Request->password;
    	$billing->save();

    	return redirect('login');
    }

    public function login(Request $request){    

    	return view('login');
    }

    private function isUserAuthenticated($username,$password) {
        
        $userData = Users::where('username',$username)->where('password',$password)->first();
        
        if(is_null($userData)) {
            return false;    
        }

        return true;

    }

    public function loginpost(Request $request){
    	
        $username = $request->username;
        $password = $request->password;

        if($this->isUserAuthenticated($username,$password)) {
            return redirect('/admin');
        }

        return redirect('/login');

    }

  	public function dashboard(){
  		return view('admin');
  	}

}
