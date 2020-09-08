<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    
    function index(){
    	return view('index');
    }

    function verify(Request $request){
    	

        
        $data = DB::table('user')
                    ->where('username', $request->username)
                    ->where('password', $request->password)
                    ->get();

      
    	if(count($data) > 0 ){
            $request->session()->put('username', $request->username);
            
            if($data[0]->type == "admin"){
                $request->session()->put('type', "admin");
            }

    		return redirect('/home');
    	}else{
            $request->session()->flash('msg', 'invalid username/password');
            return redirect()->route('index');
        }
    }
}
