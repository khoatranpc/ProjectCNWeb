<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;


class ScheduleUser extends Controller
{
    //
    function showSchedule(){
      if(session()->has('acc')){
          // $schedule= DB::select('SELECT * FROM `schedule` WHERE `IDuser` = ?',[session()->get('iduser')]);
          $schedule = Schedule::where('IDuser','like',session('iduser'))->paginate(5);
          // return view('schedule');
          return view('schedule',compact('schedule'));
      }

    }
    function deleteschedule($idschedule){
      if(session()->has('acc')){
          // $schedule= DB::select('SELECT * FROM `schedule` WHERE `IDuser` = ?',[session()->get('iduser')]);
        $schedule = Schedule::find($idschedule);
        $schedule->delete();
        return redirect('/schedule');
      }
    }
  
    function searchschedule(Request $req){
      if(session()->has('acc')){
        $schedulelist = Schedule::where('Nameschedule','like','%'.$req->key.'%')
                            ->Where('IDuser','=',session('iduser'))
                            ->get();
        return view('searchuser',compact('schedulelist'));
        }
        else return redirect('schedule');
    }
  
}
