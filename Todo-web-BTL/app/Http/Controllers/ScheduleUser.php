<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Schedule;


class ScheduleUser extends Controller
{
    //
    function showSchedule(Request $request, ){
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
        return view('searchschedule',compact('schedulelist'));
        }
        else return redirect('schedule');
    }
    function updateSchedule(Request $request){
      if(session()->has('acc')){
      $reqDt = array(
        'Nameschedule'=>$request->schedule,
        'Thoigian'=>$request->time
      );
      DB::table('schedule')->where('Idschedule',$request->id)->update($reqDt);
      return redirect('/schedule');
    }
    }
    function addSchedule(Request $request){
      if(session()->has('acc')){
      DB::insert('INSERT INTO `schedule` (`Nameschedule`, `Thoigian`,`IDuser`) values (?, ?, ?)', [$request->schedule, $request->time,session()->get('iduser')]);
      return redirect('/schedule');
    }
  }
  
}
