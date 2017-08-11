<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use Session;

use DB;

use Redirect;

class LoginController extends Controller
{
    
    public function login_gad(Request $request){
    	if(Auth::attempt(['email'=>$request['usuario'],'password'=>$request['password']]) ) {
                return response()->json(["sms"=>"login" ]);
            }else{
                return response()->json(["sms"=>"error"]);
            }   
    }

    public function logout_gad(){
    	Auth::logout();
        return Redirect::to('/');
    }
}
