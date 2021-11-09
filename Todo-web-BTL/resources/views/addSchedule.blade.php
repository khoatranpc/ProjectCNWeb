@extends('layouts.profile')
@section('profile')
<div  class="on-dentail-tab p-4">
    <div class="add">
        <form method="POST" action="{{route('addschedule')}}">
            @csrf
            <div class="box">
                <div class="form-group">
                    <label for="name">Name Schedule</label>
                    <input type="text" class="form-control" id="nameSchedule" placeholder="Somthing here" name="schedule">
                  </div>
                  <div class="form-group">
                    <label for="time">Time</label>
                    <input type="datetime-local" class="form-control" id="time" name="time">
                  </div>
                  <button type="submit" class="btn btn-success ">Save</button>
                  <a class="btn btn-warning" href="/schedule">Exit</a>
            </div>
        </form>
        
    </div>
</div>
<style>
    .btn{
        margin-top: 2rem;
        margin:right;
        border: 1px solid green;
        padding: 10px;
        box-shadow: 2px 4px rgba(0, 128, 0, 0.753);
    }
    .btn-warning{
        color: white;
    }
    .box{
        padding: 3rem;
        border-radius: 20px;
        border: 1px solid white;
        box-shadow: -2px -30px 30px rgba(255, 255, 255, 0.2),
                    -2px 30px 30px rgba(0, 0, 0, 0.1),
                    2px 20px 20px rgba(255, 255, 255, 0.2),
                    2px 20px 20px rgba(0, 0, 0, 0.1);
        
    }
</style>
<script>
      
    document.querySelector('form').submit = (e)=>{
        var answer = window.confirm("Do you want to save this schedule?")
        // alert('nothing is here');
        if (!answer) {
            //some code
            e.preventDefault();
        }
       
    }
</script>
@endsection