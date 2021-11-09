<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleDetails extends Controller
{
    //
    function takeSchedule($id){
        if(session()->has('acc')){
        $schedule = DB::table('schedule')
                        ->where('Idschedule','=',$id)->get();
        return view('scheduledetails',['schedule'=>$schedule[0]]);
        }
        // return $schedule;
    }
}
