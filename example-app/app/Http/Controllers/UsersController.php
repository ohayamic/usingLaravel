<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function get(Request $request){

        $users = Users::get();

        return $users;
        
    }
}
