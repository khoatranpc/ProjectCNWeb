<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //
   
    function checkValid(Request $req){
        
        return redirect('user');
    }
   
}
