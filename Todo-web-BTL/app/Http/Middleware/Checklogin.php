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
            session()->forget('error');
            $roleAcc = DB::select('SELECT `role` FROM `useraccount` WHERE `acc` = ?',[$acc]);
            foreach($roleAcc as $checkrole){
                if($checkrole->role == 1){
                    $request->session()->put('acc',$acc);
                    return redirect('profile');
                }else {
                    $request->session()->put('acc',$acc);
                    return redirect('admin');
                }
             
            }
        }
        else return redirect('login')->with('error','Wrong account or password!');
        // else return redirect('login/Check=false');
      
        return $next($request);
    }
}
