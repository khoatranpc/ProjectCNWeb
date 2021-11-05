<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class InforUser extends Controller
{
    function profileuser(){
        if(session()->has('acc')){
            
            $userinfor=DB::select('SELECT * FROM `inforuser` WHERE `acc`=? ', [session()->get('acc')]);
            $temp = $userinfor;
            return view('profile',['inf'=>$temp[0]]);
            // return ['info'=>$userinfor];
        }else return redirect('login');
        
    }
}
