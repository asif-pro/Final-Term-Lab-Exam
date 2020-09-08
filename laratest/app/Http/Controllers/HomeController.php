<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequests;


//use Validator;

class HomeController extends Controller
{


    
    function index(Request $request){


        $users = DB::table('user')->get();
        return view('home')->with('users', $users);
    }


    public function create(Request $request){
       
    }

    public function store(Request $request){

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
