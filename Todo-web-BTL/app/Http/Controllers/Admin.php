<?php

namespace App\Http\Controllers;
use App\Models\Inforuser;
use Illuminate\Http\Request;

class Admin extends Controller
{
    //
function viewPage()
    {
        # code...
  
            if(session()->has('acc')){
                $data = Inforuser::paginate(5);
                return view('adminpage',['user'=>$data]);
            }
            else return redirect('login');
     
     
    }
}
