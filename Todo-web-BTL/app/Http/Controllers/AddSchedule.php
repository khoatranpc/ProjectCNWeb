<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddSchedule extends Controller
{
    //
    function viewAddSchedule(){
        if(session()->has('acc')){
            return view('addSchedule');
        }
    }
}
