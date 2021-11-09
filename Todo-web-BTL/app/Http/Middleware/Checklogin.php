<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {  
        $acc = $request->input('account');
        $password = $request->input('password');
        $request->validate([
            'account'=>'required',
            'password'=>'required'
        ]);
     
        // check login
        $checklogin = DB::table('useraccount')->where(['acc'=>$acc,'password'=>$password])->get();
      
        if(count($checklogin) > 0){
            $request->session()->forget('iduser');
            $roleAcc = DB::select('SELECT `role` FROM `useraccount` WHERE `acc` = ?',[$acc]);
            foreach($roleAcc as $checkrole){
                if($checkrole->role == 1){
                    $request->session()->forget('acc');
                    $request->session()->forget('admin');
                    $request->session()->put('acc',$acc);
                    $IDuser = DB::select('SELECT * FROM `inforuser` WHERE `acc` = ?',[$acc]);
                    $request->session()->put('iduser',$IDuser[0]->IDuser);
                    // return redirect('profile')->with('iduser',$IDuser[0]->IDuser);
                    return redirect('profile');
                }else if($checkrole->role == 2){
                    $request->session()->put('admin',$acc);
                    return redirect('admin');
                }
             
            }
        }
        else return redirect('login');
      
        return $next($request);
    }
}
