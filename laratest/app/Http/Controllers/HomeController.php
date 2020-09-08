<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;

//use Validator;

class HomeController extends Controller
{


    
    function index(Request $request){


       $user = new User();
        $userList = $user->get();
        return view('home')->with('userList', $userList);
    }


    public function create(Request $request){

        return view('createEmp');
    
       
    }

    public function store(Request $request){

    	 $user = new User();

        $user->username = $request->username;
        $user->password = $request->password;
        $user->type = $request->type;
        $user->employee_name = $request->name;
        $user->company_name = $request->companyname;
        $user->contact_number = $request->contactnumber;
        
        $user->save();

        return redirect('home');

    }

    function edit($id){


    }

    function update($id, Request $request){


    }

    function delete($id){


    }

    function destroy($id, Request $request){

    }

 
}
