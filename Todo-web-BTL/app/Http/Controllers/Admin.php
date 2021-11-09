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
        if(session()->has('admin')){
            $data = Inforuser::paginate(5);
            return view('adminpage',['user'=>$data]);
        }
        else return redirect('login');
    }
    function searchuser(Request $req){
        if(session()->has('admin')){
           $userinf = Inforuser::where('Hoten','like','%'.$req->key.'%')
                                ->orWhere('SDT','like','%'.$req->key.'%')
                                ->get();
            return view('adminSearchUser',compact('userinf'));
        }
        else return redirect('login');
    }
}
