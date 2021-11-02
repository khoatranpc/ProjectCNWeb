<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Register extends Controller
{
    //
    function viewReg(Request $req)
    {
        # code...
        $req->validate([
            'name'=>'required',
            'acc'=>'required',
            'date'=>'required',
            'password'=>'required',
            'sex'=>'required',
            'img'=>'required',
            'sdt'=>'required',
            'email'=>'required',
            'birth'=>'required'
        ]);
        return view('register');
    }
}
