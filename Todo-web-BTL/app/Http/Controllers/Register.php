<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Register extends Controller
{
    //
    function viewReg(Request $req)
    {
        # code...
        $req->validate([
            'name'=>'required',
            'acc'=>'required | max:25',
            'password'=>'required',
            'sex'=>'required',
            'img'=>'required',
            'sdt'=>'required | max:10',
            'email'=>'required',
            'birth'=>'required'
        ]);
        // INSERT INTO `useraccount`(`role`, `acc`, `password`) VALUES ('[value-1]','[value-2]','[value-3]')
        //INSERT INTO `inforuser`(`IDuser`, `Hoten`, `Tuoi`, `Gioitinh`, `Ngaysinh`, `Hinhanh`, `SDT`, `Email`, `acc`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]')
        $acc= $req->input('acc');
        $password= $req->input('password');
        $name= $req->input('name');
        $sex= $req->input('sex');
        $img= $req->input('img');
        $sdt= $req->input('sdt');
        $email= $req->input('email');
        $birth= $req->input('birth');
       
        // $insertACC = 
        // $checkacc = DB::select('SELECT `acc` FROM `useraccount` WHERE `acc` = ?',[$acc]);
        // if(count($checkacc) > 0){
        //     return redirect('login');
        // }
        // else{

        // }
        try{
            if(session()->has('er')){
                session()->forget('er');
            }
            DB::insert('INSERT INTO `useraccount` (`acc`, `password`) values (?, ?)', [$acc, $password]);
            $birth = date('d-m-Y');
            DB::insert('INSERT INTO `inforuser` (`Hoten`, `Gioitinh`, `Ngaysinh`, `Hinhanh`, `SDT`, `Email`, `acc`) values (?, ?, ?, ?, ?,?,?)', [$name,$sex,Carbon::createFromFormat('d-m-Y', $birth)->format('Y-m-d'),$img,$sdt,$email,$acc]);
            return redirect('login');
        }catch(\Exception $ex){
            $checkacc = DB::select('SELECT `acc` FROM `useraccount` WHERE `acc` = ?',[$acc]);
            if(count($checkacc) > 0){
                session('er','This Account has been us!');
                return redirect('registerAccount');
            }
            
        }
        // // $insertInfUser =  
        
    }
}
