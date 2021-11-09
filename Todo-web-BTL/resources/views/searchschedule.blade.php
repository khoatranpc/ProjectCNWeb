@extends('layouts.profile')
@section('profile')
<section class="row">
  <div class="col-lg-12">
      <div class="card-body">
        <div class="form-group"   style= 'text-align: -webkit-right'>
          <a class="btn btn-primary" href="/schedule/addschedule">Add</a>
        </div>  
      </div>
      <div class="card-body">
        <div class="form-group">
   
         
          <form action="{{route('searchschedule')}}" method="GET">
            <input type="text" value="" placeholder="Search" name="key">
            <button class="input-group-text">Search</button>
        </form>
        </div>
      </div>
      @foreach ($schedulelist as $item)
      <div class="card-body">
        <div class="form-group">
          <input type="text" value="{{$item->Nameschedule}}"> 
          <a class="btn btn-primary" href="{{route('details',$item->Idschedule) }}">Emmend</a>
          <a class="btn btn-primary" href={{"delete/".$item->Idschedule}}>Delete</a>
        </div>
      </div>
      @endforeach
  </div>
</section>
<span style="text-align:right;"> <a href="/schedule" style=" ">End Searching</a></span>
<style>
     tr, td{
        color: white;
    }
    .w-5{
        display: none;
    }
    .btn-primary{
    color: #fff;
    background-color: #0e1b14ba;
    border-color: #8fd12d; 
                   
    }
    i, input {
    box-shadow: 2px 2px greenyellow;
    color:black;
    }
    .col-lg-12 .card-body .form-group button{
      display: inline;
      align-items: center;
      padding: 0.375rem 0.75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: center;
      white-space: nowrap;
      background-color: #e9ecef;
      border: 1px solid #ced4da;
      border-radius: 0.25rem;
      margin-left: 7px;
    }
    .row .col-lg-12 {
    flex: 0 0 auto;
    overflow-y: scroll;
    height: 500px;
    }
</style>
@endsection