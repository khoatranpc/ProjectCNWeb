@extends('layouts.profile')

@section('profile')
<div class="kc">

<div class="center">

    <form class=" form" id="form-update" method="POST"  action="/schedule/details">
        @csrf
            <img class="cat" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSztTB5M9-lbSgfuBPDAlbxGA6gLlEnXpYw6g&usqp=CAU"> 
            <input type="hidden" name="id" value="{{$schedule->Idschedule}}">
        <div class="form-group">
            <label style="color:#fff" for="schedule name;" >Schedule Name</label>
            <input type="text" class="userschedule-name form-control" name="schedule" id="schedulename" value="{{$schedule->Nameschedule}}">
            
        </div>

        <div class="form-group">
            <label style="color:#fff" for="datetime">Time</label>
            <input type="datetime" class="userschedule-time form-control" name="time" id="datetime" value="{{$schedule->Thoigian}}">
        </div>

        <div class="root">
            <button class="btn btn-success btn-block-change">Change</button>
            <a class="btn btn-success" href="/schedule">Exit</a>
        </div>
    </form>

</div>
</div>
<style>
.kc{
    padding: 1rem;
}
.root{
   margin-top: 2rem;
}
.btn-block{
    margin-left: 100%;
    margin-bottom: 2rem;

}


.form{
    justify-content: center;
    background-position: center;
    text-align: center;
    /* margin :2rem 6rem 2rem 6rem; */
    padding : 2rem;
}
.center{
    border-style: outset;
 
    justify-content: center;
    margin: 1rem;
    border-radius: 2rem;
    box-shadow: -2px -30px 30px rgba(255, 255, 255, 0.2),
                -2px 30px 30px rgba(0, 0, 0, 0.1),
                 2px 20px 20px rgba(255, 255, 255, 0.2),
                 2px 20px 20px rgba(0, 0, 0, 0.1);

}
.cat{
    position :relative;
    width: 150px;
    height:150px;
    margin-bottom: 1rem;
    border-radius:5rem;

}
.btn:hover{
    opacity: 0.6;
}
</style>
<script>
      
        let btn = document.querySelector('.btn-block-change').onclick = (e)=>{
            var answer = window.confirm("Save data?")
            // alert('nothing is here');
            if (!answer) {
                //some code
                e.preventDefault();
            }
           
        }
</script>
@endsection