@extends('layouts.profile')
@section('profile')
<section class="row">
  <div class="col-lg-12">
      <div class="card-body">
        <div class="form-group"   style= 'text-align: -webkit-right'>
          <input  class="Add"type="submit" id="Them" onclick="" value="Thêm" >
        </div>  
      </div>
      <div class="card-body">
        <div class="form-group">
          <form action="{{route('searchschedule')}}" method="GET">
            <input type="text" value="" placeholder="Tìm kiếm" name="key">
            <button class="input-group-text">Tìm kiếm</button>
        </form>
        </div>
      </div>
      @foreach ($schedule as $item)
      <div class="card-body">
        <div class="form-group">
          <input type="text" value="{{$item->Nameschedule}}"> 
          <a class="btn btn-primary" href="#">Sửa</a>
          <a class="btn btn-primary" href={{"delete/".$item->Idschedule}}>Xoá</a>
        </div>
      </div>
      @endforeach
  </div>
  <div class="footer-table">
    {{$schedule->links()}}
  </div>
</section>
<style>
     tr, td{
        color: white;
    }
    .w-5{
        display: none;
    }
    .col-lg-12 .card-body .form-group .Add{
      background: #0e1b14ba;
      border-radius: 5px;
      margin-left: 6px;
      color: white;
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
    .card-body {
    flex: 1 1 auto;
    padding: 0.8rem 6rem;
    }
    .row>* {
    text-align: center;
    width: 100%;
    max-width: 100%;
    padding-right: calc(var(--bs-gutter-x) * .5);
    padding-left: calc(var(--bs-gutter-x) * .5);
    margin-top: var(--bs-gutter-y);
    }
    .bg-white {
      background-color:rgba(0, 0, 0, 0.5)
    }
    .border {
    border-radius:5px;
    border: 1px solid #dee2e6!important;
    }
    .dentails-tab {
    border-radius: 1rem;
    height: 93%;
    }
    .flex.justify-between.flex-1.sm\:hidden {
      padding-top: 25px;
    }
    .bg-white{
      background-color:rgba(0, 0, 0, 0.5) !important; 
    }
    p {
    margin-top: 20px;
    margin-bottom: 1rem ;
    }
    i, input {
    box-shadow: 2px 2px greenyellow;
    color:black;
    }
    .btn-primary{
    color: #fff;
    background-color: #0e1b14ba;
    border-color: #8fd12d; 
    }
</style>
@endsection